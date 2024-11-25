@extends('layouts.main')


@section('content') 
<div class="flex space-x-4 container mx-auto flex flex-wrap">
    @foreach ($reports as $report)
        <div class="shadow-md w-64 m-16 " >
            <div class="card-text m-6 ">
                <p class="font-sans text-lg font-normal text-sky-600">
               Номер: {{$report->number}}
                </p>
                <p class="font-sans font-medium leading-relaxed text-pretty text-sky-900">
               Описание:
                {{$report->description}}
                </p>
                @isset($report->status->name)
                <p class="font-sans text-sm font-normal inline-block align-text-bottom pt-3 pb-2 text-cyan-900">
                Статус: {{$report->status->name}}
                </p>
                @endisset
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
      <div>
        <x-input-label for="number" :value="_('Номер автомобиля')" />
        <x-text-input id="number" class="block mt-1" type="text" name="number" required/>
        x-im  
    
    
    </div>
  




        <button type="submit" class="border-2 mt-5">Создать</button>
    </form>
</div>
    </div>

@endsection()