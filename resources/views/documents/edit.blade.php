@extends('adminlte::page')
@section('template_title')
    Update Document
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Document</span>
                    </div>
                    <div class="card-body">
                        {!! Form::model($document, ['route' => ['documents.update', $document], 'method' => 'PUT']) !!}

                        @include('documents.form')
                        {!! Form::close() !!}




                      
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
