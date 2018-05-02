@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Task
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                @include('common.errors')

                <!-- New Task Form -->
                    <form action="{{ url('add_task')  }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}

                    <!-- Task Name  -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Task</label>
                            <div class="col-sm-6">
                                <input type="text" name="name" class="form-control" placeholder="name">
                                <input type="text" name="than" class="form-control" placeholder="than">
                            </div>
                            <button type="submit" class="btn btn-default fa fa-btn fa-plus"></button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection