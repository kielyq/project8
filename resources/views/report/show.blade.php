@extends('layouts.main')



@section('content') 

<form method="POST" action="{{ route('report.update', $report -> id) }}">
        @csrf
        @method('put')
        <div class="mb-4">
        <label for="number" class="block text-gray-700 font-bold mb-2">Номер:</label>
        <input class="border border-gray-300 rounded-lg p-2" type="text" id="number" name="number" placeholder="номер" value="{{$report->number}}" required>
    </div>
    <div class="mb-4">
        <label for="description" class="block text-gray-700 font-bold mb-2">Описание:</label>
        <textarea class="border border-gray-300 rounded-lg p-2 w-96" id="description" name="description" placeholder="описание" required >{{$report->description}}</textarea>
    </div>
        <button type="submit" class="border-2">Обновить</button>
    </form>

@endsection()   