(function( $ ) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */
	$(document).ready(function(){
		saveProfile()
	});

	function saveProfile() {
		$('input[name=profileupdate]').on('click', function(){
			var nonance = $('#profile_unique').val();
			var pageRedirect = $('input[name=_wp_http_referer]').val();
			console.log(nonance);
			console.log(pageRedirect);
			console.log(localize_obj.page_path);
			if(nonance && pageRedirect == '/'+localize_obj.page_path+'/')
			{
				// $.ajax({
				// 	type : "post",
				// 	dataType : "json",
				// 	url : localize_obj.ajaxurl,
				// 	data : {action: "save_profile", post_id : nonance, nonce: nonance},
				// 	success: function(response) {
				// 	   if(response.type == "success") {
				// 		  jQuery("#vote_counter").html(response.vote_count)
				// 	   }
				// 	   else {
				// 		  alert("Your vote could not be added")
				// 	   }
				// 	}
				//  })   
				alert('Some thing interest coming soon');
			}
			console.log('Btn click')
		});		
	}

})( jQuery );
