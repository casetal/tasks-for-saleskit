@extends('index')

@section('title-block')Все задачи@endsection

@section('content') 

<div class="card">
    <div class="card-header">Добавить задачу</div>
    <div class="card-body">
        <form method="post" action="/tasks">
            {{ csrf_field() }}
            <p>Название: <input class="form-control" type="text" name="title" placeholder="Название задачи" required></p>
            <p>Описание: <textarea class="form-control" name="description" placeholder="Описание задачи" required></textarea></p>
            <p><input type="hidden" name="status" value="0"></p>
            <p><input type="submit" class="btn btn-success" value="Добавить"></p>
        </form>
    </div>
</div>

<div class="card" style="margin: 20px 0;">
    <div class="card-header">Список задач</div>
        @foreach($tasks as $task)
            <div class="card" style="margin: 20px;">
                <a href="/tasks/{{ $task->id }}"><div class="card-header">{{ $task->title }}</div></a>
                <div class="card-body">
                    <div class="status">Статус: @if($task->status == '0') Задача в работе @else Задача выполнена @endif</div>
                    <div>Создано: {{ $task->created_at }}@if($task->created_at != $task->updated_at), изменено: {{ $task->updated_at }} @endif</div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection