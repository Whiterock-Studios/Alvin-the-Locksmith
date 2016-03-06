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
					$halfNewSpacer = $newSpacer / 2;
					$(this).find('.home__section__2__box__inner').css('margin-bottom',  $halfNewSpacer + 'px');
					$(this).find('.home__section__2__box__inner').css('margin-top',  $halfNewSpacer + 'px');
				}
			});

	} // end of box size

	boxSize();
});
