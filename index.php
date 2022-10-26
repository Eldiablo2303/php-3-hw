<?php


 $a = 40;
$b = 50;
$c = 40;
$d = 90;


 if ($a > $b && $a > $c && $a > $d){
     echo "a is greater number";
 } elseif ($b > $a && $b > $c && $b > $d) {
    echo "b is greater number";
} elseif ($c > $a && $c > $b && $c > $d){
    echo "c is greater number";
} else {
    echo "d is greater number";
}



/////// fanction

function getgreaternum($num1, $num2, $num3, $num4)
{
    $a = $num1;
    $b = $num2;
    $c = $num3;
    $d = $num4;
    
    
     if ($a > $b && $a > $c && $a > $d){
         echo "a is greater number";
     } elseif ($b > $a && $b > $c && $b > $d) {
        echo "b is greater number";
    } elseif ($c > $a && $c > $b && $c > $d){
        echo "c is greater number";
    } else {
        echo "d is greater number";
    }
}
getgreaternum(10,20,50,40);


////////////////////////////


$usernam = 'jhon';

echo ctype_alpha($usernam);
if(ctype_alpha($usernam) == 1){
   echo "welcome $usernam";
} else {
    echo "invalid username ";
}
 
////////////////////////

$age = '25';
if(is_numeric($age)){
    echo "yes";
} else {
    echo "no";
}

///////////////////



$number = 77;

if($number > 0){

if($number%2 == 0){
    echo " $number is a even num";
 } else {
    echo " $number is a odd num";
 }


    echo "$number is a postive num";
} elseif($number < 0) {
    echo " $number is a neg num";
} else{
    " $number is a nutral num";
}


/////////////////////


$useremail = 'testing@gmail.com';
$userpassword = 'password';

if ($useremail == 'testing@gmail.com' and $userpassword == 'password'){
    echo "welcome to my page";
}else{
    echo "invalid";
}


$useremail1 = 'testing@gmail.com';
$userpassword1 = 'password';

if($useremail1 == 'testing@gmail.com'){
    if($userpassword1 == 'password'){
        echo "login";
    }else {
        echo "check your password";
    }
} else {
    echo "your email is invalid";
}


//////////////////////
function paypermonth($amount = 0,$year = 1,$interest = 10 ){


$amount = $amount;
$year = $year;
$interest = $interest;

$totalinterest = ($interest / 100 ) * $year;
$totalinterestmoney = $amount * $totalinterest;
$totalpayable = $amount + $totalinterestmoney;
$permonthpayable = $totalpayable / ($year * 12);


return round($permonthpayable);
}


function getloan($income,$expense,$paypermonth){
    
$totalincome = $income;
$totalcost = $expense;
$totalsaving = $totalincome - $totalcost;
if($totalsaving > $paypermonth){
    echo "you are eligible for loan";
} else {
    echo "i am sorry";
}
}
getloan(20000,15000, paypermonth(20000,1.5,20));

///////////////


$numb = 7;
echo $numb % 2 == 0 ? 'even number' : 'odd number';

//////////////


$user = ["jhon",25,"student"];
var_dump($user);
var_dump($user[2]);
echo ($user[0]);
print_r($user[1]);
