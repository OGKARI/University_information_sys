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
    <link rel="stylesheet" href="../css/kafedra1.min.css">
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
					<a href="prepod.php" class="first_display_menu_btn">Преподователю</a>
					<a href="login.php" class="first_display_menu_btn">Вход</a>
					<a href="styd.php" class="first_display_menu_btn">Студенту</a>
					<img src="../icons/search_black.png" alt="search" class="first_display_menu_btn_search" >    
				</nav>
			</div>
            <div class="first_display_text">
                <h1>09.02.07 «Информационные системы и программирование»</h1>
            </div>
        </div>
    </header>
    <section class="content">
        <div class="container">
            <p>
                Специальность охватывает достаточно широкий спектр сфер профессиональной деятельности, что позволяет получить знания о безопасности информационных систем, техническом обслуживании и ремонте компьютеров, администрировании сетей, прикладном и системном программировании, WEB-дизайне и графическом моделировании объектов. Позволяет получить опыт в разработке и интеграции модулей программного обеспечения, администрировании баз данных, сопровождении программного обеспечения. 
            </p>
            <h2>Квалификация присваивается в зависимости от выбранной специализации:</h2>
            
            <ul>
                <li>РАЗРАБОТЧИК ВЕБ И МУЛЬТИМЕДИЙНЫХ ПРИЛОЖЕНИЙ.</li>
                <li>АДМИНИСТРАТОР БАЗ ДАННЫХ.</li>
            </ul>
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
    <script src="js/script.js"></script>
</body>
</html>