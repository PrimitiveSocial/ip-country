# IP Country plugin for Craft CMS 3.x

Get's location information based on user's IP

![Screenshot](resources/img/plugin-logo.png)

## Requirements

This plugin requires Craft CMS 3.0.0-beta.23 or later.

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require PrimitiveSocial/ip-country

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for IP Country.

## IP Country Overview

This get's the user's location data based on their IP address for use in Twig templates.

## Configuring IP Country

No need! Comes ready to go out of the box.

For testing locally, you will need to test at a remote server. Running this locally will return your IP address (127.0.0.1), which will not give any data.

A simple way to get around this is to test via [Ngrok](https://ngrok.com/);

## Using IP Country

```
This sets the IP variable
{% set ip = craft.ipcountry.get %}

Then, you can check to see if the person is in North America
{% if ip and ip.continent_code == 'NA' %}
	<p>What up North America!</p>
{% endif %}

Check the city
{% if ip and ip.city == 'Lubbock' %}
	<p>Lubbock is the best</p>
{% endif %}

Check the state
{% if ip and ip.state == 'Texas' %}
	<p>Texas is awesome!</p>
{% endif %}

Check the country
{% if ip and ip.country == 'Canada' %}
	<p>Hooray for Canada!</p>
{% endif %}
```

## IP Country Roadmap

Some things to do, and ideas for potential features:

* Release it

Brought to you by [Primitive Social](primitivesocial.com)
