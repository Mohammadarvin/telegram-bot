<?php

    echo '<div class="wrap">

        <div id="welcome-panel" class="welcome-panel" style="padding-bottom: 20px;">

			<div class="welcome-panel-content">

	<img src="' .plugins_url('img/telegrambot.png',__FILE__). '" width="30%" />

	<div class="welcome-panel-column-container">

	<div class="welcome-panel-column" style="text-align:center;padding-top:50px; ">

			<a class="button button-primary button-hero load-customize hide-if-no-customize" href="admin.php?page=telegram_send">Send a Message</a>
					<p class="hide-if-no-customize">or, <a href="edit.php?post_type=telegram_commands">manage your commands</a></p>

			</div>





	<div class="welcome-panel-column">




		<h4>Stats</h4>




		<ul>




					<li><a href="edit.php?post_type=telegram_subscribers" class="welcome-icon dashicons-admin-users">'.wp_count_posts('telegram_subscribers')->publish.' subscribers</a></li>




			<li><a href="edit-tags.php?taxonomy=telegram_groups" class="welcome-icon welcome-add-page">'. wp_count_terms( 'telegram_groups' ).' groups</a></li>




					<li><a href="edit.php?post_type=telegram_commands" class="welcome-icon dashicons-admin-settings">'.wp_count_posts('telegram_commands')->publish.' commands</a></li>




		</ul>




	</div>




	<div class="welcome-panel-column welcome-panel-last">









<div id="fb-root"></div>




<script>(function(d, s, id) {




  var js, fjs = d.getElementsByTagName(s)[0];




  if (d.getElementById(id)) return;




  js = d.createElement(s); js.id = id;




  js.src = "//connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v2.4&appId=251544361535439";




  fjs.parentNode.insertBefore(js, fjs);




}(document, \'script\', \'facebook-jssdk\'));</script>




<div class="fb-page" data-href="https://www.facebook.com/pages/Telegram-Bot-for-WordPress/385833691624022" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/pages/Telegram-Bot-for-WordPress/385833691624022"><a href="https://www.facebook.com/pages/Telegram-Bot-for-WordPress/385833691624022">Telegram Bot for WordPress</a></blockquote></div></div>









	</div>




	</div>




	</div>




		</div>';




?>