INICIO

<a href="{{ url('/articulos/create') }}">Agregar Artículo</a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <td>#</td>
            <td>Nombre</td>
            <td>Detalle</td>
            <td>Cantidad</td>
            <td>Precio Maroyista</td>
            <td>Precio Minorista</td>
            <td>Foto</td>
            <td>Acciones</td>
        </tr>
    </thead>
    <tbody>
    @foreach($articulos as $articulo)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $articulo->nombre }}</td>
            <td>{{ $articulo->detalle }}</td>
            <td>{{ $articulo->cantidad }}</td>
            <td>{{ $articulo->precio_maroyista }}</td>
            <td>{{ $articulo->precio_minorista }}</td>
            <td>
                <img src="{{ asset('storage').'/'.$articulo->foto }}" alt="Imagen articulo" width="200">
            </td>
            <td> 
                <a href="{{ url('/articulos/'.$articulo->id).'/edit' }}">
                    Editar
                </a>
                | 
                <form action="{{ url('/articulos/'.$articulo->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" onclick="return confirm('¿Eliminar Artículo?')">
                        Eliminar
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>