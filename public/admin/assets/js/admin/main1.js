$(document).ready(function(){

	  $('.sform .eye-checkedpass').click(function(){
	    console.log($('.sform #password').attr('type')); 
	    if('password' == $('.sform #password').attr('type')){
	         $('.sform #password').prop('type', 'text');
	         $('.sform .eye-checkedpass').removeClass('fa-eye');
	         $('.sform .eye-checkedpass').addClass('fa-eye-slash');
	    }else{
	         $('.sform #password').prop('type', 'password');
	         $('.sform .eye-checkedpass').addClass('fa-eye');
	         $('.sform .eye-checkedpass').removeClass('fa-eye-slash');
	    }
	});

	$('.sform .eye-checkedcpass').click(function(){
	    console.log($('.sform #cpass').attr('type')); 
	    if('password' == $('.sform #cpass').attr('type')){
	         $('.sform #cpass').prop('type', 'text');
	         $('.sform .eye-checkedcpass').removeClass('fa-eye');
	         $('.sform .eye-checkedcpass').addClass('fa-eye-slash');
	    }else{
	         $('.sform #cpass').prop('type', 'password');
	         $('.sform .eye-checkedcpass').addClass('fa-eye');
	         $('.sform .eye-checkedcpass').removeClass('fa-eye-slash');
	    }
	});
})