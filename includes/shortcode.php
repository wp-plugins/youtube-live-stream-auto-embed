<?php

	$yt_channel_name = "yt_channel";
	$yt_api_name = "yt_apikey";
	$yt_player_width = "yt_width";
	$yt_player_height = "yt_height";
	$yt_player_style = "yt_style";
 
	if(isset($_POST["get"])){ 
	
    	$yt_channel_show = $_POST[$yt_channel_name];
    	$yt_apikey_show = $_POST[$yt_api_name];
    	$yt_width_show = $_POST[$yt_player_width];
    	$yt_height_show = $_POST[$yt_player_height];
		$yt_style_show = $_POST[$yt_player_style];    
}
	else{
		
    	$yt_channel_show = get_option($yt_channel_name);
		$yt_apikey_show = get_option($yt_api_name);
		$yt_width_show = get_option($yt_player_width);
		$yt_height_show = get_option($yt_player_height);
		$yt_style_show = get_option($yt_player_style);
}

?>
		<div class="<?php echo $yt_style_show; ?>">
			<div id="player"></div>
        </div>
        
<script>

	var YtChannelId = '<?php echo $yt_channel_show; ?>';
    var Yt_API_KEY = '<?php echo $yt_apikey_show; ?>';
    var videoId;
    
      function init() {
        gapi.client.setApiKey(Yt_API_KEY);
        gapi.client.load('youtube', 'v3').then(makeRequest);
      }
      
      function makeRequest() {
        var request = gapi.client.youtube.search.list({
            part: 'snippet',
            channelId: YtChannelId,
			playerVars: { 'autoplay': 1, 'controls': 1,'autohide':1, },
            maxResults: 1,
            type: 'video',
            eventType: 'live'
            
        });
        
        request.then(function(response) {
          processResult(response);
        }, function(reason) {
          console.log('Error: ' + reason.result.error.message);
        });
        
      }
      
      function processResult(result){
        
        console.log(result);
        
        var json = JSON.parse(result.body);
        if(json.pageInfo.totalResults == 0){} 
		
		else {
        videoId = json.items[0].id.videoId;
        createIframe();    
        }
        
      }
	  
      function createIframe(){
      
      var tag = document.createElement('script');
      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
      }
      
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '<?php echo $yt_height_show; ?>',
          width: '<?php echo $yt_width_show; ?>',
          videoId: videoId,
          events: {
            'onReady': onPlayerReady,
          }
        });
      }
  
      function onPlayerReady(event) {
        event.target.playVideo();
      }
	  
  </script>
  
  <script src="https://apis.google.com/js/client.js?onload=init"></script>
  