@extends('layouts.app')

@section('content')
@if (Auth::id() === $task->user_id)
    <h1>id: {{ $task->id }} のタスク編集ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
                
                <div class="form-group">
                    {!! Form::label('status', 'ステータス:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('content', 'タスク:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@else
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to the tasklist</h1>
            
            {!! link_to_route('signup.get', 'Return to your top page!', [], ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>
@endif

@endsection