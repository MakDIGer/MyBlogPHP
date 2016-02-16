<?php

/*
 * Персональный блог Макарина Николая
 * Файл: systems/function.php
 */
 
class SendMailSmtpClass {

    /**
    * 
    * @var string $smtp_username - логин
    * @var string $smtp_password - пароль
    * @var string $smtp_host - хост
    * @var string $smtp_from - от кого
    * @var integer $smtp_port - порт
    * @var string $smtp_charset - кодировка
    *
    */   
    public $smtp_username;
    public $smtp_password;
    public $smtp_host;
    public $smtp_from;
    public $smtp_port;
    public $smtp_charset;
    
    public function __construct($smtp_username, $smtp_password, $smtp_host, $smtp_from, $smtp_port = 25, $smtp_charset = "utf-8") {
        $this->smtp_username = $smtp_username;
        $this->smtp_password = $smtp_password;
        $this->smtp_host = $smtp_host;
        $this->smtp_from = $smtp_from;
        $this->smtp_port = $smtp_port;
        $this->smtp_charset = $smtp_charset;
    }
    
    /**
    * Отправка письма
    * 
    * @param string $mailTo - получатель письма
    * @param string $subject - тема письма
    * @param string $message - тело письма
    * @param string $headers - заголовки письма
    *
    * @return bool|string В случаи отправки вернет true, иначе текст ошибки    *
    */
    function send($mailTo, $subject, $message, $headers) {
        $contentMail = "Date: " . date("D, d M Y H:i:s") . " UT\r\n";
        $contentMail .= 'Subject: =?' . $this->smtp_charset . '?B?'  . base64_encode($subject) . "=?=\r\n";
        $contentMail .= $headers . "\r\n";
        $contentMail .= $message . "\r\n";
        
        try {
            if(!$socket = @fsockopen($this->smtp_host, $this->smtp_port, $errorNumber, $errorDescription, 30)){
                throw new Exception($errorNumber.".".$errorDescription);
            }
            if (!$this->_parseServer($socket, "220")){
                throw new Exception('Connection error');
            }
			
			$server_name = $_SERVER["SERVER_NAME"];
            fputs($socket, "HELO $server_name\r\n");
            if (!$this->_parseServer($socket, "250")) {
                fclose($socket);
                throw new Exception('Error of command sending: HELO');
            }
            
            fputs($socket, "AUTH LOGIN\r\n");
            if (!$this->_parseServer($socket, "334")) {
                fclose($socket);
                throw new Exception('Autorization error');
            }
			
			
            
            fputs($socket, base64_encode($this->smtp_username) . "\r\n");
            if (!$this->_parseServer($socket, "334")) {
                fclose($socket);
                throw new Exception('Autorization error');
            }
            
            fputs($socket, base64_encode($this->smtp_password) . "\r\n");
            if (!$this->_parseServer($socket, "235")) {
                fclose($socket);
                throw new Exception('Autorization error');
            }
			
            fputs($socket, "MAIL FROM: <".$this->smtp_username.">\r\n");
            if (!$this->_parseServer($socket, "250")) {
                fclose($socket);
                throw new Exception('Error of command sending: MAIL FROM');
            }
            
			$mailTo = ltrim($mailTo, '<');
			$mailTo = rtrim($mailTo, '>');
            fputs($socket, "RCPT TO: <" . $mailTo . ">\r\n");     
            if (!$this->_parseServer($socket, "250")) {
                fclose($socket);
                throw new Exception('Error of command sending: RCPT TO');
            }
            
            fputs($socket, "DATA\r\n");     
            if (!$this->_parseServer($socket, "354")) {
                fclose($socket);
                throw new Exception('Error of command sending: DATA');
            }
            
            fputs($socket, $contentMail."\r\n.\r\n");
            if (!$this->_parseServer($socket, "250")) {
                fclose($socket);
                throw new Exception("E-mail didn't sent");
            }
            
            fputs($socket, "QUIT\r\n");
            fclose($socket);
        } catch (Exception $e) {
            return  $e->getMessage();
        }
        return true;
    }
    
    private function _parseServer($socket, $response) {
        while (@substr($responseServer, 3, 1) != ' ') {
            if (!($responseServer = fgets($socket, 256))) {
                return false;
            }
        }
        if (!(substr($responseServer, 0, 3) == $response)) {
            return false;
        }
        return true;
        
    }
}

function ask_database($query)
{
	// соединяемся с сервером базы данных
    $connect_db = mysql_connect(DB_HOST, DB_USER, DB_PASS)
    or die("Could not connect: " . mysql_error());
    
    // подключаемся к базе данных
    mysql_select_db(DB_NAME, $connect_db)
    or die("Could not select DB: " . mysql_error());
	mysql_query("SET NAMES utf8");
	
	// Выполняем SQL-запрос
	$data_db = mysql_query($query) or die('Запрос не удался: ' . mysql_error());
	return $data_db;
}

function get_visits()
{
	$total_visits = ask_database('SELECT site_visits FROM settings');
	$tv = mysql_fetch_assoc($total_visits);
	return $tv['site_visits'];
}

function plus_visits()
{
	ask_database('UPDATE settings SET site_visits=site_visits+1');
}

function get_uniq_visits()
{
	$total_visits = ask_database('SELECT site_uniq_visits FROM settings');
	$tv = mysql_fetch_assoc($total_visits);
	return $tv['site_uniq_visits'];
}

function plus_uniq_visits()
{
	ask_database('UPDATE settings SET site_uniq_visits=site_uniq_visits+1');
}

function get_email_params()
{
	$email_data = ask_database('SELECT site_email, site_email_pass, site_email_name FROM settings');
	$email_info = mysql_fetch_assoc($email_data);
	return $email_info;
}

function check_auth()
{
	if (isset($_SESSION['user_key'])) {
		$data_db = ask_database('SELECT user_hash, user_ip FROM users');
		$res = mysql_fetch_assoc($data_db);
		if ($res['user_hash'] == $_SESSION['user_key']) {
			if ($res['user_ip'] == $_SERVER['REMOTE_ADDR']) { return true; }
		}
	}
	return false;
}

?>
