//
// Wrap in ready function so preventDefault won't be a global variable
// $(document).ready(function() {
//
// 	//
// 	// Define tags and their events to prevent the default for
// 	let preventDefault = {
// 		'a':		'click',
// 		'button':	'click'
// 	}
//
// 	//
// 	// Iterate through all tags to apply the events
// 	for (let tag in preventDefault) {
//
// 		//
// 		// Check for valid json object
// 		if (preventDefault.hasOwnProperty(tag) ) {
//
// 			//
// 			// Store the event and the node information
// 			let e		= preventDefault[tag];
// 			let node	= tag + '[data-prevent-default="true"]'
//
// 			//
// 			// Apply event
// 			$('body').on(e, node, (event) => {
// 				event.originalEvent.preventDefault();
// 				event.preventDefault();
// 			});
//
// 		}
//
// 	}
//
// });
