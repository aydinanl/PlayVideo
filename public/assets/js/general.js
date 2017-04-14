$(function(){ 
		/* header menü */
		$(".menu li ul").hide();
		$('.menu li').mouseenter(function(e){
		 $(this).children('.menu li ul').fadeIn(200);
		}).mouseleave(function(e) {
		 $(this).children('.menu li ul').fadeOut(200);
		});
		
		/* header menü */
		$(".search").hide();
		$(".arama").removeClass("arama2");
	
		var k=0;
		$('.arama').click(function(){
		var elem = $(this);
		if ( k != 0 ){
			$(this).find('i').attr("class", 'fa fa-search');
			$(this).find('i').attr("style", 'color:#fff');
			$(this).removeClass("arama2");
			$('.search').fadeOut("fast");
			
			k = 0;
		}else {
			$(this).find('i').attr("class", 'fa fa-times');
			$(this).find('i').attr("style", 'color:#fff');
			$(this).attr("class", 'arama2');
			$('.search').fadeIn("fast");
        k ++;
    }

	});	
	
	/* orta slider */
	
       $('.orta_slider').pSlider({
			button: {
				next: $('.orta_buton .right_orta_buton'),
				prev: $('.orta_buton .left_orta_buton')
			},	   
            slider: $('.orta_icerik_slider ul li'),
            visible: 3,
            skip: 2,
			auto:true,
			extra:4,
			time:4000
        });	
	
	/* alt slider */
	
       $('.alt_slider').pSlider({
			button: {
				next: $('.alt_buton .right_alt_buton'),
				prev: $('.alt_buton .left_alt_buton')
			},	   
            slider: $('.alt_icerik_slider ul li'),
            visible: 2,
            skip: 2,
			auto:true,
			extra:4,
			time:6000
        });		
		
	/* reklam kapat */
	$('.reklamkapat , .reklamkapat2').click(function(){
		$('.reklamvideon').hide();
		
	});
});