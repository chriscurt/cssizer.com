<div id="cssTabs" class="cssizer_tabs">
	<!--<a href="#" id="cssVisualTab" class="roundedAll">CSS Visual</a>
	<a href="#" id="cssCodeTab" class="roundedAll active">CSS {}</a><a href="http://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fcssizer.com%2Fbuild%2Fpreview%2Fdefault" target="_blank" id="cssValidateTab" class="roundedAll">W3C Validate</a>
	-->
	<a href="#" id="htmlCodeTab">HTML &lt;&nbsp;&gt;</a>
	<a href="#" id="cssCodeTab">CSS {&nbsp;}</a>
	
	<a href="#" id="htmlVisualTab" class="unsaved">Save Changes</a>
	
	
	<? if( $build[ 'default' ] != TRUE and $build[ 'mode' ] == 'edit' ): ?>
		<a href="http://validator.w3.org/check?uri=http%3A%2F%2Fcssizer.com%2Fbuild%2Fpreview%2F<?=$build['view_key']?>" target="_blank" id="htmlValidateTab">W3C Validate</a>
		<a href="#" id="shareTab">Share</a>
	<?endif;?>
	
	<div id="twitterBox">

  	<? if( !isset($twitter_profile_image_url) ): ?>
  	
  	  <a href="/twitter" id="twitterLink">Login With Twitter</a>
  	  
  	<?else:?>

  	  <img class="twitterIcon" src="<?= $twitter_profile_image_url ?>" />
  	  <a href="#" id="twitterLink" class="showBuilds">@<?= $twitter_screen_name ?>&#x27;s builds</a>
	
	  <? endif ?>
	</div>
	
	<div id="versionNum">v<?= VERSION; ?></div>
<!--
<select id="themeSelector"> 
	<option value="ace/theme/textmate">TextMate</option> 
	<option value="ace/theme/eclipse">Eclipse</option> 
	<option value="ace/theme/dawn">Dawn</option> 
	<option value="ace/theme/idle_fingers">idleFingers</option> 
	<option value="ace/theme/pastel_on_dark">Pastel on dark</option> 
	<option value="ace/theme/twilight">Twilight</option> 
</select>
-->
</div>
