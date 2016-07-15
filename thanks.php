<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>PHP基礎</title>
	</head>
	<body>
		ご意見ありがとうございました。
		<?php
			$nickname = $_POST['nickname'];
			$email = $_POST['email'];
			$goiken = $_POST['goiken'];
		
			print $nickname;
			print '様';
			print '<br />';
			print 'ご意見ありがとうございました。';
			print '頂いたご意見『'.$goiken.'』';
			print '<br />';
			print $email.'にメールを送りましたのでご確認下さい。';
		?>
	</body>
</html>