<h2>
    Listado de Clientes   
    <span class="badge badge-primary">{{ count($clients) }} </span>    
</h2>

<table class="table"> 
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Email</th>
            <th colspan="2">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clients as $client)
        <tr>
            <td>{{ $client->id}}</td>
            <td>{{ $client->nombre}}</td>
            <td>{{ $client->direccion}}</td>
            <td>{{ $client->telefono}}</td>
            <td>{{ $client->email}}</td>
            <td>
                <button wire:click="edit({{ $client->id}})"  class="btn btn-primary">
                    Editar
                </button>
            </td>
            <td>
            <button wire:click="destroyClient({{ $client->id }})" class="btn btn-danger">
                    Eliminar
                </button>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>

{{ $clients->links()}}