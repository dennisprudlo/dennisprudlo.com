/**
 * Creates a smooth scroll effect for the navigation items each
 * time the users jumps to a hashpoint
 * @method
 * @param  {Click-Event} event	The onClick-Event item
 * @return {void}
 */
document.querySelectorAll('[data-smooth-scroll]').forEach((item) => item.addEventListener('click', function () {

	//
	// Check whether a hash anchor was set
	if (this.hash !== '') {

		//
		// Retrieve the target element where the site should scroll to
		let target	= document.querySelector(this.hash);

		//
		// Prevent the default click behavior
		event.preventDefault();

		//
		// Define animation properties
		let properties = {
			scrollTop: target.getBoundingClientRect().top + document.body.scrollTop
		}

		new Animator(document.documentElement, properties, 400, 'easeIn').run(() => {
			//
			// Set the urls hash value on complete
			window.location.hash = this.hash;
		});

	}

}));
