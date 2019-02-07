<?php


namespace App\Currencies;


class Currency1 implements CurrencyInterface
{

    protected $result;

    public function __construct($url)
    {
        $this->result = json_decode(file_get_contents($url))->result;

    }

    public function getUSD()
    {
        foreach ($this->result as $item) {

            if ($item->symbol == 'USDTRY') {
                return $item->amount;
            }
        }
    }

    public function getGBP()
    {
        foreach ($this->result as $item) {

            if ($item->symbol == 'GBPTRY') {
                return $item->amount;
            }
        }
    }

    public function getEUR()
    {
        foreach ($this->result as $item) {

            if ($item->symbol == 'EURTRY') {
                return $item->amount;
            }
        }
    }
}