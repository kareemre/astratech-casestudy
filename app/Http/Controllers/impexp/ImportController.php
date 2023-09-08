<?php

namespace App\Http\Controllers\impexp;

use App\Imports\UsersImport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ImportFileRequest;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Contracts\Service\Attribute\Required;

class ImportController extends Controller
{
   
    /**
     * importing .xlsx files
     * @param \App\Http\Requests\ImportFileRequest $request
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    public function import(ImportFileRequest $request) 
    {
        $fileValidation = $request->validated();
        Excel::import(new UsersImport, $request->file('import_file'));    
        return redirect('/users')->with('success', 'Imported Successfully!');
    }
}

