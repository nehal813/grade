<?php

$name =$_POST['name'];
$grade=$_POST['grade'];


    if(isset($_POST['submit'])){
        if($name && $grade){
            if($grade >= 85){

                echo "exellent";
            }elseif($grade >= 75){

                echo "verygood";
            }elseif ($grade >= 50){

                echo "good";
            }elseif($grade < 50){

                echo "soory,failed";
            }
        }
    else{

        echo "please fill the data";
    }}






?>