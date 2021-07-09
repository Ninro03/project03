$(function(){
	$.getJSON('http://api.openweathermap.org/data/2.5/weather?id=1835848&appid=2d7d483d9d5c38a2f00499389b32de9e&units=metric',function(data){
		//alert(data.city.name);
		//alert(data.list[0].main.temp_min);
		var $minTemp = data.main.temp_min.toFixed(1);
		var $maxTemp = data.main.temp_max.toFixed(1);
		var $cTemp = data.main.temp.toFixed(1);
		var $cwind = data.wind.speed.toFixed(1);
		var $chumidity = data.main.humidity;
		//alert(new Date(Date.now()));
		var now = new Date(Date.now());
		var month = now.getMonth()+1;
		/* var $cDate = now.getFullYear() +'년 '+ month+'월 ' + now.getDate()+'일';
		var $cHour = now.getHours()+'시 ' + now.getMinutes() +'분'; */
		//var $cDate = data.dt;
		var $wIcon = data.weather[0].icon;

		$('.clowtemp').prepend($minTemp);
		$('.chightemp').prepend($maxTemp);
		$('.cwind').prepend($cwind);
		$('.chumidity').prepend($chumidity);
		/* $('.date').append($cDate);
		$('.hour').append($cHour); */
		$('.ctemp').prepend($cTemp);
		$('.cicon').append('<img src="http://openweathermap.org/img/wn/'+$wIcon+'.png" />');
	});

	// var weather = $('.temp > div');
	// weather.hover(
		// function(){
			// var tg = $(this);
			// var con = tg.find('>div');
			// var conHeight = con.find('span').innerHeight();

			// con.animate({height:conHeight},{duration:500,queue:false,easing:'easeOutCubic'});
		// },
		// function(){
			// var tg = $(this);
			// var con = tg.find('>div');
			// var conHeight = con.find('span').innerHeight();

			// con.animate({height:0},{duration:500,queue:false,easing:'easeOutCubic'});
		// }
	// );
});
