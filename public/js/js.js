$(document).ready(function() {


	$('.call, .block_zakaz').on('click', function() {  // попап с оверлеем //
		if ($(this).is('a')) {
			$('.popup_form form .usl').val($(this).text());
		}
		$('.overlay').fadeIn('400');
		$('.popup').animate({top: "50px"}, 500);
		return false;
	});
	$('div.close').click(function(){
		$('.overlay').fadeOut('400');
		$('.popup').animate({top: "-605px"}, 500);
	});
	$('.overlay').click(function(){
		$('.overlay').fadeOut('400');
		$('.popup').animate({top: "-605px"}, 500);
	});
	

	$(window).resize(function(){   // шиина и высота от экрана
		 $('.main_block, .header').height($(window).height()); 
	})
	
	$('.main_block, .header').height($(window).height());
	
	
	$('.block_img').height($('.block_img').width() / 1.8)  // соотношение высоты к ширине
	$(window).resize(function(){
		$('.block_img').height($('.block_img').width() / 1.8)
	})
	
	
	$('.left').css('top', $('.main_block').height()); // отступ от значения высоты
	$(window).resize(function(){  
		 $('.left').css('top', $('.main_block').height());
	})
	
	$('.right').css('min-height', $('.left_height').outerHeight() +260); // высота от значения высоты
	
	
	$('.tab_click').click(function() {   // табы
		if($(this).find('.tab_over').height() == 300) {
			$(this).find('.tab_over').height($(this).find('.tab_text').height());
			$(this).find('.tab_over').toggleClass('tab_go')
		} else {
			$(this).find('.tab_over').height(300)
			$(this).find('.tab_over').toggleClass('tab_go')
		}
	});

	// if($("body").width()< 740){
     //    $(".menu_cat .main-link").click(function () {
     //        $(".menu_cat .main-link").children().eq(1).hide();
     //        if($(this).children().eq(1).css('display') == 'none'){
     //            $(this).children().eq(1).show()
     //        }else{
     //            $(this).children().eq(1).hide()
     //        }
     //    })
	// }
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	

});