$(function(){
	$('.guideText').guideText();
	
	$('#loginContent').each(function(){
		var mBan = $(this);
		var anchors = mBan.find('ul.logintabs a');
		var conScreen = mBan.find('.logincon');
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