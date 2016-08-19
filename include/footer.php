
<div class="container-fluid">
<div class="row">
	<div class="bottom">
	</div>
</div>
</div>
</div><!-- main-warapper -->

<script src="js/jquery.min.js"></script>
<script src="js/jquery.fittext.js"></script>
<script src="js/jquery.lettering.js"></script>
<script src="js/jquery.textillate.js"></script>
<script src="js/wow.js"></script>
<script src="js/malsap.js"></script>
<script src="js/carousel.js"></script>
<script src="js/bootstrap.js"></script>

<script>
	$(document).ready(function() {
	$('.tlt').textillate({
		loop: true,
		minDisplayTime: 1000,
		// initialDelay: 1000,
    	shuffle: true,
 	});
	new WOW().init();
 	
	$('.tabs-a').click(function(e) {
		e.preventDefault();
		var name = $(this).attr('href');
		$(name).show().siblings('div').hide();
		$(name).addClass('bounceInRight').siblings().removeClass('fadeInRight');
		$(this).parent().addClass('some').siblings().removeClass('some');
	});
		$('.tabs-a').eq(0).trigger('click');
		// $('.tabs-a').parent.eq(0).trigger('some');
	$('[data-icon],[data-letter]').each(function(e) {
		var d = $(this).data(),
			el = $(this);
		['before', 'main', 'after'].forEach(function(v) {
			if(d.icon) {
				$('<span />', {
					class: [d.icon, v].join(' '),
				}).appendTo(el);
			} else if(d.letter) {
				$('<span />', {
					class: v,
					text: d.letter
				}).appendTo(el);
			}
		});
	})
	
var mobHeader = $('.mobile-inner-header');
var body = $('.header');
	$(window).scroll(function() {
		var h = mobHeader.scrollTop();
		
		var top = $(this).scrollTop();
	
		if(top >= 680) {
			body.addClass('scrolled fadeInDown');
		} else {
			body.removeClass('scrolled fadeInDown');
		}
		if(top > 265) {
			mobHeader.addClass('pos-fixed fadeInDown');
		} else {
			mobHeader.removeClass('pos-fixed fadeInDown');
		}
	});
$('.a').click(function(e) {
		e.preventDefault();
		var link = $(this).attr('href');
		var targetEl = $(link);
		var topOffset = targetEl.offset().top;
		$('body').animate({
			scrollTop: topOffset
		});
		$(this).parent('li').addClass('active').siblings('li').removeClass('active');
	});
// responsive script here
$(".mobile-inner-header-icon").click(function(){
	$(this).toggleClass("mobile-inner-header-icon-click mobile-inner-header-icon-out");
	$(".mobile-inner-nav").slideToggle(250);
	
});

$(".mobile-inner-nav a").each(function( index ) {
  	$( this ).css({'animation-delay': (index/10) + 's'});
  });
});

// multiple images slider
$('#myCarousel').carousel({
  interval: 20000
})

$('.carousel .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  for (var i=0;i<2;i++) {
    next=next.next();
    if (!next.length) {
    	next = $(this).siblings(':first');
  	}
    
    next.children(':first-child').clone().appendTo($(this));
  }
});
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
<!-- for ripple effec  -->
<script type="">
	(function (window, $) {
  $(function() {
    $('.ripple').on('click', function (event) {
      
      var $div = $('<div/>'),
          btnOffset = $(this).offset(),
      		xPos = event.pageX - btnOffset.left,
      		yPos = event.pageY - btnOffset.top;
      

      
      $div.addClass('ripple-effect');
      var $ripple = $(".ripple-effect");
      
      $ripple.css("height", $(this).height());
      $ripple.css("width", $(this).height());
      $div
        .css({
          top: yPos - ($ripple.height()/2),
          left: xPos - ($ripple.width()/2),
          background: $(this).data("ripple-color")
        }) 
        .appendTo($(this));

      window.setTimeout(function(){
        $div.remove();
      }, 2000);
    });
    
  });
})(window, jQuery);
</script>
<!-- for ripple effec  End-->


<script>
	window.onload = function() {
		document.getElementById('main-wrapper').style.display = 'block';
		document.getElementById('preloader').style.display = 'none';
	}
</script>
</body>
</html>