<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>게시판</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet"> 
	<link rel="shortcut icon" href="../favicon/favicon.ico" type="image/x-icon"/>
	<link rel="icon" href="../favicon/favicon.ico" type="image/x-icon"/>
	<link rel="stylesheet" href="../css/common2.css"/>
	<link rel="stylesheet" href="css/sub04.css"/>
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
	<div id="contentsWrap" class="fl cf">
		<div id="mainContents">
			<div id="content1">
				<div class="coninner">
					<div class="location">
						<span class="first"><a href="../indxt.html" class="home">HOME</a></span>
						<span><a href="sub04.html">게시판</a></span>
						<span>게시판 목록</span>
					</div>
					<div class="hgroup">
						<h3>게시판</h3>
						<p>게시판에 있는 글을 확인하세요.</p>
					</div>
				</div>
			</div><!-- id="content1" -->
			<div id="content2" class="cf">
				<div class="coninner">
					<div class="searchtit">고객님께서 작성하신 <strong>게시글 내용</strong>을 확인해보세요.</div>
					<div class="desc">게시글 내용을 자유롭게 확인 가능합니다.</div>
					<form action="search_result.php" method="get" class="searcharea cf">
						<select name="catgo">
							<option value="subject">제목</option>
							<option value="name">글쓴이</option>
							<option value="content">내용</option>
						</select>
						<span class="idtxt active">
							<input type="text" name="search" required="required" placeholder="검색 내용을 입력해주세요."/>
						</span>
						<button id="evebtn">검색</button>
					</form>
				</div>
			</div><!-- id="content2" -->
			<div id="content3" class="cf">
				<div class="coninner">
					<div class="searchbanner fr">
						<select id="searchsel">
							<option value="All" selected="selected">전체</option>
							<option value="01">공지</option>
							<option value="02">문의</option>
							<option value="03">자유</option>
							<option value="04">기타</option>
						</select>
						<button id="searchbtn" type="submit"><span>검색</span></button>
					</div>
					<div id="board">
						<div class="board_top fl cf">
							<div class="title1 fl">번호</div>
							<div class="title2 fl">제목</div>
							<div class="title3 fl">글쓴이</div>
							<div class="title4 fl">첨부</div>
							<div class="title5 fl">등록일</div>
							<div class="title6 fl">조회</div>
						</div>
						<div class="board_txt cf">
							<ul>
								<?php
	if (isset($_GET["page"]))
		$page = $_GET["page"];
	else
		$page = 1;

	$con = mysqli_connect(DBhost, DBuser, DBpass, DBname);
	$sql = "select * from board order by num desc";
	$result = mysqli_query($con, $sql);
	$total_record = mysqli_num_rows($result); // 전체 글 수

	$scale = 10;

	// 전체 페이지 수($total_page) 계산 
	if ($total_record % $scale == 0)     
		$total_page = floor($total_record/$scale);      
	else
		$total_page = floor($total_record/$scale) + 1; 
 
	// 표시할 페이지($page)에 따라 $start 계산  
	$start = ($page - 1) * $scale;      

	$number = $total_record - $start;

	for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)
	{
		mysqli_data_seek($result, $i);
		// 가져올 레코드로 위치(포인터) 이동
		$row = mysqli_fetch_array($result);
		// 하나의 레코드 가져오기
		$num         = $row["num"];
		$id          = $row["id"];
		$name        = $row["name"];
		$subject     = $row["subject"];
		$regist_day  = $row["regist_day"];
		$hit         = $row["hit"];
		if ($row["file_name"])
			$file_image = "<img src='./images/file.gif'>";
		else
			$file_image = " ";
?>
								<li>
									<span class="col1"><?=$number?></span>
									<span class="col2"><a href="board_view.php?num=<?=$num?>&page=<?=$page?>"><?=$subject?></a></span>
									<span class="col3"><?=$name?></span>
									<span class="col4"><?=$file_image?></span>
									<span class="col5"><?=$regist_day?></span>
									<span class="col6"><?=$hit?></span>
								</li>	
<?php
		$number--;
	}
	mysqli_close($con);
?>
							</ul>
						</div>
						<div class="move_but cf">
							<ul class="buttons cf">
								<li><button onclick="location.href='board_list.php'" class="list">목록</button></li>
								<li>
<?php 
	if($userid) {
?>
									<button onclick="location.href='board_form.php'" class="write">글쓰기</button>
<?php
	} else {
?>
									<a href="javascript:alert('로그인 후 이용해 주세요!')"><button>글쓰기</button></a>
<?php
	}
?>
								</li>
							</ul>
						</div>
						<div class="page_nav cf">
							<ul class="scope cf">
<?php
	if ($total_page>=2 && $page >= 2)	
	{
		$new_page = $page-1;
		echo "<li><a href='board_list.php?page=$new_page' class='pbtn prev'>이전 페이지로 이동</a></li>";
	}		
	else 
		echo "<li>&nbsp;</li>";

	// 게시판 목록 하단에 페이지 링크 번호 출력
	for ($i=1; $i<=$total_page; $i++)
	{
		if ($page == $i)     // 현재 페이지 번호 링크 안함
		{
			echo "<li><b> $i </b></li>";
		}
		else
		{
			echo "<li><a href='board_list.php?page=$i'> $i </a></li>";
		}
	}
	if ($total_page>=2 && $page != $total_page)		
	{
		$new_page = $page+1;	
		echo "<li><a href='board_list.php?page=$new_page' class='pbtn next'>다음 페이지로 이동</a></li>";
	}
	else 
		echo "<li>&nbsp;</li>";
?>
							</ul>
						</div>
					</div>
				</div>
			</div><!-- id="content3" -->
		</div><!-- id="mainContents" -->
	</div><!-- id="contentsWrap" -->
	<footer>
	    <?php include "../footer.php";?>
	</footer>
</body>
</html>