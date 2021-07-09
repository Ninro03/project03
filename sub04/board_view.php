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
</head>
<body>
	<header>
		<?php include "header2.php";?>
	</header>
<?php
	$num = $_GET["num"];
	$page = $_GET["page"];

	$con = mysqli_connect(DBhost, DBuser, DBpass, DBname);
	$sql = "select * from board where num=$num";
	$result = mysqli_query($con, $sql);

	$row = mysqli_fetch_array($result);
	$id = $row["id"];
	$name = $row["name"];
	$regist_day = $row["regist_day"];
	$subject = $row["subject"];
	$content = $row["content"];
	$file_name = $row["file_name"];
	$file_type = $row["file_type"];
	$file_copied = $row["file_copied"];
	$hit = $row["hit"];
?>
	<section>
		<div class="board_title">
			<h3>게시판 글쓰기</h3>
			<p>게시판에 글을 남겨 보세요.</p>
		</div>
		<div id="board_view_box">
			<ul class="top_buttons">
				<li><button onclick="location.href='board_form.php'">글쓰기</button></li>
				<li><button onclick="location.href='board_list.php'">목록</button></li>
				<li><button onclick="location.href='board_modify_form.php?num=<?=$num?>&page=<?=$page?>'">수정</button></li>
				<li><button onclick="location.href='board_delete.php?num=<?=$num?>&page=<?=$page?>'">삭제</button></li>
			</ul>
<?php
	
	$content = str_replace(" ", "&nbsp;", $content);
	$content = str_replace("\n", "<br>", $content);

	$new_hit = $hit +1;
	$sql = "update board set hit=$new_hit where num=$num";
	mysqli_query($con, $sql);
?>
			<ul id="board_content">
				<h4>
					게시판 > 내용보기
				</h4>
				<li>
					<span class="col1"><b>제목 :</b> <?=$subject?></span>
					<span class="col1"><?=$regist_day?></span>
				</li>
				<li>
<?php
	if($file_name){
		$real_name = $file_copied;
		$file_path = "./data/".$real_name;
		$file_size = filesize($file_path);

		echo "▷ 첨부파일 : $file_name ($file_size Byte) &nbsp;&nbsp;&nbsp;&nbsp;<a href='download.php?num=$num&real_name=$real_name&file_name=$file_name&file_type=$file_type'>[저장]</a><br><br>";
	}
?>
				<?=$content?>					
				</li>
			</ul>
		</div>
	</section>
	<footer>
		<?php include "../footer.php";?>
	</footer>
</body>
</html>