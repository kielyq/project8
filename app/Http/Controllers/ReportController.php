<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reports;


class ReportController extends Controller
{
  public function index(){
    $reports = Reports::all(); // выборка всех данных из таблицы reports.
    return view('report.index', compact('reports'));
  }
}
