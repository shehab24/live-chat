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

	$(document).ready(function() {
		$('#chatIcon').click(function() {
		  $('.chat_form').css('display', 'block');
		});

		$('#submit_btn').click(function() {

				var user_name = $("#user_name").val();
				var user_email = $("#user_email").val();
				
				var data = {};
				data['user_name'] = user_name;
				data['user_email'] = user_email;
				data['action'] = 'save_public_chating_user_into_database';
				$.ajax({
				data: data,
				url: ajax_obj.ajax_url,
				type: 'POST',
				success: function(res) {
					console.log(res);
					$('.chat_form').css('display', 'none');
					$('#chatBox').css('display', 'block');
				},
				error:function(error){
					console.log(error);
				}
			});

		});
	  
		$('#closeButton').click(function() {
		  $('#chatBox').css('display', 'none');
		});
	  
		$('#sendButton').click(function() {
		  const message = $('#messageInput').val();
		  if ($.trim(message) !== '') {
			const messageElement = $('<div class="message"></div>').text(message);
			$('#chatMessages').append(messageElement);
			$('#messageInput').val('');
		  }
		});


	


	  });
	  


})( jQuery );



