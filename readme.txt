=== Rate My Stuff ===
Contributors: desbest, Dave Cantrell
Tags: rating, scoring,
Donate link: http://paypal.me/tynamiteuk
Version: 1.3
Requires at least: 4.5.6
Tested up to: 5.7
Requires PHP: 5.3
Stable tag: trunk
License: MIT
License URI: https://en.wikipedia.org/wiki/MIT_License

Rate My Stuff is a wordpress plugin for simply displaying a 1-5 review on a wordpress post by simply typing in the following "shortcode". You can also have half ratings.

[rate 1]

[rate 2.5]

[rate 5]

== New maintainer ==
This plugin is now maintained by [desbest](http://desbest.com/projects/rate-my-stuff), but it was previously made by [Dave Cantrell](http://deadcantrant.com).


== Installation ==

To do a new installation of the plugin, please follow these steps

1. Download the zipped plugin file to your local machine.
2. Unzip the file.
3. Upload the `rate-my-stuff` folder to the `/wp-content/plugins/` directory.
4. Activate the plugin through the 'Plugins' menu in WordPress.
5. Optionally, go to the Options page and select a new Lightbox colour scheme.

If you have already installed the plugin

1. De-activate the plugin.
2. Download the latest files.
2. Follow the new installation steps.

== Frequently Asked Questions ==

**What is the difference between the normal shortcode version and the custom fields version?**

The shortcode version just inserts an appropriate image in your blog post, whereas the custom fields version stores all the ratings in your wordpress database. Storing such ratings in the database can be good depending on what you want to use your website for, like browsing posts by rating, searching by rating or using such ratings for various Wordpress APIs like HTTP API, REST API and WP API.

**How do I use the custom fields version of Rate My Stuff?**

When writing a new post in wordpress, create a custom field called "rating" for that post and give it a numerical rating of 1-5. Half ratings like 2.5 or 4.5 are also supported.