/**
 * Creates a smooth scroll effect for the navigation items each
 * time the users jumps to a hashpoint
 * @method
 * @param  {Click-Event} event	The onClick-Event item
 * @return {void}
 */
$('[data-smooth-scroll]').on('click', 'a', function (event) {

	//
	// Check whether a hash anchor was set
	if (this.hash !== '') {

		//
		// Prevent the default click behavior
		event.preventDefault();

		//
		// Define animation properties
		let properties = {
			scrollTop: $(this.hash).offset().top
		}

		//
		// Animate the virtual scroll
		$('html, body').animate(properties, 500, () => {
			//
			// Set the urls hash value on complete
			window.location.hash = this.hash;
		});

	}

});
