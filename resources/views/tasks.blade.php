@extends('index')

@section('title-block')Все задачи@endsection

@section('content') 

<div class="task-add">
    <form method="post" action="/tasks">
        {{ csrf_field() }}
        <p>Название: <input class="form-control" type="text" name="title" placeholder="Название задачи" required></p>
        <p>Описание: <textarea class="form-control" name="description" placeholder="Описание задачи" required></textarea></p>
        <p><input type="hidden" name="status" value="0"></p>
        <p><input type="submit" class="btn btn-success" value="Добавить"></p>
    </form>
</div>

<h2>Список задач</h2>
<div class="tasks">
    @foreach($tasks as $task)
        <div class="card p-4 mb-4">
            <div class="card-body">
                <p><a href="/tasks/{{ $task->id }}">{{ $task->title }}</a></p>

                <p class="status">@if($task->status == '0') Задача в работе @else Задача выполнена @endif <i>{{ $task->created_at }}</i></p>
            </div>
        </div>
    @endforeach
</div>
@endsection