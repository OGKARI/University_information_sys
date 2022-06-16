<?php
require "Database.php";
$Database = new Database();

$qry = "SELECT * FROM student INNER JOIN tables_by_roles ON student.ID_Tables_by_roles = tables_by_roles.ID_Tables_by_roles INNER JOIN department ON student.ID_Department = department.ID_Department INNER JOIN specialization ON student.ID_specialization = specialization.ID_specialization INNER JOIN groups ON student.ID_group = groups.ID_groups";

$user = $Database->getRow($qry);


$id = $user["Link_table"];
$gid = $user["Page_code"];
$csv = file_get_contents('https://docs.google.com/spreadsheets/d/' . $id . '/export?format=csv&gid=' . $gid);
$csv = explode("\r\n", $csv);
$array = array_map('str_getcsv', $csv);

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
		</div>
	</header>
	<section class="pers_data">
		<div class="container">
			<div class="pers_data_container">
				<img src="<?= $user['photo']?>" alt="ava">
				<div class="pers_data_container_text">
					<h1><?=$user['Last_name_student']?> <?= $user['Student_name']?> <?= $user['Middle_name_students']?></h1>
					<h2><b>Кафедра:</b><?=$user['Name_of_the_department']?></h2>
					<h2><b>Специальность:</b><?=$user['Name_of_the_specialty']?></h2>
					<h2><b>Группа:</b><?=$user['Group_namber']?></h2>
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
					<th colspan="7" class="table_first_row_text" ><?=$array[0][1]?></th>
				</tr>
				<tr class="table_second_row">
					<td class="table_first_column"></td>
					<td><?=$array[1][1]?></td>
					<td><?=$array[1][2]?></td>
					<td><?=$array[1][3]?></td>
					<td><?=$array[1][4]?></td>
					<td><?=$array[1][5]?></td>
					<td><?=$array[1][6]?></td>
					<td><?=$array[1][7]?></td>
				</tr>
				<tr>
					<td class="table_first_column"><?=$array[2][0]?></td>
					<td><?=$array[2][1]?></td>
					<td><?=$array[2][2]?></td>
					<td><?=$array[2][3]?></td>
					<td><?=$array[2][4]?></td>
					<td><?=$array[2][5]?></td>
					<td><?=$array[2][6]?></td>
					<td><?=$array[2][7]?></td>
				</tr>
				<tr>
					<td class="table_first_column"><?=$array[3][0]?></td>
					<td><?=$array[3][1]?></td>
					<td><?=$array[4][2]?></td>
					<td><?=$array[5][3]?></td>
					<td><?=$array[6][4]?></td>
					<td><?=$array[7][5]?></td>
					<td><?=$array[8][6]?></td>
					<td><?=$array[9][7]?></td>
				</tr>
				<tr>
					<td class="table_first_column"><?=$array[4][0]?></td>
					<td><?=$array[4][1]?></td>
					<td><?=$array[4][2]?></td>
					<td><?=$array[4][3]?></td>
					<td><?=$array[4][4]?></td>
					<td><?=$array[4][5]?></td>
					<td><?=$array[4][6]?></td>
					<td><?=$array[4][7]?></td>
				</tr>
				<tr>
					<td class="table_first_column"><?=$array[5][0]?></td>
					<td><?=$array[5][1]?></td>
					<td><?=$array[5][2]?></td>
					<td><?=$array[5][3]?></td>
					<td><?=$array[5][4]?></td>
					<td><?=$array[5][5]?></td>
					<td><?=$array[5][6]?></td>
					<td><?=$array[5][7]?></td>
				</tr>
				<tr>
					<td class="table_first_column"><?=$array[6][0]?></td>
					<td><?=$array[6][1]?></td>
					<td><?=$array[6][2]?></td>
					<td><?=$array[6][3]?></td>
					<td><?=$array[6][4]?></td>
					<td><?=$array[6][5]?></td>
					<td><?=$array[6][6]?></td>
					<td><?=$array[6][7]?></td>
				</tr>
				<tr>
					<td class="table_first_column"><?=$array[7][0]?></td>
					<td><?=$array[7][1]?></td>
					<td><?=$array[7][2]?></td>
					<td><?=$array[7][3]?></td>
					<td><?=$array[7][4]?></td>
					<td><?=$array[7][5]?></td>
					<td><?=$array[7][6]?></td>
					<td><?=$array[7][7]?></td>
				</tr>
				<tr>
					<td class="table_first_column"><?=$array[8][0]?></td>
					<td><?=$array[8][1]?></td>
					<td><?=$array[8][2]?></td>
					<td><?=$array[8][3]?></td>
					<td><?=$array[8][4]?></td>
					<td><?=$array[8][5]?></td>
					<td><?=$array[8][6]?></td>
					<td><?=$array[8][7]?></td>
				</tr>
				<tr>
					<td class="table_first_column"><?=$array[9][0]?></td>
					<td><?=$array[9][1]?></td>
					<td><?=$array[9][2]?></td>
					<td><?=$array[9][3]?></td>
					<td><?=$array[9][4]?></td>
					<td><?=$array[9][5]?></td>
					<td><?=$array[9][6]?></td>
					<td><?=$array[9][7]?></td>
				</tr>
			</table>
		</div>
	</section>
	<section class="logout">
		<div class="container">
			<button class="btn" onclick="window.location.href='logout.php'">Выйти</button>
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