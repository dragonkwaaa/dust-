<Doctype html>
<html lagn="ko">
<?php include $_SERVER['DOCUMENT_ROOT'] .  '/dust/common/pages/head.php';?> 
<body>
<div class="container">
	<header></header>
	<div class="contents">
		<section class="topMenuSection">
    	    <a href="/dust/" class="prevBtn"></a>
    	    <span class="titleText">기록조회</span>
		</section>
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
		<section class="tabSection">
			<ul class="layerGroup statusTabSort">
				<li>
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
		</section> 
		<section class="infoSection">
			<div class="infoSlideGroup">
				<div class="statusCase">
					<div class="chartGroup statusSort">
						<canvas id="chart" style="height : 56.389vw; width : 86.111vw; min-width : 246px;"></canvas>
					</div>
					<div class="recordListGroup mt20">
						<div class="topPagerBox relative">
							<span>단위:</span>
							<span>℃</span>
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
				</div>
				<div class="statusCase">
					<div class="chartGroup statusSort">
						<canvas id="chart" style="height : 56.389vw; width : 86.111vw; min-width : 246px;"></canvas>
					</div>
					<div class="recordListGroup mt20">
						<div class="topPagerBox relative">
							<span>단위:</span>
							<span>∮</span>
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
				</div>
				<div class="statusCase">
					<div class="chartGroup statusSort">
						<canvas id="chart" style="height : 56.389vw; width : 86.111vw; min-width : 246px;"></canvas>
					</div>
					<div class="recordListGroup mt20">
						<div class="topPagerBox relative">
							<span>단위:</span>
							<span>암페아</span>
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
				</div>
				<div class="statusCase">
					<div class="chartGroup statusSort">
						<canvas id="chart" style="height : 56.389vw; width : 86.111vw; min-width : 246px;"></canvas>
					</div>
					<div class="recordListGroup mt20">
						<div class="topPagerBox relative">
							<span>단위:</span>
							<span>Bar</span>
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
				</div>
				<div class="statusCase">
					<div class="chartGroup statusSort">
						<canvas id="chart" style="height : 56.389vw; width : 86.111vw; min-width : 246px;"></canvas>
					</div>
					<div class="recordListGroup mt20">
						<div class="topPagerBox relative">
							<span>단위:</span>
							<span>㏐</span>
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
				</div>
				<div class="statusCase">
					<div class="chartGroup statusSort">
						<canvas id="chart" style="height : 56.389vw; width : 86.111vw; min-width : 246px;"></canvas>
					</div>
					<div class="recordListGroup mt20">
						<div class="topPagerBox relative">
							<span>단위:</span>
							<span>PHb</span>
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
				</div>
			</div>
		</section>
		<a href="javascript:moveTopFunction();" class="fixedR pageUpSort pageUpBtn"></a>
	</div>
</div>

<script src="/dust/common/js/Chart.min.js"></script>
<script src="/dust/main/js/status.js"></script>

</body>
</html>