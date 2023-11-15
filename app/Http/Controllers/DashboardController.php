<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Rehabilitasi;
use App\Models\User;

class DashboardController extends Controller
{
    public function base()
    {
        $rehabilitasi = Rehabilitasi::with(['layanan', 'user'])->get();
        $categoryCount = Category::count();
        $userCount = User::count();

        return view('dashboard', [
            'category_count' => $categoryCount,
            'user_count' => $userCount,
            'pengajuan' => $rehabilitasi,
        ]);
    }
}
