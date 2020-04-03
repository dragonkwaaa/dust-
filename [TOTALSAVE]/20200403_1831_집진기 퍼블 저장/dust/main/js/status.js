// 버튼 누르면 페이지 최상단으로 이동하는 스크립트
function moveTopFunction() {
	$('html, body').stop().animate({
		scrollTop : 0
	}, 500);
}

// :: 상단 측정값 종류 탭 클릭 시, 선택된 탭 방향으로 스크롤 되게 하는 방법.
$(document).on('click', '.layerGroup.statusTabSort a', function() {

	$('.layerGroup.statusTabSort li.activated').removeClass('activated');
	$(this).parent('li').addClass('activated');

	// ::선택된 측정값 종류 탭 방향으로 이동하도록 하는 내용.
	if ($('.layerGroup.statusTabSort li').hasClass('activated')) {
		let navPosition		=		$('.layerGroup.statusTabSort').scrollLeft();
		let	elemPosition	=		$('.layerGroup.statusTabSort li.activated').offset().left;
		$(".layerGroup.statusTabSort").animate({scrollLeft: navPosition + elemPosition -103}, 300);
	}
	else {
		$(".layerGroup.statusTabSort").animate({scrollLeft: navPosition}, 300);
	}
});



// :: 기록 내용 파트 슬라이드 스크립트
$(document).ready(function(){
	$('.infoSlideGroup').slick({
		autoplay : false,
		swipe : true,
		fade : false,
		dots : false,
		prevArrow:false,
		nextArrow:false,
		slidesToShow : 1,
		slidesToScroll : 1,
		infinite : false,
		asNavFor: '.layerGroup.statusTabSort',
	})
});

// :: 내용 슬라이드 하면 해당 측정값 탭에 색상 넣기 스크립트. 
$('.layerGroup.statusTabSort').slick({
	slidesToShow: 3,
	slidesToScroll: 1,
	// centerMode : true,
	focusOnSelect : true,
	swipeToSlide : true,
	asNavFor: '.infoSlideGroup',
	dots: false,
	accessability : false,
	focusOnSelect: true,
	infinite : false,
	prevArrow:false,
	nextArrow:false,
 });

// 	:: 슬라이드 섬네일 스타일 초기화 스크립트
$('.layerGroup.statusTabSort .slick-slide').removeClass('activated');

// :: 선택 섬네일/첫 섬네일 스타일 부여 스크립트
$('.layerGroup.statusTabSort .slick-slide').eq(0).addClass('activated');

// :: 큰 슬라이드 이미지와 섬네일 이미지 순서 일치 시키는 스크립트
$('.infoSlideGroup').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
	let mySlideNumber = nextSlide;
	$('.layerGroup.statusTabSort .slick-slide').removeClass('activated');
	$('.layerGroup.statusTabSort .slick-slide').eq(mySlideNumber).addClass('activated');
});


// :: 차트 스크립트 open 
let chart    = document.getElementById('chart').getContext('2d'),

// :: 그래프 내부의 그라디언트 색상 관련.
gradient = chart.createLinearGradient(0, 0, 0, 280);
gradient.addColorStop(0, '#a2bcef');
gradient.addColorStop(0.4, '#f8fafe');
gradient.addColorStop(1, '#fff');


// :: 측정값 데이터 들어가는 자리.
let data  = {
    labels: [ '0', '', '2', '', '4', '', '6', '', '8', '', '10', '', '12', '', '14', '', '16', '', '18', '', '20', '', '22', '', '24' ],
    datasets: [{
			label: 'Custom Label Name',
			backgroundColor: gradient,
			pointBackgroundColor: '#4d42e5',
			pointRadius: 1,
			pointHoverRadius: 1,
			borderWidth: 1,
			borderColor: '#5a51e7',
			data: [0, 0, 0, 0, 0, 0, 10, 40, 40, 40, 40, 70, 70, 65, 65, 150, 150, 27, 27, 27, 15, 0, 0, 0, 0]
    }]
};

// :: 차트 옵션
let options = {
	layout: {
        padding: {
            left: 0,
            right: 0,
            top: 30,
            bottom: 0
		},
		margin: {
            left: 0,
            right: 0,
            top: 0,
            bottom: 0
		}
	},
	responsive: false,
	maintainAspectRatio: true,
	animation: {
		easing: 'easeInOutQuad',
		duration: 520
		
	},
	scales: {
		xAxes: [{
			gridLines: {
				color: 'rgba(200, 200, 200, 0.05)',
				lineWidth: 1
			},
			ticks: {
                autoSkip: false,
                maxRotation: 0,
				// minRotation: 0
				fontSize: 10,
				fontStyle : 600
            }
		}],
		yAxes: [{
			gridLines: {
				color: '#a2bcef',
				lineWidth: 1,
				drawBorder: false
			},
			ticks: {
				
				autoSkip: false,		// :: y축 단위계 생략되지 않게 하는 내용 1.
				stepSize : 1,			// :: y축 단위계 생략되지 않게 하는 내용 2.
				min: 0,
				max: 150,
				maxRotation: 0,
				padding : 10,
				fontSize: 10,
				fontStyle : 600,
				fontColor : '#000',
				fontFamily : 'Noto Sans KR',
				// :: 특정 y축 단위계의 명칭을 커스터마이징.
				callback: function(label, index, labels) {
					let	worstText		=	"매우<br>나쁨";
					let	spacedWorstText	=	worstText.split("<br>");

					switch (label) {
					  case 0:
						return '좋음';
					  case 50:
						return '보통';
					  case 100:
						return '나쁨';
					  case 150:
						return spacedWorstText;
					}
				}
			}
			
		}]
	},
	elements: {
		line: {
			tension: 0
		}
	},
	legend: {
		display: false
	},
	point: {
		backgroundColor: 'white'
	},
	tooltips: {
		titleFontFamily: 'Open Sans',
		backgroundColor: 'rgba(0,0,0,0.3)',
		titleFontColor: 'red',
		caretSize: 5,
		cornerRadius: 2,
		xPadding: 10,
		yPadding: 10
	}
};

let chartInstance = new Chart(chart, {
    type: 'line',
    data: data,
	options: options
});
// :: 차트 스크립트 close 