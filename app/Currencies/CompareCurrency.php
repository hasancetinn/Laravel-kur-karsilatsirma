<?php
/**
 * Created by PhpStorm.
 * User: hasan
 * Date: 07/02/19
 * Time: 14:23
 */

namespace App\Currencies;


class CompareCurrency
{
    public function compareUSD(CurrencyInterface $c1, CurrencyInterface $c2)
    {
        if ($c1->getUSD() > $c2->getUSD()){
            return $c2->getUSD();
        } else {
            return $c1->getUSD();
        }

    }

    public function compareEUR(CurrencyInterface $c1, CurrencyInterface $c2)
    {
        if ($c1->getEUR() > $c2->getEUR()){
            return $c2->getEUR();
        } else {
            return $c1->getEUR();
        }

    }

    public function compareGBP(CurrencyInterface $c1, CurrencyInterface $c2)
    {
        if ($c1->getGBP() > $c2->getGBP()){
            return $c2->getGBP();
        } else {
            return $c1->getGBP();
        }

    }

}