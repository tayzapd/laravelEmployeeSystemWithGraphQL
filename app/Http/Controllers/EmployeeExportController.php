<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\ExportEmployees;
use Maatwebsite\Excel\Facades\Excel;

class EmployeeExportController extends Controller
{
    public function export()
    {
        return Excel::download(new ExportEmployees, 'employees.xlsx');
    }
}
