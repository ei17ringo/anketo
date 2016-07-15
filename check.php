<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>PHP基礎</title>
	</head>
	<body>
		<?php 
			$nickname = htmlspecialchars($_POST['nickname']);
			$email = htmlspecialchars($_POST['email']);
			$goiken = htmlspecialchars($_POST['goiken']);


			// echo $nickname;

			if ($nickname == ''){
				echo 'ニックネームが入力されていません';

			}else{
				echo 'ようこそ';

				echo $nickname;
				echo '様';
				echo '<br />';
			}

			if ($email == ''){
				echo 'メールアドレスが入力されていません';

			}else{
				echo 'メールアドレス：';

				echo $email;
				echo '<br>';
			}

			if ($goiken == ''){
				echo 'ご意見が入力されていません';

			}else{
				echo 'ご意見『';

				echo $goiken;
				echo '』<br>';
			}
		?>
		<form method="post" action="thanks.php">
			
			<?php if (($nickname == "") || ($email == "") || ($goiken == "")) {
					echo '<input type="button" onclick="history.back()" value="戻る" >';

				}else{
					echo '<input type="button" onclick="history.back()" value="戻る" >';
					echo '<input type="submit" value="OK">';
				} ?>
			<input name="nickname" type="hidden" value="<?php echo $nickname; ?>" >
			<input name="email" type="hidden" value="<?php echo $email; ?>" >
			<input name="goiken" type="hidden" value="<?php echo $goiken; ?>" >


		</form>
	</body>
</html>