<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="Generator" content="Notepad++"/>
	<meta name="Author" content="안진영"/>
	<meta name="Keywords" content="포트폴리오, 안진영 포트폴리오, AJY, AHN JINYOUNG, HTML5, CSS3, jQuery, 프로젝트, Portfolio, Project, 반응형웹, 반응형웹 포트폴리오, 학생포트폴리오, JINYOUNG's portfolio "/>
	<meta name="Description" content="안진영의 포트폴리오 페이지 입니다"/>
	<title>회원가입 | KT</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet"> 
	<link rel="shortcut icon" href="../favicon/favicon.ico" type="image/x-icon"/>
	<link rel="icon" href="../favicon/favicon.ico" type="image/x-icon"/>
	<link rel="stylesheet" href="css/sub07.css"/>
	<script src="../js/jquery-1.10.2.min.js"></script>
	<script src="../js/prefixfree.min.js"></script>	
	<script src="../js/html5div.js"></script>	<!-- 낮은버전시멘틱태그 -->
	<script src="../js/html5shiv.js"></script>	<!-- 낮은버전시멘틱태그 -->
	<script src="../js/guideText.js"></script>
	<script src="js/script.js"></script>
	<script>
		function check_input()
		{
			if(!document.member_form.id.value){
				alert("아이디를 입력하세요.");
				document.member_form.id.focus();
				return;
			}
			if(!document.member_form.pass.value){
				alert("비밀번호를 입력하세요.");
				document.member_form.pass.focus();
				return;
			}
			if(!document.member_form.pass_confirm.value){
				alert("비밀번호확인을 입력하세요.");
				document.member_form.pass_confirm.focus();
				return;
			}
			if(!document.member_form.name.value){
				alert("이름을 입력하세요.");
				document.member_form.name.focus();
				return;
			}
			if(!document.member_form.email1.value){
				alert("이메일 주소를 입력하세요.");
				document.member_form.email1.focus();
				return;
			}
			if(!document.member_form.email2.value){
				alert("이메일 주소를 입력하세요.");
				document.member_form.email2.focus();
				return;
			}
			if(document.member_form.pass.value !=
					document.member_form.pass_confirm.value){
				alert("비밀번호가 일치하지 않습니다.\n 다시 입력해 주세요.");
				document.member_form.pass.focus();
				document.member_form.pass.select();
				return;
			}

			document.member_form.submit();
		}

		function reset_form() {
			document.member_form.id.value = "";
			document.member_form.pass.value = "";
			document.member_form.pass_confirm.value = "";
			document.member_form.name.value = "";
			document.member_form.email1.value = "";
			document.member_form.email2.value = "";
			document.member_form.id.focus();
			return;
		}

		function check_id() {
			window.open("member_check_id.php?id=" + document.member_form.id.value,
				"IDcheck",
				"left= 700, top= 300, width= 350, height= 200, scrollbars=no, resizable=yes");
		}
	</script>
</head>
<body>
	<header>
		<?php include "header.php";?>
	</header>
	<section>
		<div id="contentsWrap" class="fl cf">
			<div id="mainContents">
				<div id="loginContent" class="fl cf">
					<div class="logintab">
						<ul class="logintabs">
							<li><a href="#logintab1" class="active">회원가입하기</a></li>
						</ul>
					</div>
					<div id="join_box">
						<form name="member_form" method="post" action="member_insert.php">
							<div class="form id">
								<div class="col1">아이디</div>
								<div class="col2">
									<input type="text" name="id" placeholder="아이디를 입력해주세요.">
								</div>
								<div class="col3">
									<a href="#"><img src="./images/check_id.png" onclick="check_id()"></a>
								</div>
							</div>
							<div class="clear"></div>

							<div class="form cf">
								<div class="col1">비밀번호</div>
								<div class="col2">
									<input type="password" name="pass" placeholder="비밀번호를 입력해주세요.">
								</div>
							</div>
							<div class="clear cf"></div>
							<div class="form">
								<div class="col1">비밀번호 확인</div>
								<div class="col2">
									<input type="password" name="pass_confirm" placeholder="비밀번호를 한번 더 입력해주세요.">	
								</div>
							</div>
							<div class="clear cf"></div>
							<div class="form clname">
								<div class="col1">이름</div>
								<div class="col2">
									<input type="text" name="name" placeholder="이름을 입력해주세요.">	
								</div>
							</div>
							<div class="clear"></div>

							<div class="form email cf">
								<div class="col1">이메일</div>
								<div class="col2">
									<input type="text" name="email1" placeholder="이메일을 입력해주세요.">@<input type="text" name="email2"  placeholder="이메일 주소를 입력해주세요.">	
							</div>
							</div>
							<div class="clear"></div>

							<div class="buttons">
								<img style="cursor:pointer" src="./images/button_save.png" onclick="check_input()">&nbsp;
                  				<img id="reset_button" style="cursor:pointer" src="./images/button_reset.png" onclick="reset_form()">
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
</body>
</html>