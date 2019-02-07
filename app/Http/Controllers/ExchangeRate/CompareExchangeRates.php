<?php
/**
 * Created by PhpStorm.
 * User: hasan
 * Date: 07/02/19
 * Time: 09:05
 */

namespace App\Http\Controllers\ExchangeRate;


use App\Currencies\Currency4;
use App\Http\Controllers\Controller;
use App\Currencies\CompareCurrency;
use App\Currencies\Currency1;
use App\Currencies\Currency2;

class CompareExchangeRates extends Controller
{
    public function index()
    {
        $c1 = new Currency1('http://www.mocky.io/v2/5a74519d2d0000430bfe0fa0');
        $c2 = new Currency2('http://www.mocky.io/v2/5a74524e2d0000430bfe0fa3');
//        $hasan = new Currency4();

        $compare = new CompareCurrency();

        $usd = $compare->compareUSD($c1,$c2);
        $eur = $compare->compareEUR($c1,$c2);
        $gbp = $compare->compareGBP($c1,$c2);

        return view('compare-exchange')
            ->with( 'usd', $usd)
            ->with( 'eur', $eur)
            ->with( 'gbp', $gbp);

    }


}