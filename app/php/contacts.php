<?phpsession_start();require_once 'plugins/autoload.php';require_once 'plugins/phpmailer/phpmailer/language/phpmailer.lang-ru.php';	function captchaCheck($key, $catpcha, $ip){		$url_to_send = "https://www.google.com/recaptcha/api/siteverify?secret=".$key.'&response='.$catpcha.'&ip='.$ip;		$data_request = file_get_contents($url_to_send);		$data = json_decode($data_request, true);		if(isset($data['success']) && $data['success'] == 1){			return true;		} else {			return false;		}	}	function sendEmail($data){		$mail = new PHPMailer;		$mail->CharSet='UTF-8';		$mail->isSendmail();		$mail->IsHTML(true);		$mail->setFrom($data['email'], $data['name']);		$mail->addAddress('gretta28@yandex.ru', "Ирине Тишкевич");		$mail->Subject = "Отправка письма с itishkevich.ru";		$mail->msgHTML($data['message']);		return $mail->send();	}		if($_SERVER['REQUEST_METHOD'] == "POST") {		$captcha = $_POST['g-recaptcha-response'];		$sekretKey = "6LdCkwUTAAAAAMx8cL-mJpGyf-Yk-FAr3MH-gIUD";		$name = $_POST['name'];		$email = $_POST['email'];		$message = $_POST['msg'];		if(captchaCheck($sekretKey, $captcha, $ip)) {			if(sendEmail(array('name' => $name, 'email' => $email, 'message' => $message))) {				$response = array('status' => 'OK', 'msg' => 'Сообщение успешно отправлено');			} else {				$response = array('status' => 'FAIL', 'msg' => 'Ошибка при отправке сообщения');			}		} else {			$response = array('status' => 'FAIL', 'msg' => 'Вы не заполнили капчу');		}		echo json_encode($response);	} else {		header("HTTP/1.1 302 Moved Temporarily");		header("Location: /index.php");		exit;	}