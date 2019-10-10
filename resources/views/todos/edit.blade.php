@extends('layouts.app')

@section('content')

    <h1 style="margin-top: 0; margin-bottom: 20px; padding-bottom: 20px; border-bottom: solid 1px #eee; font-size: 24px">Edit the todo</h1>

    <div style="margin-bottom: 20px; text-align: right">
        <a class="btn btn-primary btn-sm" href="/todos">Back to index</a>
    </div>

    <form method="POST" action="/todos/{{ $todo->id }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="todo">Todo</label>
            <input type="text" id="todo" class="form-control" name="todo" placeholder="Do homework, study, etc" value="{{ $todo->todo }}">
        </div>

        <div class="text-right">
            <button type="submit" class="btn btn-success btn-sm">Update!</button>
        </div>
    </form>

@endsection
