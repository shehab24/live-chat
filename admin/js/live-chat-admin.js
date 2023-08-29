(function( $ ) {
	'use strict';

	/**
	 * All of the code for your admin-facing JavaScript source
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

	$(document).ready(function() {

		$(document).on("click" , "#admin_send_btn" , function(){
			var admin_send_input = $("#admin_send_input").val();
             
			var data = {};
			data['admin_send_input'] = admin_send_input;
			data['action'] = 'save_msg_into_database_from_admin';
			$.ajax({
			 data: data,
			 url: 'admin-ajax.php',
			 type: 'POST',
			 success: function(res) {
				 console.log(res);
			 },
			 error:function(error){
				 console.log(error);
			 }
		 });

		});

	});

})( jQuery );
