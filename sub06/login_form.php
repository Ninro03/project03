<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="Generator" content="Notepad++"/>
	<meta name="Author" content="안진영"/>
	<meta name="Keywords" content="포트폴리오, 안진영 포트폴리오, AJY, AHN JINYOUNG, HTML5, CSS3, jQuery, 프로젝트, Portfolio, Project, 반응형웹, 반응형웹 포트폴리오, 학생포트폴리오, JINYOUNG's portfolio "/>
	<meta name="Description" content="안진영의 포트폴리오 페이지 입니다"/>
	<title>로그인 | KT</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet"> 
	<link rel="shortcut icon" href="../favicon/favicon.ico" type="image/x-icon"/>
	<link rel="icon" href="../favicon/favicon.ico" type="image/x-icon"/>
	<link rel="stylesheet" href="css/sub06.css"/>
	<script src="../js/prefixfree.min.js"></script>	
	<script src="../js/html5div.js"></script>	<!-- 낮은버전시멘틱태그 -->
	<script src="../js/html5shiv.js"></script>	<!-- 낮은버전시멘틱태그 -->
	<script src="../js/jquery-1.10.2.min.js"></script>
	<script src="../js/guideText.js"></script>
	<script src="./js/login.js"></script>
	<script src="./js/script.js"></script>
</head>
<body>
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
	<div id="contentsWrap" class="fl cf">
		<div id="mainContents">
			<div class="contentTitle">
				<h3>로그인</h3>
			</div>
			<div id="loginContent" class="fl cf">
				<div class="logintab">
					<ul class="logintabs">
						<li><a href="#logintab1" class="active">일반 로그인</a></li>
						<li><a href="#logintab2">1회용 비밀번호 로그인</a></li>
					</ul>
				</div>
				<div id="logintab1" class="logincon fl">
					<form  name="login_form" method="post" action="login.php">
						<p>
							<input class="loginId" name="id" type="text" value="admin" title="KT 아이디 또는 이메일 입력"/>
							<input id="pass" class="loginpassword" name="pass" type="password" value="1234" title="비밀번호 입력"/>
						</p>
						<span class="option">
							<input type="checkbox" id="checkbox" class="hidden"/>
							<label for="checkbox">아이디저장</label>
						</span>
						<span class="loginadd">
							<a href="sub06.html" class="bdz">아이디찾기</a>
							<a href="sub06.html">비밀번호찾기</a>
							<a href="../sub07/member_form.php">회원가입</a>
						</span>
						<span id="loginBtn">
							<a href="#" id="loginSubmit" onclick="check_input()">로그인</a>
							<a href="#" id="passloginSubmit"><img src="images/leftcontent_btn_login_pass.png" alt="PASS 휴대폰번호 로그인" width="604"/></a>
						</span>
						<ul class="snsloginlist cf">
							<li class="naverlogin"><a href=""><span>네이버<br/>로그인</span></a></li>
							<li class="facebooklogin"><a href=""><span>페이스북<br/>로그인</span></a></li>
							<li class="kakaologin"><a href=""><span>카카오<br/>로그인</span></a></li>
						</ul>
					</form>
				</div><!-- id="logintab1" -->
				<div id="logintab2" class="logincon fl">
					<p>
						<input id="userID2" class="loginId guideText" name="userID2" type="text" value="KT 아이디 또는 이메일 입력" title="KT 아이디 또는 이메일 입력"/>
						<input id="password2" class="loginpassword guideText" name="password2" type="password" value="1회용 비밀번호" title="비밀번호 입력"/>
					</p>
					<span class="option">
						<input type="checkbox" id="checkbox2" class="hidden"/>
						<label for="checkbox2">아이디저장</label>
					</span>
					<span class="loginadd">
						<a href="sub06.html" class="bdz">아이디찾기</a>
						<a href="sub06.html">비밀번호찾기</a>
						<a href="sub06.html">회원가입</a>
					</span>
					<p class="exp">
						마이 케이티 앱 실행 후, 설정 >
						<strong>1회용 비밀번호 받기 메뉴</strong>
						에서 발급받은 1회용 비밀번호를 입력해주세요.
						<br/>
						<a href="sub06.html">도움말 보기</a>
					</p>
					<span id="loginBtn2">
						<a href="#none" id="loginSubmit2">로그인</a>
					</span>
					<ul class="snsloginlist cf">
						<li class="naverlogin"><a href=""><span>네이버<br/>로그인</span></a></li>
						<li class="facebooklogin"><a href=""><span>페이스북<br/>로그인</span></a></li>
						<li class="kakaologin"><a href=""><span>카카오<br/>로그인</span></a></li>
					</ul>
				</div><!-- id="logintab1" -->
			</div>
			<div class="rightcontent fl">
				<a href="../sub02/sub02.html"><img src="images/rightcontent.jpg" alt="로그인 없이 SMS 인증으로 간편하게 요금납부하세요! 카카오페이, 신용카드, 은행계좌로 바로 납부 간편납부 바로가기" width="604"/></a>
			</div>
		</div><!-- id="mainContents" -->
	</div><!-- id="contentsWrap" -->
	<footer>
    	<?php include "../footer.php";?>
    	<?php include "../recommdiv.php";?>
    </footer>
</body>
</html>
