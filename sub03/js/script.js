$(function(){
	
	// content1 main visual
	var visual = $('.visual > li');
	var button = $('.pager > button');
	var main_txt = $('.txt');
	var txt_but = $('.visualtxt>li>a');
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
			if(n===main_txt.size()){n=0;}
			if(n===txt_but.size()){n=0;}

			button.eq(n).trigger('click');
		},2000);
	};
	maintimer();
	
	function mainmove(i){
		var currentEl = visual.eq(maincurrent);
		var nextEl = visual.eq(i);
		var tcurrentEl = main_txt.eq(maincurrent);
		var tnextEl = main_txt.eq(i);
		var tbcurrentEl = txt_but.eq(maincurrent);
		var tbnextEl = txt_but.eq(i);
		currentEl.css({left:'0%'}).stop().animate({left:'-100%'});
		nextEl.css({left:'100%'}).stop().animate({left:'0'});
		tcurrentEl.css({top:'210px'}).stop().fadeOut(0).animate({top:'-450px'});
		tnextEl.css({top:'-450px'}).stop().fadeIn(0).animate({top:'210px'});
		tbcurrentEl.css({top:'505px'}).stop().fadeOut(0).animate({top:'-450px'});
		tbnextEl.css({top:'-450px'}).stop().fadeIn(0).animate({top:'505px'});
		maincurrent = i;
	};
	
	$('.btnprev').on({
		mouseover:function(){
			clearInterval(setIntervalId);
		},
		mouseout:function(){
			clearInterval(setIntervalId);
			maintimer();
		}
		
	});
	$('.btnnext').on({
		mouseover:function(){
			clearInterval(setIntervalId);
		},
		mouseout:function(){
			clearInterval(setIntervalId);
			maintimer();
		}
		
	});
	
	$('.btnprev').click(function(){
		i--;
		if(i<0){i=$('.pager>button').size()-1;};
		$('.pager>button').eq(i).trigger('click');
		//moveSlider(randomNumber);
		return false;
	});
	$('.btnnext').click(function(){
		i++;
		if(i==$('.pager>button').size()){i=0;};
		$('.pager>button').eq(i).trigger('click');
		return false;
	});

	bb=true;
	$('.auto').click(function(){
		if(bb){
			$('.stop').css('display','none');
			clearInterval(setIntervalId);
			$('.play').css('display','block');
			bb=false;
		}else{
			$('.play').css('display','none');
			clearInterval(setIntervalId);
			maintimer();
			$('.stop').css('display','block');
			bb=true;
		};
	});
	
	// content2 tab
	$('.contentinner').each(function(){
		var mBan = $(this);
		var anchors = mBan.find('ul.tabs a');
		var conScreen = mBan.find('.tabcontents');
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
});