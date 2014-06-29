<?php

// path to SimplePie
$SIMPLEPIE_PATH = "/usr/share/php/simplepie/";
// path to the TS3 PHP Framework
$TS3PHP_PATH = "/opt/ts3php/";

// the hostname/url of your TS3 server
$TS3SERVER = "localhost";
// your TS3 query user
$TS3QUERY_USER = "queryuser";
// the password of your TS3 query user
$TS3QUERY_PASS = "querypassword";
// the port of your TS3 virtual server you want to update
$TS3PORT = "9987";

// The header that will be prepended to the welcome message, put any text you wish here.
// You can use BBCode as usual in TS3.
$WELCOME_MSG_HEADER = "[b]Welcome to my cool TS3 server![/b]\n\nNEWS:\n";
// The URL of your news feed
$RSS_URL = "https://doomclaw.de/feed.xml";
// the number of feed entries to show in the news
$RSS_ENTRIESNUM=3;

// the date format to prepend to each news (accepts PHPs date parameters)
$DATEFORMAT="d.m.y";

// You can choose to notify users about updates in your news. All active users will get
// a messaqge containing the latest news entry, when there is a change in news.
// 0 = don"t notify
// 1 = notify
$NOTIFY=1;

// the text to prepend to the notification message
$NOTIFY_MSG_HEADER="NEWSFLASH: ";
?>
