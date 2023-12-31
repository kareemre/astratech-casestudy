<?php

namespace App\Http\Controllers\impexp;

use App\Exports\UsersExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    /**
     * exporting .xlsx files
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
