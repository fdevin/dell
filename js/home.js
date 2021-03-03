jQuery(document).ready(function($) {
    var owl = $('.dell-hero-owl');
    owl.owlCarousel({
        items: 1,
        nav: false,
        onInitialized: counter,
        onTranslated: counter
    });
    $(".dell-hero-owl-next").click(function() {
        owl.trigger('next.owl.carousel');
    });
    $(".dell-hero-owl-prev").click(function() {
        owl.trigger('prev.owl.carousel');
    });

    function counter(event) {
        var element = event.target;
        var items = event.item.count;
        var item = event.item.index + 1;
        $('#counter').html(item + " / " + items)
    }

    $('.reviews-slider').owlCarousel({
        loop: true,
        nav: false,
        responsiveClass: true,
        items: 3,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },

            1000: {
                items: 3
            }
        }
    });
    $(".dell-reviews-owl-next").click(function() {
        $(".reviews-slider").trigger('next.owl.carousel');
    });
    $(".dell-reviews-owl-prev").click(function() {
        $(".reviews-slider").trigger('prev.owl.carousel');
    });




	var maxLength = 320;
	$(".show-read-more").each(function(){
		var myStr = $(this).text();
		if($.trim(myStr).length > maxLength){
			var newStr = myStr.substring(0, maxLength);
			var removedStr = myStr.substring(maxLength, myStr.length);
			$(this).empty().html(newStr);
			$(this).append(' <a href="javascript:void(0);" class="read-more nav-link-continue">Contioune Reading<img src="img/icons/dropdown-close-w.svg" alt="icon" width="16"></a>');
			$(this).append('<span class="more-text">' + removedStr + '</span>');
		}
	});
	$(".read-more").click(function(){
		$(this).siblings(".more-text").contents().unwrap(1000);
		$(this).remove();
	});
	
	
	
	var maxLength = 320;
	$(".show-read-more-learn").each(function(){
		var myStr = $(this).text();
		if($.trim(myStr).length > maxLength){
			var newStr = myStr.substring(0, maxLength);
			var removedStr = myStr.substring(maxLength, myStr.length);
			$(this).empty().html(newStr);
			$(this).append(' <a href="javascript:void(0);" class="read-more nav-link-continue learn-more">Learn More<img src="img/icons/dropdown-close-w.svg" alt="icon" width="16"></a>');
			$(this).append('<span class="more-text">' + removedStr + '</span>');
		}
	});
	$(".read-more").click(function(){
		$(this).siblings(".more-text").contents().unwrap(1000);
		$(this).remove();
	});

});