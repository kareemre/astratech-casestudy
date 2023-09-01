<?php

namespace App\Http\Controllers\impexp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use Symfony\Contracts\Service\Attribute\Required;

class ImportController extends Controller
{
    public function import(Request $request) 
    {
        $request->validate([

            'import_file'=>'required|mimes:xls,xlsx'

        ]);
        $file = $request->file('import_file'); 
        Excel::import(new UsersImport, $file);    
        return redirect('/users')->with('success', 'All good!');
    }
}

