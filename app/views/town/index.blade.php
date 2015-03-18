@extends('master.index')

@section('content')

    @include('action.version1')

    <!-- BEGIN CONTENT WRAPPER -->
    <div class="content colored">
        <div class="container">
            <div class="row">

                <!-- BEGIN MAIN CONTENT -->
                <div class="main col-sm-8">

                    @include('properties.list.version1')

                </div>
                <div class="sidebar colored col-sm-4">

                    @include('emails.newsletter.version1')

                    @include('testamonials.version1')

                    @include('search.bylocation')

                </div>

            </div>
        </div>
    </div>

@stop