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
                <p class="font-sans text-sm font-normal inline-block align-text-bottom pt-3 pb-2 text-cyan-900">
                Статус: {{$report->status->name}}
                </p>
                <p class="font-sans text-sm font-normal inline-block align-text-bottom pt-2 text-cyan-900">
                {{$report->created_at}}
                </p>
                
                <form action="{{ route('reports.destroy', $report->id) }}" method="POST" style="border-2 border-black-100">
            @csrf 
            @method('delete')
            <button type="submit" class="pt-3">Удалить</button>
        </form>
        <a  href="{{ route('report.update', $report->id) }}">Обновить</a>
        
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
  

  <!--<label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Статус заявки:</label>
  <select id="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  @foreach ($statuses as $status)
  <option value="{{$status->id}}">{{$status->name}}</option>
  @endforeach
  </select>-->



        <button type="submit" class="border-2 mt-5">Создать</button>
    </form>
</div>
    </div>

@endsection()