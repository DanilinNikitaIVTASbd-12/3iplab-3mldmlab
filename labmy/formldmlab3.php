<?php
session_start();

$massA=$_POST['mas1'];
$massB=$_POST['mas2'];
$massC=$_POST['relationship'];
//Функция проверки
function validate ($massA,$massB,$massC) {
    //Проверка на пустоту
    if(empty($massA)) {
        $_SESSION['text'] = "Пустое первое множество";
        return false;
    }
    if(empty($massB)) {
        $_SESSION['text'] =  "Пустое второе множество";
        return false;
    }
    if(empty($massC)) {
        $_SESSION['text'] =  "Пустое отношение";
        return false;
    }
    
    $mas1 = str_replace(' ',',',$massA);
    $mas1 = explode(",", $mas1);
    for($i = 0; $i < count($mas1); $i++) {
        if($mas1[$i] == "") {
            array_splice($mas1, $i, 1);
            $i = $i-1;
        }
    }

    $mas2 = str_replace(' ',',',$massB);
    $mas2 = explode(",", $mas2);
    for($i = 0; $i < count($mas2); $i++) {
        if($mas2[$i] == "") {
            array_splice($mas2, $i, 1);
            $i = $i-1;
        }
    }
    //Проверка на повтор
    $repeat = 0;
    for ($i = 0; $i < count($mas1); $i++) {
        for ($j = 0; $j < count($mas2); $j++) {
            if($mas1[$i] == $mas2[$j]) {
                $repeat++;
            }
        }
    }
    if($repeat > 0) {
        $_SESSION['text'] =  "Элементы в двух множествах повторяются<br>";
        return false;
    }

    $flag = true;
    for($i = 0; $i < count($mas1); $i++) {
        for($j = $i+1; $j < count($mas1); $j++) {
            if($mas1[$i]==$mas1[$j]) {
                $flag = false;
            }
        }
    }
    if($flag == false) {
        
        $_SESSION['text'] =  "Элементы в первом множестве повторяются<br>";
    }
    $flag = true;
    for($i = 0; $i < count($mas2); $i++) {
        for($j = $i+1; $j < count($mas2); $j++) {
            if($mas2[$i]==$mas2[$j]) {
                $flag = false;
            }
        }
    }
    if($flag == false) {
        $_SESSION['text'] ="Элементы во втором множестве повторяются<br>";
    }
   
    $relationship = explode (" ", $massC);
    for($i = 0; $i < count($relationship); $i++) {
        if($relationship[$i] == "") {
            array_splice($relationship, $i, 1);
            $i = $i-1;
        }
    }
	return true;
}
//Функция решения
function reshenie($massA,$massB,$massC) {
    $arr1 = str_replace(' ',',',$massA);
    $arr1 = explode(",", $arr1);
    for($i = 0; $i < count($arr1); $i++) {
        if($arr1[$i] == "") {
            array_splice($arr1, $i, 1);
            $i = $i-1;
        }
    }
    $arr2 = str_replace(' ',',',$massB);
    $arr2 = explode(",", $arr2);
    for($i = 0; $i < count($arr2); $i++) {
        if($arr2[$i] == "") {
            array_splice($arr2, $i, 1);
            $i = $i-1;
        }
    }
    $all = count($arr2);
    $arr3 = preg_replace('/[[]/i',",",$massC);
    $arr3 = preg_replace('/[]]/i',"",$arr3);
    $arr3 = preg_replace('/[ ]/i',"",$arr3);
    $arr3 = explode(",", $arr3);
    for($i = 0; $i < count($arr3); $i++) {
        if($arr3[$i] == "") {
            array_splice($arr3, $i, 1);
            $i = $i-1;
        }
    }
    $x = 0;
    $test = 0;
    for($i = 0; $i < count($arr2); $i++ ) {
        if($arr1[$i] == $arr3[$x] && $arr2[$i] == $arr3[$x+1]) {
            $test++;
        }
        $x = $x + 2;
    }
    if($test == $all) {
        $_SESSION['text'] =  "Отношение является функцией";
    } else {
        $_SESSION['text'] =  "Отношение не является функцией";
    }

}
//Основное содержание
if(isset($_POST['resh'])){
    if(validate($massA,$massB,$massC) != false) {
        reshenie($massA,$massB,$massC);
    }
}

header('Location: /mldmlab3.php');