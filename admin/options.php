<?php

	$yt_channel_name = "yt_channel";
	$yt_api_name = "yt_apikey";
	$yt_player_width = "yt_width";
	$yt_player_height = "yt_height";
 
	if(isset($_POST["submit"])){ 
    	$yt_channel_show = $_POST[$yt_channel_name];
    	update_option($yt_channel_name, $yt_channel_show);
		$yt_apikey_show = $_POST[$yt_api_name];
    	update_option($yt_api_name, $yt_apikey_show);
		$yt_width_show = $_POST[$yt_player_width];
    	update_option($yt_player_width, $yt_width_show);
		$yt_height_show = $_POST[$yt_player_height];
    	update_option($yt_player_height, $yt_height_show);
	 
    echo '<div id="message" class="updated fade"><p>Options Updates</p></div>';
}
	else{
    	$yt_channel_show = get_option($yt_channel_name);
		$yt_apikey_show = get_option($yt_api_name);
		$yt_width_show = get_option($yt_player_width);
		$yt_height_show = get_option($yt_player_height);
}

?>

<h2>Youtube Live Plugin Settings</h2>
<br />

    <fieldset>
            <legend><strong><u>Youtube Credentials</u></strong></legend>
            	<br />
        <form method="post" action=""> 
            	<strong>(Live Streaming)</strong> Enter a 'Youtube Channel ID' and 'Youtube API Key'.
            	<br /><br />
            <input type="text" name="<?php echo $yt_channel_name; ?>" value="<?php echo $yt_channel_show; ?>" required="required" /> &nbsp; <span><strong> * Youtube Channel ID</strong> &nbsp; Example: UCoMdktPbSTixAyNGwb-UYkQ</span>
            	<br /><br />
            <input type="text" name="<?php echo $yt_api_name; ?>" value="<?php echo $yt_apikey_show; ?>" required="required" /> &nbsp; <span><strong> * Youtube API Key</strong> &nbsp; Example: AIzaSyDtfQfxROiBBM1AydfRlOwypunxPwFgAB0 </span>
            	<br /><br />
            	Get your YouTube Data API Key from <a href="https://console.developers.google.com/project" target="_blank">Google Developers Console</a>.
            	<br /><br />
            	Get your YouTube Channel ID from <a href="https://www.youtube.com/account_advanced" target="_blank">YouTube Account Overview</a> .
            	<br /><br /><br />
            <legend><strong>Youtube Player Size</strong></legend>
            	<br />
            <input type="text" name="<?php echo $yt_player_width; ?>" value="<?php echo $yt_width_show; ?>" maxlength="4" size="4" placeholder="620" /> &nbsp; <span> Width </span>
            	<br /><br />
            <input type="text" name="<?php echo $yt_player_height; ?>" value="<?php echo $yt_height_show; ?>" maxlength="4" size="4" placeholder="380" /> &nbsp; <span> Height </span>
            	<br /><br /><br />
                <legend><strong><u>Pro Version Settings</u></strong> (<a href="http://www.wordpressyoutubelivestream.com/" target="_blank">Get Pro Version Here</a>)</legend>
            	<br />
                Enter a 'Youtube Channel Name' to display latest video when not streaming live. 
            	<br /><br />
            <input type="text" name="youtubebasicname" value="Channel Name" readonly /> &nbsp; <span><strong> <strike>* Youtube Channel Name</strike></strong> &nbsp; Example: skynews</span>
            	<br /><br /><br />
                <legend><strong>Player Alignment</strong></legend>
            	<br />
            <input type="radio" name="youtubeplayerstyle" value="yt-video-default" id="yt-align-default" checked="checked" disabled >
    		<label for="yt-align-default">Default</label> 
            	<br /> <br />
            <input type="radio" name="youtubeplayerstyle" value="yt-video-align" id="yt-align-center" disabled >
    		<label for="yt-align-center">Center</label>
            	<br /> <br />
            <input type="radio" name="youtubeplayerstyle" value="yt-video-container" id="yt-responsive" disabled >
    		<label for="yt-responsive">Responsive (Full Width)</label>
            	<br /><br /><br />
            <legend><strong>Youtube Player Options (when 'not' streaming live)</strong></legend>
            	<br />
            	<span> Player Video Title: </span> &nbsp;
  			<input type="radio" name="youtubeplayertitle" value="1" id="yt-title-on" disabled >
    		<label for="yt-title-on">SHOW</label> 
            	&nbsp; 
            <input type="radio" name="youtubeplayertitle" value="0" id="yt-title-on" disabled >
    		<label for="yt-title-off">HIDE</label>
    			<br /><br />
            	<span> Player Controls and Title: </span> &nbsp; 
            <input type="radio" name="youtubeplayercontrols" value="1" id="yton" disabled >
    		<label for="yton">SHOW</label> 
            	&nbsp; 
            <input type="radio" name="youtubeplayercontrols" value="0" id="ytoff" disabled >
    		<label for="ytoff">HIDE</label>
           		<br /><br />
            	<span> Player Controls Autohide: </span> &nbsp; 
            <input type="radio" name="youtubeplayerhide" value="1" id="yt-autohide-on" disabled >
    		<label for="yt-autohide-on">ON</label> 
            	&nbsp; 
            <input type="radio" name="youtubeplayerhide" value="0" id="yt-autohide-off" disabled >
    		<label for="yt-autohide-off">OFF</label>
            	<br /><br />
            <p><input type="submit" value="Save" class="button button-primary" name="submit" /></p>
        </form>
    </fieldset>        

	<h3><strong>How to display the Youtube Live Player</strong></h3>
    	<span> Copy &amp; Paste this shortcode into a page or post: <code>[youtube-live]</code> </span>
  			<br /><br />