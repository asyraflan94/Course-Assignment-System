<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Matrix;
use App\TemporarySubject;
use App\Exports\StudentExport;
use App\Imports\StudentImport;
use App\Imports\MatrixImport;
use Maatwebsite\Excel\Facades\Excel;


class ExcelController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importExportView()
    {
       return view('import');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function export()
    {
        return Excel::download(new StudentExport, 'users.xlsx');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function import(Request $request)
    {
        if ($request->hasFile('file')) {
            Student::truncate();
            Matrix::truncate();
            TemporarySubject::truncate();
            Excel::import(new StudentImport,request()->file('file'));
            Excel::import(new MatrixImport,request()->file('file'));

            return redirect('/admin/dashboard')->with('flash_message_success','Upload successful');
        }
        else {
            return redirect('/admin/dashboard')->with('flash_message_error', 'Error inserting the data..');
        }

    }
}
