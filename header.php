<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header>
	<nav>
		<div class="main-wrapper">
			<ul>
				<li><a href="index.php">Library</a></li>
			</ul>
			<div class="nav-login">
				<?php
					if(isset($_SESSION['u_username'])){
						echo "<ul>
						        <li><a href=\"usersettings.php\">$_SESSION[u_email]</a></li>
						        <li><a href=\"upload.php\">Upload</a></li>
								<form action=\"includes/logout.inc.php\" method=\"POST\">
									<button type=\"submit\" name=\"submit\">Logout</button>
								</form>
							</ul>";
					}
					else {
						echo '<form action="includes/login.inc.php" method="POST">
					            <input type="text" name="username" placeholder="Username/email">
					            <input type="password" name="pwd" placeholder="Password">
					            <button type="submit" name="submit">Login</button>
				            </form>
			            	<ul>
			            	    <li><a href="signup.php">Sign up</a></li>
			            	</ul>';
					}
				?>
					
			</div>
		</div>
	</nav>
	<div class="notice">
	    <?php
	    if(isset($_SESSION['u_username'])){
	        if(isset($_GET['addtocart'])){
		    	$addtocart=$_GET['addtocart'];
    			    if($addtocart == "success"){
    				echo '<p class="success">&#10003; Item added to cart</p>';
    			}
    		}
    		elseif(isset($_GET['updatecart'])){
    			$updatecart=$_GET['updatecart'];
    			if($updatecart == "success"){
    				echo '<div class="notice"><p class="success">&#10003; Cart updated!</p></div>';
    			}
    		}
            elseif(isset($_GET['upload'])){
    			$upload=$_GET['upload'];
    			if($upload == "success"){
    				echo '<div class="success"><p class="success">&#10003; Document Uploaded!</p></div>';
    			}
				elseif($upload == "nofile"){
    				echo '<p class="fail">&#10007; File not selected!</p>';
    			}
				elseif($upload == "exist"){
    				echo '<p class="fail">&#10007; File already exists!</p>';
    			}
				elseif($upload == "large"){
    				echo '<p class="fail">&#10007; File too large!</p>';
    			}
				elseif($upload == "extension"){
    				echo '<p class="fail">&#10007; Only pdf/doc/docs/epub/azw/azw3/mobi files are supported!</p>';
    			}
    			elseif($upload == "error"){
    				echo '<p class="fail">&#10007; Unknown error!</p>';
    			}
    		}
    		elseif(isset($_GET['updatepassword'])){
    			$updatepassword=$_GET['updatepassword'];
    			if($updatepassword == "empty"){
    				echo '<p class="fail">&#10007; All fields are mandatory!</p>';
    			}
    			elseif($updatepassword == "error"){
    				echo '<p class="fail">&#10007; Your account is probably damaged!</p>';
    			}
    			elseif($updatepassword == "wrongold"){
    				echo '<p class="fail">&#10007; Old password is not correct!</p>';
    			}
    			elseif($updatepassword == "missmatch"){
    				echo '<p class="fail">&#10007; Password in new password fields missmatch!</p>';
    			}
    			elseif($updatepassword == "success"){
    				echo '<p class="success">&#10003; Password updated!</p>';
    			}
    		}
    		elseif(isset($_GET['accountupdate'])){
    			$accountupdate=$_GET['accountupdate'];
    			if($accountupdate == "empty"){
    				echo '<p class="fail">&#10007; All fields are mandatory!</p>';
    			}
    			elseif($accountupdate == "invalid"){
    				echo '<p class="fail">&#10007; First Name or Last Name is invalid!</p>';
    			}
    			elseif($accountupdate == "email"){
    				echo '<p class="fail">&#10007; Email is invalid!</p>';
    			}
    			elseif($accountupdate == "success"){
    				echo '<p class="success">&#10003; Account updated!</p>';
    			}
    		}
    	}
	    else {
	        
	        if(isset($_GET['signup'])){
    			$signup=$_GET['signup'];
    			if($signup == "empty"){
    				echo '<p class="fail">&#10007; All fields are mandatory!</p>';
    			}
    			elseif($signup == "invalid"){
    				echo '<p class="fail">&#10007; First Name or Last Name is invalid!</p>';
    			}
    			elseif($signup == "email"){
    				echo '<p class="fail">&#10007; Email is invalid!</p>';
    			}
    			elseif($signup == "usertaken"){
    				echo '<p class="fail">&#10007; Username is already taken!</p>';
    			}
    			elseif($signup == "success"){
    				echo '<p class="success">&#10003; Account created!</p>';
    			}
    		}
    		elseif(isset($_GET['login'])){
    			$login=$_GET['login'];
    			if($login == "empty"){
    				echo '<p class="fail">&#10007; Login credentials can\'t be empty</p>';
    			}
    			elseif($login == "error"){
        			    echo '<p class="fail">&#10007; Either Username/email or Password is incorrect</p>';
    			}
    		}  
	    }
		?>
	</div>
</header>
