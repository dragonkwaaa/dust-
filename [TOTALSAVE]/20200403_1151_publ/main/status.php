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
    	    <span class="titleText">기록조회</span>
		</section>



		<!-- :: 상단 달력 파트 open -->
		<section class="dateScrollSection">
			<div class="monthDisplayGroup">
				<span>2020.03</span>
				<i class="calendarIcon ml10"></i>
			</div>
			<ul class="layerGroup dateSort">
				<li class="holiday">
					<div class="weekdayText">일</div>
					<div class="dayText">1</div>
				</li>
				<li class="">
					<div class="weekdayText">월</div>
					<div class="dayText">2</div>
				</li>
				<li class="">
					<div class="weekdayText">화</div>
					<div class="dayText">2</div>
				</li>
				<li class="">
					<div class="weekdayText">수</div>
					<div class="dayText">2</div>
				</li>
				<li class="">
					<div class="weekdayText">목</div>
					<div class="dayText">2</div>
				</li>
				<li class="">
					<div class="weekdayText">금</div>
					<div class="dayText">2</div>
				</li>
				<li class="holiday activated">
					<div class="weekdayText">토</div>
					<div class="dayText">2</div>
				</li>
			</ul>
		</section>
		<!-- :: 상단 달력 파트 close -->

		<!-- :: 상단 메뉴, 뒤로가기버튼, 햄버거 버튼 등 파트 close -->
		<section class="tabSection">
			<!-- :: 설정 상단 탭 파트  open  -->
			<ul class="layerGroup statusTabSort">
				<li class="activated">
					<a href="javascript:void(0);">온도</a>
				</li>
				<li>
					<a href="javascript:void(0);">접점</a>
				</li>
				<li>
					<a href="javascript:void(0);">전류</a>
				</li>
				<li>
					<a href="javascript:void(0);">압력</a>
				</li>
				<li>
					<a href="javascript:void(0);">유량</a>
				</li>
				<li>
					<a href="javascript:void(0);">PHb</a>
				</li>
			</ul>
			<!-- :: 설정 상단 탭 파트  close  -->
		</section> 
		<section class="infoSection">
			<!-- :: 그래프 파트 open -->
			<div class="chartGroup statusSort">
				<canvas id="chart" style="height : 56.389vw; width : 86.111vw; min-width : 246px;"></canvas>
				<!-- <canvas id="chart" width="auto" height="auto"></canvas> -->
				<!-- <canvas id="chart" style="width : 86.111vw;"></canvas> -->
			</div>
			<!-- :: 그래프 파트 close -->
			<!-- :: 타임테이블 파트 open -->
			<div class="recordListGroup mt20">
				<div class="topPagerBox relative">
					<span>단위:</span>
					<span>℃</span>
					<div class="absoluteMR">
						<a href="javascript:void(0);" class="arrowPrev"></a>
						<a href="javascript:void(0);" class="arrowNext ml15"></a>
					</div>
				</div>
				<ul class="timeList">
					<li>
						<div>07:10</div>
						<div>29.77</div>
					</li>
					<li>
						<div>07:11</div>
						<div>29.77</div>
					</li>
					<li>
						<div>07:12</div>
						<div>29.77</div>
					</li>
					<li>
						<div>07:13</div>
						<div>29.77</div>
					</li>
					<li>
						<div>07:14</div>
						<div>29.77</div>
					</li>
					<li>
						<div>07:15</div>
						<div>29.77</div>
					</li>
					<li>
						<div>07:16</div>
						<div>29.77</div>
					</li>
					<li>
						<div>07:17</div>
						<div>29.77</div>
					</li>
					<li>
						<div>07:18</div>
						<div>29.77</div>
					</li>
					<li>
						<div>07:19</div>
						<div>29.77</div>
					</li>
					<li>
						<div>07:20</div>
						<div>29.77</div>
					</li>
					<li>
						<div>07:21</div>
						<div>29.77</div>
					</li>
					<li>
						<div>07:22</div>
						<div>29.77</div>
					</li>
					<li>
						<div>07:23</div>
						<div>29.77</div>
					</li>
					<li>
						<div>07:24</div>
						<div>29.77</div>
					</li>
					<li>
						<div>07:10</div>
						<div>29.77</div>
					</li>
					<li>
						<div>07:10</div>
						<div>29.77</div>
					</li>
					<li>
						<div>07:10</div>
						<div>29.77</div>
					</li>
					<li>
						<div>07:10</div>
						<div>29.77</div>
					</li>
					<li>
						<div>07:10</div>
						<div>29.77</div>
					</li>
				</ul>
			</div>
			<!-- :: 타임테이블 파트 close -->
		</section>
	</div>
</div>

<script src="/dust/common/js/Chart.min.js"></script>
<script>
// :: v페이지 로딩 시, 날짜 스크롤의 초점을 현재 날짜로 맞추는 스크립트.
$(document).ready(function() {
	if ($('.layerGroup.dateSort li').hasClass('activated')) {
		let navPosition		=		$('.layerGroup.dateSort').scrollLeft();
		let	elemPosition	=		$('.layerGroup.dateSort li.activated').offset().left;
		$(".layerGroup.dateSort").animate({scrollLeft: navPosition + elemPosition -103}, 300);
	} else {
		$(".layerGroup.dateSort").animate({scrollLeft: navPosition}, 300);
	}
});

// :: 상단 날짜 탭 클릭 시, 선택된 탭 방향으로 스크롤 되게 하는 방법.
$(document).on('click', '.layerGroup.dateSort li', function() {

	$('.layerGroup.dateSort li.activated').removeClass('activated');
	$(this).addClass('activated');

	// ::선택된 탭 방향으로 이동하도록 하는 내용.
	if ($('.layerGroup.dateSort li').hasClass('activated')) {
		let navPosition		=		$('.layerGroup.dateSort').scrollLeft();
		let	elemPosition	=		$('.layerGroup.dateSort li.activated').offset().left;
		$(".layerGroup.dateSort").animate({scrollLeft: navPosition + elemPosition -103}, 300);
	}
	else {
		$(".layerGroup.dateSort").animate({scrollLeft: navPosition}, 300);
	}
});



// :: 상단 탭 클릭 시, 선택된 탭 방향으로 스크롤 되게 하는 방법.
$(document).on('click', '.layerGroup.statusTabSort a', function() {

	$('.layerGroup.statusTabSort li.activated').removeClass('activated');
	$(this).parent('li').addClass('activated');

	// ::선택된 탭 방향으로 이동하도록 하는 내용.
	if ($('.layerGroup.statusTabSort li').hasClass('activated')) {
		let navPosition		=		$('.layerGroup.statusTabSort').scrollLeft();
		let	elemPosition	=		$('.layerGroup.statusTabSort li.activated').offset().left;
		$(".layerGroup.statusTabSort").animate({scrollLeft: navPosition + elemPosition -103}, 300);
	}
	else {
		$(".layerGroup.statusTabSort").animate({scrollLeft: navPosition}, 300);
	}
});



// :: 차트 스크립트 open 
var chart    = document.getElementById('chart').getContext('2d'),
    gradient = chart.createLinearGradient(0, 0, 0, 280);

gradient.addColorStop(0, '#a2bcef');
gradient.addColorStop(0.4, '#f8fafe');
gradient.addColorStop(1, '#fff');


var data  = {
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


var options = {

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
				// color: 'rgba(200, 200, 200, 0.08)',
				// lineWidth: 1
			},
			gridLines: {
				color: '#a2bcef',
				lineWidth: 1,
				drawBorder: false
			},
			ticks: {
				autoSkip: false,
				min: 0,
				max: 150,
				maxRotation: 0,
				stepSize : 1,
                // minRotation: 0,
				padding : 10,
				fontSize: 10,
				fontStyle : 600,
				fontColor : '#000',
				fontFamily : 'Noto Sans KR',
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


var chartInstance = new Chart(chart, {
    type: 'line',
    data: data,
	options: options
});
// :: 차트 스크립트 close 


</script>


</body>

</html>