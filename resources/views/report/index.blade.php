@extends('layouts.main')


@section('content') 
<div class="flex space-x-4 container mx-auto flex flex-wrap">
    @foreach ($reports as $report)
        <div class="shadow-md w-64 m-16 " >
            <div class="card-text m-6 ">
                <p class="font-sans text-lg font-normal text-sky-600">
                {{$report->id}}
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
    </div>

@endsection()