$(function(){
	var interval = 2000;
	$('.visual').each(function(){
		var timer;
		var container = $(this);
		function switchImg(){
			var anchors = container.find('li');
			var first = anchors.eq(0);
			var second = anchors.eq(1);
			first.fadeOut(200).appendTo(container);
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
});