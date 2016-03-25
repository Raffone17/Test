@extends('layouts.admin')

@section('content')
    <div class="container-fluid" >
        <table class="table">
          <thead class="thead-inverse" style="background-color:#373a3c; color:white;">
            <tr>
              <th>#</th>
              <th>Nome</th>
              <th>Data</th>
              <th>Numero ricette</th>
              <th>Modifica</th>
              <th>Elimina</th>
            </tr>
          </thead>
          <tbody>
               @foreach ($categories as $category)
                <tr>
                  <th scope="row">{{ $category->id }}</th>
                  <td>{{ $category->name }}</td>
                  <td>{{ date('d-m-Y',strtotime($category->created_at)) }}</td>
                  <td>{{ App\Recipe::where('category_id',$category->id)->count() }}</td>
                  <td><a class="btn btn-warning pull" href="{{ route('category.edit', ['id' => $category->id]) }}">Modifica</a></td>
                  <td>{{ Form::open(['route' => ['category.destroy', $category->id], 'method' => 'delete', 'class' => 'delete-category']) }}
                     <button class="btn btn-danger pull" type="submit">Elimina</button>
                      {{ Form::close() }}
                  </td>
                </tr>
               @endforeach
          </tbody>
      </table>
        {!! $categories->render() !!}
        <div class="row" >
            
        </div>
    </div>
  
    
@endsection