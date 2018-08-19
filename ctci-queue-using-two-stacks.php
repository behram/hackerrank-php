<?php

class MyQueue
{
    public $newestOnTop;

    public $oldestOnTop;

    public function __construct()
    {
        $this->newestOnTop = new SplStack();
        $this->oldestOnTop = new SplQueue();
    }

    public function process($input)
    {
        $number = NULL;
        $explode = explode(' ', $input);
        $type = (int)$explode[0];
        if(isset($explode[1])){
            $number = (int)$explode[1];
        }
        if($type == 1){
            $this->push($number);
        }
        if($type == 2){
            $this->pop();
        }
        if($type == 3){
            $this->front();
        }
    }

    public function push(int $x)
    {
        $this->oldestOnTop->enqueue($x);
    }

    public function pop()
    {
        $this->oldestOnTop->dequeue();
    }

    public function front()
    {
        echo $this->oldestOnTop->bottom()."\n";
    }
}


$queue = new MyQueue();
while($f = fgets(STDIN)){
    $queue->process($f);
}

