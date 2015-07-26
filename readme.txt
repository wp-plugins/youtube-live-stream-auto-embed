=== Youtube Live Stream Auto Embed===
Contributors: sykemedia
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=7SCTYGSQ3R3ME
Author: Wordpress Youtube Live Stream
Link: http://www.wordpressyoutubelivestream.com/
Tags: YouTube, Videoplayer, Auto Embed, YouTube Live stream, Shortcode, live-streaming, API v3
Requires at least: 3.4
Tested up to: 4.2.3
Stable tag: 1.0.0
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Provides a shortcode to automatically embed the latest video or current live stream of a specified YouTube channel.

== Description ==

This Wordpress plugin provides a shortcode to automatically embed the latest video or current live stream of a specified YouTube channel. [youtube-live]
It comes with an options page to let you set the default options for YouTube channel. Height, Width, Responsive Player.

When NOT streaming live automatically embed a YouTube Channels latest uploaded video/previous live event.

How it works (<a href="http://www.wordpressyoutubelivestream.com/" target="_blank">View LIVE Demo</a>)

A. If you're currently live, automatically display the live video. (Free Version)

B. If you're not currently live, display the previous upload/live event. (<a href="http://www.wordpressyoutubelivestream.com/plugin/youtube-live-stream-auto-embed-wordpress-plugin-youtube-live-wp-plugin/" target="_blank">Pro Version</a>)

Latest YouTube API V3.

== Installation ==

1. Upload the complete `youtube-live-stream-auto-embed` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to the plugins settings page located in in the settings tab of the Wordpress admin menu and setup your default settings
4. Paste the Youtube Live shortcode in a page or post [youtube-live]
5. ALL DONE!

**Make Any Shortcode Work in a Widget**

To make the shortcode work in a widget you need to add this line to your functions.php file

add_filter('widget_text', 'do_shortcode');

Your Functions file is located here...

http://www.yourwebsite.com/wp-content/themes/YOURTHEME/functions.php

**YouTube API Credentials**

1. Go to the Google Developers Console <a href="https://console.developers.google.com/project" target="_blank">www.console.developers.google.com/project</a>
2. Select a project, or create a new one
3. In the sidebar on the left, expand APIs & auth. Next, click APIs. In the list of APIs, make sure the status is ON for the YouTube Data API v3 by creating a new Public API access key.

**YouTube Channel ID Code**

1. Find your YouTube Channel ID by visting <a href="https://www.youtube.com/account_advanced" target="_blank">www.youtube.com/account_advanced</a>

**YouTube Channel User Name**

1. To find you YouTube Name go to YouTube and click on your Channel, then click on Videos, the Channel Name will appear in the url bar in your web browser.

example: https://www.youtube.com/user/USERNAME/videos

== Frequently Asked Questions ==

= Is it possible to set the video start playing automatically when NOT streaming live? =

Yes, but YouTube does NOT count autoplay videos as views towards your videos view count. Only LIVE events play automatically.

== Screenshots ==

1. Auto embed youtube live stream with a shortcode
2. Youtube Live Stream Auto Embed settings page

== Changelog ==

= 1.0.0 =
* Created June 29, 2015

== Upgrade Notice ==

= 1.0 =
First version release.

== Credits ==
* [sykemedia](https://sykemedia.net/creative) - for plugin development
