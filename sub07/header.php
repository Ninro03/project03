<?php
	include "../define.php";

	session_start();
	if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
	else $userid = "";
	if (isset($_SESSION["username"])) $username = $_SESSION["username"];
	else $username = "";
	if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
	else $userlevel = "";
	if (isset($_SESSION["userpoint"])) $userpoint = $_SESSION["userpoint"];
	else $userpoint = ";"
?>
	<div id="menuWrap" >
			<div id="mainMenu">
				<div id="mainLogo" class="cf">
					<div class="logoinner">
						<h1>
							<a href="../index2.php"><img src="images/logo.png" alt="KT"/></a>
						</h1>
					</div>
					<ul id="mainGnb" class="fl cf">
						<li class="udl"><a href="#">개인</a></li>
						<li><a href="#">기업</a></li>
						<li class="wd"><a href="#">회사소개</a></li>
					</ul>
				</div>
			</div><!-- id="mainMenu" -->
		</div><!-- id="menuWrap" -->