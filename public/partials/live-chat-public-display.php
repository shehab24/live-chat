<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://shehab24.github.io/portfolio/
 * @since      1.0.0
 *
 * @package    Live_Chat
 * @subpackage Live_Chat/public/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="chat-icon" id="chatIcon">
    <img  src="https://www.pngmart.com/files/16/Bubble-Chat-Icon-PNG-Image.png" alt="Chat Icon" class="chat_icon_img">
  </div>
  
  <div class="form-container chat_form">
    <form>
      <h3>Enter Your name and email to start chat</h3>
      <div class="form-group ">
        <input type="text" id="user_name" name="name"  placeholder="Enter name"  required>
      </div>
      <div class="form-group">
        <input type="email" id="user_email" placeholder="Enter email" name="email" required>
      </div>
      <button type="button" id="submit_btn">Start Chat</button>
    </form>
  </div>

  <div class="chat-box" id="chatBox">
    <div class="chat-header">
      Chat
      <span class="close-button" id="closeButton">&times;</span>
    </div>
    <div  id="chatMessages">
    <div class="position-relative ">
                        <div class="chat-messages p-4">

                            <div class="chat-message-right pb-4">
                                <div>
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                        class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">
                                    <div class="text-muted small text-nowrap mt-2">2:33 am</div>
                                </div>
                                <div class="chat_text flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                                    <div class="font-weight-bold mb-1">You</div>
                                    Lorem ipsum dolor sit amet, vis erat denique in, dicunt prodesset te vix.
                                </div>
                            </div>

                            <div class="chat-message-left pb-4">
                                <div>
                                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png"
                                        class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                                    <div class="text-muted small text-nowrap mt-2">2:34 am</div>
                                </div>
                                <div class="chat_text flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                                    <div class="font-weight-bold mb-1">Sharon Lessman</div>
                                    Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal commodo.
                                </div>
                            </div>
                        </div>
                    </div>
    </div>
    <div class="chat-input">
      <textarea  id="messageInput" placeholder="Type your message..."></textarea>
      <button id="sendButton">Send</button>
    </div>
  </div>