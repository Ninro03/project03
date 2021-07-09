<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>쪽지함</title>
	<link rel="stylesheet" type="text/css" href="./css/message.css">
	<link rel="stylesheet" type="text/css" href="../css/common2.css">
	<link rel="shortcut icon" href="../favicon/favicon.ico" type="image/x-icon"/>
	<link rel="icon" href="../favicon/favicon.ico" type="image/x-icon"/>
	<script src="../js/jquery-1.10.2.min.js"></script>	<!-- 제이쿼리 라이이브러리 연동 -->
	<script src="../js/prefixfree.min.js"></script>	
	<script src="../js/html5div.js"></script>	<!-- 낮은버전시멘틱태그 -->
	<script src="../js/html5shiv.js"></script>	<!-- 낮은버전시멘틱태그 -->
	<script src="../js/jquery-ui-1.10.4.custom.min.js"></script>	<!-- UI 플러그인 연동 -->
	<script src="../js/jquery.easing.1.3.min.js"></script>
	<script src="../js/common2.js"></script>
	<script src="../js/script.js"></script>
	<script src="../js/weather.js"></script>		<!-- 날씨 -->
	<script src="../js/cookie.js"></script>	<!-- 쿠키 플러그인 연동 몇일동안 열지 않기 -->
	<script src="../js/DB_springMove_fn.js"></script>	
</head>
<body>
	<header>
		<?php include "./header2.php";?>
	</header>
	<section>
		<div class=message_title>
			<h3>쪽지함</h3>
			<p>수신,송신 쪽지 내용을 보세요.</p>
		</div>
		<div id="message_box">
			<!-- <div> 필요없음 -->
			<ul class="buttons">
				<li><button onclick="location.href='message_box.php?mode=rv'">수신 쪽지함</button></li>
				<li><button onclick="location.href='message_box.php?mode=send'" >송신 쪽지함</button></li>
				<li><button onclick="location.href='message_form.php'">쪽지 보내기</button></li>
			</ul>
			<ul id="message">
				<h4>
<?php
	if(isset($_GET["page"]))
		$page = $_GET["page"];
	else
		$page = 1;

	$mode = $_GET["mode"];

	if($mode=="send")
		echo "송신 쪽지함 > 목록보기";
	else
		echo "수신 쪽지함 > 목록보기";
?>				
				</h4>
				<li>
					<span class="col1">번호</span>
					<span class="col2">제목</span>
					<span class="col3">
<?php
	if($mode=="send")
		echo "받는이";
	else
		echo "보낸이";
?>					
					</span>
					<span class="col4">등록일</span>
				</li>
<?php
	$con = mysqli_connect(DBhost, DBuser, DBpass, DBname);

	if ($mode=="send")
		$sql = "select * from message where send_id='$userid' order by num desc";
	else
		$sql = "select * from message where rv_id='$userid' order by num desc";

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
      $num    = $row["num"];
      $subject     = $row["subject"];
      $regist_day  = $row["regist_day"];

      if ($mode=="send")
	  		$msg_id = $row["rv_id"];
      else
	  		$msg_id = $row["send_id"];
	  
      $result2 = mysqli_query($con, "select name from members where id='$msg_id'");
      $record = mysqli_fetch_array($result2);
      $msg_name     = $record["name"];	  
?>
				<li>
					<span class="col1"><?=$number?></span>
					<span class="col2"><a href="message_view.php?mode=<?=$mode?>&num=<?=$num?>"><?=$subject?></a></span>
					<span class="col3"><?=$msg_name?>(<?=$msg_id?>)</span>
					<span class="col4"><?=$regist_day?></span>
				</li>	
<?php
	   $number--;
   }
   mysqli_close($con);
?>
			</ul>
			<ul id="page_num"> 	
<?php
	if ($total_page>=2 && $page >= 2)	
	{
		$new_page = $page-1;
		echo "<li><a href='message_box.php?mode=$mode&page=$new_page'>◀ 이전</a> </li>";
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
				echo "<li> <a href='message_box.php?mode=$mode&page=$i'> $i </a> <li>";
			}
   	}
   	
   	if ($total_page>=2 && $page != $total_page)		
   	{
			$new_page = $page+1;	
			echo "<li> <a href='message_box.php?mode=$mode&page=$new_page'>다음 ▶</a> </li>";
		}
		else 
			echo "<li>&nbsp;</li>";
?>		
			</ul> <!-- page -->
		</div> <!-- message_box -->
	</section>
	<footer>
		<?php include "../footer.php";?>
	</footer>
	<div>
		<?php include "../recommdiv.php";?>
	</div>
</body>
</html>