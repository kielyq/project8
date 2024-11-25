<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ReportController extends Controller
{
  public function index(){
    $reports = Report::where('user_id', Auth::user()->id)->get();
    
    return view('report.index', compact('reports'));
  }

      

public function destroy(Report $report){
  $report->delete();
  return redirect()->back();
  
}

public function create() {
  return view('report.index');
}

public function store(Request $request): RedirectResponse{
    $request->validate([
      'number' => ['required', 'string', 'max:255'],
      'description' => ['required', 'string'],
    ]);

    Report::create([
      'number' => $request -> number,
        'description' => $request->description,
        'status_id' => 1,
        'user_id' => Auth::user()->id,
    ]);

    return redirect()->route('dashboard');
  
}


public function show(Report $report){
  return view('report.show', compact('report'));
  
}


public function update(Request $request, Report $report){
  $data = $request -> validate([
    'number' => 'integer',
    'description' => 'string',
  ]);

  $report -> update($data);
  return redirect()->back();
  
}
}
