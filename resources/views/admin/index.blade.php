
@extends('layouts.main')


@section('content')
<h1>админ панель</h1> 
<table class="min-w-full border border-gray-300">
    <thead>
        <tr class="bg-gray-200">
            <th class="border border-gray-300 px-4 py-2">Номер заявления</th>
            <th class="border border-gray-300 px-4 py-2">Номер авто</th>
            <th class="border border-gray-300 px-4 py-2">Текст заявления</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($reports as $report)
    <tr>
        <td class="border border-gray-300 px-4 py-2">{{ $report->id }}</td>
        <td class="border border-gray-300 px-4 py-2">{{ $report->number }}</td>
        <td class="border border-gray-300 px-4 py-2">{{ $report->description }}</td>
    </tr> 
    @endforeach
    </tbody>
</table>
@endsection()