$(function(){
	
	// content1 main visual
	var visual = $('.slide_image');
	var button = $('.control_box>.bc_box');
	var maincurrent = 0;
	var setIntervalId;
	
	button.on({
		click:function(){
			tg = $(this);
			i= tg.index();
			//alert(i);
			if(maincurrent===tg.index()){return;}
			button.removeClass('active');
			tg.addClass('active');
			mainmove(i);
			return false;
		}
	});
	
	function maintimer(){
		setIntervalId = setInterval(function(){
			var n=maincurrent+1;
			if(n===visual.size()){n=0;}


			button.eq(n).trigger('click');
		},2000);
	};
	maintimer();
	
	function mainmove(i){
		var currentEl = visual.eq(maincurrent);
		var nextEl = visual.eq(i);
	
		currentEl.css({left:'0%'}).stop().animate({left:'-100%'});
		nextEl.css({left:'100%'}).stop().animate({left:'0'}); 	
		maincurrent = i;
	};
	
	/* visual.on({
		mouseover:function(){
			clearInterval(setIntervalId);
		},
		mouseout:function(){
			clearInterval(setIntervalId);
			maintimer();
		}
		
	}); */	
	
	$('.left_arrow').click(function(){
		i--;
		if(i<0){i=$('.bc_box').size()-1;};
		$('.bc_box').eq(i).trigger('click');
		//moveSlider(randomNumber);
		return false;
	});
	$('.right_arrow').click(function(){
		i++;
		if(i==$('.bc_box').size()){i=0;};
		$('.bc_box').eq(i).trigger('click');
		return false;
	});
	
	bb=true;
	$('.stop').click(function(){
		if(bb){
			$(this).addClass('auto');
			clearInterval(setIntervalId);
			$(this).removeClass('stop');
			bb=false;
		}else{
			$(this).addClass('stop');
			clearInterval(setIntervalId);
			maintimer();
			$(this).removeClass('auto');
			bb=true;
		};
	});
	
	
	// content2 tab
	$('#mbship_banner').each(function(){
		var mBan = $(this);
		var anchors = mBan.find('ul.tab_menu a');
		var conScreen = mBan.find('#benefit_contents>li');
		var lastAnchor;
		var lastScreen;
		anchors.show();
		lastAnchor = anchors.filter('.active');
		lastScreen = $(lastAnchor.attr('href'));
		conScreen.hide();
		lastScreen.show();
		
		anchors.click(function(e){
			e.preventDefault();
			var currentAnchor = $(this);
			var currentScreen = $(currentAnchor.attr('href'));
			lastAnchor.removeClass('active');
			currentAnchor.addClass('active');
			lastScreen.hide();
			currentScreen.show();
			lastAnchor = currentAnchor;
			lastScreen = currentScreen;
		});
	});
	
	
	
	// content6 tab
	$('#service_banner').each(function(){
		var mBan = $(this);
		var anchors = mBan.find('ul.abc a');
		var serviceCon = mBan.find('.service_con>li');
		var lastAnchor;
		var lastCon;
		anchors.show();
		lastAnchor = anchors.filter('.active');
		lastCon = $(lastAnchor.attr('href'));
		serviceCon.hide();
		lastCon.show();
		
		anchors.click(function(e){
			e.preventDefault();
			var currentAnchor = $(this);
			var currentCon = $(currentAnchor.attr('href'));
			lastAnchor.removeClass('active');
			currentAnchor.addClass('active');
			lastCon.hide();
			currentCon.show();
			lastAnchor = currentAnchor;
			lastCon = currentCon;
		});
	});
	
	
	
	// content3 slide
	var interval = 2000;
	$('.time_slide').each(function(){
		var container = $(this);
		function switchImg(){
			var anchors = container.find('.slide');
			var timer = container.find('#timer1');
			var first = anchors.eq(0);
			var second = anchors.eq(1);
			first.fadeOut(1000).appendTo(container);
			second.fadeIn(1000);
			if(first){
				timer.css('top','350px');
			}else{
				timer.css('top','425px');
			}
		};

		function startTimer(){
			timer = setInterval(switchImg, interval);
		};
		function stopTimer(){
			clearInterval(timer);
		};
		startTimer();
		
		var a = container.find('a')
		a.hover(
			function(){
				stopTimer();
			},
			function(){
				startTimer();
			}
		);
	});
	
	
	
	// content4 slide
	var interval = 2000;
	$('.m_slide').each(function(){
		var timer;
		var container = $(this);
		function switchImg(){
			var anchors = container.find('li');
			var first = anchors.eq(0);
			var second = anchors.eq(1);
			first.fadeOut(1000).appendTo(container);
			second.fadeIn(1000);
		};
		function startTimer(){
			timer = setInterval(switchImg, interval);
		};
		function stopTimer(){
			clearInterval(timer);
		};
		startTimer();
		
		var a = container.find('a')
		a.hover(
			function(){
				stopTimer();
			},
			function(){
				startTimer();
			}
		);
	});
	
	
	
	// content5 animate
	$('.thumb').each(function(){
		var plus = $(this);
		var img = plus.find('.plus');
		plus.hover(
			function(){
				img.stop(true, true).animate({'margin-bottom':'331px'},500);
			},
			function(){
				img.stop(true, true).animate({'margin-bottom':'0px'},500);
			}
		);
	});
	
	
	
	// content2 menu
	var screen2_1 = $('#benefit_screen2>ul>.screen2_1');
	var screen2_2 = $('#benefit_screen2>ul>.screen2_2');
	var screen2_3 = $('#benefit_screen2>ul>.screen2_3');
	screen2_1.hover(
		function(){
			screen2_2.stop().animate({'width':'0'},{duration:500,queue:false,easeing:'easeOutCubic'});				
			screen2_3.stop().animate({'width':'0', 'margin':'0px'},{duration:500,queue:false,easeing:'easeOutCubic'});
			screen2_1.stop().animate({'width':'1420px'},{duration:600,queue:true,easeing:'easeOutCubic'});				
		},
		function(){
			screen2_1.stop().animate({'width':'447px'},{duration:400,queue:false,easeing:'easeOutCubic'});
			screen2_2.stop().animate({'width':'447px'},{duration:600,queue:false,easeing:'easeOutCubic'});		
			screen2_3.stop().animate({'width':'447px'},{duration:600,queue:false,easeing:'easeOutCubic'});
		}
	);
	screen2_2.hover(
		function(){
			screen2_3.stop().animate({'width':'0'},{duration:500,queue:false,easeing:'easeOutCubic'});				
			screen2_1.stop().animate({'width':'0'},{duration:500,queue:false,easeing:'easeOutCubic'});
			screen2_2.stop().animate({'width':'1420px', 'margin':'0px'},{duration:600,queue:true,easeing:'easeOutCubic'});			
		},
		function(){
			screen2_2.stop().animate({'width':'447px'},{duration:400,queue:false,easeing:'easeOutCubic'});
			screen2_3.stop().animate({'width':'447px'},{duration:600,queue:false,easeing:'easeOutCubic'});		
			screen2_1.stop().animate({'width':'447px'},{duration:600,queue:false,easeing:'easeOutCubic'});
		}
	);
	screen2_3.hover(
		function(){
			screen2_1.stop().animate({'width':'0'},{duration:500,queue:false,easeing:'easeOutCubic'});
			screen2_2.stop().animate({'width':'0', 'margin':'0px'},{duration:500,queue:false,easeing:'easeOutCubic'});
			screen2_3.stop().animate({'width':'1420px'},{duration:600,queue:true,easeing:'easeOutCubic'});				
		},
		function(){
			screen2_3.stop().animate({'width':'447px'},{duration:400,queue:false,easeing:'easeOutCubic'});
			screen2_1.stop().animate({'width':'447px'},{duration:600,queue:false,easeing:'easeOutCubic'});		
			screen2_2.stop().animate({'width':'447px'},{duration:600,queue:false,easeing:'easeOutCubic'});
		}
	);
	
	var screen3_1 = $('#benefit_screen3>ul>.screen3_1');
	var screen3_2 = $('#benefit_screen3>ul>.screen3_2');
	var screen3_3 = $('#benefit_screen3>ul>.screen3_3');
	screen3_1.hover(
		function(){
			screen3_2.stop().animate({'width':'0'},{duration:500,queue:false,easeing:'easeOutCubic'});				
			screen3_3.stop().animate({'width':'0', 'margin':'0px'},{duration:500,queue:false,easeing:'easeOutCubic'});
			screen3_1.stop().animate({'width':'1420px'},{duration:600,queue:true,easeing:'easeOutCubic'});				
		},
		function(){
			screen3_1.stop().animate({'width':'447px'},{duration:400,queue:false,easeing:'easeOutCubic'});
			screen3_2.stop().animate({'width':'447px'},{duration:600,queue:false,easeing:'easeOutCubic'});		
			screen3_3.stop().animate({'width':'447px'},{duration:600,queue:false,easeing:'easeOutCubic'});
		}
	);
	screen3_2.hover(
		function(){
			screen3_3.stop().animate({'width':'0'},{duration:500,queue:false,easeing:'easeOutCubic'});				
			screen3_1.stop().animate({'width':'0'},{duration:500,queue:false,easeing:'easeOutCubic'});
			screen3_2.stop().animate({'width':'1420px', 'margin':'0px'},{duration:600,queue:true,easeing:'easeOutCubic'});			
		},
		function(){
			screen3_2.stop().animate({'width':'447px'},{duration:400,queue:false,easeing:'easeOutCubic'});
			screen3_3.stop().animate({'width':'447px'},{duration:600,queue:false,easeing:'easeOutCubic'});		
			screen3_1.stop().animate({'width':'447px'},{duration:600,queue:false,easeing:'easeOutCubic'});
		}
	);
	screen3_3.hover(
		function(){
			screen3_1.stop().animate({'width':'0'},{duration:500,queue:false,easeing:'easeOutCubic'});
			screen3_2.stop().animate({'width':'0', 'margin':'0px'},{duration:500,queue:false,easeing:'easeOutCubic'});
			screen3_3.stop().animate({'width':'1420px'},{duration:600,queue:true,easeing:'easeOutCubic'});				
		},
		function(){
			screen3_3.stop().animate({'width':'447px'},{duration:400,queue:false,easeing:'easeOutCubic'});
			screen3_1.stop().animate({'width':'447px'},{duration:600,queue:false,easeing:'easeOutCubic'});		
			screen3_2.stop().animate({'width':'447px'},{duration:600,queue:false,easeing:'easeOutCubic'});
		}
	);
	
	/* noticeBanner rolling */
	var current = 0;
	var notice = $('.notice>p>a');
	var rollinter;
	
	function rolling(){
		rollinter = setInterval(function(){
			var prev = notice.eq(current);
			move(prev, '0%','-100%');
			current++;
			if(current == notice.size()){current=0;}
			var next = notice.eq(current);
			move(next, '100%','0%');
		},1000);
	};
	rolling();
	
	function move(tg, start, end){
		tg.css('top',start).stop().animate({top:end},{duration:500,ease:'easeOutCubic'});
	};
	notice.hover(
		function(){
			clearInterval(rollinter);
		},
		function(){
			rolling();
		}
	)
	
	/* 팝업연동 */
	if($.cookie('pop') != 'no'){$('#pop_wrap').show();}
	$('#pop_wrap').css('cursor','move').draggable();
	//eq(0) >창닫기 eq(1)> 하루동안 열지 않기
	$('#pop_wrap .close').on('click',function(){
		$('#pop_wrap').fadeOut('fast');
		return false;
	});
	$('#pop_wrap .oneday').on('click',function(){
		//expires = 유통기한
		$.cookie('pop','no',{expires:1});
		$('#pop_wrap').fadeOut('fast');
		return false;
	});
});
