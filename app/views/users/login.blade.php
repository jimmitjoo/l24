@extends('master.index')

@section('content')

    <!-- BEGIN CONTENT WRAPPER -->
    <div class="content">
        <div class="container">
            <div class="row">

                <!-- BEGIN MAIN CONTENT -->
                <div class="main col-sm-12">

                    <div class="login col-sm-10 col-sm-offset-1">
                        <h1 class="center">Logga in</h1>

                        <div class="col-sm-12">

                            <hr/>

                            @include('errors.list')

                            {{ Form::open(['route' => 'sessions.store', 'method' => 'post', 'class' => 'form-style']) }}

                            <div class="form-group">
                                {{ Form::label('email', 'E-post *') }}
                                {{ Form::text('email', null, ['class' => 'form-control']) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('password', 'Lösenord *') }}
                                {{ Form::password('password', ['class' => 'form-control']) }}
                            </div>

                            <button type="submit" class="btn btn-fullcolor">Logga in</button>
                            {{ Form::close() }}
                        </div>


                    </div>


                </div>
                <!-- END MAIN CONTENT -->

            </div>
        </div>
    </div>
    <!-- END CONTENT WRAPPER -->

@stop