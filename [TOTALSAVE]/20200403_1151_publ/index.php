<Doctype html>
<html lagn="ko">
<?php include $_SERVER['DOCUMENT_ROOT'] .  '/dust/common/pages/head.php';?> 
<body>
<div class="container">
	<header></header>

	<div class="contents">
		<!-- :: 메인 페이지 상단 제목, 메뉴바 파트 open -->
		<section class="topMenuSection">
	        <a href="javascript:hamburgerPop();" class="hamBtn"></a>
			<span class="dateText">2020. 03. 04</span>
		</section>
		<!-- :: 메인 페이지 상단 제목, 메뉴바 파트 close -->


		<!-- :: 메인 페이지 스테이터스 패널 파트 open  -->
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
		<!-- :: 메인 페이지 스테이터스 패널 파트 close  -->
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
        </ul>
        <div class="lastCom">마지막통신<br>
            <span>2020-01-20 11:18:44</span>
        </div>
        <div class="timeDisplay">
            2020-01-20 11:18:44
        </div>
    </div>
</div>
<script>

// :: 햄버거 메뉴 팝업 열기 스크립트.
function hamburgerPop(){
	$('.popup.hamburgerPop').show("slide", { direction : "left" }, 250);
	$('.container').addClass('hamOverlay');
}
// :: 햄버거 메뉴 닫기 X 버튼 스크립트.
function closeHamburger(){
	$('.popup.hamburgerPop').hide("slide", { direction: "left" }, 250);
	$('.container').removeClass('hamOverlay');
}

// :: 팝업 외부 클릭 시 햄버거 메뉴 닫기 스크립트.
$(document).mouseup(function (e) {
	let overlay = $('.container');
	let hamburgerM = $('.hamburgerPop')

	if (!hamburgerM.is(e.target) && hamburgerM.has(e.target).length === 0){
		hamburgerM.hide("slide", { direction: "left" }, 250);
		overlay.removeClass('hamOverlay');
	}
});

// :: 하단 날짜 표시 이동 위치 제한 스크립트
function checkOffset() {
    if($('.bottomTimeCheck').offset().top + $('.bottomTimeCheck').height() 
                                           >= $('.footer').offset().top - 10)
        $('.bottomTimeCheck').css('position', 'absolute');
    if($(document).scrollTop() + window.innerHeight < $('.footer').offset().top)
        $('.bottomTimeCheck').css('position', 'fixed'); // restore when you scroll up
    $('.bottomTimeCheck').text($(document).scrollTop() + window.innerHeight);
}
$(document).scroll(function() {
    checkOffset();
});


</script>
</body>
</html>