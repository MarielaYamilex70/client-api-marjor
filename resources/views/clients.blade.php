<h1>CLIENTES</h1>
<table class="table table-responsive table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">EMAIL</th>
            <th scope="col">TELEFONO</th>
            <th scope="col">DIRECCION</th>
            <th scope="col">ACCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $client)
        <tr>
            <td scope="row">{{$client['id'] }}</td>
            <td>{{$client['name']}}</td>
            <td>{{$client['email']}}</td>
            <td>{{$client['phone']}}</td>
            <td>{{$client['address']}}</td>
            <td> 
                <a class=""  href="{{route('client.edit',$client['id'])}}" >Editar</a>
                <a class=""  href="{{route('client.destroy',$client['id'])}}" >Borrar</a>
            </td>
            
        </tr>
        @endforeach
        
    </tbody>
</table>