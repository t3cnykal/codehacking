@extends('layouts.admin')

@section('content')

    <h1>Categories</h1>

    <div class="col-sm-3">

        {!! Form::model($category, ['method'=>'PATCH', 'action'=>['AdminCategoriesController@update', $category->id]]) !!}

        {{csrf_field()}}

            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>

            {!! Form::submit('Update Category', ['class' => 'btn btn-info col-sm-6']) !!}

        {!! Form::close() !!}

        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminCategoriesController@destroy', $category->id]], ['class'=>'pull-right']) !!}

          {{csrf_field()}}

              <div class="form-group">
                  {!! Form::submit('Delete Category', ['class' => 'btn btn-danger col-sm-6']) !!}
              </div>

        {!! Form::close() !!}


    </div>






@stop
