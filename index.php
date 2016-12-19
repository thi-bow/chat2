<!--ログイン画面　画面ID : WC101-->

<?php

	/*インクルード*/
	require('define.php');

?>

<html>
	<head>
		<title> Chat - Login </title>
	</head>

	<body>

		<form action="wc201.php">

			<!--Title Name-->
			<p><h1>Chat</h1></p>

			<p>

				Login ID

				<!--名前入力欄-->
				<input type="text" name="name">
				<?php
				
				?>

			</p>
			<p>

				PassWord

				<!--名前入力欄-->
				<input type="password" name="password">

			</p>

			<!--ログインボタン-->
			<p><input type="submit" value="Login"></p>

			<!--送る引数-->
			<input type="hidden" name="state" value="<?php print STATE_LOGIN ?>" />


		</form>



	</body>

</html>

