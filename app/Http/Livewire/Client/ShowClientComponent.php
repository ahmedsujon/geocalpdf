<?php

namespace App\Http\Livewire\Client;

use App\Models\Client;
use Livewire\Component;

class ShowClientComponent extends Component
{
    public $name, $email, $phone, $company_name, $designation, $client_id;

    public function mount($client_id){
        $client = Client::where('id', $client_id)->first();
        $this->client_id = $client->id;
    }

    public function render()
    {
        $client = Client::where('id', $this->client_id)->first();
        return view('livewire.client.show-client-component', ['client'=>$client])->layout('livewire.layouts.base');
    }
}
  