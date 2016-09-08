@extends('layouts.app')

@section('content')
<article class="container">
  <div class="panel panel-default">
    <div class="panel-heading">
      Lista de bomberos
    </div>
    <div class="panel-body">
      <table  class="table table-bordered">
        <thead><!--Titulos de la tabla-->
          <tr>
            <th class="text-center">Numero Legajo</th>
            <th class="text-center">Jerarquia</th>
            <th class="text-center">Apellido</th>
            <th class="text-center">Nombre</th>
            <th class="text-center">Direccion</th>
            <th class="text-center">Telefono</th>
            <th class="text-center">Fecha nacimiento</th>
            <th colspan="2"></th>
          </tr>
        </thead>
        <tbody><!--Contenido de la tabla-->
          @foreach ($bomberos as $bombero)
            <tr>
              <td class="text-center">{{$bombero->nro_legajo}}</td>
              <td class="text-center">{{$bombero->jerarquia}}</td>
              <td class="text-center">{{$bombero->apellido}}</td>
              <td class="text-center">{{$bombero->nombre}}</td>
              <td class="text-center">{{$bombero->direccion}}</td>
              <td class="text-center">{{$bombero->telefono}}</td>
              <td class="text-center">{{$bombero->fecha_nacimiento}}</td>
              <td class="text-center">
                {{ Form::open(['route' => ['bombero.destroy', $bombero->id], 'method' => 'delete']) }}
                    <button type="submit" class="btn btn-danger btn-mini glyphicon glyphicon-trash"></button>
                {{ Form::close() }}
              </td>
              <td class="text-center"><a class="glyphicon glyphicon-edit" href="{{ route('bombero.edit', $bombero->id) }}"></a></td>
            </tr>
          @endforeach
          </tbody>
          <tfoot>
            <tr>
              <td class="text-center" colspan="9"> lista de bomberos activos </td>
            </tr>
          </tfoot>
          <br>
        </table>
        <div class="text-center">
          {{ $bomberos->render()}}
        </div>
    </div>
  </div>
</article>
@endsection