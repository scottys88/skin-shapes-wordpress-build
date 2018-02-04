//Mobile menu open/ close and chaning the button
$('.mobile-menu-toggle').click(function() {
	var $mobileMenu = $('.mobile-menu');
	var $menuToggle = $('.menuButton i');
	if($mobileMenu.hasClass('inactive')) {
	   $mobileMenu.removeClass('inactive').addClass('active');
	
	
	if($menuToggle.hasClass('ion-navicon-round')) {
	   $menuToggle.removeClass('ion-navicon-round');
		$menuToggle.addClass('ion-close-round');
		
	   }
		else {
			console.log('eat-shit');
		}
	}
	else {
		 $mobileMenu.removeClass('active').addClass('inactive'); $menuToggle.removeClass('ion-close-round');
		 $menuToggle.addClass('ion-navicon-round');	 
		}
							   
	
});

var a = "scott";
$(document).ready(function(){
	console.log('eat shit');
});

//Slider carousel
$(document).ready(function(){
  $('.slider-shop').slick({
    accessibility: true,
	nextArrow: '<img src="../img/chevron_right1600.png" style=  "height: 50px">',
	centerMode: true,
	draggable: true,
	variableWidth: true,
	centerPadding: '10px',
	slidesToShow: 1,
	arrows: true,
	adaptiveHeight: true,
	 appendArrows: $('.left-arrow'),
	 prevArrow: $('.left-arrow'),
	 nextArrow: $('.right-arrow'),

	responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
      }
	}]
  });
});

//script to bring in instagram feed

 var bigfeed = new Instafeed({
        get: 'user',
	 	get: 'tagged',
	 	tagName: 'shop',
	 	userId: '3293670556',
	 	target: 'slider-container',
	 	clientId: 'f144b7bbf1414833a1f523eea96f9329',
        resolution: 'standard_resolution',
        template: '<div><a href="{{link}}"><img src="{{image}}"></a></div>',
	    accessToken: '3293670556.f144b7b.6a19faba7c3447049aad844021b1d272',
        after: function () {
       		$('.slider-container').slick({
				accessibility: true,
				nextArrow: '<img class="slider-img" src="../img/chevron_right1600.png" style=  "height: 50px">',
				centerMode: true,
				draggable: true,
				variableWidth: true,
				centerPadding: '10px',
				slidesToShow: 1,
				arrows: true,
				adaptiveHeight: true,
				 appendArrows: $('.left-arrow'),
				 prevArrow: $('.left-arrow'),
				 nextArrow: $('.right-arrow'),

				responsive: [
				{
				  breakpoint: 768,
				  settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					infinite: true,
					dots: false,
				  }
				}]
			  });
			}
});
    
    

bigfeed.run();