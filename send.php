<?php

//получем данни с элемента форми

$login = $_POST['login'];
// $pass = $_POST['pass'];
// $email = $_POST['email'];
$tel = $_POST['tel'];


// Обработка получения данние

$login = htmlspecialchars($login); //Преобразование символов в сущности (мнемоники)
// $pass = htmlspecialchars($pass);
// $email = htmlspecialchars($email);
$tel = htmlspecialchars($tel);

$login = urldecode($login); // Декодирование URL
// $pass = urldecode($pass);
// $email = urldecode($email);
$tel = urldecode($tel);

$login = trim($login); // Удаления проблемних символов с обоих сторон
// $pass = trim($pass);
// $email = trim($email);
$tel = trim($tel);


// Отправка даних на почту

// if (mail('jekabossboyko@gmail.com',
//           'Новое письмо с сайта',
//           'Логин:'.$login. '\n'.
//           'Пароль:'.$pass. '\n'.
//           'Email:'.$email. '\n'.
//           'Телефон:'.$tel,
//           'From: no-reply@mydomain.com \r\n')
// ){
//   echo ('Писмо успешно отправино');
// }
// else {
//   echo ('Есть ошибка! Проверте данние...');
// }

//==================================================================

// Тема писма

// class="form__form-1"

// if($_POST['subject'] == 1) {
//   $subject = 'Вопрос';
// }
// elseif ($_POST['subject'] == 2) {
//   $subject = 'Личний вопрос';
// }
// elseif ($_POST['subject'] == 3) {
//   $subject = 'Благодарность';
// }
// else {
//   $subject = 'Вопрос';
// }


//Кому отправлять

$to = 'jekabossboyko@gmail.com';
$from = trim ($_POST['email']);

$message = htmlspecialchars($_POST['message']);
$message = urldecode($_POST['message']);
$message = trim($_POST['message']);

$headers = 'From: $from' . '\r\n' .
'Reply-To: $from' . '\r\n' .
'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers)){
   echo ('Писмо успешно отправино');
}
else {
  echo ('Есть ошибка! Проверте данние...');
}


?>