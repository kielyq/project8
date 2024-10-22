@extends('layouts.main')


@section('content') 
<div class="flex space-x-4 container mx-auto flex flex-wrap">
    @foreach ($reports as $report)
        <div class="shadow-md w-64 m-16 " >
            <div class="card-text m-6 ">
                <p class="font-sans text-lg font-normal text-sky-600">
                {{$report->number}}
                </p>
                <p class="font-sans font-medium leading-relaxed text-pretty text-sky-900">
                {{$report->description}}
                </p>
                <p class="font-sans text-sm font-normal inline-block align-text-bottom pt-2 text-cyan-900">
                {{$report->create_at}}
                </p>
               
                <form action="{{ route('reports.destroy', $report->id) }}" method="POST" style="border-2 border-black-100">
            @csrf 
            @method('delete')
            <button type="submit">Удалить</button>
        </form>
            </div>
        </div>
        @endforeach

        <div class="container">
    <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">Создать новый отчет</h1>

    <form method="POST" action="{{ route('reports.store') }}">
        @csrf
        <div class="mb-4">
        <label for="number" class="block text-gray-700 font-bold mb-2">Номер:</label>
        <input type="text" id="number" name="number" placeholder="номер" required
            class="border border-gray-300 rounded-lg p-2">
    </div>
    <div class="mb-4">
        <label for="description" class="block text-gray-700 font-bold mb-2">Описание:</label>
        <textarea id="description" name="description" placeholder="описание" required class="border border-gray-300 rounded-lg p-2 "></textarea>
    </div>
        <button type="submit" class="border-2">Создать</button>
    </form>
</div>
    </div>

@endsection()