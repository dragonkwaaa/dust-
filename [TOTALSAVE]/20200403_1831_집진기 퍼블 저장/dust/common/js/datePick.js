
// :: 날짜 선택
$( function() {
	$( "#startDate,#endDate").datepicker({
		changeMonth: true,
		changeYear: true,
		// rangeSelect : true,
		// onClose:function(dates) {        
        //     setSelectedDateRange(dates);
        // },
		dateFormat: 'yy-mm-dd',
		prevText: '이전 달',
		nextText: '다음 달',
		monthNames: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
		monthNamesShort: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
		dayNames: ['일', '월', '화', '수', '목', '금', '토'],
		dayNamesShort: ['일', '월', '화', '수', '목', '금', '토'],
		dayNamesMin: ['일', '월', '화', '수', '목', '금', '토'],
		showMonthAfterYear: true,
		// yearSuffix: '년',
		//maxDate:0 // 오늘 이전 날짜 선택 불가


		// :: 달력 위치 정하는 스크립트
		// beforeShow: function(input, inst) {
		// 	var calendar = inst.dpDiv;
		// 	setTimeout(function() {
		// 		calendar.position({
		// 			my: 'right top',
		// 			at: 'right bottom',
		// 			collision: 'none',
		// 			of: input
		// 		});
		// 	}, 1);
		// }

	});




	// function setSelectedDateRange(dates){
    //     var startDate = "start date = " + dates[0];
    //     var endDate = "end date = " + dates[1];

    //     $("#selectedDates").html(startDate + "<br/>" + endDate);
    // }




} );


//날짜 검색시
function setSearchDate(start){

	let num = start.substring(0,1);
	let str = start.substring(1,2);

	let today = new Date();
	let year = today.getYear()+1900;

	//let year = today.getFullYear();
	//let month = today.getMonth() + 1;
	//let day = today.getDate();

	let endDate = $.datepicker.formatDate('yy-mm-dd', today);
	$('#endDate').val(endDate);

	if(str == 'd'){
		today.setDate(today.getDate() - num);
	}else if (str == 'w'){
		today.setDate(today.getDate() - (num*7));
	}else if (str == 'm'){
		today.setMonth(today.getMonth() - num);
		today.setDate(today.getDate() + 1);
	}else if (str == 'y'){
		today.setMonth(today.getYear() - num);
		today.setDate(today.getDate() + 1);
	}

	let startDate = $.datepicker.formatDate('yy-mm-dd', today);
	$('#startDate').val(startDate);

	// 종료일은 시작일 이전 날짜 선택하지 못하도록 비활성화
	$("#endDate").datepicker( "option", "minDate", startDate );

	// 시작일은 종료일 이후 날짜 선택하지 못하도록 비활성화
	$("#startDate").datepicker( "option", "maxDate", endDate );

}







// :: 기간 선택
$( function() {

	$( "#rangeDate").dateRangePicker({
		language: "auto",
		autoClose: true,
		format: 'ddd. MMM DD.YYYY',
		separator: ' ~ ',
		language: 'auto',
		startOfWeek: 'sunday',// or monday
		getValue: function()
		{
			return $(this).val();
		},
		setValue: function(s, s1)
		{
			// if(!$('#rangeDate').attr('readonly') && !$('#rangeDate').is(':disabled') && s != $('#rangeDate').val())
			// {
				$(this).val(s);
			// }
		},

		minDays: 0,
		maxDays: 0,
		duration: 200,
		showTopbar: false,
		showWeekNumbers: false,
		monthSelect: false,
		yearSelect: false,

		selectForward: true,
		selectBackward: false,
		singleMonth: true,

		customArrowPrevSymbol: '<i class="datepickArrowPrev"></i>',
		customArrowNextSymbol: '<i class="datepickArrowNext"></i>',


	});

});