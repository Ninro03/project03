$(function(){
    var menu = $('.inNavi > .font'); // 1depth 메뉴
	var wrap = $('#sideNav'); // 1depth와 2depth를 감싸는 element
	/* 나 var menuHeight = menu.children('a').height(); */ // 1depth의 높이
	var pageURL = location.href;
	var activeMenu;
	
	menu.on({
		mouseover:function(){
			var tg = $(this);
			menu.removeClass('on');
			tg.addClass('on');
			var th = tg.find('>.inNavimore>ul').height(); //  menuHeight + 
			wrap.stop().animate({height:th});
		},
		mouseout:function(){
			var tg = $(this);
			tg.removeClass('on');
			// tg.addClass('on');
			// var th = menuHeight + tg.find('>.sGnbArea').height();
			/* 나 wrap.stop().animate({height:menuHeight}); */
			onActive();
		}
	});
	
	menu.each(function(i){
		var tg = $(this); // tg = 순환하는 1Depth
		var sub = tg.find('>.inNavimore > ul > li'); // sub = 순환하는 2Depth
		var menuURL = tg.children('a').attr('href'); // 1Depth의 anchor의 주소
		var active = pageURL.indexOf(menuURL); // active는 있으면 숫자를 return하고 없으면 -1을 되돌려준다.
		if(active>-1){activeMenu=tg;};
		sub.each(function(j){
			var tg = $(this);
			var subURL = tg.children('a').attr('href');
			active = pageURL.indexOf(subURL);
			if(active>-1){activeMenu=tg;};
		});
		sub.on({
			mouseover:function(){
				var tg = $(this);
				sub.removeClass('on');
				tg.addClass('on');
			},
			mouseout:function(){
				var tg = $(this);
				tg.removeClass('on');
				onActive();
			}
		});
	});
	onActive();
	function onActive(){
		if(activeMenu){activeMenu.trigger('mouseover')};
	};
});