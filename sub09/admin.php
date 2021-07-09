<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="Generator" content="Notepad++"/>
	<meta name="Author" content="안진영"/>
	<meta name="Keywords" content="포트폴리오, 안진영 포트폴리오, AJY, AHN JINYOUNG, HTML5, CSS3, jQuery, 프로젝트, Portfolio, Project, 반응형웹, 반응형웹 포트폴리오, 학생포트폴리오, JINYOUNG's portfolio "/>
	<meta name="Description" content="안진영의 포트폴리오 페이지 입니다"/>
	<title>KT</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet"> 
	<link rel="shortcut icon" href="../favicon/favicon.ico" type="image/x-icon"/>
	<link rel="icon" href="../favicon/favicon.ico" type="image/x-icon"/>
	<link rel="stylesheet" href="css/sub09.css"/>
	<script src="../js/jquery-1.10.2.min.js"></script>	<!-- 제이쿼리 라이이브러리 연동 -->
	<script src="../js/prefixfree.min.js"></script>	
	<script src="../js/html5div.js"></script>	<!-- 낮은버전시멘틱태그 -->
	<script src="../js/html5shiv.js"></script>	<!-- 낮은버전시멘틱태그 -->
	<script src="../js/jquery-ui-1.10.4.custom.min.js"></script>	<!-- UI 플러그인 연동 -->
	<script src="../js/jquery.easing.1.3.min.js"></script>
	<script src="../js/common.js"></script>
	<script src="../js/cookie.js"></script>	<!-- 쿠키 플러그인 연동 몇일동안 열지 않기 -->
	<script src="js/script.js"></script>
	<script src="../js/timer.js"></script>		<!-- 타이머 연동 -->
	<script src="../js/weather.js"></script>		<!-- 날씨 -->
	<script src="../js/DB_springMove_fn.js"></script>		
</head>
<body>
	<header>
		<?php include "header.php";?>
	</header>
	<section>
		<div id="main_wrap">
			<div class="tab" class="cf">
				<ul>
					<li><a href="#member" class="active">회원관리</a></li>
					<li><a href="#board">게시판관리</a></li>
				</ul>
			</div>
			<div id="admin_box">
				<div id="member" class="admin_con">
					<h3 id="member_title">
						관리자 모드 > 회원 관리
					</h3>
					<ul id="member_list">
						<li>
							<span class="col1">번호</span>
							<span class="col2">아이디</span>
							<span class="col3">이름</span>
							<span class="col4">레벨</span>
							<span class="col5">포인트</span>
							<span class="col6">가입일</span>
							<span class="col7">수정</span>
							<span class="col8">삭제</span>
						</li>
<?php
	$con = mysqli_connect(DBhost, DBuser, DBpass, DBname);
	$sql = "select * from members order by num desc";
	$result = mysqli_query($con, $sql);
	$total_record = mysqli_num_rows($result); // 전체 회원 수

	$number = $total_record;

	while($row = mysqli_fetch_array($result))
	{
		$num = $row["num"];
		$id = $row["id"];
		$name = $row["name"];
		$level = $row["level"];
		$point = $row["point"];
		$regist_day = $row["regist_day"];
?>
						<li>
							<form method="post" action="admin_member_update.php?num=<?=$num?>">
								<span class="col1"><?=$number?></span>
								<span class="col2"><?=$id?></span>
								<span class="col3"><?=$name?></span>
								<span class="col4"><input type="text" name="level" value="<?=$level?>"></span>
								<span class="col5"><input type="text" name="point" value="<?=$point?>"></span>
								<span class="col6"><?=$regist_day?></span>
								<span class="col7"><button type="submit">수정</button></span>
								<span class="col8"><button type="button" onclick="location.href='admin_member_delete.php?num=<?=$num?>'">삭제</button></span>
							</form>
						</li>
<?php
		$number--;
	}
?>				
					</ul>
				</div>
				<div id="board" class="admin_con">
					<h3 id="member_title">
						관리자 모드 > 게시판 관리
					</h3>
					<ul id="board_list">
						<li class="title">
							<span class="col1">선택</span>
							<span class="col2">번호</span>
							<span class="col3">이름</span>
							<span class="col4">제목</span>
							<span class="col5">첨부파일명</span>
							<span class="col6">작성일</span>
						</li>
						<form method="post" action="admin_board_delete.php">
<?php
	$sql = "select * from board order by num desc";
	$result = mysqli_query($con, $sql);
	$total_record = mysqli_num_rows($result); // 전체 글의 수

	$number = $total_record;

	while($row = mysqli_fetch_array($result))
	{
		$num = $row["num"];
		$name = $row["name"];
		$subject = $row["subject"];
		$file_name = $row["file_name"];
		$regist_day = $row["regist_day"];
		$regist_day = substr($regist_day, 0, 10)
?>					
							<li>
								<span class="col1"><input type="checkbox" name="item[]" value="<?=$num?>"></span>
								<span class="col2"><?=$number?></span>
								<span class="col3"><?=$name?></span>
								<span class="col4"><?=$subject?></span>
								<span class="col5"><?=$file_name?></span>
								<span class="col6"><?=$regist_day?></span>
							</li>
<?php
		$number--;
	}
	mysqli_close($con);
?>
							<button type="submit">선택된 글 삭제</button>
						</form>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<footer>
		<?php include "footer.php";?>
	</footer>
</body>
</html>