<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<!DOCTYPE html><html lang='en' class=''>
<head><script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/thesbros/pen/vxpMPp?q=discord&limit=all&type=type-pens" />


<style class="cp-pen-styles">@import url("https://fonts.googleapis.com/css?family=Roboto:300,500,700");
* {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
*:focus {
  outline: 0;
}

html, body {
  height: 100%;
  background: #121416;
  color: #FFF;
  font-size: 16px;
  font-family: "Roboto";
}

.container {
  height: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.vert-container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
  -ms-flex: 1;
  flex: 1;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
}

.servers {
  height: 100%;
  background: #1E2124;
  -webkit-box-flex: 0;
  -ms-flex: 0 0 70px;
  flex: 0 0 70px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  overflow-y: auto;
  padding: 18px 0 18px 0;
  -ms-overflow-style: none;
}
.servers::-webkit-scrollbar {
  display: none;
}

.channels {
  background: #2E3136;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-flex: 0;
      -ms-flex: 0 0 240px;
          flex: 0 0 240px;
}
.channels .channels-header {
  cursor: pointer;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-flex: 0;
      -ms-flex: 0 0 56px;
          flex: 0 0 56px;
  padding: 28px 24px;
  -webkit-box-shadow: 0 1px 0 #24272b, inset 0 -1px 0 rgba(0, 0, 0, 0.1);
          box-shadow: 0 1px 0 #24272b, inset 0 -1px 0 rgba(0, 0, 0, 0.1);
  -webkit-transition: background 0.15s ease;
  transition: background 0.15s ease;
}
.channels .channels-header .channels-header-dropdown {
  width: 18px;
  height: 18px;
  margin-left: auto;
  pointer-events: none;
}
.channels .channels-header .channels-header-dropdown use {
  stroke-dasharray: 7;
  -webkit-transform-origin: 50%;
          transform-origin: 50%;
  -webkit-transition: stroke-dasharray 0.2s ease, -webkit-transform 0.2s ease;
  transition: stroke-dasharray 0.2s ease, -webkit-transform 0.2s ease;
  transition: stroke-dasharray 0.2s ease, transform 0.2s ease;
  transition: stroke-dasharray 0.2s ease, transform 0.2s ease, -webkit-transform 0.2s ease;
}
.channels .channels-header:hover, .channels .channels-header:focus {
  background: #282b2f;
}
.channels .channels-header:focus use {
  stroke-dasharray: 14;
  -webkit-transform: rotate(-90deg);
          transform: rotate(-90deg);
}
.channels .channels-list-text, .channels .channels-list-voice {
  margin: 0 -20px 0 -20px;
}
.channels .channels-header-name {
  font-size: 1rem;
  font-weight: 500;
}
.channels .channel {
  cursor: pointer;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding: 8px 20px 10px 20px;
  opacity: 0.3;
  width: 100%;
}
.channels .channel .button {
  display: none;
  opacity: 0.2;
}
.channels .channel .button:hover, .channels .channel .button:focus {
  opacity: 1;
}
.channels .channel.active, .channels .channel:hover, .channels .channel:focus {
  opacity: 1;
}
.channels .channel.active .button, .channels .channel:hover .button, .channels .channel:focus .button {
  display: block;
}
.channels .channel .channel-name {
  font-size: 0.9rem;
  font-weight: 300;
}
.channels .channel .button:first-of-type {
  margin-left: auto;
  margin-right: 8px;
}
.channels .channel .button {
  width: 16px;
  height: 16px;
}
.channels .channel-text {
  position: relative;
}
.channels .channel-text.active, .channels .channel-text:hover, .channels .channel-text:focus {
  background: -webkit-gradient(linear, left top, right top, color-stop(85%, #282b30), to(#2e3136));
  background: linear-gradient(to right, #282b30 85%, #2e3136);
}
.channels .channel-text.active::before, .channels .channel-text:hover::before, .channels .channel-text:focus::before {
  content: " ";
  width: 2px;
  height: 100%;
  position: absolute;
  left: 0;
  background: #7289DA;
}
.channels .channel-text:not(.active):focus::before, .channels .channel-text:not(.active):hover::before {
  opacity: 0.25;
}
.channels .channel-text .channel-name::before {
  font-weight: 400 !important;
}
.channels .channels-list {
  -webkit-box-flex: 1;
      -ms-flex: 1 1;
          flex: 1 1;
  overflow-y: auto;
  padding: 0 20px;
}
.channels .channels-list ul {
  list-style: none;
}
.channels .channels-list .channels-list-header {
  cursor: pointer;
  margin-top: 20px;
  text-transform: uppercase;
  color: rgba(255, 255, 255, 0.3);
  font-size: 0.87rem;
  letter-spacing: 0.04rem;
  -webkit-transition: color 0.2s linear;
  transition: color 0.2s linear;
  line-height: 30px;
  position: relative;
}
.channels .channels-list .channels-list-header:hover, .channels .channels-list .channels-list-header:focus {
  color: #FFF;
}
.channels .channels-list .channels-list-header:hover::after, .channels .channels-list .channels-list-header:focus::after {
  opacity: 1;
}
.channels .channels-list .channels-list-header::after {
  position: absolute;
  top: 10px;
  right: 0;
  content: " ";
  width: 10px;
  height: 10px;
  opacity: 0.3;
  -webkit-transition: opacity 0.2s linear;
  transition: opacity 0.2s linear;
  background: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMCAxMCI+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTguOTksMy45OUg2LjAxVjEuMDFDNi4wMSwwLjQ1Miw1LjU1OCwwLDUsMFMzLjk5LDAuNDUyLDMuOTksMS4wMVYzLjk5SDEuMDFDMC40NTIsMy45OSwwLDQuNDQyLDAsNWMwLDAuNTU4LDAuNDUyLDEuMDEsMS4wMSwxLjAxSDMuOTlWOC45OUMzLjk5LDkuNTQ4LDQuNDQyLDEwLDUsMTBzMS4wMS0wLjQ1MiwxLjAxLTEuMDFWNi4wMUg4Ljk5QzkuNTQ4LDYuMDEsMTAsNS41NTgsMTAsNUMxMCw0LjQ0Miw5LjU0OCwzLjk5LDguOTksMy45OXoiLz48L3N2Zz4=) no-repeat 50%;
}
.channels .channels-footer {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-flex: 0;
      -ms-flex: 0 0 70px;
          flex: 0 0 70px;
  margin-top: auto;
  background: #282b30;
  border-top: 1px solid #1c1e21;
  padding: 0 10px;
}
.channels .channels-footer .channels-footer-details {
  margin-left: 10px;
}
.channels .channels-footer .channels-footer-controls {
  margin-left: auto;
  border: 1px solid #1c1e21;
  border-radius: 4px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
.channels .channels-footer .channels-footer-controls .button {
  display: block;
  width: 32px;
  height: 32px;
}
.channels .channels-footer .channels-footer-controls .button svg {
  width: 16px;
}
.channels .channels-footer .channels-footer-controls .button:hover svg, .channels .channels-footer .channels-footer-controls .button:focus svg {
  -webkit-filter: brightness(200%);
          filter: brightness(200%);
}
.channels .channels-footer .avatar {
  width: 30px;
  height: 30px;
  border-radius: 50%;
}
.channels .channels-footer .username, .channels .channels-footer .tag {
  display: block;
  font-weight: 300;
}
.channels .channels-footer .username {
  font-size: 0.9rem;
}
.channels .channels-footer .tag {
  color: rgba(255, 255, 255, 0.45);
  font-size: 0.7rem;
}

.menu {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 57px;
          flex: 0 0 57px;
  padding: 0 20px 0 20px;
  background: #36393E;
  border-bottom: 1px solid #303337;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.menu .menu-name {
  font-weight: bold;
  font-size: 1.3rem;
  letter-spacing: 0.05rem;
}

.hash-before::before, .channels .channel-text .channel-name::before, .menu .menu-name::before {
  content: "#";
  margin-right: 2px;
  font-weight: 300;
  color: #8A8E94;
}

.chat {
  background: #36393E;
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
}

.server {
  width: 50px;
  height: 50px;
  border-radius: 25px;
  background-color: #2E3136;
  background-repeat: no-repeat;
  margin-bottom: 8px;
  cursor: pointer;
  position: relative;
}
.server:not(.active) {
  -webkit-animation: server-hover-out 0.6s ease;
          animation: server-hover-out 0.6s ease;
}
.server:not(.active):hover, .server:not(.active):focus {
  -webkit-animation: server-hover-in 0.8s ease forwards;
          animation: server-hover-in 0.8s ease forwards;
}
.server .server-icon {
  border-radius: inherit;
  width: 100%;
  height: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}
.server .server-icon > img {
  border-radius: inherit;
  max-width: 100%;
}
.server.server-friends {
  margin-bottom: 46px;
  text-align: center;
}
.server.server-friends svg {
  max-width: 60%;
  max-height: 60%;
}
.server.server-friends.active::before {
  display: none;
}
.server.server-friends::after {
  content: "2 ONLINE";
  color: rgba(255, 255, 255, 0.3);
  pointer-events: none;
  font-weight: 300;
  font-size: 0.65rem;
  position: absolute;
  bottom: -35px;
  left: 3px;
  padding-bottom: 10px;
  border-bottom: 2px solid #2a2e32;
}
.server::before {
  position: absolute;
  top: 20px;
  left: -15px;
  content: " ";
  display: block;
  width: 10px;
  height: 10px;
  border-radius: 25px;
}
.server.active {
  border-radius: 15px;
  background-color: #7289DA;
}
.server.unread::before {
  background: #8A8E94;
}
.server.active::before {
  background: #FFF;
  height: 40px;
  top: 5px;
}
.server.active.unread::before {
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}

.button {
  background: #2E3136;
  border: 0;
  color: inherit;
  cursor: pointer;
  font: inherit;
  line-height: normal;
  overflow: visible;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}
.button > svg, .button > img {
  max-width: 100%;
  max-height: 100%;
}

.button-group .button:focus, .button-group .button:active {
  background: #3a3d44;
}
.button-group .button:not(:last-of-type) {
  border-right: 1px solid #1c1e21;
}
.button-group .button + .button {
  -webkit-box-shadow: inset 1px 0 0 #393c41;
          box-shadow: inset 1px 0 0 #393c41;
}

svg[id] {
  width: 0;
  position: absolute;
}

@-webkit-keyframes server-hover-in {
  0% {
    border-radius: 25px;
    background-color: #2E3136;
  }
  40% {
    border-radius: 12px;
  }
  70% {
    border-radius: 16.7px;
  }
  80% {
    background-color: #7289DA;
  }
  100% {
    border-radius: 15px;
    background-color: #7289DA;
  }
}

@keyframes server-hover-in {
  0% {
    border-radius: 25px;
    background-color: #2E3136;
  }
  40% {
    border-radius: 12px;
  }
  70% {
    border-radius: 16.7px;
  }
  80% {
    background-color: #7289DA;
  }
  100% {
    border-radius: 15px;
    background-color: #7289DA;
  }
}
@-webkit-keyframes server-hover-out {
  0% {
    border-radius: 15px;
    background-color: #7289DA;
  }
  45% {
    border-radius: 25px;
    background-color: #2E3136;
  }
  65% {
    border-radius: 25px;
  }
  75% {
    border-radius: 23.5px;
  }
  100% {
    border-radius: 25px;
  }
}
@keyframes server-hover-out {
  0% {
    border-radius: 15px;
    background-color: #7289DA;
  }
  45% {
    border-radius: 25px;
    background-color: #2E3136;
  }
  65% {
    border-radius: 25px;
  }
  75% {
    border-radius: 23.5px;
  }
  100% {
    border-radius: 25px;
  }
}
</style></head><body>
<main class="container">
	<aside class="servers">
		<div class="servers-collection">
			<div class="server focusable server-friends unread" role="button" aria-label="Friends unread">
				<div class="server-icon"><svg><use xlink:href="#icon-friends" /></svg></div>
			</div>
		</div>
		
		<div class="servers-collection">
			<div class="server focusable unread" role="button" aria-label="Discord Developers unread">
				<div class="server-icon"><img src="https://cdn.discordapp.com/icons/41771983423143937/edc44e98a690a1f76c5ddec68a0a6b9e.png" /></div>
			</div>
		</div>
		
		<div class="servers-collection">
			<div class="server focusable active" role="button" aria-label="My Server" aria-selected="true">
				<div class="server-icon"><img src="https://discordapp.com/assets/0e291f67c9274a1abdddeb3fd919cbaa.png" /></div>
			</div>
		</div>
	</aside>
	
	<aside class="channels">
		<header class="channels-header focusable">
			<h3 role="header" class="channels-header-name">My Server</h3>
			<svg role="button" aria-label="Dropdown" class="channels-header-dropdown"><use xlink:href="#icon-dropdown" /></svg>
		</header>
				
		<section class="channels-list">
			<header class="channels-list-header focusable">
				<h5>Text Channels</h5>
			</header>
			
			<ul class="channels-list-text">
				<li class="channel focusable channel-text active">
					<span class="channel-name">general</span>
					<button class="button" role="button" aria-label="Invite"><svg><use xlink:href="#icon-invite" /></svg></button>
					<button class="button" role="button" aria-label="settings"><svg><use xlink:href="#icon-channel-settings" /></svg></button>
				</li>
				
				<li class="channel focusable channel-text">
					<span class="channel-name">help</span>
					<button class="button" role="button" aria-label="Invite"><svg><use xlink:href="#icon-invite" /></svg></button>
					<button class="button" role="button" aria-label="settings"><svg><use xlink:href="#icon-channel-settings" /></svg></button>
				</li>
			</ul>
			
			<header class="channels-list-header focusable">
				<h5>Voice Channels</h5>
			</header>
		</section>
		
		<footer class="channels-footer">
			<img class="avatar" alt="Avatar" src="https://discordapp.com/assets/0e291f67c9274a1abdddeb3fd919cbaa.png" />
			<div class="channels-footer-details">
				<span class="username">yourself</span>
				<span class="tag">#0001</span>
			</div>
			<div class="channels-footer-controls button-group">
				<button role="button" aria-label="Mute" class="button button-mute"><svg><use xlink:href="#icon-mute" /></svg></button>
				<button role="button" aria-label="Deafen" class="button button-deafen"><svg><use xlink:href="#icon-deafen" /></svg></button>
				<button role="button" aria-label="Settings" class="button button-settings"><svg><use xlink:href="#icon-settings" /></svg></button>
			</div>
		</footer>
	</aside>
		
	<div class="vert-container">
		<menu type="toolbar" class="menu">
			<h2 class="menu-name">general</h2>
		</menu>
		
		<section class="chat">
		
		</section>
	</div>
</main>


<!-- ICONS -->
<svg id="icon-friends" viewBox="-289 382 32 27.1"><style id="style3">.st0{fill:#FFFFFF;} .st1{opacity:0.6;}</style><g id="g4145" fill="#fff"><path id="path5" d="M-273 409.1c-4.1 0-6.8-.6-7.9-1.7-.5-.6-.6-1.1-.6-1.3 0-.7.1-2.9.6-3.8.1-.3.5-1 4.5-2.4-1.6-1.4-2.6-4-2.6-7.1 0-4.2 2.3-7 5.9-7.1h.1c3.6.1 5.9 2.8 5.9 7.1 0 3.1-1 5.7-2.6 7.1 4 1.4 4.4 2.1 4.5 2.4.4.9.5 3.1.6 3.8 0 .2 0 .7-.6 1.3-1.1 1.1-3.7 1.7-7.8 1.7zm0-2c5.1 0 6.2-.9 6.4-1.1-.1-1.1-.2-2.3-.3-2.7-.6-.4-2.9-1.3-4.8-1.9l-.7-.2-.1-2 .7-.3c1.7-.6 2.8-3.1 2.8-6.1 0-3.1-1.5-5-3.9-5.1-2.5 0-4 2-4 5.1 0 3 1.1 5.5 2.8 6.1l.7.3-.1 2-.7.2c-1.9.6-4.2 1.5-4.8 1.9-.1.4-.3 1.6-.3 2.7.1.2 1.3 1.1 6.3 1.1z" class="st0"/><g id="g7" class="st1" opacity=".6"><path id="path9" d="M-257 402.4c0-.7-.1-2.9-.6-3.8-.1-.3-.5-1-4.5-2.4 1.6-1.4 2.6-4 2.6-7.1 0-4.2-2.3-7-5.9-7.1h-.1c-1.9 0-3.5.8-4.5 2.2.6.3 1.2.6 1.8 1 .7-.8 1.6-1.3 2.8-1.3 2.4 0 3.9 2 3.9 5.1 0 3-1.1 5.5-2.8 6.1l-.7.3.1 2 .7.2c1.9.6 4.3 1.5 4.8 1.9.1.4.3 1.6.3 2.7-.2.2-1 .8-3.8 1 .1.6.2 1.2.2 2 2.5-.2 4.2-.8 5-1.6.7-.5.7-1 .7-1.2z" class="st0"/><path id="path11" d="M-287 402.3c.1-1.1.2-2.3.3-2.7.6-.4 2.9-1.3 4.8-1.9l.7-.2.1-2-.7-.3c-1.6-.6-2.8-3.1-2.8-6.1 0-3.1 1.5-5 4-5.1 1.2 0 2.1.5 2.8 1.3.5-.4 1.1-.8 1.8-1-1-1.4-2.6-2.2-4.5-2.2h-.1c-3.6 0-5.9 2.8-5.9 7.1 0 3.1 1 5.7 2.6 7.1-4 1.4-4.4 2.1-4.5 2.4-.4.9-.5 3.1-.6 3.8 0 .2 0 .7.6 1.3.8.9 2.5 1.4 5.1 1.6 0-.7.1-1.4.2-2-2.9-.3-3.7-.9-3.9-1.1z" class="st0"/></g></g></svg>

<svg id="icon-mute" viewBox="0 0 16 16"><path fill="#5D6063" d="M12.5,8v1c0,2.2-1.8,4-4,4h-1c-2.2,0-4-1.8-4-4V8h-1v1 c0,2.8,2.2,5,5,5v1H7c-0.3,0-0.5,0.2-0.5,0.5C6.5,15.8,6.7,16,7,16h2c0.3,0,0.5-0.2,0.5-0.5C9.5,15.2,9.3,15,9,15H8.5v-1 c2.8,0,5-2.2,5-5V8H12.5z M8,12c1.9,0,3.5-1.6,3.5-3.5v-5C11.5,1.6,9.9,0,8,0C6.1,0,4.5,1.6,4.5,3.5v5C4.5,10.4,6.1,12,8,12z M5.5,3.5C5.5,2.1,6.6,1,8,1c1.4,0,2.5,1.1,2.5,2.5v5C10.5,9.9,9.4,11,8,11c-1.4,0-2.5-1.1-2.5-2.5V3.5z"/></svg>

<svg id="icon-deafen" viewBox="0 0 16 16"><path fill="#5D6063" d="M15.9,9C16,8.7,16,8.3,16,8c0-4.4-3.6-8-8-8C3.6,0,0,3.6,0,8 c0,0.3,0,0.7,0.1,1h0C0,9.2,0,9.3,0,9.5v4C0,14.3,0.7,15,1.5,15h2C4.3,15,5,14.3,5,13.5v-4C5,8.7,4.3,8,3.5,8h-2 C1.3,8,1.2,8,1,8.1C1,8.1,1,8,1,8c0-3.9,3.1-7,7-7c3.9,0,7,3.1,7,7c0,0,0,0.1,0,0.1C14.8,8,14.7,8,14.5,8h-2C11.7,8,11,8.7,11,9.5 v4c0,0.8,0.7,1.5,1.5,1.5h2c0.8,0,1.5-0.7,1.5-1.5v-4C16,9.3,16,9.2,15.9,9L15.9,9z M1.5,9h2C3.8,9,4,9.2,4,9.5v4 C4,13.8,3.8,14,3.5,14h-2C1.2,14,1,13.8,1,13.5v-4C1,9.2,1.2,9,1.5,9z M15,13.5c0,0.3-0.2,0.5-0.5,0.5h-2c-0.3,0-0.5-0.2-0.5-0.5 v-4C12,9.2,12.2,9,12.5,9h2C14.8,9,15,9.2,15,9.5V13.5z"/></svg>

<svg id="icon-settings" viewBox="0 0 16 16"><path fill="#5D6063" d="M8,5C6.3,5,5,6.3,5,8c0,1.7,1.3,3,3,3c1.7,0,3-1.3,3-3 C11,6.3,9.7,5,8,5z M8,10c-1.1,0-2-0.9-2-2c0-1.1,0.9-2,2-2s2,0.9,2,2C10,9.1,9.1,10,8,10z M16,8c0-1-0.8-1.9-1.8-2 c-0.1-0.3-0.3-0.7-0.4-1c0.7-0.8,0.6-1.9-0.1-2.7c-0.7-0.7-1.9-0.8-2.7-0.1c-0.3-0.2-0.6-0.3-1-0.4C9.9,0.8,9,0,8,0 C7,0,6.1,0.8,6,1.8C5.7,1.9,5.3,2.1,5,2.2C4.2,1.6,3.1,1.6,2.3,2.3C1.6,3.1,1.6,4.2,2.2,5C2.1,5.3,1.9,5.7,1.8,6C0.8,6.1,0,7,0,8 c0,1,0.8,1.9,1.8,2c0.1,0.3,0.3,0.7,0.4,1c-0.7,0.8-0.6,1.9,0.1,2.7c0.7,0.7,1.9,0.8,2.7,0.1c0.3,0.2,0.6,0.3,1,0.4 C6.1,15.2,7,16,8,16c1,0,1.9-0.8,2-1.8c0.3-0.1,0.7-0.3,1-0.4c0.8,0.7,1.9,0.6,2.7-0.1c0.7-0.7,0.8-1.9,0.1-2.7 c0.2-0.3,0.3-0.6,0.4-1C15.2,9.9,16,9,16,8z M13.4,9c-0.1,0.8-0.5,1.5-0.9,2.1l0.4,0.4c0.4,0.4,0.4,1,0,1.4c-0.4,0.4-1,0.4-1.4,0 l-0.4-0.4C10.5,13,9.8,13.3,9,13.4V14c0,0.6-0.4,1-1,1c-0.6,0-1-0.4-1-1v-0.6c-0.8-0.1-1.5-0.5-2.1-0.9l-0.4,0.4 c-0.4,0.4-1,0.4-1.4,0c-0.4-0.4-0.4-1,0-1.4l0.4-0.4C3,10.5,2.7,9.8,2.6,9H2C1.4,9,1,8.6,1,8c0-0.6,0.4-1,1-1h0.6 C2.7,6.2,3,5.5,3.5,4.9L3.1,4.5c-0.4-0.4-0.4-1,0-1.4c0.4-0.4,1-0.4,1.4,0l0.4,0.4C5.5,3,6.2,2.7,7,2.6V2c0-0.6,0.4-1,1-1 c0.6,0,1,0.4,1,1v0.6c0.8,0.1,1.5,0.5,2.1,0.9l0.4-0.4c0.4-0.4,1-0.4,1.4,0c0.4,0.4,0.4,1,0,1.4l-0.4,0.4C13,5.5,13.3,6.2,13.4,7 H14c0.6,0,1,0.4,1,1c0,0.6-0.4,1-1,1H13.4z"/></svg>

<svg id="icon-dropdown" viewBox="0 0 18 18"><style>.dd{stroke:#ABADAF;stroke-width:2px;stroke-dashoffset:1;stroke-dasharray:inherit}</style><path class="dd" stroke="#FFF" d="M4.5 4.5l9 9" stroke-linecap="round"></path><path class="dd" stroke="#FFF" d="M13.5 4.5l-9 9" stroke-linecap="round"></path></svg>

<svg id="icon-invite" viewBox="0 0 16 16"><path fill="#fff" d="M6.3,3.4L8,1.7v9.8C8,11.8,8.2,12,8.5,12C8.8,12,9,11.8,9,11.5V1.7l1.7,1.7c0.2,0.2,0.5,0.2,0.7,0c0.2-0.2,0.2-0.5,0-0.7L8.9,0.2c0,0,0,0,0-0.1C8.8,0,8.6,0,8.5,0c0,0,0,0,0,0c0,0,0,0,0,0C8.4,0,8.2,0,8.1,0.1c0,0,0,0,0,0.1L5.6,2.7c-0.2,0.2-0.2,0.5,0,0.7C5.8,3.5,6.1,3.5,6.3,3.4z M14,4h-1.5v1h1C13.8,5,14,5.2,14,5.5v9c0,0.3-0.2,0.5-0.5,0.5h-10C3.2,15,3,14.8,3,14.5v-9C3,5.2,3.2,5,3.5,5h1V4H3C2.4,4,2,4.4,2,5v10c0,0.6,0.4,1,1,1h11c0.6,0,1-0.4,1-1V5C15,4.4,14.6,4,14,4z"/></svg>

<svg id="icon-channel-settings" viewBox="0 0 16 16"><path fill="#fff" d="M8,5C6.3,5,5,6.3,5,8c0,1.7,1.3,3,3,3c1.7,0,3-1.3,3-3 C11,6.3,9.7,5,8,5z M8,10c-1.1,0-2-0.9-2-2c0-1.1,0.9-2,2-2s2,0.9,2,2C10,9.1,9.1,10,8,10z M16,8c0-1-0.8-1.9-1.8-2 c-0.1-0.3-0.3-0.7-0.4-1c0.7-0.8,0.6-1.9-0.1-2.7c-0.7-0.7-1.9-0.8-2.7-0.1c-0.3-0.2-0.6-0.3-1-0.4C9.9,0.8,9,0,8,0 C7,0,6.1,0.8,6,1.8C5.7,1.9,5.3,2.1,5,2.2C4.2,1.6,3.1,1.6,2.3,2.3C1.6,3.1,1.6,4.2,2.2,5C2.1,5.3,1.9,5.7,1.8,6C0.8,6.1,0,7,0,8 c0,1,0.8,1.9,1.8,2c0.1,0.3,0.3,0.7,0.4,1c-0.7,0.8-0.6,1.9,0.1,2.7c0.7,0.7,1.9,0.8,2.7,0.1c0.3,0.2,0.6,0.3,1,0.4 C6.1,15.2,7,16,8,16c1,0,1.9-0.8,2-1.8c0.3-0.1,0.7-0.3,1-0.4c0.8,0.7,1.9,0.6,2.7-0.1c0.7-0.7,0.8-1.9,0.1-2.7 c0.2-0.3,0.3-0.6,0.4-1C15.2,9.9,16,9,16,8z M13.4,9c-0.1,0.8-0.5,1.5-0.9,2.1l0.4,0.4c0.4,0.4,0.4,1,0,1.4c-0.4,0.4-1,0.4-1.4,0 l-0.4-0.4C10.5,13,9.8,13.3,9,13.4V14c0,0.6-0.4,1-1,1c-0.6,0-1-0.4-1-1v-0.6c-0.8-0.1-1.5-0.5-2.1-0.9l-0.4,0.4 c-0.4,0.4-1,0.4-1.4,0c-0.4-0.4-0.4-1,0-1.4l0.4-0.4C3,10.5,2.7,9.8,2.6,9H2C1.4,9,1,8.6,1,8c0-0.6,0.4-1,1-1h0.6 C2.7,6.2,3,5.5,3.5,4.9L3.1,4.5c-0.4-0.4-0.4-1,0-1.4c0.4-0.4,1-0.4,1.4,0l0.4,0.4C5.5,3,6.2,2.7,7,2.6V2c0-0.6,0.4-1,1-1 c0.6,0,1,0.4,1,1v0.6c0.8,0.1,1.5,0.5,2.1,0.9l0.4-0.4c0.4-0.4,1-0.4,1.4,0c0.4,0.4,0.4,1,0,1.4l-0.4,0.4C13,5.5,13.3,6.2,13.4,7 H14c0.6,0,1,0.4,1,1c0,0.6-0.4,1-1,1H13.4z"/></svg>
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
<script >var $ = document.querySelectorAll.bind(document);
$(".focusable, .button").forEach(function (el) {
    // blur only on mouse click
    // for accessibility, keep focus when keyboard focused
    el.addEventListener("mousedown", function (e) { return e.preventDefault(); });
    el.setAttribute("tabindex", "0");
});
$(".server").forEach(function (el) {
    el.addEventListener("click", function () {
        var activeServer = $(".server.active")[0];
        activeServer.classList.remove("active");
        activeServer.removeAttribute("aria-selected");
        el.classList.add("active");
        el.setAttribute("aria-selected", true);
    });
});
$(".channel-text").forEach(function (el) {
    el.addEventListener("click", function () {
        $(".channel-text.active")[0].classList.remove("active");
        el.classList.add("active");
    });
});
// focus/blur on channel header click
$(".channels-header")[0].addEventListener("click", function (e) {
    e.preventDefault();
    var focused = document.activeElement === e.target;
    focused ? e.target.blur() : e.target.focus();
});

//# sourceURL=pen.js
</script>
</body></html>