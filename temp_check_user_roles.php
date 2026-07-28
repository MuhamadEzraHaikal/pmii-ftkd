<?php

use App\Models\User;
use Illuminate\Contracts\Console\Kernel;

require __DIR__.'/vendor/autoload.php';

$app = require __DIR__.'/bootstrap/app.php';
$app->make(Kernel::class)->bootstrap();

foreach (User::all() as $user) {
    echo $user->email.' | '.($user->role ?? 'no role').PHP_EOL;
}
