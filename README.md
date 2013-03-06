LastFM-PHP
===========
###### LastFM PHP is an easier way for developers to access the LastFM API.  By Crucider ######
--

#### Example Usage: ####
```php
require 'lastfm.php';
$lastfm = new LastFM(array(
  'USER' => 'Crucider',
));

foreach($lastfm->getSongs(5) as $song) {
	echo $song['NAME'] . ' by ' . $song['ARTIST'] . '<br>';
}
```
