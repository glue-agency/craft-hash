# Hash plugin for Craft CMS 3.x

Twig filter for hashing.

## Requirements

This plugin requires Craft CMS 3.0.0-beta.23 or later.

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require glue-agency/craft-hash

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for Craft-Hash.

## Usage

`{{ hash(String, Algorithm) }}`

- `String` to hash (not required, defaults to `random_int(0, getrandmax())`)
- `Algorithm` to use in hashing (not required, defaults to 'md5')

More info on available algorithms, please visit: https://www.php.net/manual/en/function.hash-algos.php
