$(document).ready(function () {
	// 	При натискане на линк от навигацията или логото:
	// 		- ако потребителя не е на страницата, до която води линка:
	// 			- използвайте AJAX, за да покажете новата страница без да презареждате страницата
	// 			- покажете индикатор, който да остане видим докато трае зареждането
	// 			- покажете уникалното съдържание от новозаредената страница
	// 			- след всяко зареждане обновете навигацията, така че тя да показва коя страница е представена на потребителя в момента
	// 		- ако потребителя е на същата страница не трябва да се случва нищо
	//
	// 	Демо: https://s3-eu-west-1.amazonaws.com/codecraft-production/uploads/88adc23123ad019dd47f8d1df0f85f15/single-page-website.webm

	$(document).on("click", ".navbar-header a, .navbar-nav a", function (e) {
		e.preventDefault();
		let pageURL = $(this).attr('href');
		history.pushState(null, '', pageURL);
		$.ajax({
			type: "GET",
			url: pageURL,
			dataType: 'html',
			beforeSend: function(){
				$('#loader').show();
			}
			success: function(){
				$('main').html();
			} 
			complete: function(){
				$('#loader').hide();
			},
		})
	});
});