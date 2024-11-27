
@extends('layouts.main')


@section('content')
<div class="space-y-4">
    @foreach($reports as $report)
    <div class="border border-gray-300 rounded-lg p-4 bg-gray-50">
        <p class="text-sm text-gray-600">{{ \Carbon\Carbon::parse($report->created_at)->translatedFormat('j F Y') }}</p>
        
        <p class="font-bold text-lg text-gray-800">{{ $report->number }}</p>
        <p class="text-base text-gray-700">{{ $report->description }}</p>
        
        @isset($report->status->name)
            @if($report->status_id == 1)
                <form id="form-update-{{ $report->id }}" action="{{ route('reports.update') }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="id" value="{{ $report->id }}">
                    <select name="status_id" class="mt-2 border border-gray-300 rounded-md p-2" onchange="document.getElementById('form-update-{{ $report->id }}').submit()">
                        @foreach($statuses as $status)
                            <option value="{{ $status->id }}">{{ $status->name }}</option>
                        @endforeach
                    </select>
                </form>
            @else
                <p class="font-semibold text-blue-600 mt-2">{{ $report->status->name }}</p>
            @endif
        @endisset
    </div>
    @endforeach
</div>
 
 
    
@endsection()