EDITAR

<form action="{{ url('/articulos/'.$articulo->id) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}

    @include('articulos.form',['Modo'=>'edit']);
</form>