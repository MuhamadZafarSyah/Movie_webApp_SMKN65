<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        $totalUser = User::all();

        return view('dashboard.overview', compact('movies', 'totalUser'));
    }

    public function getChartData()
    {

        $sudahDiRespon = Movie::all()->count();
        $belumDiRespon = Movie::where('genre', 'asldasl')->count();
        // dd($belumDiRespon);

        return response()->json([
            'sudahDiRespon' => $sudahDiRespon,
            'belumDiRespon' => $belumDiRespon,
        ]);
    }

    public function getChartUser()
    {
        $total_user = User::all()->count();

        return response()->json([
            'totalUser' => $total_user
        ]);
    }
}
