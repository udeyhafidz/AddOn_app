<?php

namespace App\Http\Controllers;

use App\Models\Usser;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public $title = "Dashboard";
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            "title" => $this->title,
            "page_title" => $this->title,
            $jumlah_user = Usser::where("role","user")->count(),
            
        ];

        return view('dashboard',$data ,compact('jumlah_user'));
    }
}
