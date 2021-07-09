<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="Generator" content="Notepad++"/>
	<meta name="Author" content="안진영"/>
	<meta name="Keywords" content="포트폴리오, 안진영 포트폴리오, AJY, AHN JINYOUNG, HTML5, CSS3, jQuery, 프로젝트, Portfolio, Project, 반응형웹, 반응형웹 포트폴리오, 학생포트폴리오, JINYOUNG's portfolio "/>
	<meta name="Description" content="안진영의 포트폴리오 페이지 입니다"/>
	<title>정보수정 | KT</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet"> 
	<link rel="shortcut icon" href="../favicon/favicon.ico" type="image/x-icon"/>
	<link rel="icon" href="../favicon/favicon.ico" type="image/x-icon"/>
	<link rel="stylesheet" href="css/sub07.css"/>
	<script src="../js/prefixfree.min.js"></script>	
	<script src="../js/html5div.js"></script>	<!-- 낮은버전시멘틱태그 -->
	<script src="../js/html5shiv.js"></script>	<!-- 낮은버전시멘틱태그 -->
	<script src="../js/jquery-1.10.2.min.js"></script>
	<script src="../js/guideText.js"></script>
	<script src="../js/member_modify.js"></script>
	<script src="js/script.js"></script>
</head>
<body> 
	<header>
    	<?php include "header.php";?>
    </header>
<?php    
   	$con = mysqli_connect(DBhost, DBuser, DBpass, DBname);
    $sql    = "select * from members where id='$userid'";
    $result = mysqli_query($con, $sql);
    $row    = mysqli_fetch_array($result);

    $pass = $row["pass"];
    $name = $row["name"];

    $email = explode("@", $row["email"]);
    $email1 = $email[0];
    $email2 = $email[1];

    mysqli_close($con);
?>
	<section>
		<div id="contentsWrap" class="fl cf">
			<div id="mainContents">
				<div id="loginContent" class="fl cf">
					<div class="logintab">
						<ul class="logintabs">
							<li><a href="#logintab1" class="active">정보수정하기</a></li>
						</ul>
					</div>
					<div id="join_box">
						<form  name="member_form" method="post" action="member_modify.php?id=<?=$userid?>">
							<div class="form id">
								<div class="col1">아이디</div>
								<div class="col2">
									<?=$userid?>
								</div>
							</div>
							<div class="clear"></div>

							<div class="form cf">
								<div class="col1">비밀번호</div>
								<div class="col2">
									<input type="password" name="pass" value="<?=$pass?>">
								</div>
							</div>
							<div class="clear cf"></div>
							<div class="form">
								<div class="col1">비밀번호 확인</div>
								<div class="col2">
									<input type="password" name="pass_confirm" value="<?=$pass?>">	
								</div>
							</div>
							<div class="clear cf"></div>
							<div class="form clname">
								<div class="col1">이름</div>
								<div class="col2">
									<input type="text" name="name"  value="<?=$name?>">	
								</div>
							</div>
							<div class="clear"></div>

							<div class="form email cf">
								<div class="col1">이메일</div>
								<div class="col2">
									<input type="text" name="email1" value="<?=$email1?>">@<input type="text" name="email2" value="<?=$email2?>">	
								</div>
							</div>
							<div class="clear"></div>

							<div class="buttons">
								<span class="complete" onclick="check_input()">수정완료</span>&nbsp;
							</div>
						</form>
					</div> <!-- join_box -->
				</div>
			</div><!-- id="mainContents" -->
		</div><!-- id="contentsWrap" -->
	</section>
	<footer>
		<?php include "footer.php";?>
	</footer>
</html>
