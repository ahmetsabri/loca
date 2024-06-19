<?php

use App\Console\Commands\SyncPrices;
use App\Console\Commands\UpdateExchangeRate;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Schedule::command(UpdateExchangeRate::class)->daily();
Schedule::command(SyncPrices::class)->dailyAt('00:10');
