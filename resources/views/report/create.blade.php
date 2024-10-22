@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Создать новый отчет</h1>

    <form method="POST" action="{{ route('reports.store') }}">
        @csrf
        <div>
           <p>Номер авто:</p>
            <input type="text" id="car_number" name="car_number" placeholder="номер" required>
        </div>
        <div>
            <p>Описание заявки:</p>
            <textarea  id="description" name="description" placeholder="описание" required ></textarea>
        </div>
        <button type="submit" class="border-4 color-red">Создать</button>
    </form>
</div>
@endsection
