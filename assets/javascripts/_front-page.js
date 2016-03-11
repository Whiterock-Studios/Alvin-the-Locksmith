jQuery(document).ready(function($) {

  function boxSize() {

			$counter = 0;
			$height = Array();

			$('.home__section__2__box').each(function() {
				$height[$counter] = $(this).outerHeight();
				$counter++;
			});

			$biggest = Math.max.apply(Math, $height);

			$('.home__section__2__box').each(function() {
				if ($(this).outerHeight() < $biggest){
					$newSpacer = ($biggest - $(this).outerHeight());
					$(this).find('.alvin__button').css('margin-top',  $newSpacer + 'px');
				}
			});

	} // end of box size

	boxSize();
});
