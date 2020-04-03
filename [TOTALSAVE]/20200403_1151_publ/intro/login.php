<!DOCTYPE html>
<html lang="ko">
<?php include $_SERVER['DOCUMENT_ROOT'] .  '/dust/common/pages/head.php';?> 
<body>
<div class="container">
	<header></header>
	<div class="contents">
		<section class="loginSection">
			<a href="javascript:void(0);" class="logoImg">로고</a>
			<div class="idInputCase">
	    	    <input class="tbox full" placeholder="아이디를 입력해주세요.">
	    	</div>  
	    	<div>
	    	    <input class="tbox full" placeholder="비밀번호를 입력해주세요.">
	    	</div>
	    	<div class="checkCase">
	    	   <label>
			   	<input type="checkbox" class="check_box">
	    	      <span class="chk_text">자동로그인</span>
	    	   </label>
			</div>
			<div class="btnBox login">
				<a href="/dust/">로그인</a>
			</div>
		</section>
	</div>
</div>
</body>
</html>