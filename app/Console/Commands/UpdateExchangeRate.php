<?php

namespace App\Console\Commands;

use App\Models\ExchangeRate;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class UpdateExchangeRate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-exchange-rate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $data = Http::get('https://api.vatcomply.com/rates?base=USD')->json()['rates'];

        $usdRate = $data['TRY'];
        $eurRate = $usdRate / $data['EUR'];
        ExchangeRate::firstOrCreate(['currency' => 'usd'], [
            'currency' => 'usd',
            'rate' => $usdRate,
        ]);
        ExchangeRate::firstOrCreate(['currency' => 'eur'], [
            'currency' => 'eur',
            'rate' => $eurRate,
        ]);
    }
}
