<?php

/*
 * Персональный блог Макарина Николая
 * Файл: templates/default/main.php
 */

?>

			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2>Макарин Николай</h2>
							<p>Я программист, а не дизайнер...<br />
							Я пишу программы, а не придумываю дизайны</p>
						</header>
						<span class="image"><img src="images/pic01.jpg" alt="" /></span>
					</div>
					<a href="#one" class="goto-next scrolly">Next</a>
				</section>

			<!-- One -->
				<section id="one" class="spotlight style1 bottom">
					<span class="image fit main"><img src="images/pic02.jpg" alt="" /></span>
					<div class="content">
						<div class="container">
							<div class="row">
								<div class="4u 12u$(medium)">
									<header>
										<h2>Немного о себе</h2>
										<p>За компьютером с малых лет</p>
									</header>
								</div>
								<div class="4u 12u$(medium)">
									<p>Всё началось с одной маленькой книжечки Фролова М.И. "Сказки Дядюшки Компьютера",
									которую мои родители взяли для меня в детской библиотеке. Тогда я ещё не знал английского
									языка. Просто набирал команды и знал, что будет после их выполнения. Всё постигалось на практике.</p>
								</div>
								<div class="4u$ 12u$(medium)">
									<p>Затем мне купили первые мои книжки по программированию и понеслось ...
									Я сидел часами за компьютером, а когда меня отрывали от него, с тетрадью и шариковой ручкой в руках,
									записывал всё, чтобы потом попробовать набрать, как будет возможность.</p>
								</div>
							</div>
						</div>
					</div>
					<a href="#two" class="goto-next scrolly">Next</a>
				</section>

			<!-- Two -->
				<section id="two" class="spotlight style2 right">
					<span class="image fit main"><img src="images/pic03.jpg" alt="" /></span>
					<div class="content">
						<header>
							<h2>Мои языки</h2>
							<p>Уметь писать мало, также надо уметь читать и понимать уже написанное.</p>
						</header>
						<p>Программировал: qBASIC, TurboPascal, Delphi(писал диплом), Visual Basic, Visual C++, PHP4, C#<br />
						Программирую сейчас: C++, PHP5<br />
						Изучаю: Swift 1.2</p>
						<ul class="actions">
							<li><a href="#four" class="button">Подробнее</a></li>
						</ul>
					</div>
					<a href="#three" class="goto-next scrolly">Next</a>
				</section>

			<!-- Three -->
				<section id="three" class="spotlight style3 left">
					<span class="image fit main bottom"><img src="images/pic04.jpg" alt="" /></span>
					<div class="content">
						<header>
							<h2>Мой опыт</h2>
							<p>Сырая теория без практики, как свежий код без тестирования.</p>
						</header>
						<p>Опыт работы в ОС на платформе Windows/Linux/OS X<br />
						Имеется опыт администрирования Windows Server 2003/2008, Ubuntu server 12.04/14.04 LTS<br />
						Опыт организации, настройки и администрирования локальный сетей.<br />
						Опыт настройки и сопровождения проприетарного программного обеспечения.<br />
						Опыт работы руководителем службы технической поддержки более 5 лет.</p>
						<ul class="actions">
							<li><a href="#four" class="button">Подробнее</a></li>
						</ul>
					</div>
					<a href="#four" class="goto-next scrolly">Next</a>
				</section>

			<!-- Four -->
				<section id="four" class="wrapper style1 special fade-up">
					<div class="container">
						<header class="major">
							<h2>Мои увлечения</h2>
							<p>Я очень-очень люблю информационные технологии!</p>
						</header>
						<section id="content">
								<h3>Программирование</h3>
								<p>Программирование - самое первое и самое давнее моё хобби. Программированием я занимаюсь с школьных времён. Стараюсь не останавливаться на достигнутом, а всё время совершенствоваться, узнавать что-то новое, получать новый интересный опыт.
								Программирование занимает у меня больше всего времени: и на работе и дома. Если я не имею никаких задач - я их обязательно придумаю для себя.</p>
								<h3>Программное обеспечение</h3>
								<p>Люблю изучать новые версии программного обеспечения, тестировать их, проводить эксперименты и изучать их поведение. Провожу тестирования на совместимость с другим ПО, как только выходят новые версии ОС, в особенности: Windows и Linux.</p>
								<h3>Ремонт электроники</h3>
								<p>Я не эксперт по ремонту электронной техники, но мне очень нравится ковыряться, ремонтировать, а иногда и немного конструировать что-нибудь. Опыт не столь большой, увлёкся этим только с июля 2014 года. Ремонтировал материнские платы от настольного ПК, менял матрицы в ноутбуках, чистил компьютеры и ноуктбуки от пыли, ремонтировал несколько телефонов, восстанавливал разные кабели, ремонтировал блоки питания от настольного ПК, восстанавливал гнёзда MicroUSB в планшетах.</p>
								</section>
						<footer class="major">
						</footer>
					</div>
				</section>

			<!-- Five -->
				<section id="five" class="wrapper style2 special fade">
					<div class="container">
						<header>
							<h2>Написать мне</h2>
							<p>Если я вас заинтересовал или вы хотели бы поговорить со мной о чем-либо, вы можете написать мне своё сообщение тут. Я обязательно отвечу на него.</p>
						</header>
						<!-- Form -->
							<section>
								<form name="contact_form" method="post" action="email.html" onsubmit="return validate_form ( );">
									<div class="row uniform 50%">
										<div class="6u 12u$(xsmall)">
											<input type="text" name="name" id="name" value="" placeholder="Имя" />
										</div>
										<div class="6u$ 12u$(xsmall)">
											<input type="email" name="email" id="email" value="" placeholder="Email" />
										</div>
										<div class="6u 12u$(medium)">
											<input type="checkbox" id="copy" name="copy">
											<label for="copy">Отправить копию Email на ваш Email.</label>
										</div>
										<div class="6u$ 12u$(medium)">
											<input type="checkbox" id="human" name="human">
											<label for="human">Я человек, а не робот.</label>
										</div>
										<div class="12u$">
											<textarea name="message" id="message" placeholder="Введите ваше сообщение" rows="6"></textarea>
										</div>
										<div class="12u$">
											<ul class="actions">
												<li><input type="submit" value="Отправить сообщение" class="special" /></li>
												<li><input type="reset" value="Очистить" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
					</div>
				</section>
