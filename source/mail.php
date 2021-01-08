<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  try{
    $mail->isSMTP();
    $mail->Host       = 'server245.hosting.reg.ru'; // SMTP сервера вашей почты
    $mail->Username   = 'admin@artemvolkov.online'; // Логин на почте
    $mail->Password   = '2V9r4M1o'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->CharSet = "utf-8";

    $mail->setFrom('admin@artemvolkov.online'); // Gmail address which you used as SMTP server
    $mail->addAddress('admin@artemvolkov.online'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Contact Page)';
    $mail->Body = "<h3>Name : $name <br>Email: $email <br>Message : $message</h3>";

    //Получаем пост от recaptcha
    $recaptcha = $_POST['g-recaptcha-response'];

    //Сразу проверяем, что он не пустой
    if(!empty($recaptcha)) {
        //Получаем HTTP от recaptcha
        $recaptcha = $_REQUEST['g-recaptcha-response'];
        //Сюда пишем СЕКРЕТНЫЙ КЛЮЧ, который нам присвоил гугл
        $secret = '6LfSayQaAAAAAODeci0zIbrjl_zXQLCN3u3WbLd0';
        //Формируем utl адрес для запроса на сервер гугла
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=".$secret ."&response=".$recaptcha."&remoteip=".$_SERVER['REMOTE_ADDR'];

        //Инициализация и настройка запроса
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_TIMEOUT, 10);
        curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
        //Выполняем запрос и получается ответ от сервера гугл
        $curlData = curl_exec($curl);

        curl_close($curl);
        //Ответ приходит в виде json строки, декодируем ее
        $curlData = json_decode($curlData, true);

        //Смотрим на результат
        if($curlData['success']) {
            //Сюда попадем если капча пройдена, дальше выполняем обычные
            //действия(добавляем коммент или отправляем письмо) с формой
            $mail->send();
            $alert = '<div class="alert-success">
                         <span>Message Sent! Thank you for contacting me.</span>
                         <p class="alert__close">Close popup</p>
                        </div>';
            } else {
            //Капча не пройдена, сообщаем пользователю, все закрываем стираем и так далее
            $alert = '<div class="alert-error">
                        <span>Captcha not passed!</span>
                      </div>';
        }
    }
    else {
        //Капча не введена, сообщаем пользователю, все закрываем стираем и так далее
        $alert = '<div class="alert-error">
                    <span>Captcha not entered!</span>
                  </div>';
    }
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>
