INICIO

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
            <td>{{ $articulo->foto }}</td>
            <td> Editar | Eliminar </td>
        </tr>
    @endforeach
    </tbody>
</table>