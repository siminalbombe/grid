<?php
/**
 * Created by PhpStorm.
 * User: simon.hofmann
 * Date: 16/05/2017
 * Time: 13:29
 */
session_start();
include 'connect.php';
function randomGroupKey($length) {
    $str = "";
    $characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
    $max = count($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
        $rand = mt_rand(0, $max);
        $str .= $characters[$rand];
    }
    return $str;
}

$groupkey = randomGroupKey(10);


$insert = "INSERT INTO grid.group (name, groupkey, first, second, third, fourth, fifth, sixth, seventh ,eigth, ninth, tenth,
                eleventh, twelth, thirteenth, fourteenth, fifteenth, sixteenth, seventeenth, eigteenth, nineteenth, twentieth)
                VALUES ('".$_GET['name']."','".$groupkey."','".$_GET['first']."','". $_GET['second']."','".$_GET['third']."','". $_GET['fourth']."','".$_GET['fifth']
                ."','". $_GET['sixth']."','".$_GET['seventh']."','".$_GET['eigth']."','".$_GET['ninth']."','".$_GET['tenth']
                ."','". $_GET['eleventh']."','".$_GET['twelth']."','".$_GET['thirteenth']."','".$_GET['fourteenth']."','".$_GET['fifteenth']
                ."','". $_GET['sixteenth']."','".$_GET['seventeenth']."','".$_GET['eigteenth']."','".$_GET['nineteenth']."','".$_GET['twentieth']."')";

if ($conn->query($insert) === TRUE) {
    echo "Umfrage ".$_GET['name']." wurde erstellt.<br>";
    echo "Umfrage-Name: ".$_GET['name']."<br>";
    echo "Schlüssel: ".$groupkey."<br>";
}
else{
    echo "SQL-Statement not possible";
}