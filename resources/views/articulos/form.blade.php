


<label for="nombre">{{'nombre'}}</label>
    <input type="text" name="nombre" id="nombre" 
    value="{{ isset($articulo->nombre) ? $articulo->nombre : ''}}">

    <label for="detalle">{{'detalle'}}</label>
    <input type="text" name="detalle" id="detalle" 
    value="{{ isset($articulo->detalle) ? $articulo->detalle : ''}}">

    <label for="cantidad">{{'cantidad'}}</label>
    <input type="text" name="cantidad" id="cantidad" 
    value="{{ isset($articulo->cantidad) ? $articulo->cantidad : ''}}">

    <label for="precio_maroyista">{{'precio_maroyista'}}</label>
    <input type="text" name="precio_maroyista" id="precio_maroyista" 
    value="{{ isset($articulo->precio_maroyista) ? $articulo->precio_maroyista : ''}}">

    <label for="precio_minorista">{{'precio_minorista'}}</label>
    <input type="text" name="precio_minorista" id="precio_minorista" 
    value="{{ isset($articulo->precio_minorista) ? $articulo->precio_minorista : ''}}">

    <!-- <label for="stock_disponible">{{'stock_disponible'}}</label>
    <input type="text" name="stock_disponible" id="stock_disponible"> -->

    <label for="foto">{{'foto'}}</label>

    @if(isset($articulo->foto))
    <br>
    <img src="{{ asset('storage').'/'.$articulo->foto }}" alt="Imagen articulo" width="200">
    <br>
    @endif

    <input type="file" name="foto" id="foto">

    <input type="submit" 
    value="{{ $Modo == 'create' ? 'Agregar' : 'Modificar'}}">
    
    <a href="{{ url('articulos') }}">Regresar</a>