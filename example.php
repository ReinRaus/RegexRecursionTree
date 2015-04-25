<PRE>
<?php
include_once 'regexrecursiontree.class.php';

$lexems = Array(
    "word" => "\\w+",
    "digit" => "\\d+",
	"nick" => "(?P>word)(?P>digit)"
);
$regex = "/(?P>nick)/";

$text = <<< HEREDOC
test of text this34 test12  sdf
HEREDOC;

$rrt = new RRT( $lexems, $regex );
echo htmlspecialchars( $rrt->regex );
?>
</PRE>