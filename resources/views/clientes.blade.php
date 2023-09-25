@extends("menu")
@section("content")
     <form action="guardar" method="post">
        @csrf
        Nombre:<input type="text" name="Nombre"><br>
        Apellido:<input type="text" name="Apellido"><br>
        Teléfono:<input type="text" name="Telefono"><br>
        <input type="submit" name="bte" value="Guardar">
    </form>
    @if (isset($mensaje))
        {{$mensaje}}
    @endif
 @endsection 