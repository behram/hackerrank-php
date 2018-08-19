<?php

// Complete the isBalanced function below.
function isBalanced($s) {

    $stack = new SplStack();
    $len = strlen($s);
    for ($i=0; $i < $len; $i++) {
        $char = substr($s, $i, 1);
        switch ($char) {
            case '{':
            case '(':            
            case '[':
                $stack->push($char);
                break;

            case '}':
                if ($stack->isEmpty() || ($stack->top() != '{')) {
                    return "NO";
                }
                $stack->pop();
                break;
            case ')':
                if ($stack->isEmpty() || ($stack->top() != '(')) {
                    return "NO";
                }
                $stack->pop();
                break;    
            case ']':
                if ($stack->isEmpty() || ($stack->top() != '[')) {
                    return "NO";
                }
                $stack->pop();
                break;
        }
    }
    
    return $stack->isEmpty()? "YES": "NO";
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $t);

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    $s = '';
    fscanf($stdin, "%[^\n]", $s);

    $result = isBalanced($s);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);

