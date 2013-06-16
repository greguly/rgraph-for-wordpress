=== RGraph for WordPress ===
Contributors: Gabriel Reguly
Donate link: http://www.omniwp.com.br/donate/
Tags: html5, canvas, javascript
Requires at least: 3.0.0
Tested up to: 3.5.1
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

RGraph for WordPress: Brings "RGraph - Free HTML5 and JavaScript charts" to WordPress, e.g. you can draw graphics with JavaScript :-)

== Description ==

RGraph is covered by the RGraph License. 

== Installation ==

1. Upload plugin files to your plugins folder, or install using WordPress' built-in Add New Plugin installer
1. Activate the plugin
1. Edit a post or page
1. Use shortcode [rgraph] [/rgraph] to add a graph.
1. Save and view your post/page with a RGraph on it.

== Screenshots ==

1. screenshot-1.png 

== Frequently Asked Questions == 

= How to add a graph? =

* The following shortcode is an exemple
[rgraph id="myBar" width="500" height="500" ]
        window.onload = function ()
        {

var bar = new RGraph.Bar('myBar', [12,13,16,15,16,19,19,12,23,16,13,24]);
bar.Set('chart.colors', ['red']);
bar.Set('chart.title', 'A basic graph (big, but basic)');
bar.Set('chart.labels', ['Jan', 'Feb', 'Mar',
    'Apr', 'May', 'Jun',
    'Jul', 'Aug', 'Sep',
    'Oct', 'Nov', 'Dec']);
bar.Draw();

}
[/rgraph]

Find more at RGraph site: http://www.rgraph.net/

= What is the plugin license? =

* This plugin is released under a GPL license, RGraph has it's own license: http://www.rgraph.net/license


== Changelog ==

= 1.0 =
* Initial plugin release, based on RGraph plugin (http://wordpress.org/extend/plugins/rgraph/)

== Upgrade Notice ==

= 1.0 = 
* Enjoy it! Using RGraph version 31st March 2013