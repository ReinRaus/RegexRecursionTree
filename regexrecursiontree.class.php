<?php
class RRT {
	public $lexems, $sourceRegex, $regex;
	
	function __construct ( $lexems, $sourceRegex ) {
		$this->lexems = $lexems;
		$this->sourceRegex  = $sourceRegex;
		$this->compile();
	}
	
	private function compile() {
		
	}
};

echo 666;