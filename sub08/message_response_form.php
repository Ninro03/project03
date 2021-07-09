<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>답변 쪽지</title>
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
	<script>
		function check_input(){
			if(!document.message_form.subject.value)
			{
				alert("제목을 입력하세요!");
				document.message_form.subject.focus();
				return;
			}
			if(!document.message_form.content.value)
			{
				alert("내용을 입력하세요!");
				document.message_form.content.focus();
				return;
			}
			document.message_form.submit();
		}
	</script>
</head>
<body>
	<header>
		<?php include "./header2.php";?>
	</header>
	<section>
		<div class=message_title>
			<h3>답변 쪽지</h3>
			<p>다른 KT고객에게 답변 쪽지를 보내보세요.</p>
		</div>
		<div id="message_response_box">
			<ul class="buttons">
				<li><button onclick="location.href='message_box.php?mode=rv'">수신 쪽지함</button></li>
				<li><button onclick="location.href='message_box.php?mode=send'">송신 쪽지함</button></li>
				<li><button onclick="location.href='message_form.php'">쪽지 보내기</button></li>
				<li><button onclick="location.href='#'">답변 쪽지</button></li>				
			</ul>
<?php
	$num = $_GET["num"];

	$con = mysqli_connect(DBhost, DBuser, DBpass, DBname);
	$sql = "select * from message where num = $num";
	$result = mysqli_query($con, $sql);

	$row = mysqli_fetch_array($result);
	$send_id = $row["send_id"];
	$rv_id = $row["rv_id"];
	$subject = $row["subject"];
	$content = $row["content"];

	$subject = "RE: ".$subject;

	$content = "> ".$content;
	$content = str_replace("\n", "\n>", $content);
	$content = "\n\n\n----------------------------------------------------\n".$content;

	$result2 = mysqli_query($con, "select name from members where id='$send_id'");
	$record = mysqli_fetch_array($result2);
	$send_name = $record["name"];
?>
			<form name="message_form" method="post" action="message_insert.php?send_id=<?=$userid?>">
				<h3 id="write_title">
					답변 쪽지 보내기
				</h3>
				<input type="hidden" name="rv_id" value="<?=$send_id?>">
				<div id="write_msg">
					<ul>
						<li>
							<span class="col1">보내는 사람 : </span>
							<span class="col2"><?=$userid?></span>
						</li>
						<li>
							<span class="col1">수신 아이디 : </span>
							<span class="col2"><?=$send_name?>(<?=$send_id?>)</span>
						</li>
						<li>
							<span class="col1">제목 : </span>
							<span class="col2"><input type="text" name="subject" value="<?=$subject?>"></span>
						</li>
						<li id="text_area">
							<span class="col1">글 내용 : </span>
							<span class="col2">
								<textarea name="content"><?=$content?></textarea>
							</span>
						</li>
					</ul>
					<button type="button" onclick="check_input()">보내기</button>
				</div>
			</form>
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