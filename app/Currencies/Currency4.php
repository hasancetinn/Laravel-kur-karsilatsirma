<?php


namespace App\Currencies;


class Currency4 implements CurrencyInterface
{

    public function getUSD()
    {
        return 1;
    }

    public function getGBP()
    {
        return 3;
    }

    public function getEUR()
    {
        return 2;
    }
}