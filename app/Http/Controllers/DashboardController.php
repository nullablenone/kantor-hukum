<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Pengacara;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('admin.pages.dashboard.index',[
            'layanan' => Layanan::count(),
            'pengacara' => Pengacara::count(),
        ]);
    }
}    