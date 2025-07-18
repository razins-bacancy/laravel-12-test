<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

if (app()->isLocal()) {
    Artisan::command('dev', function () {
        //
    })->purpose('For development r&d purposes only.');
}
