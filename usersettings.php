<?php
    session_start();
	if (!isset($_SESSION['u_username'])) {
	    header("Location: index.php");
	    exit();
    }
    include_once 'header.php';
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>User Settings</h2>
		<form class="slim-form" action="includes/update.inc.php" method="POST">
			<label for="first">First Name:</label>
			<input type="text" name="first" placeholder="<?php echo $_SESSION['u_first']; ?>" value="<?php echo $_SESSION['u_first']; ?>">
			<label for="first">Last Name:</label>
			<input type="text" name="last" placeholder="<?php echo $_SESSION['u_last']; ?>" value="<?php echo $_SESSION['u_last']; ?>">
			<label for="first">Email:</label>
			<input type="text" name="email" placeholder="<?php echo $_SESSION['u_email']; ?>" value="<?php echo $_SESSION['u_email']; ?>">
			<button type="submit" name="accountupdate">Update Details</button>
		</form>
		<form class="slim-form" action="includes/updatepwd.inc.php" method="POST">
			<label for="first">Old Password:</label>
			<input type="password" name="old">
			<label for="first">New Password:</label>
			<input type="password" name="new1">
			<label for="first">New Password again:</label>
			<input type="password" name="new2">
			<button type="submit" name="changepwd">Update Password</button>
		</form>
	</div>
</section>

<?php
	include_once 'footer.php';
?>
