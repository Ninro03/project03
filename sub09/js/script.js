$(function(){
	$('#main_wrap').each(function(){
		var mBan = $(this);
		var anchors = mBan.find('.tab a');
		var conScreen = mBan.find('.admin_con');
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