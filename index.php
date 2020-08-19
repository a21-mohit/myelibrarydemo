<?php
	session_start();
	include_once 'header.php';
?>
<section class="main-container">
	<div class="main-wrapper">
	    
        <?php
		if(isset($_SESSION['u_username'])){
			$directory = "./uploads/";
			$filecount = 0;
			$files = glob($directory . "*");
			if ($files){
				$filecount = count($files);
			}
			if ($filecount != 0){
				echo '<form class="searchbar" action="includes/search.inc.php" method="GET">
							<input type="text" name="search" placeholder="Search" ';
							if(isset($_GET['search'])){
									echo 'value="'.$_GET['search'].'"';
							}
				echo '><button type="submit" name="searchbtn"><div style="-webkit-transform: rotate(45deg); 
               -moz-transform: rotate(-45deg); 
                 -o-transform: rotate(-45deg);
                    transform: rotate(-45deg);">
						&#9906;
						</div></button> 
						</form>';
				if(isset($_GET['search']) && $_GET['search'] !='' ){
					$files = glob('./uploads/*.*');
					$ciFiles =  preg_grep('/\.\/uploads\/.*'.$_GET['search'].'.*/i', $files);
					foreach($ciFiles as $relativefilename) {
						$filename = basename($relativefilename);
						$FileExtension = strtolower(pathinfo($relativefilename,PATHINFO_EXTENSION));
						echo '
						<div class="box">
						<div class="recorditem">
						<div class="thumb" style="background-image: url(images/'.$FileExtension.'.png);"></div><div class="recorditemname"><p>'.$filename.'</p></div>
						<a href="'.$relativefilename.'"><button type="submit" name="download">Download</button></a></div>
						</div>';
					}
				}
				else{
					foreach(glob('./uploads/*.*') as $relativefilename) {
						$filename = basename($relativefilename);
						$FileExtension = strtolower(pathinfo($relativefilename,PATHINFO_EXTENSION));
						echo '
						<div class="box">
						<div class="recorditem">
						<div class="thumb" style="background-image: url(images/'.$FileExtension.'.png);"></div><div class="recorditemname"><p>'.$filename.'</p></div>
						<a href="'.$relativefilename.'"><button type="submit" name="download">Download</button></a></div>
						</div>';
					}
				}
				
			}
			else {
				echo '<h1>Library is empty!</h1><img class="library" src="images/empty.png">';
			}
		}
		else {
			echo '<h1>Login to access Library!</h1><img class="library" src="images/library.png">';
		}
        ?>
		
	</div>
</section>

<?php
	include_once 'footer.php';
?>
