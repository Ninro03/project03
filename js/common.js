$(function(){
	/* tooltip */
	var balloon = $('<div class="balloon"></div>').appendTo('body');
	
	function updateBalloonPosition(x,y){
		balloon.css({left: x+5, top: y});
	};
	function showBalloon(){
		balloon.stop().css('opacity',0).show().animate({opacity:1},500);
	};
	function hideBalloon(){
		balloon.stop().animate({opacity:0},500,function(){balloon.hide()});
	};
	
	/* balloon */
	$('.showBalloon').each(function(){
		var element = $(this);
		var txt = element.attr('title');
		element.attr('title','');
		element.hover(
			function(e){
				balloon.text(txt);
				updateBalloonPosition(e.pageX,e.pageY);
				showBalloon();
			},
			function(){
				hideBalloon();
			}
		);
		element.mousemove(function(e){
			updateBalloonPosition(e.pageX,e.pageY);
		});
	});
	
	/* Quick_toggle */
	bb = true;
	$('.fold span').click(function(){
		if(bb){
			$(this).addClass('close');
			$('.mal').css('display','none');
			$('.utils').stop().animate({'margin-top': '-518px'},600,'easeOutCirc', function(){bb = false;});
		}else{
			$(this).removeClass('close');
			$('.mal').css('display','block');
			$('.utils').stop().animate({'margin-top': '0px'},300,'easeOutCirc', function(){bb = true;});
			/* $('.mal').fadeIn(1000); */
		};
	});	
	
	$(window).on('scroll', function(){	
		
		
		var gnbLoc = 732;
		var winLoc = $(window).scrollTop();
		if (winLoc > gnbLoc){
			$('.mal').css('display','none');
			$('.utils').stop().animate({'margin-top':'-518px'},600,'easeOutCirc');
			$('.fold span').addClass('close');
		}else{
			$('.fold span').removeClass('close');
			$('.mal').css('display','block');
			$('.utils').stop().animate({'margin-top':'0px'},600,'easeOutCirc');	
		}

	});	
	
	$('.message').DB_springMove({
		key:'e24102',                //라이센스키
		dir:'x',               //방향축('x','y')
		mirror:1,              //반대방향이동(1,-1)
		radius:6,             //반경
		motionSpeed:0.1       //속도(0~1)
	})
});