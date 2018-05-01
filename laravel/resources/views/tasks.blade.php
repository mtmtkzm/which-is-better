@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <!-- Current Tasks -->
            @if (count($tasks) > 0)
                <h1>Current tasks</h1>
                <ul>
                    @foreach($tasks as $task)
                        <li>
                            <div>{{$task->updated_at}}「{{$task->name}}」</div>
                            <form action="{{ url('task/'.$task->id) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit" class="btn btn-danger fa fa-trash"></button>
                            </form>
                        </li>
                    @endforeach
                </ul>

            @endif
        </div>
    </div>
@endsection