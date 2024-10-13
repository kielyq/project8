@extends('layouts.main')


@section('content') 
<div class="flex space-x-4 container mx-auto flex flex-wrap">
    @foreach ($reports as $arr)
        <div class="shadow-md w-64 m-16 " >
            <div class="card-text m-6 ">
                <p class="id_of_rep">
                {{$arr['id']}}
                </p>
                <p class="title-card">
                {{$arr['description']}}
                </p>
                <p class="price-card">
                {{$arr['create_at']}}
                </p>
            </div>
        </div>
        @endforeach
    </div>

@endsection()