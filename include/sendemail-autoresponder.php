<?php

require_once('phpmailer/PHPMailerAutoload.php');

$apiKey = '004abed7d52c9b95c08a5a105e703c6b-us15'; //  MailChimp API Key
$listId = '229738c09b'; //  MailChimp List ID

$toemails = array();

$toemails[] = array(
    //'email' => 'anastasiya.kochegarova@gmail.com', //  Email Address
    'email' => 'lesia@tridentsoftlab.com', //  Email Address
    //'email' => 'andrey.v.pavlenko@gmail.com', //  Email Address
    'name' => 'Tridentsoftlab.com' //  Name
);

// Form Processing Messages
$message_success = 'Мы <strong>успешно </strong> получили Ваш запрос и ответим Вам в ближайшее время.';

// Add this only if you use reCaptcha with your Contact Forms
//$recaptcha_secret = '6LctrhgUAAAAAKAR7avdMqhbaUbZ7NbxLHH62BLF'; //  reCaptcha Secret

$mail = new PHPMailer();
$autoresponder = new PHPMailer();

// If you intend you use SMTP, add your SMTP Code after this Line


if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    if( $_POST['template-contactform-email'] != '' ) {

        $name = isset( $_POST['template-contactform-name'] ) ? $_POST['template-contactform-name'] : '';
        $email = isset( $_POST['template-contactform-email'] ) ? $_POST['template-contactform-email'] : '';
        $phone = isset( $_POST['template-contactform-phone'] ) ? $_POST['template-contactform-phone'] : '';
        $service = isset( $_POST['template-contactform-service'] ) ? $_POST['template-contactform-service'] : '';
        $subject = 'Заявка на Tridentsoftlab';
        $message = isset( $_POST['template-contactform-message'] ) ? $_POST['template-contactform-message'] : '';
        $date = isset( $_POST['contact-date'] ) ? $_POST['contact-date'] : '';

        $subject = isset($subject) ? $subject : 'Новое сообщение Tridentsoftlab.com';
        $subscribe_email = $email;

        $botcheck = $_POST['template-contactform-botcheck'];

        if( $botcheck == '' ) {

            $mail->SetFrom( $name );
            $mail->AddReplyTo( $email , $name );
            foreach( $toemails as $toemail ) {
                $mail->AddAddress( $toemail['email'] , $toemail['name'] );
            }
            $mail->Subject = $subject;

            // AutoResponder Settings
            $autoresponder->SetFrom( 'info@tridentsoftlab.com' , 'info@tridentsoftlab.com' );
            $autoresponder->AddReplyTo( 'info@tridentsoftlab.com' , 'info@tridentsoftlab.com' );
            $autoresponder->AddAddress( $email , $name );
            $autoresponder->Subject = 'Мы получили ваше письмо';

            $name = isset($name) ? "Имя: $name<br><br>" : '';
            $email = isset($email) ? "Email: $email<br><br>" : '';
            $phone = isset($phone) ? "Телефон: $phone<br><br>" : '';
//			$service = isset($service) ? "Service: $service<br><br>" : '';
            $message = isset($message) ? "Текст сообщения: $message<br><br>" : '';


            $referrer = $_SERVER['HTTP_REFERER'] ? '<br><br><br>This Form was submitted from: ' . $_SERVER['HTTP_REFERER'] : '';

            $body = "$name $email $phone  $message $referrer";

            // AutoResponder Message
            $ar_body = "Вы получили это письмо, потому что хотите сотрудничать с компанией Tridentsoftlab.com<br><br>"." "."Мы ответим вам в ближайшие 24 часа.<br><br>С наилучшими пожеланиями,<br>tridentsoftlab.com";

            // Runs only when File Field is present in the Contact Form
//			if ( isset( $_FILES['template-contactform-file'] ) && $_FILES['template-contactform-file']['error'] == UPLOAD_ERR_OK ) {
//				$mail->IsHTML(true);
//				$mail->AddAttachment( $_FILES['template-contactform-file']['tmp_name'], $_FILES['template-contactform-file']['name'] );
//			}

            // Runs only when reCaptcha is present in the Contact Form
//            if( isset( $_POST['g-recaptcha-response'] ) ) {
//                $recaptcha_response = $_POST['g-recaptcha-response'];
//                $response = file_get_contents( "https://www.google.com/recaptcha/api/siteverify?secret=" . $recaptcha_secret . "&response=" . $recaptcha_response );
//
//                $g_response = json_decode( $response );
//
//                if ( $g_response->success !== true ) {
//                    echo '{ "alert": "error", "message": "Подтвердите, что вы не робот" }';
//                    die;
//                }
//            }

            // Uncomment the following Lines of Code if you want to Force reCaptcha Validation

            // if( !isset( $_POST['g-recaptcha-response'] ) ) {
            // 	echo '{ "alert": "error", "message": "Captcha not Submitted! Please Try Again." }';
            // 	die;
            // }

            $mail->MsgHTML( $body );
            $autoresponder->MsgHTML( $ar_body );
            $sendEmail = $mail->Send();

            if( $sendEmail == true ):
                $send_arEmail = $autoresponder->Send();
                $datacenter = explode( '-', $apiKey );
                $submit_url = "https://" . $datacenter[1] . ".api.mailchimp.com/3.0/lists/" . $listId . "/members/" ;

                $data = array(
                    'email_address' => $subscribe_email,
                    'status' => 'subscribed'
                );

                if( !empty( $merge_vars ) ) { $data['merge_fields'] = $merge_vars; }

                $payload = json_encode($data);

                $auth = base64_encode( 'user:' . $apiKey );

                $header   = array();
                $header[] = 'Content-type: application/json; charset=utf-8';
                $header[] = 'Authorization: Basic ' . $auth;

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $submit_url);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_TIMEOUT, 10);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

                $result = curl_exec($ch);
                curl_close($ch);
                $data = json_decode($result);

                echo '{ "alert": "success", "message": "' . $message_success . '" }';
            else:
                echo '{ "alert": "error", "message": "Email <strong>could not</strong> be sent due to some Unexpected Error. Please Try Again later.<br /><br /><strong>Reason:</strong><br />' . $mail->ErrorInfo . '" }';
            endif;
        } else {
            echo '{ "alert": "error", "message": "Bot <strong>Detected</strong>.! Clean yourself Botster.!" }';
        }
    } else {
        echo '{ "alert": "error", "message": "Please <strong>Fill up</strong> all the Fields and Try Again." }';
    }
} else {
    echo '{ "alert": "error", "message": "An <strong>unexpected error</strong> occured. Please Try Again later." }';
}

?>