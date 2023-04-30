@extends('index')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            @guest
                Сначала авторизуйтесь, чтобы можно было просматривать и редактировать список задач
            @else
                <a href="/tasks">Перейти на список задач >></a>
            @endguest
        </div>
    </div>
</div>
@endsection
