<?php
 
namespace App\Http\Controllers;
 
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
  
  
    public function index()
    {
        
        $data = DB::table('mahasiswas')->get();
        return view('mahasiswa.index')->with('data', $data);
    }
}
