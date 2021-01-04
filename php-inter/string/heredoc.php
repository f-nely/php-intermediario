<?php

// Heredoc’s are equivalent to a double quoted string.
echo <<<EOT
Hello World.
Goodbye!
EOT;

echo "\n";

$foo = 'bar';
echo <<<EOT
Hello $foo
Goodbye!
EOT;

echo "\n";

$text = <<<MYTEXT
So what about the heredoc and nowdoc syntaxes? 
They provide an alternative way of defining 
strings in PHP. They are particularly useful 
when we need to define a string over multiple 
lines.
MYTEXT;

echo $text;



