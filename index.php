<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="Generator" content="Notepad++"/>
	<meta name="Author" content="안진영"/>
	<meta name="Keywords" content="포트폴리오, 안진영 포트폴리오, AJY, AHN JINYOUNG, HTML5, CSS3, jQuery, 프로젝트, Portfolio, Project, 반응형웹, 반응형웹 포트폴리오, 학생포트폴리오, JINYOUNG's portfolio "/>
	<meta name="Description" content="안진영의 포트폴리오 페이지 입니다"/>
	<title>KT</title>
	<script> 
		var tid;
		var cnt = parseInt(5);//초기값(초단위)
		function counter_init() {
			tid = setInterval("counter_run()", 1000);
		}

		function counter_reset() {
			clearInterval(tid);
			cnt = parseInt(60);
			counter_init();
		}

		function counter_run() {
			document.getElementById("counter").innerText = time_format(cnt);
			cnt--;
			if(cnt < 0) {
				clearInterval(tid);
				self.location = "sub06/login_form.php";
			}
		}
		function time_format(s) {
			var nHour=0;
			var nMin=0;
			var nSec=0;
			if(s>0) {
				nMin = parseInt(s/60);
				nSec = s%60;

				if(nMin>60) {
					nHour = parseInt(nMin/60);
					nMin = nMin%60;
				}
			} 
			if(nSec<10) nSec = "0"+nSec;
			if(nMin<10) nMin = "0"+nMin;

			return ""+nHour+":"+nMin+":"+nSec;
		}
	</script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon"/>
	<link rel="icon" href="favicon/favicon.ico" type="image/x-icon"/>
	<link rel="stylesheet" href="css/common.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<script src="js/jquery-1.10.2.min.js"></script>	<!-- 제이쿼리 라이이브러리 연동 -->
	<script src="js/prefixfree.min.js"></script>	
	<script src="js/html5div.js"></script>	<!-- 낮은버전시멘틱태그 -->
	<script src="js/html5shiv.js"></script>	<!-- 낮은버전시멘틱태그 -->
	<script src="js/jquery-ui-1.10.4.custom.min.js"></script>	<!-- UI 플러그인 연동 -->
	<script src="js/jquery.easing.1.3.min.js"></script>
	<script src="js/common.js"></script>
	<script src="js/cookie.js"></script>	<!-- 쿠키 플러그인 연동 몇일동안 열지 않기 -->
	<script src="js/script.js"></script>
	<script src="js/timer.js"></script>		<!-- 타이머 연동 -->
	<script src="js/weather.js"></script>		<!-- 날씨 -->
	<script src="js/DB_springMove_fn.js"></script>	
	<script>
		window.open("popup.html", "", "resizable=no, toolbar=no, width=520, height=600, top=200, left=650")
	</script>
</head>
<body onLoad="ddaycount()">
	<header>
		<?php include "header.php";?>
	</header>
	<section>
		<?php include "main.php";?>
	</section>
	<footer>
		<?php include "footer.php";?>
	</footer>
	<div>
		<?php include "recommdiv.php";?>
	</div>
	<div id="pop_wrap">
		<img src="images/popup.png" width="511" alt="컬리를 가장 쉽고 편하게 이용하는 방법" />
		<div class="pop_btn">
			<label class="close" for="close"> <input type="checkbox" id="close"/>창 닫기</label>
			<label class="oneday" for="oneday" ><input type="checkbox" id="oneday"/>하루동안 창 닫기</label>
		</div>
		<!-- <map name="pop" id="pop">
			<area shape="rect" coords="322,397,359,413" href="창닫기" />
			<area shape="rect" coords="161,396,289,418" href="하루동안 창 닫기" />
		</map> --> 
	</div>
</body>
</html>
<script>
	counter_init();
</script>