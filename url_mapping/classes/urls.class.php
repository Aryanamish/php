<?php

class url{

	private $urls;

	public function __construct(){
		
		$this->urls = json_decode(file_get_contents(urls.json));
		var_dump($this->urls);
	}
}