<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;


class ReportController extends Controller
{
  public function index(){
    $reports = Report::all(); // выборка всех данных из таблицы reports.
    return view('report.index', compact('reports'));
  }

      
//удаление 
public function destroy(Report $report){
  $report->delete();
  return redirect()->back();
  
}

//создание отчета 
public function store(Request $request, Report $report){
  $data = $request -> validate([
    'number' => 'integer',
    'description' => 'string',
  ]);

  $report -> create($data);
  return redirect()->back();
  
}
}
