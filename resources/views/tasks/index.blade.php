@extends('layouts.app')

@section('content')

<!-- Display Validation Errors -->
@include('common.errors')
<h3>{{ trans('layout.add_task') }}</h3>
<form action="{{ route('post.task',Auth::user()->id) }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="task-name"><b>{{ trans('layout.task') }}</b></label>
        <div>
            <input type="text" class="form-control" placeholder="{{ trans('layout.enter_task') }}" name="name">
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        </div>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success">
            <i class="fas fa-plus"></i>
            {{ trans('layout.add_task') }}
        </button>
    </div>
</form>
<br>

@if (count($tasks) > config('compare.zero'))
<div class="panel panel-default">
    <h3 class="panel-heading">
        {{ trans('layout.current_task') }}
    </h3>

    <div class="panel-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>{{ trans('layout.task') }}</th>
                    <th>{{ trans('layout.action') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->name }}</td>
                    <td>
                        <a href="{{ route('delete.task',$task->id) }}" class="btn btn-danger">
                            <i class="fas fa-trash-alt"></i>
                            {{ trans('layout.delete') }}
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif
@endsection
