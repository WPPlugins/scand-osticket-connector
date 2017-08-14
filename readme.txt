=== osTicket Connector ===
Contributors: scandltd
Tags: scandltd, support, osticket, connector, http, api, rest api, json, tracker
Requires at least: 4.3
Tested up to: 4.8
Stable tag: 1.0.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Create tickets in osTicket support system via the existing contact form.

== Description ==
This WordPress plugin supports the creation of new tickets in the osTicket system by using osTicket API. Only contact forms, which send emails, are supported as our plugin hooks the wp_mail function to get the forms’ data.
= Important =
The contact form must contain "Help Topic", "Email", "Full Name", "Subject" and "Message" fields at least.

= osTicket API =
The osTicket API is used as simple XML or JSON over HTTP. Ticket creation is supported only.

= Authentication =
Authentication via the API is done via API keys configured inside the osTicket admin panel. API keys are created and tied to a source IP address, which will be checked against the source IP of requests to the HTTP API.

API keys can be created and managed via the admin panel. Navigate to Manage -> API keys. Use Add New API Key to create a new API key. Currently, no special configuration is required to allow the API key to be used for the HTTP API. All API keys are valid for the HTTP API.
See more details [here](https://github.com/osTicket/osTicket/blob/master/setup/doc/api.md).

= Deployment =
1. Configure osTicket support system to enable the access via API for your WordPress (see "Authentication" section).
1. Set up the contact form and input the attribute value of the tag name exactly as given in the settings form of the plugin. This will let the data map to osTicket API data template correctly.
1. Add a hidden input with a name specified in ‘Form Identifier’ while using the contact form.

== Installation ==

= WordPress installation =
1. Go to Plugins > Add New > search for "scand-osticket-connector"
1. Press "Install Now" button for the "osTicket Connector" plugin
1. Press "Activate" button

= Manual installation =
1. Upload the "scand-osticket-connector" directory to the "/wp-content/plugins/" directory
1. Activate the plugin through the "Plugins" menu in WordPress

== Frequently Asked Questions ==

= How to use this plugin with the contact form ? =
1. Specify all required fields in the settings (Admin -> Settings -> osTicket Connector).
1. Add a hidden input to your contact form. The name of the input should be the same as the one you have specified in "Form Identifier" option for "osTicket Connector" and set the value equal to "1".
1. Enjoy the new functionality you got!

For more details you can see screenshot "Example of contact form".

== Screenshots ==

1. API settings
2. Form fields settings
3. Example of contact form

== Changelog ==

= 1.0.1 (2017-03-14) =
Added filter to process option values for drop-down when Contact Form 7 is used.

= 1.0.0 (2017-02-20) =
Release of the plugin.
