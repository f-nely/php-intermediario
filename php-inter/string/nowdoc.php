<?php

/*
 * Nowdoc’s are equivalent to a single quoted string.
 * To denote a nowdoc we just need to use single
 * quotes around the opening identifier
 */

$foo = 'bar';
echo <<<'EOT'
Hello $foo
Goodbye! 
EOT;