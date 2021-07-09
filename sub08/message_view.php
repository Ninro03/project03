<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>쪽지함</title>
	<link rel="stylesheet" type="text/css" href="./css/common.css">
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
<?php
	$mode = $_GET["mode"];
	$num = $_GET["num"];                                                                                                                                                                                                                    
	$con = mysqli_connect(DBhost, DBuser, DBpass, DBname);
	$sql = "select * from message where num = $num";
	$result = mysqli_query($con, $sql);

	$row = mysqli_fetch_array($result);
	$send_id = $row["send_id"];
	$rv_id = $row["rv_id"];
	$regist_day = $row["regist_day"];
	$subject = $row["subject"];
	$content = $row["content"];

?>
	<section>
		<div class=message_title>
			<h3>쪽지함 > 내용보기</h3>
			<p>수신,송신 쪽지 내용을 보세요.</p>
		</div>
		<div id="message_view_box">
			<ul class="buttons">
				<li><button onclick="location.href='message_box.php?mode=rv'">수신 쪽지함</button></li>
				<li><button onclick="location.href='message_box.php?mode=send'">송신 쪽지함</button></li>
				<li><button onclick="location.href='message_response_form.php?num=<?=$num?>'">답변 쪽지</button></li>
				<li><button onclick="location.href='message_delete.php?num=<?=$num?>&mode=<?=$mode?>>'">삭제</button></li>
			</ul>
			<ul id="view_content">
				<h4 class="title">
<?php
	$content = str_replace(" ", "&nbsp;", "$content");
	$content = str_replace("\n", "<br>", "$content");

	if($mode=="send")
		$result2 = mysqli_query($con, "select name from members where id='$rv_id'");
	else
		$result2 = mysqli_query($con, "select name from members where id='$send_id'");

	$record = mysqli_fetch_array($result2);
	$msg_name = $record["name"];

	if($mode=="send")
		echo "송신 쪽지함 > 내용보기";
	else
		echo "수신 쪽지함 > 내용보기";
?>				
			</h4>
				<li>
					<span class="col1"><b>제목 :</b> <?=$subject?></span>
					<span class="col2"><?=$msg_name?> | <?=$regist_day?></span>
				</li>
				<li>
					<?=$content?>
				</li>
			</ul>
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