<?php

function hello()
{
    echo "Hello World!";
}

// hello();

$current_user="mie";

function is_mike()
{
    global $current_user;
    if($current_user=="mike")
    {
        echo "You is Mike";
    }else
    {
        echo "Nope, You not mike";
    }
}

is_mike();

echo "\n";

function helloName($name)
{
   if(is_array($name)&&!empty($name))
   {
       foreach($name as $key)
       {
           echo "Hello, $key \n";
       }
   }else{
       echo "Hello, Friends";
   }
}

helloName(["Mike","Mukidi","Hampton"]);

echo PHP_EOL;

function get_info($name, $title=NULL)
{
    if($title)
    {
        echo "$name has arrived, and came as $title";
    }else
    {
        echo "$name has arrived, Wellcome!";
    }
}

get_info("mike", "frog");

echo PHP_EOL;

function helloWorld()
{
    return "\nHello, World!";
}

$hello=helloWorld();

echo $hello;

echo PHP_EOL;

function addUp($a, $b)
{
    return [$a, $b, $a+$b];
}

print_r(addUp(2,4));

echo PHP_EOL;

function sumArray($data)
{
    $result=0;
    foreach($data as $key)
    {
        $result += $key;
    }
    return $result;
}

echo sumArray([1,4,5,5]);

echo PHP_EOL;

function answer()
{
    return "you get the answer";
}

$answer=answer(); //variable

$answer="answer"; // callback function

echo $answer().":)";

// anonymous function

echo PHP_EOL;

function br()
{
    echo PHP_EOL;
}

$name="andy";
$askName="is your name";

$ask=function()use($askName, $name)
{
    return "what $askName $name?";
};

echo $ask();

$magang="magang TOP joS";

br();

echo substr($magang,7);

br();

echo strlen($magang);

br();

echo strpos($magang,"joS");

br();

echo $magang[13];
br();

$team=["Mike"=>"Developer","Mohede"=>"Progammer","Hampton"=>"Designer"];

// menampilkan array keys
print_r(array_keys($team));

br();

// menampilkan array key true or false
var_dump(array_key_exists("Mike",$team));
br();

// menambahkan nilai pada array
array_walk($team,function($value, $key){
    echo "$key is a $value \n";
});