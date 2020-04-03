<Doctype html>
<html lagn="ko">
<?php include $_SERVER['DOCUMENT_ROOT'] .  '/dust/common/pages/head.php';?> 
<body>
<div class="container">
	<header></header>
	<div class="contents">
		<section class="topMenuSection">
	        <a href="javascript:hamburgerPop();" class="hamBtn"></a>
			<span class="dateText">2020. 03. 04</span>
		</section>
		<section class="listSection mainListSect">
			<ul class="listGroup">
				<li>
					<div class="titleCase">온도</div>
	    	    	<div class="infoCase statusSort">23.66</div>
				</li>
				<li>
					<div class="titleCase">접점</div>
	    	    	<div class="infoCase statusSort">23.66</div>
				</li>
				<li>
					<div class="titleCase">전류</div>
	    	    	<div class="infoCase statusSort">23.66</div>
				</li>
				<li>
					<div class="titleCase">압력</div>
	    	    	<div class="infoCase statusSort">23.66</div>
				</li>
				<li>
					<div class="titleCase">유량</div>
	    	    	<div class="infoCase statusSort">23.66</div>
				</li>
				<li>
					<div class="titleCase">PHb</div>
	    	    	<div class="infoCase statusSort">23.66</div>
				</li>
			</ul>
		</section>
	</div>
	<div class="bottomTimeCheck">
		<span class="fs16 fw_bold">마지막 측정시간 : </span>
		<span class="fs16 fm_mon">2020-01-20 11:18:44</span>
	</div>
</div>
<div class="popup hamburgerPop">
    <div class="modal">
        <a href="javascript:closeHamburger()">
			<img src="/dust/common/image/close.png" class="close">
		</a>
        <ul class="menu">
            <li><a href="/dust/main/status">실시간측정</a></li>
            <li><a href="/dust/setting/record">기록조회</a></li>
			<li><a href="/dust/setting/systemSet">설정</a></li>
			<li><a href="/dust/intro/login">로그아웃</a></li>
        </ul>
        <div class="lastCom">마지막통신<br>
            <span>2020-01-20 11:18:44</span>
        </div>
        <div class="timeDisplay">
            2020-01-20 11:18:44
        </div>
    </div>
</div>
<script src="/dust/main/js/index.js"></script>

</body>
</html>