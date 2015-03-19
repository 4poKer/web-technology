<?php

if (isset($_POST['feedback'])) {

    $name = quotemeta($_POST['name']);
    $email = ($_POST['email']);
    $comment = quotemeta($_POST['comment']);

    if (!preg_match("/[А-Я]{1}[а-я]{1,14}/", $name)) {
        $log_name = "Ошибка: имя должно быть написано на русском языке, начинаться с заглавной буквы и содердать менее 15 символов!<br>";
        $f_name = 1;
    }

    if (!preg_match("/^([a-z0-9_\.-]+)@([a-z0-9_\.-]+)\.([a-z\.]{2,6})$/", $email)) {
        $log_email = "Ошибка: введите E-mail корректно!<br>";
        $f_email = 1;
    }

    if (iconv_strlen($comment, 'UTF-8') < 5) {
        $log_comment = "Ошибка: комментарий должен быть более развернутым!";
        $f_com = 1;
    }


    if ($f_name != 1 && $f_email != 1 && $f_com != 1)
        $log = "Отзыв оставлен! Спасибо, что уделили нам время!";
    else
        $log = $log_name . $log_email . $log_comment;
}
?>
