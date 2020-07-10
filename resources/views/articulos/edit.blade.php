EDITAR

<form action="{{ url('/articulos/'.$articulo->id) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}

    <label for="nombre">{{'nombre'}}</label>
    <input type="text" name="nombre" id="nombre" value="{{ $articulo->nombre }}">

    <label for="detalle">{{'detalle'}}</label>
    <input type="text" name="detalle" id="detalle" value="{{ $articulo->detalle }}">

    <label for="cantidad">{{'cantidad'}}</label>
    <input type="text" name="cantidad" id="cantidad" value="{{ $articulo->cantidad }}">

    <label for="precio_maroyista">{{'precio_maroyista'}}</label>
    <input type="text" name="precio_maroyista" id="precio_maroyista" value="{{ $articulo->precio_maroyista }}">

    <label for="precio_minorista">{{'precio_minorista'}}</label>
    <input type="text" name="precio_minorista" id="precio_minorista" value="{{ $articulo->precio_minorista }}">

    <!-- <label for="stock_disponible">{{'stock_disponible'}}</label>
    <input type="text" name="stock_disponible" id="stock_disponible"> -->

    <label for="foto">{{'foto'}}</label>
    <input type="file" name="foto" id="foto">
    <br>
    {{ $articulo->foto }}
    <br>

    <input type="submit" value="Editar">
</form>