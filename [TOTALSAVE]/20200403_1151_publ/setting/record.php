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
				<a href="/dust/setting/systemSet">시스템 설정</a>
				<a href="javascript:void(0);" class="activated">기록</a>
			</div>
			<div class="layerGroup groupSort2">
				<a href="javascript:void(0);" class="activated">시스템 기록</a>
				<a href="javascript:void(0);">통신 기록</a>
			</div>
			<!-- :: 설정 상단 탭 파트  close  -->
		</section> 
    	<section class="listSection recordSect">
			<!-- :: 기록 리스트 파트 open  -->
			<ul class="listGroup">
				<li>
					<div class="recordTime">2019-10-15 10:13</div>
    	        	<div class="recordInfo">시스템이 종료되었습니다.</div>
				</li>
				<li>
					<div class="recordTime">2019-10-15 10:13</div>
    	      	  	<div class="recordInfo">시스템이 종료되었습니다.</div>
				</li>
				<li class="listEmptyNotice">사용 기록이 없습니다.</li>
			</ul>
			<!-- :: 기록 리스트 파트 close  -->
    	</section>
	</div>
</div>
</body>
</html>