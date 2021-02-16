<?php
$firstNumb = readline('Enter first number:');
$userAction = readline ("Choose an action ('+', '-', '*', '/', '^'): ");
$secondNumb = readline('Enter second number: ');

if($userAction == '/' && $secondNumb == '0') {
    exit ('Cannot be divided by zero');
}

switch($userAction){
    case '+':
        echo $firstNumb+$secondNumb, PHP_EOL;
        break;
    case '-':
        echo $firstNumb-$secondNumb, PHP_EOL;
        break;
    case '*':
        echo $firstNumb*$secondNumb, PHP_EOL;
        break;
    case '/':
        echo $firstNumb/$secondNumb, PHP_EOL;
        break;
    case '^':
        echo $firstNumb**$secondNumb, PHP_EOL;
        break;
    default:
        echo 'Type correct action symbol!', PHP_EOL;

}


