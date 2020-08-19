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
		<h2>Upload</h2>
		<div class="box">
			<form action="includes/upload.inc.php" method="post" enctype="multipart/form-data">
				<div class="uploadsubmit">
					<input type="file" name="fileToUpload" id="fileToUpload">
					<button class="upload" type="submit" name="upload">Upload</button>
				</div>
			</form>
		</div>
	</div>
</section>

<?php
	include_once 'footer.php';
?>
