<?php
set_time_limit(0);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=Windows-1251">
        <title>Sample</title>
    </head>
    <body>
		<?php
		include_once 'class.verifyEmail.php';

		$email = 'footagehouse@il.com';

		$vmail = new verifyEmail();
		$vmail->setStreamTimeoutWait(20);
		$vmail->Debug= TRUE;
		$vmail->Debugoutput= 'html';

		$vmail->setEmailFrom('sarower.hasan@outlook.com');

		if ($vmail->check($email)) {
			echo 'email &lt;' . $email . '&gt; exist!';
		} elseif (verifyEmail::validate($email)) {
			echo 'email &lt;' . $email . '&gt; valid, but not exist!';
		} else {
			echo 'email &lt;' . $email . '&gt; not valid and not exist!';
		}
		?>
    </body>
</html>
