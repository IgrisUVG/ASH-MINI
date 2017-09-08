<?php
if ($_POST['submit']) {
	$from_name = htmlspecialchars(trim($from_name));
	$from_email = htmlspecialchars(trim($from_email));
	$message = htmlspecialchars(trim($message));
  $from     = "=?utf-8?B?" . base64_encode($_POST['from_name']) . "?= <" . $_POST['from_email'] . ">";
  $to       = "igrisuvg@gmail.com, ";
  $to      .= "shvedovaanna@gmail.com";
  $subject  = $_POST['subj'];
  $message  = $_POST['msg'];
  $headers  = "From: $from\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=utf-8\r\n";
  if (
			mail(
			$to,
			"=?utf-8?B?" . base64_encode($subject) . "?=",
			$message,
			$headers
			)
		) {
		echo "<script type=\"text/javascript\">
						alert(\"Письмо успешно отправлено\");
						window.history.back();
					</script>";
	} else {
		echo "<script type=\"text/javascript\">alert(\"Произошла ошибка\");</script>";
	}
}
?>