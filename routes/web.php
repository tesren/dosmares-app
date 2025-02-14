<?php

use App\Livewire\HomePage;
use App\Livewire\PrivacyPage;
use Illuminate\Support\Facades\Route;


Route::localized(function () {

    Route::get('/', HomePage::class)->name('home');
    Route::get('/aviso-de-privacidad', PrivacyPage::class)->name('privacy');

});

Route::get('/dosmares-optimize', function() {

    Artisan::call('optimize');

    return ('Optimizado');
});