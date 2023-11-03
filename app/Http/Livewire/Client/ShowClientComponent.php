<?php

namespace App\Http\Livewire\Client;

use App\Models\Client;
use App\Models\SubClient;
use Livewire\Component;

class ShowClientComponent extends Component
{
    public $name, $email, $phone, $address, $company_name, $designation, $client_id, $fields = [], $contact_name = [], $contact_email = [], $i = 1, $subClients = [];

    public function mount($client_id)
    {
        $client = Client::where('id', $client_id)->first();
        $this->name = $client->name;
        $this->email = $client->email;
        $this->phone = $client->phone;
        $this->address = $client->address;
        $this->company_name = $client->company_name;
        $this->designation = $client->designation;

        $contacts = SubClient::where('client_id', $client->id)->get();
        $this->i = $contacts->count();
        
        foreach($contacts as $key => $contact){
            array_push($this->contact_name, $contact->name);
            array_push($this->contact_email, $contact->email);
            array_push($this->subClients, $contact->id);
            array_push($this->fields, $key);
        }
    }

    public function render()
    {
        $client = Client::where('id', $this->client_id)->first();
        return view('livewire.client.show-client-component', ['client'=>$client])->layout('livewire.layouts.base');
    }
}
  