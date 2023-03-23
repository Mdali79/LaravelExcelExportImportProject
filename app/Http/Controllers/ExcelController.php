<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Excel;

use App\Imports\UsersImport;
use App\Exports\UsersExport;
class ExcelController extends Controller
{
    //
    public function exportProduct(){


        return Excel::download(new UsersExport, 'users.xlsx');
    }

     public function importProduct(Request $request){

        Excel::import(new UsersImport, $request->file('file'));
        
        return view('import-product');
        
        
          
     }

    }

