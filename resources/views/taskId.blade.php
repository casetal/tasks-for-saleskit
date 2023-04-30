@extends('index')

@section('title-block'){{ $task->title }}@endsection

@section('content') 

    <form method="post">
        {{ method_field('PUT') }}
        {{ csrf_field() }}

        <div class="task">
            <div class="card p-4">
                <p>Название: <input type="text" name="title" class="form-control" value="{{ $task->title }}" required></p>

                <p>Описание: <textarea name="description" class="form-control" placeholder="Описание задачи" required>{{ $task->description }}</textarea></p>

                <div class="status">
                    Статус: 
                    <select name="status">
                        <option {{ ($task->status == '0' ? 'selected':'') }} value="0">Задача в работе</option>
                        <option {{ ($task->status == '1' ? 'selected':'') }} value="1">Задача выполнена</option>
                    </select> 
                </div>
                <div class="dates">
                    <div class="created-date">Создано: {{ $task->created_at }}</div>
                    <div class="created-date">Изменено: {{ $task->updated_at }}</div>
                </div>
                <input type="submit" class="btn btn-primary" value="Изменить">
            </div>
        </div>

    </form>

    <div class="button-delete">
        <form method="post">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}

            <input type="submit" class="btn btn-danger" value="Удалить">
        </form>
    </div>
@endsection