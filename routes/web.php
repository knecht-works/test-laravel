<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'env' => [
            'Host' => request()->getHost(),
            'Laravel version' => app()->version(),
            'PHP version' => PHP_VERSION,
            'Environment' => app()->environment(),
            'Database' => config('database.default'),
            'Users in DB' => User::count(),
            'Timezone' => config('app.timezone'),
            'Server time' => now()->format('Y-m-d H:i:s'),
        ],
    ]);
});
