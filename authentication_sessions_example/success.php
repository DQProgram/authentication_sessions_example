<?php
	/* This page is an example of a resource that is only available for authenticated users. As such, the first thing is to verify that 
	 * it is so. If not, the user should be redirected to the login page. This can later on be added to a header page that may be
	 * included in all resources that are for authenticated users only.
	 */
	session_start();
	if ( empty($_SESSION) || !isset($_SESSION['username']) ){
		//the user is not authenticated. This can be an error or a direct access. Send it back to the login page.
		header('Location:loginForm.php?error=1');
		die();
	}
?>
<!DOCTYPE html>
<html>
<body>
<?php
	// print a hello message to the authenticated user using its username
	echo "Hello " . $_SESSION['username'] . ". Welcome back!";
?>
</body>
</html>