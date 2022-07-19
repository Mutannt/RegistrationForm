<?php
    //header('Content-Type: text/html; charset=utf-8');
    // В переменную $db занесем путь к базе данных
    $db = 'Z:\home\localhost\www\zad3\Database.mdb';

    // Создадим объект ADODB.Connection
    $conn = new COM('ADODB.Connection'); 

    // Подключимся к базе данных
    $conn->Open("Provider=Microsoft.Jet.OLEDB.4.0; Data Source=".$db);

    // Получение значений из элементов управления
    $fio = $_POST["fio"]; // ФИО
    $country = $_POST["country"]; // Страна int
    $post = $_POST["post"]; // Почтовый адрес
    $email = $_POST["email"]; // email
    $phone = $_POST["phone"]; // Номер телефона
    $pas1 = $_POST["pas1"]; // Пароль1
    $pas2 = $_POST["pas2"]; // Пароль2

    // Регулярные выражения для проверки введённых значений
    $reg_pCena = '/^[0-9]+(\.[0-9]{2})?$/';
    $reg_phone = '/^[0-9]+$/';

    $soobsh_oshibka = "";

    // Проверка заполнения поля "ФИО"
    if (trim($fio)=="")
    {
        $soobsh_oshibka.="Поле <<ФИО>>" ." не заполнено</br>";
    }
    // Проверка заполнения поля "Почтовый адрес"
    if (trim($post)=="")
    {
        $soobsh_oshibka.="Поле <<Почтовый адрес>>" ." не заполнено</br>";
    }
    // Проверка заполнения поля "email"
    if (trim($email)=="")
    {
        $soobsh_oshibka.="Поле <<[Email]>>" ." не заполнено</br>";
    }
    // Проверка заполненности и правильности заполнения поля "Телефон"
    if (!preg_match($reg_phone, $phone))
    {
        $soobsh_oshibka .="Поле <<Телефон>> не заполнено"
        ."или имеет неверный формат</br>";
    }
    // Проверка заполнения поля "Пароль"
    if (trim($pas1)=="")
    {
        $soobsh_oshibka.="Поле <<Пароль>>" ." не заполнено</br>";
    }
    // Проверка заполнения поля "Повтор пароля"
    if (trim($pas2)=="")
    {
        $soobsh_oshibka.="Поле <<Повтор пароля>>" ." не заполнено</br>";
    }


    // Если ошибок нет, то выполнить запрос
    if (trim($soobsh_oshibka) == "")
    {
        $sql = "INSERT INTO Visitors (FIO, [Country], [Email], PostAddress, [Phone], [Password], CopyPassword)
        VALUES ('".$fio."', '".$country."', '".$email."', '".$post."', '".$phone."', '".$pas1."', '".$pas2."')";
        $rs = $conn->Execute($sql);
        echo "Регистрация успешно пройдена!";
    }
    else{
        echo $soobsh_oshibka;
    }





























   

    //echo '<option value="'.$rs1->Fields['ID']->Value.'">'. Запись значений из базы
?>



