<?php

$string = file_get_contents("jsonTest.json");

/*
$json = json_encode(
    array(
        1 => array(
            'English' => array(
                'One',
                'January'
            ),
            'French' => array(
                'Une',
                'Janvier'
            )
        )
    )
);
*/

//echo $json;

// google api return $string

$json_a = json_decode($string, true);

var_dump($json_a);

//print_r($json_a["1"]); 

foreach ($json_a["English"] as $person_a)
{
	//print_r($person_a);
    echo $person_a[0]."<br>";
    echo $person_a[1]."<br>";
}


?>