
@extends('layouts.main')


@section('content')
<h1>админ панель</h1> 


@foreach($reports as $report)
<p>{{\Carbon\Carbon::parse($report->created_at) ->translatedFormat('j F Y')}}</p>
 
<p>{{$report->number}}</p>
<p>{{$report->description}}</p>
@isset($report->status->name )
        
@if($report->status_id == 1)
<form id="form-update-{{$report->id}}" action="{{route('reports.update')}}" method="POST">
@csrf
@method('PATCH')
<input type="hidden" name="id" value="{{$report->id}}">
<select name="status_id" onchange="document.getElementById('form-update-{{$report->id}}').submit()"> @foreach($statuses as $status)
<option value="{{$status->id}}">{{$status->name}}</option> @endforeach
</select>
</form>
@else
<p>{{$report->status->name}}</p>
@endif
@endisset
@endforeach


<table class="min-w-full border border-gray-300">
    <thead>
        <tr class="bg-gray-200">
            <th class="border border-gray-300 px-4 py-2">Номер заявления</th>
            <th class="border border-gray-300 px-4 py-2">Номер авто</th>
            <th class="border border-gray-300 px-4 py-2">Текст заявления</th>
            <th class="border border-gray-300 px-4 py-2">Статус заявления</th>
        </tr>

    @foreach ($reports as $report)
    <tr>
        <td class="border border-gray-300 px-4 py-2">{{ $report->id }}</td>
        <td class="border border-gray-300 px-4 py-2">{{ $report->number }}</td>
        <td class="border border-gray-300 px-4 py-2">{{ $report->description }}</td>
        @isset($report->status->name )
        <td class="border border-gray-300 px-4 py-2">{{ $report->status->name }}</td>
       
        @if($report -> status_id == 1)
        <form id="form-update-{{$report->id}}" action="{{route('reports.update')}}" method="POST" >
            @csrf
            @method('PATCH')
            <input type="hidden" name="id" value="{{$report->id}}">
            <select name="status_id" onchange="document.getElementById('form-update-{{$report->id}}')">
                @foreach($statuses as $status)
                <option value="{{$status->id}}">{{$status->name}}</option>
                @endforeach
            </select>
        </form>
        @else
        <td class="border border-gray-300 px-4 py-2">{{ $report->status->name }}</td>
        @endif
        @endisset
    </tr> 
    @endforeach
 
@endsection()