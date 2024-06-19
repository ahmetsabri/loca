<?php

namespace App\Console\Commands;

use App\Enums\CurrencyEnum;
use App\Models\ExchangeRate;
use App\Models\Portfolio;
use Illuminate\Console\Command;

class SyncPrices extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:sync-prices';

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
        $usdRate = ExchangeRate::where('currency', CurrencyEnum::USD->value)->first()->rate;
        $eurRate = ExchangeRate::where('currency', CurrencyEnum::EUR->value)->first()->rate;

        Portfolio::chunkById(1000, function ($portfolios) use ($usdRate, $eurRate) {
            foreach ($portfolios as $portfolio) {
                $portfolio->update([
                    'price_in_usd' => $portfolio->price_in_tl / $usdRate,
                    'price_in_eur' => $portfolio->price_in_tl / $eurRate,
                ]);
            }
        });
    }
}
