@extends('layouts.admin')

@section('content')

    <h1>Categories</h1>

    <div class="col-sm-3">

      {!! Form::open(['method'=>'POST', 'action'=>'AdminCategoriesController@store']) !!}

      {{csrf_field()}}

          <div class="form-group">
              {!! Form::label('name', 'Name:') !!}
              {!! Form::text('name', null, ['class' => 'form-control']) !!}
          </div>

          {!! Form::submit('Create Category', ['class' => 'btn btn-info']) !!}

      {!! Form::close() !!}

    </div>

    <div class="col-sm-9">

      @if ($categories)

          <table class="table">
              <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Created</th>
                    <th>Updated</th>
                  </tr>
              </thead>
              <tbody>

                  @foreach ($categories as $category)

                      <tr>
                          <th>{{$category->id}}</th>
                          <th>{{$category->name}}</th>
                          <th>{{$category->created_at ? $category->created_at->diffForhumans() : ''}}</th>
                          <th>{{$category->updated_at ? $category->updated_at->diffForhumans() : ''}}</th>
                      </tr>

                  @endforeach
              </tbody>
          </table>

      @endif

    </div>




@stop
