CREAR EMPLEADOS

<form action="{{ url('/articulos') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}

    @include('articulos.form',['Modo'=>'create']);
    
</form>
