<?php
/**
 * Created by PhpStorm.
 * User: hasan
 * Date: 07/02/19
 * Time: 08:21
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed exchange_urls
 * @property array|string adapter_name
 */
class ExchangeRates extends Model
{
    protected $table = "exchange_rate.exchange_url";
    protected $primaryKey = "id";
    protected $fillable = ["exchange_urls", "adapter_name"];

}