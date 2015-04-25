<?php
class RRT {
	public $lexems, $sourceRegex, $regex;
	
	function __construct ( $lexems, $sourceRegex ) {
		$this->lexems = $lexems;
		$this->sourceRegex  = $sourceRegex;
		$this->compile();
	}
	
	private function compile() {
	    $re = ""; // временное имя, станет $this->regex
		$addLine =function( $line, $ident=0 ) use ( &$re ) {
			$re.= str_repeat( " ", $ident*4 ).$line."\n";
		};
		$addLine( "(?:", 0 );
		foreach ( $this->lexems as $k=>$v ) {
			$addLine( "(?P<$k>$v)", 1 );
		}
        $addLine( "){0}", 0 );
		$this->regex = $re;

	}
};