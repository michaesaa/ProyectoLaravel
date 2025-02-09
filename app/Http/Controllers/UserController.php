<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Export;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Http\UsersExport;
use App\Models\Product;

class UserController extends Controller
{
    public function index()
    {
        $productos = Product::all();
        return view('excel.index', compact('productos'));
    }
    
    public function exportAllUsers()
    {
      return Excel::download(new UsersExport, 'users.xlsx');
    }


}
