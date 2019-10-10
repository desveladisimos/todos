@extends('layouts.app')

@section('content')

    <h1 style="margin-top: 0; margin-bottom: 20px; padding-bottom: 20px; border-bottom: solid 1px #eee; font-size: 24px">Todos</h1>

    <div style="margin-bottom: 20px; text-align: right">
        <a class="btn btn-primary btn-sm" href="/todos/create">Create a todo</a>
    </div>

    <table class="table table-bordered">
        <colgroup>
            <col style="width: 15%">
            <col style="width: 85%">
        </colgroup>
        <thead>
            <tr style="background-color: #eee">
                <th>Id</th>
                <th>Todo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($todos as $todo)
            <tr>
                <td>{{ $todo->id }}</td>
                <td>
                    <a href="/todos/{{ $todo->id }}/edit">{{ $todo->todo }}</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
