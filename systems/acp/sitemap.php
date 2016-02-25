<?php

/*
 * Персональный блог Макарина Николая
 * Файл: systems/acp/sitemap.php
 */

// указываем заголовок XML документа, говоря ему о том, что это SITEMAP.XML
$s_map = '<?xml version="1.0" encoding="UTF-8"?>
<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
 
http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">'."\r\n";
 
// указываем статичные страницы сайта
$s_map .= '<url>
    <loc>'.SERVER_DOMAIN.'/</loc>
    <lastmod>'.date("Y-m-d\TH:i:s+02:00").'</lastmod>
    <changefreq>weekly</changefreq>
    <priority>1.00</priority>
</url>'."\r\n";

$s_map .= '<url>
    <loc>'.SERVER_DOMAIN.'/mynews.html</loc>
    <lastmod>'.date("Y-m-d\TH:i:s+02:00").'</lastmod>
    <changefreq>weekly</changefreq>
    <priority>1.00</priority>
</url>'."\r\n";
 
// тут нужно получить ссылку на страницы новостей
$data_news = ask_database('SELECT id_post FROM my_news');
$num_news = mysql_num_rows($data_news);
for ($i=0;$i<$num_news;$i++)
{
$row = mysql_fetch_array($data_news);
$s_map .= '<url>'."\r\n";
$s_map .= '<loc>'.SERVER_DOMAIN.'/mynews-news'.$row['id_post'].'.html</loc>'."\r\n";
$s_map .= '<changefreq>weekly</changefreq>'."\r\n";
$s_map .= '<priority>0.50</priority>'."\r\n";
$s_map .= '</url>'."\r\n";
}

$s_map .= '<url>
    <loc>'.SERVER_DOMAIN.'/myprojects.html</loc>
    <lastmod>'.date("Y-m-d\TH:i:s+02:00").'</lastmod>
    <changefreq>weekly</changefreq>
    <priority>1.00</priority>
</url>'."\r\n";

// тут нужно получить ссылку на страницы проектов
$data_projects = ask_database('SELECT id_project FROM my_projects');
$num_projects = mysql_num_rows($data_projects);
for ($i=0;$i<$num_projects;$i++)
{
$row = mysql_fetch_array($data_projects);
$s_map .= '<url>'."\r\n";
$s_map .= '<loc>'.SERVER_DOMAIN.'/myprojects-projects'.$row['id_project'].'.html</loc>'."\r\n";
$s_map .= '<changefreq>weekly</changefreq>'."\r\n";
$s_map .= '<priority>0.50</priority>'."\r\n";
$s_map .= '</url>'."\r\n";
}

$s_map .= '</urlset>';

// запись в файл
$sitemap_file = fopen('sitemap.xml',"w");
fwrite($sitemap_file,$s_map);
fclose($sitemap_file);
$resultat = 'Файл sitemap.xml успешно обновлён';
?>
