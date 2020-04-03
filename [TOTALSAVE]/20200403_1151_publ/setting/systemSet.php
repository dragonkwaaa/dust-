<Doctype html>
<html lagn="ko">
<?php include $_SERVER['DOCUMENT_ROOT'] .  '/dust/common/pages/head.php';?> 
<body>
<div class="container">
	<header></header>
	<div class="contents">
		<!-- :: 상단 메뉴, 뒤로가기버튼, 햄버거 버튼 등 파트 open -->
		<section class="topMenuSection">
    	    <a href="/dust/" class="prevBtn"></a>
    	    <span class="titleText">설정</span>
		</section>
		<!-- :: 상단 메뉴, 뒤로가기버튼, 햄버거 버튼 등 파트 close -->
		<section class="tabSection">
			<!-- :: 설정 상단 탭 파트  open  -->
			<div class="layerGroup groupSort1">
				<a href="javascript:void(0);" class="activated">시스템 설정</a>
				<a href="/dust/setting/record">기록</a>
			</div>
			<!-- :: 설정 상단 탭 파트  close  -->
		</section> 
		<!-- :: 인풋 정보 확인 파트  open -->
    	<section class="settingSection">
			<div class="infoBox">
				<div class="title">
					사업장
				</div>
				<input readonly value="(주)에이디치히얌">
			</div>
			<div class="infoBox">
				<div class="title">
					장치명
				</div>
				<input readonly value="7inch filter">
			</div>
			<div class="infoBox">
				<div class="title">
					담당자 연락처
				</div>
				<input readonly value="02-4489-4489">
			</div>
		</section>
		<!-- :: 인풋 정보 확인 파트  close -->
	</div>
</div>
</body>
</html>