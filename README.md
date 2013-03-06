LastFM-PHP
===========
###### LastFM PHP is an easier way for developers to access the LastFM API.  By Crucider aka Incorporate ######
---

## How to Use ##

You must require the class inside of your PHP file.
```php
require 'lastfm.php';
```

To start the class, you have to add in Options (remember this for later on).
```php
$lastfm = new LastFM(array(
	'USER' => 'Username Here',
	'APIKEY' => 'API Key Here'
));
```

**Options available:**

- USER
- APIKEY

## Functions: ##

### getSongs() - Grabs recently played songs ###
**Parameters:**

- Limit
  - Integer.  Amount of songs to grab.

**Requirements:**

- Options
  - USER

```php
require 'lastfm.php';
$lastfm = new LastFM(array(
  'USER' => 'Crucider',
));

foreach($lastfm->getSongs(5) as $song) {
	echo $song['NAME'] . ' by ' . $song['ARTIST'] . '<br>';
}
```
