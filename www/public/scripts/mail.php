<?php

if (isset($_POST['feedback_name']) && isset($_POST['feedback_phone'])) {

    $user_name = $_POST['feedback_name'];
    $user_phone = $_POST['feedback_phone'];
    $date = date("Y-m-d H:i:s");

    // Куда отправлять заявки.
    $email = 'mcflyhack@gmail.com';

    $mail_title = "Уведомление от формы обратной связи!";

        $mail_message = "<html>
		                    <head>
		                       <title>Уведомление от формы обратной связи!</title>
		                    </head>
		                    <body>
		                        <p>Имя: <b>" . $user_name . "</b></p>
		                        <p>Телефон: <b>" . $user_phone . "</b></p>
		                        <p>Дата время: <b>" . $date . "</b></p>
		                    </body>
		                </html>";

	// Для отправки HTML-письма должен быть установлен заголовок Content-type
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	// Отправляем
	mail($email, $mail_title, $mail_message, $headers);
}

?>