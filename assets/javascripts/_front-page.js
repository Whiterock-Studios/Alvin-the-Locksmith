jQuery(document).ready(function($) {

  function boxSize() {

			$counter = 0;
			$height = Array();

			$('.equal__box').each(function() {
				$height[$counter] = $(this).outerHeight();
				$counter++;
			});

			$biggest = Math.max.apply(Math, $height);

			$('.equal__box').each(function() {
				if ($(this).outerHeight() < $biggest){
					$newSpacer = ($biggest - $(this).outerHeight());
					$(this).find('.alvin__button').css('margin-top',  $newSpacer + 'px');
				}
			});

	} // end of box size

	boxSize();
});
