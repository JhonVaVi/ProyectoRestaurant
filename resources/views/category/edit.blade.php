@extends('adminlte::page')

@section('template_title')
    Update Category
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Category</span>
                    </div>
                    <div class="card-body">
                        {!! Form::model($category,['method' => 'PATCH','route' => ['categories.update', $category->id]]) !!}


                            @include('category.form')

                        {!! Form::close() !!}

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
