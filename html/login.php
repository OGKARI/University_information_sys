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
    <link rel="stylesheet" href="../css/login.min.css">
</head>
<body>
    <!-- Блок хеадер нужен для создания первого экрана сайта -->
    <header class="first_display">
        <div class="container">  
            <div class="first_display_navigation">
                <a href="index.php"><img src="../icons/Logo.svg" alt="Logo"></a>
            </div>
            <div class="contact_form">
                <h2>Введите ваши данные!</h2>
                <form action="#">
                    <input required placeholder="Логин" name="name" type="text" class="modal__input">
                    <input required placeholder="Пароль" name="phone" type="text" class="modal__input">
                    <button class="btn">Войти</button>
                </form>
            </div>
        </div>
    </header>
<script src="../js/three.min.js"></script>
<script src="../js/vanta.birds.min.js"></script>
<script src="../js/login.js"></script>

</body>
</html>