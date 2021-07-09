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
			<h3>게시판 글수정</h3>
			<p>게시판에 남긴 글을 수정 해보세요.</p>
		</div>
		<div id="board_modify_box">
			<ul class="top_buttons">
				<li><button onclick="location.href='board_form.php'">글쓰기</button></li>
				<li><button onclick="location.href='board_list.php'">목록</button></li>
			</ul>
<?php
	$num = $_GET["num"];
	$page = $_GET["page"];

	$con = mysqli_connect(DBhost, DBuser, DBpass, DBname);
	$sql = "select * from board where num=$num";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result);
	$name = $row["name"];
	$subject = $row["subject"];
	$content = $row["content"];
	$file_name = $row["file_name"];
?>
			<form name="board_form" method="post" action="board_modify.php?num=<?=$num?>&page=<?=$page?>" enctype="multipart/form-data">
				<ul id="board_form">
					<h3 id="board_title">
						게시판 > 글 쓰기
					</h3>
					<li>
						<span class="col1">이름 : </span>
						<span class="col2"><?=$name?></span>
					</li>
					<li>
						<span class="col1">제목 : </span>
						<span class="col2"><input type="text" name="subject" value="<?=$subject?>"></span>
					</li>
					<li id="text_area">
						<span class="col1">내용 : </span>
						<span class="col2">
							<textarea name="content"><?=$content?></textarea>
						</span>
					</li>
					<li>
						<span class="col1">첨부파일 : </span>
						<span class="col2"><?=$file_name?></span>
					</li>
				</ul>
				<ul class="buttons">
					<li><button type="button" onclick="check_input()">수정하기</button></li>
				</ul>
			</form>
		</div>
	</section>
	<footer>
		<?php include "../footer.php";?>
	</footer>
</body>
</html>