<?php


namespace App\Currencies;


class Currency2 implements CurrencyInterface
{

    private $result;

    public function __construct($url)
    {
        $this->result = json_decode(file_get_contents($url));
    }

    public function getUSD()
    {
        foreach ($this->result as $item) {

            if ($item->kod == 'DOLAR') {
                return $item->oran;
            }
        }

    }

    public function getGBP()
    {
        foreach ($this->result as $item) {

            if ($item->kod == 'İNGİLİZ STERLİNİ') {
                return $item->oran;
            }
        }

    }

    public function getEUR()
    {
        foreach ($this->result as $item) {

            if ($item->kod == 'AVRO') {
                return $item->oran;
            }
        }

    }
}