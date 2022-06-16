<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Данный блок кода предназначен для добовления лого на шапку сайта и подключения стилей и основной мета информации  -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PresF</title>
	<link rel="shortcut icon" href="../img/logo.svg" type="image/svg">
	<link rel="stylesheet" href="../css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="../css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="../css/style.min.css">
	<link rel="stylesheet" href="../css/curs.min.css">
	
</head>
<body>
	<!-- Блок хеадер нужен для создания первого экрана сайта -->
	<header class="first_display">
		<div class="container">  
			<div class="first_display_navigation">
				<a href="index.php"><img src="../icons/Logo.svg" alt="Logo"></a>
				<nav class="first_display_menu">
					<a href="contact.php" class="first_display_menu_btn">Контакты</a>
					<a href="specialnost.php" class="first_display_menu_btn">Специальности</a>
					<a href="curs.php" class="first_display_menu_btn">Курсы</a>
					<a href="styd.php" class="first_display_menu_btn">Студенту</a>
					<?php
							if (isset($_SESSION["rule"]) && $_SESSION["rule"] == 4)
								echo '<a href="prepod.php" class="first_display_menu_btn">'. $_SESSION["user_name"] .'</a>';
							elseif(isset($_SESSION["rule"]) && $_SESSION["rule"] == 3){
								echo '<a href="personal.php" class="first_display_menu_btn">'. $_SESSION["user_name"] .'</a>';
							}
							else{
								echo '<a href="login.php" class="first_display_menu_btn">Вход</a>'; 
							}  
						?>
					<img src="../icons/search_black.png" alt="search" class="first_display_menu_btn_search" >    
				</nav>
			</div>
			<div class="first_display_container">
				<div class="first_display_container_text">
					Курсы
				</div>
<!-- Данный блок нужен для создания формы ответа-->
				<div class="contact_form">
					<h2>Введите ваши данные!</h2>
					<form action="#">
						<input required placeholder="Имя" name="name" type="text" class="modal__input">
						<input required placeholder="Телефон" name="phone" type="text" class="modal__input">
						<input required placeholder="Почта" name="phone" type="text" class="modal__input">
						<textarea placeholder="Сообщение" name="messege" class="text_area"></textarea>
						<button class="btn">связаться</button>
					</form>
				</div>
			</div>
		</div>
	</header>
	<section class="curs">
		<div class="container">
			<div class="curs_container">
				<div class="curs_container_onece">
					<h2>Front-end</h2>
					<h3>Стоимость: 108 000 р.</h3>
					<p>Начало обучения: с момента заключения договора
						Даётся право на ведение новой профессиональной деятельности</p>
					<button class="btn">Связаться</button>
				</div>
				<div class="curs_container_onece" style="background-color: #D1A770 ;">
					<h2>Back-end</h2>
					<h3>Стоимость: 108 000 р.</h3>
					<p>Начало обучения: с момента заключения договора
						Даётся право на ведение новой профессиональной деятельности</p>
					<button class="btn">Связаться</button>
				</div>
				<div class="curs_container_onece">
					<h2>Full-stack</h2>
					<h3>Стоимость: 192 000 р.</h3>
					<p>Начало обучения: с момента заключения договора
						Даётся право на ведение новой профессиональной деятельности</p>
					<button class="btn">Связаться</button>
				</div>
			</div>
		</div>
	</section>
	<section class="prew">
		<div class="container">
			<div class="prew_content">
				<img src="../img/curs/logo.png" alt="logo">
				<p>Фундаментальное академическое образование, максимум практики и погружение в профессию с самого начала обучения — главные принципы Университета</p>
			</div>
		</div>
	</section>
	<!-- Блок футер нужен для создания подвала сайта-->
	<footer class="footer">
		<div class="container">
			<hr class="line">
			<div class="social">
				<img src="../icons/social/logo.png" alt="">
				<div class="social_container">
					<img src="../icons/social/Vector.png" alt="">
					<img src="../icons/social/Vector-1.png" alt="">
					<img src="../icons/social/Vector-2.png" alt="">
					<img src="../icons/social/Vector-3.png" alt="">
				</div>
			</div>
			<hr class="line">
			<div class="all_contact">
				<div class="footer_contact">
					<h2>Адреса корпусов:</h2>
					<div class="footer_contact_content">
						<div class="footer_contact_content_inner">
							<img src="../icons/m.png" alt="">
							<h3>Сокол</h3>
						</div>
						<p>Ленинградский пр-т, д. 80, корпуса Г,  Ж</p>
					</div>
					<div class="footer_contact_content">
						<div class="footer_contact_content_inner">
							<img src="../icons/m.png" alt="">
							<h3>Семеновская</h3>
						</div>
						<p>ул. Измайловский вал, д. 2</p>
					</div>
				</div>
				<div class="footer_contact">
					<h2>Номер телефона</h2>
					<div class="footer_contact_content">
						<div class="footer_contact_content_inner">
							<img src="../icons/p.png" alt="">
							<h3>8 800 100–00–11</h3>
						</div>
					</div>
					<div class="footer_contact_content">
						<div class="footer_contact_content_inner">
							<img src="../icons/p.png" alt="">
							<h3>8 800 100–00–11</h3>
						</div>
					</div>
					<div class="footer_contact_content">
						<div class="footer_contact_content_inner">
							<img src="../icons/p.png" alt="">
							<h3>8 800 100–00–11</h3>
						</div>
					</div>
				</div> 
				<div class="footer_contact">
					<h2>Почта</h2>
					<div class="footer_contact_content">
						<div class="footer_contact_content_inner">
							<img src="../icons/em.png" alt="">
							<h3>univer@mail.com</h3>
						</div>
					</div>
					<div class="footer_contact_content">
						<div class="footer_contact_content_inner">
							<img src="../icons/em.png" alt="">
							<h3>univer@mail.com</h3>
						</div>
					</div>
					<div class="footer_contact_content">
						<div class="footer_contact_content_inner">
							<img src="../icons/em.png" alt="">
							<h3>univer@mail.com</h3>
						</div>
					</div>
				</div> 
			</div>   
		</div>    
	</footer>
	<script src="../js/script.js"></script>
</body>
</html>