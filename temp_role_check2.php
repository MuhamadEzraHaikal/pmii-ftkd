<?php

require __DIR__.'/vendor/autoload.php';

$app = require __DIR__.'/bootstrap/app.php';
$app->make(Kernel::class)->bootstrap();

use App\Models\User;
use Illuminate\Contracts\Console\Kernel;
use Illuminate\Support\Facades\Schema;

$hasRole = Schema::hasColumn('users', 'role');
echo 'has_role_column: '.($hasRole ? 'yes' : 'no').PHP_EOL;

foreach (User::all() as $user) {
    echo $user->email.' | '.var_export($user->role, true).PHP_EOL;
}
