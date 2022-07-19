<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма регистрации</title>
    <style>body{display: flex; justify-content: center;}label{display: block;}.form-body{width: 385px;}.form-pas{display: flex; justify-content: space-between;}.form-buttons{display: flex; justify-content: space-around;}input,select{margin-bottom: 10px;} #fio, #post, #email{width: 250px;}</style>
</head>
<body>
<font color="red"><?=$soobsh_oshibka?></font>
    <form action="post2.php" method="POST" name="register" class="form">
        <h1>Регистрация посетителей магазина</h1>
        <div class="form-body">
            <label for="fio">Введите имя, отчество и фамилию:</label>
            <input id="fio" name="fio" type="text">
            <label for="select">Укажите страну, в которой вы проживаете</label>
            <select name="country" id="country">
                <option value="1">Россия</option>
                <option value="2">Германия</option>
                <option value="3">Китай</option>
                <option value="4">США</option>
            </select>
            <label for="post">Ваш полный почтовый адрес:</label>
            <input id="post" name="post" type="text">
            <label for="email">E-Mail:</label>
            <input id="email" name="email" type="text">
            <label for="phone">Ваш телефон:</label>
            <input id="phone" name="phone" type="text">
            <div class="form-pas">
                <div class="pas-group">
                    <label for="pas1">Введите пароль:</label>
                    <input id="pas1" name="pas1" type="password">
                </div>
                <div class="pas-group">
                    <label for="pas2">Повторите ввод пароля:</label>
                    <input id="pas2" name="pas2" type="password">
                </div>
            </div>
            <div class="form-buttons">
                <input type="submit" id="Ok" name="Ok" value="Ok">
                <input type="reset" id="return" name="return" value="Отмена">
            </div>
        </div>
    </form>
    <div class="form-group"></div>
</body>
</html>