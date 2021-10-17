<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Создайте HTML-форму</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {margin: auto 20px;}
        table, tr, td, th {border: 1px solid #ccc; border-collapse: collapse;}
        th {width: 50%;}
    </style>
</head>
<body>
<form action="" method="post">
    <div class="col-sm-3">
        <label class="form-label">Имя</label>
        <input type="text" class="form-control" id="inputAddress" name="name">
    </div>
    <div class="col-sm-3">
        <label class="form-label">Пароль</label>
        <input type="password" class="form-control" id="inputPassword4" name="pass">
    </div>
    <div class="col-sm-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail4" name="email">
    </div>
    <div class="col-sm-3">
        <label class="form-label">Дата рождения</label>
        <input type="date" class="form-control" name="date">
    </div>
    <span class="form-label">Пол</span><br>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Мужской">
        <label class="form-check-label">Мужской</label>
    </div>
    <div class="form-check form-check-inline col-sm-3">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Женский">
        <label class="form-check-label">Женский</label>
    </div>
    <div class="col-sm-3">
        <label class="form-label">Любимый цвет</label>
        <input type="color" id="favcolor" name="favcolor" value="#ffffff">
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">Записать в таблицу</button>
    </div>
    <br>
</form>
</body>
</html>
<?php
if(!empty($_POST['name']) || !empty($_POST['pass']) || !empty($_POST['email']) || !empty($_POST['date']) || !empty($_POST['inlineRadioOptions']) || !empty($_POST['favcolor'])) {
    $name = $_POST["name"];
    $pass = $_POST["pass"];
    $email = $_POST["email"];
    $date = $_POST["date"];
    $gender = $_POST["inlineRadioOptions"];
    $favcolor = $_POST["favcolor"];
    echo '<table class="col-sm-3"><tr><th>Имя</th><td>' . $name . '</td></tr><tr><th>Пароль</th><td>' . $pass . '</td></tr><tr><th>Email</th><td>' . $email . '</td></tr>
<tr><th>Дата рождения</th><td>' . $date . '</td></tr><tr><th>Пол</th><td>' . $gender . '</td></tr><tr><th>Любимый цвет</th><td bgcolor="' . $favcolor . '">' . $favcolor . '</td></tr></table>';
}
?>
