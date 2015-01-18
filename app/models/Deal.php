<?php

class Deal extends Eloquent {
    use SoftDeletingTrait;
    protected $dates = ['deleted_at'];
    protected $table = 'deals';
    
}

function money($amount, $symbol = ' лв')
{
	return number_format($amount, 2).$symbol;
}
//
//function sum($deals)
//{
//    $sum=0;
//    foreach ($deals as $deal) {
//     $sum=$sum+$deal->price;
//    }              
//    return $sum;        
//}
//function sumcash($deals)
//{
//    $sum=0;
//    foreach ($deals as $deal) {
//     $sum=$sum+$deal->cash;
//    }              
//    return $sum;        
//}
//function sumbank($deals)
//{
//    $sum=0;
//    foreach ($deals as $deal) {
//     $sum=$sum+$deal->bank;
//    }              
//    return $sum;        
//}
//function sumbalance($deals)
//{
//    $sum=0;
//    foreach ($deals as $deal) {
//     $sum=$sum+$deal->balance;
//    }              
//    return $sum;        
//}