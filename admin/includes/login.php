<?php require_once("init.php");?>

<?php
if($session->is_signed_in())
{
	redirect("index.php");
}

if(isset($_POST['submit']))
{
	$username = trim($_POST['username']);
	$password = trim($_POST['username']);

//method to check for user in the database
$user_found = User::verify_user($username, $password);



	if($user_found)
	{
		$session->login($user_found);
		redirect("index.php");
	}
	else
	{
		$this_messege = "Your password and/or username is in correct";
	}

	$username = "";
	$password = "";

}


?>