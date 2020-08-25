<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Clients;
class ClientComponent extends Component
{
    use WithPagination;
    public $view = 'createClient';
    public $client_id, $nombre, $direccion, $telefono, $email;
    public function render()
    {
        return view('livewire.client-component',[
            'clients' => Clients::orderBy('id','desc')->paginate(8),
        ]);
    }

    public function store()
    {
        $this->validate(['nombre'=> 'required', 'direccion' => 'required','telefono' => 'required','email' => 'required']);

        $client = Clients::create([
            'nombre' => $this->nombre,
            'direccion' => $this->direccion,
            'telefono' => $this->telefono,
            'email' => $this->email,
        ]);
        
        $this->edit($client->id);
        
        //$this->title = '';
        //$this->body = '';

    }

    public function edit($id)
    {
        $client = Clients::find($id);

        $this->client_id = $client->id;
        $this->nombre = $client->nombre;
        $this->direccion = $client->direccion;
        $this->telefono = $client->telefono;
        $this->email = $client->email;

        $this->view = 'editClient';
    }

    public function update()
    {
        $this->validate(['nombre'=> 'required', 'direccion' => 'required','telefono' => 'required','email' => 'required']);

        $client = Clients::find($this->client_id);

        $client->update([
            'nombre'     => $this->nombre,
            'direccion'  => $this->direccion,
            'telefono'  => $this->telefono,
            'email'  => $this->email,
        ]);

        $this->default();
    }

    public function destroyClient($id)
    {
        Clients::destroy($id);
    }

    public function default()
    {
        $this->nombre    = '';
        $this->direccion = '';
        $this->telefono  = '';
        $this->email  = '';
        $this->view = 'createClient';

    }

}
