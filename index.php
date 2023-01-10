<?php

// Premiere ligne
echo 10 + 5 . '<br>';

//Deuxieme ligne
echo 10 / 2 . '<br>';

//Troisieme ligne
$a = 10;
$b = 20;
if($a === $b) {
    echo "<br><br>a est identique à b" . '<br>';
}

//Quatrieme ligne
if($a !== $b) {
    echo"<br><br>a n'est pas identique à b" . '<br>';
}


//Cinquieme ligne
$arr1 = ["machin", "truc"];
$arr2 = ["truc", "machin"];
if($arr1 ===  $arr2) {
    echo "<br><br>les tableaux ont le même contenu" . '<br>';
}

