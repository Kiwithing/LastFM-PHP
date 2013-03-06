<?php

class LastFM {
	private $_APIKEY;
	public $url;
	public $USER;

	public function __construct(array $options) {
		foreach($options as $option => $value) {
			switch($option) {
				case 'USER':
					$this->USER = $value;
					break;
				case 'APIKEY':
					$this->_APIKEY = $value;
			}
		}

		$this->url = 'http://ws.audioscrobbler.com/2.0/';
	}

	private function getSource($url) {
		$curl = curl_init($url);
		curl_setopt_array($curl, array(
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_BINARYTRANSFER => true
		));

		$source = curl_exec($curl);
		curl_close($curl);

		return $source;
	}

	public function getSongs(int $limit = 5) {
		$xml = simplexml_load_string($this->getSource($this->url . 'user/' . $this->USER . '/recenttracks?limit=' . $limit));

		foreach($xml->track as $track) {
			$stuff[] = array(
				'URL' => $track->url[0],
				'ARTIST' => $track->artist[0],
				'NAME' => $track->name[0],
				'DATEPLAYED' => $track->date[0]
			);
		}

		return $stuff;
	}
}