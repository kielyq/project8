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
}
