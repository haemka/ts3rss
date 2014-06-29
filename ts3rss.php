<?php

include("./config.inc.php"); 

require_once($SIMPLEPIE_PATH . "simplepie.inc");
require_once($TS3PHP_PATH . "libraries/TeamSpeak3/TeamSpeak3.php");

$feed = new SimplePie();
$feed->set_feed_url($RSS_URL);
$feed->enable_cache(false);
$feed->init();
$feed->handle_content_type();

$welcome_msg = $WELCOME_MSG_HEADER;
$notify_msg = $NOTIFY_MSG_HEADER;

foreach($feed->get_items(0,$RSS_ENTRIESNUM) as $key=>$item) {
	$welcome_msg_content = "[url=" . $item->get_link() . "]" . $item->get_title() . "[/url]\n";
	$welcome_msg .= $item->get_date( $DATEFORMAT ) . " - " . $welcome_msg_content;
	if ($key == 0) {
		$notify_msg .= $welcome_msg_content;
	}
}

$ts3_VirtualServer = TeamSpeak3::factory("serverquery://" . $TS3QUERY_USER . ":" . $TS3QUERY_PASS . "@" . $TS3SERVER . ":10011//?server_port=" . $TS3PORT);

if (strcmp($ts3_VirtualServer["virtualserver_welcomemessage"], $welcome_msg) != 0) {
	echo "Updating TS3 welcome message ...\n";
	echo $welcome_msg;
	$ts3_VirtualServer["virtualserver_welcomemessage"] = $welcome_msg;
	$ts3_VirtualServer->message($notify_msg);
}
?>
