=== Plugin Name ===
Contributors: mkozlovatbugira
Donate link: https://www.bugira.com
Tags: bugira, comments, user feadback, bugtracker, issues
Requires at least: 3.0.1
Tested up to: 5.2.0
Stable tag: 1.0.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Wordpress plugin for simple integration with Bugira bug tracker.

== Description ==

Bugira Bugtracker
Let your users send you bugreports with ease. Get the most information about the bug without asking extra questions ‐ everything to reproduce an issue is collected automatically.

Subscription
In order to use plugin, you need to create an account at https://www.bugira.com to get license key.

BUGIRA USE CASES
USER FEEDBACK
Are you tired of back and forward with customers? Let users submit simple form that will capture wealth of environment metadata in one simple click. Never ask for what browser they use again!

CLIENT FEEDBACK
Are you working with clients on another prototype? Let them submit feedback with ease. All information is captured in Bugira and organised in form of tickets for quick prioritisation and triage.

USER ACCEPTENCE TESTING
Are you still gathering UAT feedback in spreadsheets? There is a better option. Bugira widget allows testers submit feedback right inside testing session as soon as the issue arise. Testers can submit screenshots and descriptions and Bugira will take care of the rest.

PRIVACY
Privacy is our top priority. This why Bugira Bugtracker does not send any information with explicit concern from the end user.

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Download latest code at https://github.com/bugiratracker/bugira_wp_plugin/releases/download/1.0.0/bugira_wp_plugin.zip
2. Unpack `bugira_wp_plugin.zip` to the `/wp-content/plugins/` directory or upload it through the 'Plugins' menu in WordPress
3. Activate the plugin through the 'Plugins' menu in WordPress
4. Enter enter license key on plugin settings page


== Frequently Asked Questions ==

= Do I need subscription? =

Yes, you need to sign up at https://www.bugira.com to get license key

= Does Plugin Loads 3rd Party JavaScript Code =

No. All files are included. However, widget will make requests to external server.

== Screenshots ==

/assets/screenshot-1.png

== Changelog ==

= 1.0.3 =
* Widget now enabled in WP Admin section
* If user is logged in, we're going to capture username, user_email and site ID if multisite is used
* Removed boilerplate code
* Started transactions
* Readme Updates

= 1.0.2 =
* Moved https://cdn.jsdelivr.net/npm/bugira-widget@0.18.0/dist/bugira.min.js to public/js/widget_0.18.0.js

= 1.0.1 =
* Readme Updates

= 1.0.0 =
* Easy install.
* Option page for API key.
