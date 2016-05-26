<?php

/*
Plugin Name: Recent Tweets Widget
Plugin URI: https://github.com/dilra14/recent-tweets-widget
Description: Recent Tweets Widget plugin for Twitter API v1.1 with Cache. It uses the new Twitter API v1.1 and stores tweets in the cache. It means that it will read status messages from your database and it doesn't query Twitter.com for every page load so you won't be rate limited. You can set how often you want to update the cache.
Version: 1.0.0
Author: Envalabs team
Author URI: https://envalabs.biz/
*/
// include widget function
require_once('widget.php');
