@extends('layouts')

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('admin.sidebar')
            <div class="col-md-9 content">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Task</div>
                    <div class="panel-body">
                        <a href="{{ url('/task') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/task') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('task.form')

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
