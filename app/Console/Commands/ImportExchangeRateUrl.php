<?php
/**
 * Created by PhpStorm.
 * User: hasan
 * Date: 07/02/19
 * Time: 08:24
 */

namespace App\Console\Commands;


use App\Models\ExchangeRates;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;

class ImportExchangeRateUrl extends Command
{
    protected $signature = 'import:exchange_url {link} {adapter_name}';

    protected $description = 'Import Link';


    /**
     * @throws \Exception
     */
    public function handle()
    {
        $this->output->title('Server Link Ekleme');

        $link = $this->argument('link');
        $adapter_name = $this->argument('adapter_name');

        Validator::make(['link'=>$link], [
            'link' => 'url',
        ])->validate();

        $exchange_url = new ExchangeRates();
        $exchange_url->exchange_urls = $link;
        $exchange_url->adapter_name = $adapter_name;
        $exchange_url->save();

        $this->output->success('Link ' . $link . ', Adapter ismi ' .$adapter_name. ' eklenmiştir.');
    }
}