@extends('layouts.admin')

@section('content')
    <div class="container-fluid" >
        <table class="table">
          <thead class="thead-inverse" style="background-color:#373a3c; color:white;">
            <tr>
              <th>#</th>
              <th>Nome</th>
              <th>Utilizzi</th>
              <th>Data</th>
              <th>Modifica</th>
              <th>Elimina</th>
            </tr>
          </thead>
          <tbody>
               @foreach ($ingredients as $ingredient)
                <tr>
                  <th scope="row">{{ $ingredient->id }}</th>
                  <td>{{ $ingredient->name }}</td>
                  <td>{{ App\Ingredient_to_recipe::where('ingredient_id',$ingredient->id)->count() }}</td>
                  <td>{{ date('d-m-Y',strtotime($ingredient->created_at)) }}</td>
                  <td><a class="btn btn-warning pull" href="{{ route('ingredient.edit', ['id' => $ingredient->id]) }}">Modifica</a></td>
                  <td>{{ Form::open(['route' => ['ingredient.destroy', $ingredient->id], 'method' => 'delete', 'class' => 'delete-ingredient']) }}
                     <button class="btn btn-danger pull" type="submit">Elimina</button>
                      {{ Form::close() }}
                  </td>
                </tr>
               @endforeach
          </tbody>
      </table>
        {!! $ingredients->render() !!}
        <div class="row" >
            
        </div>
    </div>
  
    
@endsection