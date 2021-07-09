$(function(){
	$('.guideText').guideText();
	/* var guideClass = 'gray';	
	$('.guideText').each(function(){
		var guideText = this.defaultValue;
		var element = $(this);
		element.focus(function(){
			if(element.val()===guideText){
				element.val('');
				element.removeClass(guideClass);
			};
		});
		element.blur(function(){
			if(element.val()===''){
				element.val(guideText);
				element.addClass(guideClass);
			};
		});
		
		if(element.val()===guideText){
			element.addClass(guideClass);
		};
	}); */
	
	var class_closed = 'closed';
		$('#accordionSection').each(function(){
		var acco = $(this);
		var allTit = acco.find('.title');
		var allsmallTit = allTit.find('.smalltitle')
		var allbut = allTit.find('button')
		var allCon = acco.find('.content');

		function closeAll(){
			allTit.addClass(class_closed);
			allCon.addClass(class_closed);
			allsmallTit.addClass(class_closed);
			allbut.addClass(class_closed);
		};
		function open(tit,con,smalltit,but){
			tit.removeClass(class_closed);
			con.removeClass(class_closed);
			smalltit.removeClass(class_closed);
			but.removeClass(class_closed);
		};
		
		closeAll();
		allTit.click(function(){
			var tit = $(this);
			var con = tit.parent().find(allCon);
			var smalltit = tit.find(allsmallTit);
			var but = tit.find(allbut);
			closeAll();
			open(tit,con,smalltit,but);
		});
	});
});