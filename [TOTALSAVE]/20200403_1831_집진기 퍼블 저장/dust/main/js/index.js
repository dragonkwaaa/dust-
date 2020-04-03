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

// :: 햄버거 메뉴 외부 클릭 시 햄버거 메뉴 닫기.
$(document).mouseup(function (e) {
	let overlay = $('.container');
	let hamburgerM = $('.hamburgerPop')

	if (!hamburgerM.is(e.target) && hamburgerM.has(e.target).length === 0){
		hamburgerM.hide("slide", { direction: "left" }, 250);
		overlay.removeClass('hamOverlay');
	}
});