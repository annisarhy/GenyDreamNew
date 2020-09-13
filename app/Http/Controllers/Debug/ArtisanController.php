<?php

namespace App\Http\Controllers\Debug;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArtisanController extends Controller
{
    public function migrate() {
        \Artisan::call('migrate');
        return "database migrate completed";
    }

    public function migrateFresh() {
        \Artisan::call('migrate:fresh');
        return "database migrate completed";
    }

    public function migrateFreshSeed() {
        \Artisan::call('migrate:fresh --seed');
        return "database migrate completed";
    }

    public function migrateSeed() {
        \Artisan::call('migrate --seed');
        return "database migrate completed";
    }

    public function clearCache() {
        \Artisan::call('cache:clear');
        return "cache cleared";
    }
}
