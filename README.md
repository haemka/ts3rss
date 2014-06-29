# ts3rss

_A simple script to update TeamSpeak 3 welcome messages based on RSS/ATOM feed data_

### What it does?
This script just parses a RSS or ATOM feed through SimplePie and sets the Welcome Message of a TeamSpeak 3 server accordingly. It is somewhat configurable, so that you can choose how many feed entries you want to see in your news and if you want to notify active users of new feed entries.

### Requirements
* PHP 5.x
* [SimplePie](http://simplepie.org/)
* [TeamSpeak 3 PHP Framework](http://addons.teamspeak.com/directory/addon/integration/TeamSpeak-3-PHP-Framework.html)

### Installation

1. Install [SimplePie](http://simplepie.org/) (either by hand or through your distributions package management)
2. Donwload and unzip [TeamSpeak 3 PHP Framework](http://addons.teamspeak.com/directory/addon/integration/TeamSpeak-3-PHP-Framework.html)
3. Get ts3rss:
	$ git clone https://github.com/wyldphyr3/ts3rss.git
4. Configure ts3rss by creating a config.inc.php file. You can just use the provided config.sample.inc.php and copy (or rename) it. The file is commented so that every option should be easily understood.
5. Call the script regularly, either by
* adding a cronjob to your system which calls __php ts3rss.php__
or by
* calling the script through your RSS generator (I call it through my [mynt](http://mynt.uhnomoli.com/) generator script).
