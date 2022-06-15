<?php
require "Database.php";
$Database = new Database();

$qry = "SELECT * FROM student INNER JOIN tables_by_roles ON student.ID_Tables_by_roles = tables_by_roles.ID_Tables_by_roles";

$user = $Database->getRow($qry);


$id = $user["Link_table"];
$gid = $user["Page_code"];
$csv = file_get_contents('https://docs.google.com/spreadsheets/d/' . $id . '/export?format=csv&gid=' . $gid);
$csv = explode("\r\n", $csv);
$array = array_map('str_getcsv', $csv);

var_dump($array);


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
	<link rel="stylesheet" href="../css/styd.min.css">
	<link rel="stylesheet" href="../css/personal.min.css">

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
		</div>
	</header>
    <section class="pers_data">
        <div class="container">
            <div class="pers_data_container">
                <img src="../img/personal/Ellipse.svg" alt="ava">
                <div class="pers_data_container_text">
                    <h1>Арюков Александр Дмитриевич</h1>
                    <h2><b>Кафедра:</b>09.02.07 «Информационные системы и программирование»   </h2>
                    <h2><b>Специальность:</b> 09.02.07(ВД) Информационные системы и программирование - Разработчик веб приложений</h2>
                    <h2><b>Группа:</b> ВД50-2-19</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="table">
        <div class="container">
            <hr class="line">
            <h2 class="about_text">Успеваемость</h2>
            <table>
                <tr class="table_first_row">
                    <th class="table_first_column">
                        <img src="../icons/pers.png" alt="">
                    </th>
                    <th colspan="7" class="table_first_row_text" >Арюков Александр Дмитриевич</th>
                </tr>
                <tr class="table_second_row">
                    <td class="table_first_column"></td>
                    <td>12 сен</td>
                    <td>13 сен</td>
                    <td>14 сен</td>
                    <td>15 сен</td>
                    <td>16 сен</td>
                    <td>17 сен</td>
                    <td>18 сен</td>
                </tr>
                <tr>
                    <td class="table_first_column">Проектирование и разработка веб-приложений</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td class="table_first_column">Проектирование и разработка 
                        интерфейсов пользователя</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td class="table_first_column">Численные методы</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td class="table_first_column">Физическая культура</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td class="table_first_column">Экономика отрасли</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td class="table_first_column">Графический дизайн 
                        и мультимедиа</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td class="table_first_column">Стандартизация, сертификация и техническое документоведение</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td class="table_first_column">Безопасность жизнедеятельности</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                    <td>5</td>
                </tr>
            </table>
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