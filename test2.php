<?php
//  ******* Q1 ********

// ①
// $a =5;
// $b = 0;

// ②
// $a = 10;
// $b = 10;

// ③
// $a = 1;
// $b = -4;

$a = 6;
$b = 1;
if($a * $b > 10){
  echo '10より大きいです';
} elseif($a * $b >= 5){
  echo '5以上です';
} elseif($a * $b >= 0){
  echo '0以上です';
} else {
  echo 'マイナスです';
}
echo '<br>';
?>
<?php 
//  ****** Q2 ********
// ①
$a = 5;

// // ②
// $a = 6;

// ③
// $a = -3;
if($a >= 5){
  echo '偶数で５以上です';
} elseif($a >= 0){
  echo '0以上です';
} else{
  echo 'マイナスです';
}
?>

<?php
echo '<br>';
//  ******* Q3 *******

// ①
$a = 6;

// ②
// $a = 5;

// ③
// $a = 15;

// ④
// $a = 2;

if($a % 3 == 0 && $a % 5 == 0){
  echo '世界のナベアツ';
} elseif($a % 3 == 0 || $a % 5 == 0){
  echo 'アホ';
} else{
  echo ' NO!';
}
?>