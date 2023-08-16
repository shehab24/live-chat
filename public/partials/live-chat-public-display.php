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
  
  <div class="chat-box" id="chatBox">
    <div class="chat-header">
      Chat
      <span class="close-button" id="closeButton">&times;</span>
    </div>
    <div class="chat-messages" id="chatMessages">
      <!-- Chat messages will be displayed here -->
    </div>
    <div class="chat-input">
      <input type="text" id="messageInput" placeholder="Type your message...">
      <button id="sendButton">Send</button>
    </div>
  </div>