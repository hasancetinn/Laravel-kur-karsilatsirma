<?php
/**
 * Created by PhpStorm.
 * User: hasan
 * Date: 07/02/19
 * Time: 14:21
 */

namespace App\Currencies;


interface CurrencyInterface
{

    public function getUSD();
    public function getGBP();
    public function getEUR();




}