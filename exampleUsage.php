<?php 
require 'lastfm.php';
$lastfm = new LastFM(array(
	'USER' => 'Crucider',
	'APIKEY' => '667ccb1ef8a754866513ccb23aa346c1'
));


foreach($lastfm->getSongs(5) as $song) {
	echo $song['NAME'] . ' by ' . $song['ARTIST'] . '<br>';
}

echo '<br><pre>';

print_r($lastfm->getCustom('album.getinfo', array(
	'artist' => 'Beast',
	'album' => 'Fiction And Fact'
)));
$lastfm = null;
?>