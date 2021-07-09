<?php
	include "define.php";

	session_start();
	if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
	else $userid = "";
	if (isset($_SESSION["username"])) $username = $_SESSION["username"];
	else $username = "";
	if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
	else $userlevel = "";
	if (isset($_SESSION["userpoint"])) $userpoint = $_SESSION["userpoint"];
	else $userpoint = ";"
?>
	<div id="menuWrap" >
		<div id="mainMenu" class="cf">
			<div id="mainLogo">
				<div class="logoinner">
					<h1>
						<a href="./index.php"><img src="images/mainLogo.png" alt="KT" title="KT" class="showBalloon"/></a>
					</h1>
					<div class="utils">
						<div class="quick">
<?php
	if(!$userid) {
?>
				<a href="sub06/login_form.php" title="로그인 하기" class="showBalloon redbox">로그인</a>
				<a href="sub07/member_form.php" title="새창 열림" class="showBalloon">회원가입</a>
<?php
	} else {
		$logged = $username."(".$userid.")님[Level:".$userlevel.", Point:".$userpoint."]";
?>
				<a href="logout.php" title="로그아웃 하기" class="showBalloon redbox">로그아웃</a>
				<a href="index.php" title="새창 열림" class="showBalloon">정보수정</a>
<?php
	}
?>
<?php
	if($userlevel==1) {
?>
				<a href="admin.php">관리자모드</a>
<?php	
	}
?>						</div>
						<div class="kttalk">
							<a href="index.php" title="귀엽지요?" class="showBalloon"><span>케이톡</span></a>
						</div>
						<div class="quickmenu">
							<a href="index.php" title="새창 열림" class="showBalloon">간편납부</a>
							<a href="index.php" title="새창 열림" class="showBalloon">요금조회</a>
							<a href="index.php" title="새창 열림" class="showBalloon">소액결제</a>
							<a href="index.php" title="새창 열림" class="showBalloon">요금제변경</a>
						</div>
						<div id="weather_wrap" class="cf">
							<!-- <div class="date"></div>
							<div class="hour"></div> -->
							<div class="cicon"></div>
							<div class="temp cf">
								<div class="tem1">
									<span>현재</span>
									<div><span class="ctemp"></span></div>
								</div>
								<div class="tem2">
									<span>습도</span>
									<div><span class="chumidity">%</span></div>
								</div>
								<div class="tem3">
									<span>최고</span>
									<div><span class="chightemp"></span></div>
								</div>
								<div class="tem4">
									<span>최저</span>
									<div><span class="clowtemp"></span></div>
								</div>
							</div>
						</div>
					</div>
					<div class="fold">
						<span>플로팅 메뉴 열기</span>
					</div>
				</div>
				<span class="mal cf">
					<span class="fir">자동로그아웃까지</span>
					<span id="counter"></span><span> 남음</span>
					<input type="button" value="연장" onclick="counter_reset()"/>
				</span>
			</div>
			<div id="mainNav" class="cf">
				<ul id="nav" class="fl cf">
					<li><a href="https://direct.kt.com/directMain.do" title="새창 열림" target="_blank" class="showBalloon">다이렉트</a>
						<div class="direct width100 cf fl">
							<ul class="m_width">
								<li class="fl">
									<h3><a href="https://direct.kt.com/directMain.do">5G/LTE 다이렉트</a></h3>
									<dl>
										<dt><a href="https://direct.kt.com/directMain.do">상품 가입</a></dt>
										<dd></dd>
										<dt><a href="https://direct.kt.com/directMain.do">가입내역 조회</a></dt>
										<dd></dd>
										<dt><a href="https://direct.kt.com/directMain.do">이벤트</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="bottom fl">
									<h3><a href="https://direct.kt.com/directMain.do">인터넷/TV</a></h3>
									<dl>
										<dt><a href="https://direct.kt.com/directMain.do">상품 가입</a></dt>
										<dd></dd>
										<dt><a href="https://direct.kt.com/directMain.do">가입사은품(반값초이스)</a></dt>
										<dd></dd>
										<dt><a href="https://direct.kt.com/directMain.do">다이렉트할인</a></dt>
										<dd></dd>
									</dl>
								</li>
							</ul>
						</div>
					</li><!-- onedepth -->
					<li><a href="sub01/sub01.html" title="새창 열림" class="showBalloon">마이페이지</a>
						<div class="mypage width100 cf fl">
							<ul class="m_width">
								<li class="fl">
									<h3><a href="sub01/sub01.html">가입/이용 정보</a></h3>
									<dl>
										<dt><a href="sub01/sub01.html">가입정보</a></dt>
										<dd></dd>
										<dt><a href="sub01/sub01.html">조회/변경</a></dt>
										<dd><a href="sub01/sub01.html">요금할인 재약정</a></dd>
										<dd><a href="sub01/sub01.html">명의변경</a></dd>
										<dd><a href="sub01/sub01.html">일시정지</a></dd>
										<dd><a href="sub01/sub01.html">분실신고/해제</a></dd>
										<dd><a href="sub01/sub01.html">번호변경</a></dd>
										<dd><a href="sub01/sub01.html">홈상품 해지신청</a></dd>
										<dt><a href="sub01/sub01.html">이용량/이용내역</a></dt>
										<dd><a href="sub01/sub01.html">이용량 조회/충전</a></dd>
										<dd><a href="sub01/sub01.html">알 조회/충전</a></dd>
										<dd><a href="sub01/sub01.html">VOD/TV 결제내역</a></dd>
										<dd><a href="sub01/sub01.html">통화내역 조회</a></dd>
									</dl>
								</li>
								<li class="fl">
									<h3><a href="sub01/sub01.html">요금조회/납부</a></h3>
									<dl>
										<dt><a href="sub01/sub01.html">요금조회</a></dt>
										<dd><a href="sub01/sub01.html">요금명세서</a></dd>
										<dd><a href="sub01/sub01.html">모바일 실시간요금</a></dd>
										<dd><a href="sub01/sub01.html">소액결제 내역</a></dd>
										<dd><a href="sub01/sub01.html">상품별 요금</a></dd>
										<dd><a href="sub01/sub01.html">자녀요금</a></dd>
										<dd><a href="sub01/sub01.html">선불요금</a></dd>
										<dt><a href="sub01/sub01.html">요금납부</a></dt>
										<dd><a href="sub01/sub01.html">즉시납부</a></dd>
										<dd><a href="sub01/sub01.html">납부방법 변경</a></dd>
										<dd><a href="sub01/sub01.html">명세서 정보변경</a></dd>
										<dd><a href="sub01/sub01.html">납부확인서</a></dd>
										<dt><a href="sub01/sub01.html">통신비 지원 조회</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="bottom mgr fl">
									<h3><a href="sub01/sub01.html">요금제/부가서비스</a></h3>
									<dl>
										<dt><a href="sub01/sub01.html">부가서비스 신청</a></dt>
										<dd></dd>
										<dt><a href="sub01/sub01.html">부가서비스 조회/변경</a></dt>
										<dd></dd>
										<dt><a href="sub01/sub01.html">요금제변경</a></dt>
										<dd></dd>
										<dt><a href="sub01/sub01.html">단말보험/교체 프로그램</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<h3><a href="sub01/sub01.html">My혜택/쿠폰</a></h3>
									<dl>
										<dt><a href="sub01/sub01.html">My혜택</a></dt>
										<dd></dd>
										<dt><a href="sub01/sub01.html">My쿠폰</a></dt>
										<dd></dd>
									</dl>
								</li>
							</ul>
						</div>
					</li><!-- onedepth -->
					<li><a href="sub02/sub02.html" title="새창 열림"  class="showBalloon">상품서비스</a>
						<div class="productservice width100 cf fl">
							<ul class="m_width">
								<li class="fl">
									<h3><a href="sub02/sub02.html">5G/모바일</a></h3>
									<dl>
										<dt><a href="sub02/sub02.html">5G소개</a></dt>
										<dd></dd>
										<dt><a href="sub02/sub02.html">5G폰</a></dt>
										<dd></dd>
										<dt><a href="sub02/sub02.html">5G서비스</a></dt>
										<dd></dd>
										<dt><a href="sub02/sub02.html">요금제</a></dt>
										<dd></dd>
										<dt><a href="sub02/sub02.html">부가서비스</a></dt>
										<dd></dd>
										<dt><a href="sub02/sub02.html">링투유/벨소리</a></dt>
										<dd><a href="sub02/sub02.html">링투유/벨소리 설정</a></dd>
										<dd><a href="sub02/sub02.html">링투유 인사말</a></dd>
										<dd><a href="sub02/sub02.html">오토체인지(오토링)</a></dd>
										<dd><a href="sub02/sub02.html">로밍링투유</a></dd>
										<dd><a href="sub02/sub02.html">네임링</a></dd>
										<dt><a href="sub02/sub02.html">문자보내기</a></dt>
										<dd><a href="sub02/sub02.html">문자FAQ</a></dd>
										<dt><a href="sub02/sub02.html">추천앱</a></dt>
										<dd><a href="sub02/sub02.html">지니뮤직</a></dd>
										<dd><a href="sub02/sub02.html">원내비</a></dd>
										<dd><a href="sub02/sub02.html">PASS</a></dd>
										<dt><a href="sub02/sub02.html">내게 맞는 요금제 찾기</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<h3><a href="sub02/sub02.html">인터넷</a></h3>
									<dl>
										<dt><a href="sub02/sub02.html">요금제</a></dt>
										<dd></dd>    
										<dt><a href="sub02/sub02.html">부가서비스</a></dt>
										<dd></dd>    
										<dt><a href="sub02/sub02.html">10GiGA 소개</a></dt>
										<dd><a href="sub02/sub02.html">서비스 안내</a></dd>
										<dd><a href="sub02/sub02.html">10GiGA 체험존</a></dd>
									</dl>
								</li>
								<li class="mgr fl">
									<h3><a href="sub02/sub02.html">TV</a></h3>
									<dl>
										<dt><a href="sub02/sub02.html">olleh tv 소개</a></dt>
										<dd></dd>
										<dt><a href="sub02/sub02.html">키즈랜드</a></dt>
										<dd></dd>
										<dt><a href="sub02/sub02.html">요금제</a></dt>
										<dd></dd>
										<dt><a href="sub02/sub02.html">부가서비스</a></dt>
										<dd></dd>
										<dt><a href="sub02/sub02.html">콘텐츠안내</a></dt>
										<dd><a href="sub02/sub02.html">채널 편성표</a></dd>
										<dd><a href="sub02/sub02.html">VOD</a></dd>
										<dt><a href="sub02/sub02.html">이벤트/공지</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<h3><a href="sub02/sub02.html">AI</a></h3>
									<dl>
										<dt><a href="sub02/sub02.html">기가지니</a></dt>
										<dd><a href="sub02/sub02.html">기가지니</a></dd>
										<dd><a href="sub02/sub02.html">기가지니 LTE</a></dd>
										<dd><a href="sub02/sub02.html">기가지니 buddy</a></dd>
										<dd><a href="sub02/sub02.html">기가지니 Table TV</a></dd>
										<dd><a href="sub02/sub02.html">기가지니 mini</a></dd>
										<dd><a href="sub02/sub02.html">기가지니 홈loT</a></dd>
										<dt><a href="sub02/sub02.html">솔루션</a></dt>
										<dd></dd>
										<dt><a href="sub02/sub02.html">디벨로퍼</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="mgrz fl">
									<h3><a href="sub02/sub02.html">결합상품</a></h3>
									<dl>
										<dt><a href="sub02/sub02.html">유무선 결합</a></dt>
										<dd></dd>
										<dt><a href="sub02/sub02.html">무선결합</a></dt>
										<dd></dd>
										<dt><a href="sub02/sub02.html">유선결합</a></dt>
										<dd></dd>
										<dt><a href="sub02/sub02.html">프리미엄 신혼결합</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="mgt16 bottom fl cb">
									<h3><a href="sub02/sub02.html">로밍</a></h3>
									<dl>
										<dt><a href="sub02/sub02.html">한눈에보기</a></dt>
										<dd></dd>
										<dt><a href="sub02/sub02.html">국가별 로밍 안내</a></dt>
										<dd></dd>
										<dt><a href="sub02/sub02.html">로밍 상품 정보</a></dt>
										<dd><a href="sub02/sub02.html">데이터</a></dd>
										<dd><a href="sub02/sub02.html">음성</a></dd>
										<dd><a href="sub02/sub02.html">로밍에그</a></dd>
										<dd><a href="sub02/sub02.html">편리한 부가 기능</a></dd>
										<dt><a href="sub02/sub02.html">로밍 이용 꿀팁</a></dt>
										<dd></dd>
										<dt><a href="sub02/sub02.html">로밍 고객센터</a></dt>
										<dd><a href="sub02/sub02.html">센터별 이용안내</a></dd>
										<dd><a href="sub02/sub02.html">무상대여 서비스</a></dd>
									</dl>
								</li>
								<li class="mgt16 fl">
									<h3><a href="sub02/sub02.html">기가 loT</a></h3>
									<dl>
										<dt><a href="sub02/sub02.html">스마트홈</a></dt>
										<dd></dd>    
										<dt><a href="sub02/sub02.html">스마트헬스</a></dt>
										<dd></dd>    
										<dt><a href="sub02/sub02.html">스마트가전</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="mgt16 fl">
									<h3><a href="sub02/sub02.html">전화</a></h3>
									<dl>
										<dt><a href="sub02/sub02.html">집전화</a></dt>
										<dd></dd>
										<dt><a href="sub02/sub02.html">인터넷전화</a></dt>
										<dd></dd>
										<dt><a href="sub02/sub02.html">추천 부가서비스</a></dt>
										<dd></dd>
										<dt><a href="sub02/sub02.html">카드/콜렉트콜/전보</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="mgt16 fl">
									<h3><a href="sub02/sub02.html">국제전화</a></h3>
									<dl>
										<dt><a href="sub02/sub02.html">국제전화 이용방법</a></dt>
										<dd></dd>    
										<dt><a href="sub02/sub02.html">요금제</a></dt>
										<dd></dd>    
										<dt><a href="sub02/sub02.html">부가서비스</a></dt>
										<dd></dd>    
										<dt><a href="sub02/sub02.html">내게 맞는 요금제 찾기</a></dt>
										<dd></dd>    
									</dl>
								</li>
								<li class="mgt16 mgrz fl">
									<h3><a href="sub02/sub02.html">소상공인추천상품</a></h3>
									<dl>
										<dt><a href="sub02/sub02.html">소상공인필수</a></dt>
										<dd><a href="sub02/sub02.html">우리가게tv게시판</a></dd>
										<dd><a href="sub02/sub02.html">우리가게tv광고</a></dd>
										<dd><a href="sub02/sub02.html">링고비즈</a></dd>
										<dd><a href="sub02/sub02.html">발신정보알리미 오피스형</a></dd>
										<dt><a href="sub02/sub02.html">소상공인결합</a></dt>
										<dd><a href="sub02/sub02.html">사장님 성공팩</a></dd>
										<dd><a href="sub02/sub02.html">GiGA Wi 싱글 eyes</a></dd>
										<dt><a href="sub02/sub02.html">소상공인혜택/반값</a></dt>
										<dd><a href="sub02/sub02.html">삼성가전특가제공</a></dd>
										<dd><a href="sub02/sub02.html">공기청정기/정수기렌탈</a></dd>
										<dd><a href="sub02/sub02.html">카드결제기/POS/키오스크</a></dd>
										<dd><a href="sub02/sub02.html">KTX 세모장부</a></dd>
									</dl>
								</li>
							</ul>
						</div>
					</li><!-- onedepth -->
					<li><a href="sub03/sub03.html" title="새창 열림"  class="showBalloon">멤버십/혜택</a>
						<div class="membership width100 cf fl">
							<div class="m_width">
								<div class="memberBox fl">
									<h2><img src="images/memberbox_size.png" alt="멤버십 혜택"/>멤버십 혜택</h2>
									<ul class="mbbanefit">
										<li class="fl">
											<h3><a href="sub03/sub03.html">멤버십 안내</a></h3>
											<dl>
												<dt><a href="sub03/sub03.html">My 멤버십</a></dt>
												<dd></dd>
												<dt><a href="sub03/sub03.html">멤버십 가입</a></dt>
												<dd></dd>
												<dt><a href="sub03/sub03.html">멤버십 등급</a></dt>
												<dd></dd>
												<dt><a href="sub03/sub03.html">FAQ</a></dt>
												<dd></dd>
											</dl>
										</li>
										<li class="fl">
											<h3><a href="sub03/sub03.html">멤버십 할인</a></h3>
											<dl>
												<dt><a href="sub03/sub03.html">더블할인</a></dt>
												<dd></dd>
												<dt><a href="sub03/sub03.html">5Good</a></dt>
												<dd></dd>
												<dt><a href="sub03/sub03.html">제휴 브랜드</a></dt>
												<dd></dd>
												<dt><a href="sub03/sub03.html">통신미디어</a></dt>
												<dd></dd>
											</dl>
										</li>
										<li class="mgrz fl">
											<h3><a href="sub03/sub03.html">VIP 멤버십</a></h3>
											<dl>
												<dt><a href="sub03/sub03.html">VVIP 초이스</a></dt>
												<dd></dd>
												<dt><a href="sub03/sub03.html">VIP 초이스</a></dt>
												<dd></dd>
											</dl>
										</li>
										<li class="mgt12 fl">
											<h3><a href="sub03/sub03.html">영화/공연</a></h3>
											<dl>
												<dt><a href="sub03/sub03.html">영화예매</a></dt>
												<dd><a href="sub03/sub03.html">영화메인</a></dd>
												<dd><a href="sub03/sub03.html">영화예매</a></dd>
												<dd><a href="sub03/sub03.html">예매내역</a></dd>
												<dd><a href="sub03/sub03.html">혜택/이용안내</a></dd>
												<dd><a href="sub03/sub03.html">고객센터</a></dd>
												<dt><a href="sub03/sub03.html">공연예매</a></dt>
												<dd><a href="sub03/sub03.html">공연예매 메인</a></dd>											
												<dd><a href="sub03/sub03.html">오늘의 할인</a></dd>											
												<dd><a href="sub03/sub03.html">공연예매</a></dd>											
												<dd><a href="sub03/sub03.html">VIP 공연 무료초대</a></dd>											
												<dd><a href="sub03/sub03.html">MY컬쳐/안내</a></dd>											
											</dl>
										</li>
										<li class="mgt12 fl">
											<h3><a href="sub03/sub03.html">더보기</a></h3>
											<dl>
												<dt><a href="sub03/sub03.html">비즈멤버십</a></dt>
												<dd></dd>    
												<dt><a href="sub03/sub03.html">(구)멤버십/마일리지</a></dt>
												<dd></dd>
											</dl>
										</li>
									</ul>
								</div>
								<div class="specialBox fl">
									<h2><img src="images/specialbox_size.png" alt="스페셜 혜택"/>스페셜 혜택</h2>
									<ul class="specialbanefit">
										<li class="mgr40 fl">
											<h3><a href="sub03/sub03.html">고객 혜택</a></h3>
											<dl>
												<dt><a href="sub03/sub03.html">홈코노미 캠페인</a></dt>
												<dd></dd>
												<dt><a href="sub03/sub03.html">장기이용 혜택</a></dt>
												<dd><a href="sub03/sub03.html">한눈에 보기</a></dd>
												<dd><a href="sub03/sub03.html">모바일 장기 혜택</a></dd>
												<dd><a href="sub03/sub03.html">인터넷 장기 혜택</a></dd>
												<dd><a href="sub03/sub03.html">TV 장기 혜택</a></dd>
												<dd><a href="sub03/sub03.html">멤버십 장기 혜택</a></dd>
												<dt><a href="sub03/sub03.html">데이터 혜택</a></dt>
												<dd><a href="sub03/sub03.html">Y박스</a></dd>
												<dd><a href="sub03/sub03.html">패밀리박스</a></dd>
												<dd><a href="sub03/sub03.html">데이터룰렛</a></dd>
												<dd><a href="sub03/sub03.html">데이터밀당</a></dd>
												<dd><a href="sub03/sub03.html">KT 기프트박스</a></dd>
												<dt><a href="sub03/sub03.html">인터넷할인 혜택</a></dt>
												<dd></dd>
												<dt><a href="sub03/sub03.html">가족 폰 이어쓰기</a></dt>
												<dd></dd>
												<dt><a href="sub03/sub03.html">슈퍼체인지</a></dt>											
												<dd><a href="sub03/sub03.html">갤럭시 S21 슈퍼체인지</a></dd>
												<dd><a href="sub03/sub03.html">자급제폰 점프업</a></dd>
												<dd><a href="sub03/sub03.html">체인지업 점프(점프업)</a></dd>
												<dt><a href="sub03/sub03.html">복지할인 혜택</a></dt>
												<dd></dd>
												<dt><a href="sub03/sub03.html">people Technology</a></dt>											
												<dd><a href="sub03/sub03.html">배터리 절감기술</a></dd>											
												<dd><a href="sub03/sub03.html">GiGA WiFi</a></dd>											
												</dl>
										</li>
										<li class="mgrz fl">
											<h3><a href="sub03/sub03.html">해외여행 혜택</a></h3>
											<dl>
												<dt><a href="sub03/sub03.html">한눈에 보기</a></dt>
												<dd></dd>    
												<dt><a href="sub03/sub03.html">무료/경품</a></dt>
												<dd></dd>    
												<dt><a href="sub03/sub03.html">할인/캐시백</a></dt>
												<dd></dd>
											</dl>
										</li>
										<li class="mgt16 bottom fl">
											<h3><a href="sub03/sub03.html">제휴 혜택</a></h3>
											<dl>
												<dt><a href="sub03/sub03.html">제휴 카드</a></dt>
												<dd></dd>
												<dt><a href="sub03/sub03.html">포인트 혜택</a></dt>
												<dd></dd>
												<dt><a href="sub03/sub03.html">기타 혜택</a></dt>
												<dd></dd>
											</dl>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</li><!-- onedepth -->
					<li><a href="sub04/board_list.php" title="새창 열림"  class="showBalloon">게시판</a>
						<div class="event width100 cf fl">
							<ul class="m_width">
								<li class="fl">
									<h3><a href="sub04/board_list.php">진행중인 이벤트</a></h3>
								</li>
								<li class="fl">
									<h3><a href="sub04/board_list.php">LTE데이터 룰렛</a></h3>
								</li>
								<li class="fl">
									<h3><a href="sub04/board_list.php">당첨자 발표</a></h3>
								</li>
								<li class="bottom fl">
									<h3><a href="sub04/board_list.php">지난 이벤트</a></h3>
								</li>
							</ul>
						</div>
					</li><!-- onedepth -->
					<li><a href="sub05/sub05.html" title="새창 열림"  class="showBalloon">고객지원</a>
						<div class="custsupport width100 cf fl">
							<ul class="m_width">
								<li class="fl">
									<h3><a href="sub05/sub05.html">가까운 매장찾기</a></h3>
									<dl>
										<dt><a href="sub05/sub05.html">매장찾기</a></dt>
										<dd></dd>    
										<dt><a href="sub05/sub05.html">고객센터안내</a></dt>
										<dd></dd>    
										<dt><a href="sub05/sub05.html">제조사별 A/S센터 안내</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<h3><a href="sub05/sub05.html">문의하기</a></h3>
									<dl>
										<dt><a href="sub05/sub05.html">자주하는 질문</a></dt>
										<dd></dd>
										<dt><a href="sub05/sub05.html">이메일 상담</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="bottom fl">
									<h3><a href="sub05/sub05.html">품질확인 및 A/S신청하기</a></h3>
									<dl>
										<dt><a href="sub05/sub05.html">인터넷 속도측정</a></dt>
										<dd></dd>
										<dt><a href="sub05/sub05.html">고장진단(기가케어)</a></dt>
										<dd></dd>
										<dt><a href="sub05/sub05.html">홈상품 A/S신청 및 변경</a></dt>
										<dd></dd>
										<dt><a href="sub05/sub05.html">기가인터넷 가능지역 찾기</a></dt>
										<dd></dd>
										<dt><a href="sub05/sub05.html">셀프개통</a></dt>
										<dd></dd>
										<dt><a href="sub05/sub05.html">서비스 커버리지</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="fl">
									<h3><a href="sub05/sub05.html">이용안내 및 가이드</a></h3>
									<dl>
										<dt><a href="sub05/sub05.html">서비스 안내</a></dt>
										<dd></dd>
										<dt><a href="sub05/sub05.html">WiFi 이용안내</a></dt>
										<dd></dd>
										<dt><a href="sub05/sub05.html">신청서/자료실</a></dt>
										<dd><a href="sub05/sub05.html">신청서 다운로드</a></dd>
										<dd><a href="sub05/sub05.html">사용설명서 자료실</a></dd>
										<dd><a href="sub05/sub05.html">접속설치 프로그램</a></dd>
										<dt><a href="sub05/sub05.html">장애인 전용서비스</a></dt>
										<dd><a href="sub05/sub05.html">장애인상품 가입안내</a></dd>
										<dd><a href="sub05/sub05.html">장애인용 서비스 이용안내</a></dd>
										<dd><a href="sub05/sub05.html">웹 접근성 도움말</a></dd>
										<dt><a href="sub05/sub05.html">이용자피해예방 가이드</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="mgrz fl">
									<h3><a href="sub05/sub05.html">소식/공지</a></h3>
									<dl>
										<dt><a href="sub05/sub05.html">공지사항</a></dt>
										<dd></dd>    
										<dt><a href="sub05/sub05.html">통신서비스 중단/작업 공지</a></dt>
										<dd></dd>    
										<dt><a href="sub05/sub05.html">olleh폰안심플랜 환급</a></dt>
										<dd></dd>
									</dl>
								</li>
							</ul>
						</div>
					</li><!-- onedepth -->
					<li><a href="https://shop.kt.com/main.do" title="새창 열림" target="_blank" class="showBalloon">Shop</a>
						<div class="direct width100 cf fl">
							<ul class="m_width">
								<li class="fl">
									<h3><a href="https://shop.kt.com/main.do">다이렉트</a></h3>
									<dl>
										<dt><a href="https://shop.kt.com/main.do">5G/LTE 다이렉트</a></dt>
										<dd><a href="https://shop.kt.com/main.do">상품 가입</a></dd>
										<dd><a href="https://shop.kt.com/main.do">가입내역 조회</a></dd>
										<dd><a href="https://shop.kt.com/main.do">이벤트</a></dd>
									</dl>
								</li>
								<li class="fl">
									<h3><a href="https://shop.kt.com/main.do">핸드폰 구매</a></h3>
									<dl>
										<dt><a href="https://shop.kt.com/main.do">1분주문/1시간배송</a></dt>
										<dd></dd>
										<dt><a href="https://shop.kt.com/main.do">핸드폰</a></dt>
										<dd><a href="https://shop.kt.com/main.do">핸드폰 전체보기</a></dd>
										<dd><a href="https://shop.kt.com/main.do">5G폰</a></dd>
										<dd><a href="https://shop.kt.com/main.do">태블릿</a></dd>
										<dd><a href="https://shop.kt.com/main.do">워치</a></dd>
										<dd><a href="https://shop.kt.com/main.do">에그(휴대용 와이파이)</a></dd>
										<dd><a href="https://shop.kt.com/main.do">스마트 기기</a></dd>
										<dd><a href="https://shop.kt.com/main.do">자급제폰,워치/유심</a></dd>
										<dd><a href="https://shop.kt.com/main.do">선불유심 구매/충전</a></dd>
										<dd><a href="https://shop.kt.com/main.do">중고폰 팔기</a></dd>
										<dt><a href="https://shop.kt.com/main.do">슈퍼 결합 혜택</a></dt>
										<dd><a href="https://shop.kt.com/main.do">핸드폰+인터넷+tv</a></dd>
										<dd><a href="https://shop.kt.com/main.do">핸드폰+인터넷</a></dd>
										<dt><a href="https://shop.kt.com/main.do">지원금/Special 대리점</a></dt>
										<dd><a href="https://shop.kt.com/main.do">모델별 공시지원금</a></dd>
										<dd><a href="https://shop.kt.com/main.do">Special 대리점</a></dd>
									</dl>
								</li>
								<li class="fl">
									<h3><a href="https://shop.kt.com/main.do">인터넷/tv 가입</a></h3>
									<dl>
										<dt><a href="https://shop.kt.com/main.do">가입상품</a></dt>
										<dd><a href="https://shop.kt.com/main.do">인터넷+tv</a></dd>
										<dd><a href="https://shop.kt.com/main.do">인터넷</a></dd>
										<dd><a href="https://shop.kt.com/main.do">olleh tv</a></dd>
										<dd><a href="https://shop.kt.com/main.do">전화</a></dd>
										<dd><a href="https://shop.kt.com/main.do">WiFi(공유기)</a></dd>
										<dd><a href="https://shop.kt.com/main.do">다이렉트 할인</a></dd>
										<dt><a href="https://shop.kt.com/main.do">가입 사은품(반값초이스)</a></dt>
										<dd><a href="https://shop.kt.com/main.do">전체보기</a></dd>
										<dd><a href="https://shop.kt.com/main.do">영상가전</a></dd>
										<dd><a href="https://shop.kt.com/main.do">PC/노트북/테블릿</a></dd>
										<dd><a href="https://shop.kt.com/main.do">주방가전</a></dd>
										<dd><a href="https://shop.kt.com/main.do">생활가전/기타</a></dd>
										<dd><a href="https://shop.kt.com/main.do">패키지</a></dd>
										<dd><a href="https://shop.kt.com/main.do">헬스케어</a></dd>
										<dd><a href="https://shop.kt.com/main.do">상품권</a></dd>
										<dt><a href="https://shop.kt.com/main.do">슈퍼 결합 혜택</a></dt>
										<dd><a href="https://shop.kt.com/main.do">인터넷+tv+핸드폰</a></dd>
										<dd><a href="https://shop.kt.com/main.do">인터넷+핸드폰</a></dd>
										<dt><a href="https://shop.kt.com/main.do">기가지니</a></dt>
										<dd><a href="https://shop.kt.com/main.do">기가지니 2</a></dd>
										<dd><a href="https://shop.kt.com/main.do">기가지니 Table TV2</a></dd>
										<dd><a href="https://shop.kt.com/main.do">기가지니 LTE</a></dd>
										<dd><a href="https://shop.kt.com/main.do">기가지니 미니</a></dd>
										<dt><a href="https://shop.kt.com/main.do">CCTV</a></dt>
										<dd><a href="https://shop.kt.com/main.do">GiGAeyes</a></dd>
										<dt><a href="https://shop.kt.com/main.do">소상공인 전용상품</a></dt>
										<dd><a href="https://shop.kt.com/main.do">소상공인 필수가전 사은품</a></dd>										
										<dd><a href="https://shop.kt.com/main.do">우리가게tv 게시판</a></dd>										
										<dd><a href="https://shop.kt.com/main.do">소호성공팩</a></dd>										
									</dl>
								</li>
								<li class="fl">
									<h3><a href="https://shop.kt.com/main.do">가전/렌탈</a></h3>
									<dl>
										<dt><a href="https://shop.kt.com/main.do">이벤트/테마</a></dt>
										<dd></dd>
										<dt><a href="https://shop.kt.com/main.do">브랜드</a></dt>
										<dd><a href="https://shop.kt.com/main.do">삼성</a></dd>
										<dd><a href="https://shop.kt.com/main.do">LG</a></dd>
										<dd><a href="https://shop.kt.com/main.do">애플</a></dd>
										<dd><a href="https://shop.kt.com/main.do">다이슨</a></dd>
										<dd><a href="https://shop.kt.com/main.do">SK매직</a></dd>
										<dd><a href="https://shop.kt.com/main.do">인켈</a></dd>
										<dd><a href="https://shop.kt.com/main.do">기타</a></dd>
										<dt><a href="https://shop.kt.com/main.do">카테고리</a></dt>
										<dd><a href="https://shop.kt.com/main.do">영상가전</a></dd>
										<dd><a href="https://shop.kt.com/main.do">PC/노트북</a></dd>
										<dd><a href="https://shop.kt.com/main.do">테블릿</a></dd>
										<dd><a href="https://shop.kt.com/main.do">음향가전</a></dd>
										<dd><a href="https://shop.kt.com/main.do">주방가전</a></dd>
										<dd><a href="https://shop.kt.com/main.do">이미용가전</a></dd>
										<dd><a href="https://shop.kt.com/main.do">생활가전</a></dd>
									</dl>
								</li>
								<li class="mgrz fl">
									<h3><a href="https://shop.kt.com/main.do">5시 핫딜</a></h3>
									<dl>
										<dt><a href="https://shop.kt.com/main.do">화요일 핫딜</a></dt>
										<dd></dd>
										<dt><a href="https://shop.kt.com/main.do">수요일 콜라보딜</a></dt>
										<dd></dd>
										<dt><a href="https://shop.kt.com/main.do">목요일 푸드딜</a></dt>
										<dd></dd>
										<dt><a href="https://shop.kt.com/main.do">0원 특가</a></dt>
										<dd></dd>
										<dt><a href="https://shop.kt.com/main.do">통큰 할인 특가</a></dt>
										<dd></dd>
										<dt><a href="https://shop.kt.com/main.do">핫딜 당첨자 발표</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="mgt16 fl">
									<h3><a href="https://shop.kt.com/main.do">액세서리</a></h3>
									<dl>
										<dt><a href="https://shop.kt.com/main.do">스마트 디바이스</a></dt>
										<dd><a href="https://shop.kt.com/main.do">스마트워치</a></dd>
										<dd><a href="https://shop.kt.com/main.do">VR/360카메라</a></dd>
										<dd><a href="https://shop.kt.com/main.do">기가지니/AI</a></dd>
										<dd><a href="https://shop.kt.com/main.do">loT 기기</a></dd>
										<dd><a href="https://shop.kt.com/main.do">기타</a></dd>
										<dt><a href="https://shop.kt.com/main.do">사운드</a></dt>
										<dd><a href="https://shop.kt.com/main.do">스피커</a></dd>
										<dd><a href="https://shop.kt.com/main.do">헤드폰</a></dd>
										<dd><a href="https://shop.kt.com/main.do">이어폰</a></dd>
										<dd><a href="https://shop.kt.com/main.do">기타</a></dd>
										<dt><a href="https://shop.kt.com/main.do">브랜드관</a></dt>
										<dd><a href="https://shop.kt.com/main.do">삼성</a></dd>
										<dd><a href="https://shop.kt.com/main.do">애플</a></dd>
										<dd><a href="https://shop.kt.com/main.do">벨킨</a></dd>
										<dd><a href="https://shop.kt.com/main.do">애플스토어 입점브랜드</a></dd>
										<dd><a href="https://shop.kt.com/main.do">기타</a></dd>
										<dt><a href="https://shop.kt.com/main.do">디지털 가전</a></dt>
										<dd><a href="https://shop.kt.com/main.do">태블릿</a></dd>
										<dd><a href="https://shop.kt.com/main.do">노트북</a></dd>
										<dd><a href="https://shop.kt.com/main.do">가전제품</a></dd>
										<dd><a href="https://shop.kt.com/main.do">주변기기</a></dd>
										<dd><a href="https://shop.kt.com/main.do">기타</a></dd>
										<dt><a href="https://shop.kt.com/main.do">액세서리</a></dt>
										<dd><a href="https://shop.kt.com/main.do">케이스</a></dd>
										<dd><a href="https://shop.kt.com/main.do">케이블/충전기기</a></dd>
										<dd><a href="https://shop.kt.com/main.do">거치대/저장장치</a></dd>
										<dd><a href="https://shop.kt.com/main.do">강화유리</a></dd>
										<dd><a href="https://shop.kt.com/main.do">필름</a></dd>
										<dt><a href="https://shop.kt.com/main.do">베스트30</a></dt>
										<dd></dd>
										<dt><a href="https://shop.kt.com/main.do">KT Partners</a></dt>
										<dd></dd>
										<dt><a href="https://shop.kt.com/main.do">마감임박 타임세일</a></dt>
										<dd></dd>
										<dt><a href="https://shop.kt.com/main.do">기프티쇼</a></dt>
										<dd></dd>
										<dt><a href="https://shop.kt.com/main.do">땡스딜</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="mgt16 fl">
									<h3><a href="https://shop.kt.com/main.do">기획전</a></h3>
									<dl>
										<dt><a href="https://shop.kt.com/main.do">통신상품</a></dt>
										<dd></dd>
										<dt><a href="https://shop.kt.com/main.do">액세사리</a></dt>
										<dd></dd>
										<dt><a href="https://shop.kt.com/main.do">당첨자 발표</a></dt>
										<dd></dd>
									</dl>
								</li>
								<li class="mgt16 bottom fl">
									<h3><a href="https://shop.kt.com/main.do">마이샵</a></h3>
									<dl>
										<dt><a href="https://shop.kt.com/main.do">주문내역</a></dt>
										<dd></dd>
										<dt><a href="https://shop.kt.com/main.do">장바구니</a></dt>
										<dd></dd>
										<dt><a href="https://shop.kt.com/main.do">관심상품</a></dt>
										<dd></dd>
										<dt><a href="https://shop.kt.com/main.do">최근 본 상품</a></dt>
										<dd></dd>
										<dt><a href="https://shop.kt.com/main.do">상담내역</a></dt>
										<dd></dd>
										<dt><a href="https://shop.kt.com/main.do">포인트/쿠폰</a></dt>
										<dd></dd>
										<dt><a href="https://shop.kt.com/main.do">구매후기</a></dt>
										<dd></dd>
									</dl>
								</li>
							</ul>
						</div>
					</li><!-- onedepth -->
					<li class="search"><a href="#"><img src="images/search_size.png" alt=""/></a></li>
					<li class="allmenu"><a href="#"><img src="images/all_menu_size.png" alt=""/></a></li>
				</ul><!-- id="nav" -->
				<ul id="mainGnb" class="fl">
					<li class="udl"><a href="#">개인</a></li>
					<li><a href="#">기업</a></li>
					<li class="wd"><a href="#">소상공인</a></li>
					<li class="wd"><a href="#">회사소개</a></li>
				</ul><!-- <div id="mainGnb"> -->
			</div><!-- id="mainNav" -->
		</div><!-- id="mainMenu" -->
	</div><!-- id="menuWrap" -->