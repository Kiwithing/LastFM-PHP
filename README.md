LastFM-PHP
===========
###### LastFM PHP is an easier way for developers to access the LastFM API.  By Crucider ######
---

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
