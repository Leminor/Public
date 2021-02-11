<?php
echo ('TEST');
echo 'Hello world';
echo 1;

print 'Smth';
print PHP_EOL;


$name = 'Alex';
echo "Hello {$name}\n";
echo 'Hello $name\n', PHP_EOL;

$htmlid = 1;

$nowdoc = <<<'JS'
document.getElementById({$htmlid})
JS;

$heredoc = <<<HTML
<script type="text/javascript">
document.getElementById('#{$htmlid}').innerHTML;
</script>
HTML;
echo $heredoc, PHP_EOL;

echo "Hello user with name \"{$name}\"\n";

$concat = 'This string ' . 'is concatenated' . PHP_EOL;
echo $concat;



