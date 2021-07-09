<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet"> 
	<link rel="shortcut icon" href="../favicon/favicon.ico" type="image/x-icon"/>
	<link rel="icon" href="../favicon/favicon.ico" type="image/x-icon"/>
	<link rel="stylesheet" href="../css/common2.css"/>
	<link rel="stylesheet" href="css/board2.css"/>=
	<script src="../js/jquery-1.10.2.min.js"></script>	<!-- 제이쿼리 라이이브러리 연동 -->
	<script src="../js/prefixfree.min.js"></script>	
	<script src="../js/html5div.js"></script>	<!-- 낮은버전시멘틱태그 -->
	<script src="../js/html5shiv.js"></script>	<!-- 낮은버전시멘틱태그 -->
	<script src="../js/jquery-ui-1.10.4.custom.min.js"></script>	<!-- UI 플러그인 연동 -->
	<script src="../js/jquery.easing.1.3.min.js"></script>
	<script src="../js/common2.js"></script>
	<script src="../js/cookie.js"></script>	<!-- 쿠키 플러그인 연동 몇일동안 열지 않기 -->
	<script src="./js/script.js"></script>
	<script src="../js/timer.js"></script>		<!-- 타이머 연동 -->
	<script src="../js/weather.js"></script>		<!-- 날씨 -->
	<script src="../js/DB_springMove_fn.js"></script>
	<script>
		function check_input(){
			if(!document.board_form.subject.value){
				alert("제목을 입력하세요.");
				document.board_form.subject.focus();
				return;
			}
			if(!document.board_form.content.value){
				alert("내용을 입력하세요.");
				document.board_form.content.focus();
				return;
			}
			document.board_form.submit();
		}
	</script>		
</head>
<body>
	<header>
		<?php include "header2.php";?>
	</header>
	<section>
		<div class="board_title">
			<h3>게시판 글쓰기</h3>
			<p>게시판에 글을 남겨 보세요.</p>
		</div>
		<div class="board_con">
			<ul class="top_buttons">
				<li><button onclick="location.href='board_form.php'">글쓰기</button></li>
				<li><button onclick="location.href='board_list.php'">목록</button></li>
			</ul>
			<div id="board_box">
				<h3 id="board_title">
					게시판 > 글 쓰기
				</h3>
				<form name="board_form" method="post" action="board_insert.php" enctype="multipart/form-data" class="cf">
					<ul id="board_form">
						<li>
							<span class="col1">이름 : </span>
							<span class="col2"><?=$username?></span>
						</li>
						<li>
							<span class="col1">제목 : </span>
							<span class="col2"><input type="text" name="subject"></span>
						</li>
						<li id="text_area">
							<span class="col1">내용 : </span>
							<span class="col2">
								<textarea name="content"></textarea>
							</span>
						</li>
						<li>
							<span class="col1">첨부파일 : </span>
							<span class="col2"><input type="file" name="upfile"></span>
						</li>
					</ul>
					<ul class="buttons">
						<li><button type="button" onclick="check_input()">완료</button></li>
					</ul>
				</form>
			</div>
		</div>
	</section>
	<footer>
		<?php include "../footer.php";?>
	</footer>
</body>
</html>