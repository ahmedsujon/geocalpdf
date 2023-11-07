<?php

namespace App\Http\Livewire\Client;

use App\Models\Client;
use App\Models\SubClient;
use Livewire\Component;

class EditClientComponent extends Component
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

    public function addField($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->fields ,$i);
    }

    public function removeField($i)
    {
        unset($this->fields[$i]);
        unset($this->contact_name[$i]);
        unset($this->contact_email[$i]);
        unset($this->subClients[$i]);
    }
    
    public function updateData()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|unique:clients,email,'.$this->client_id.'',
            'company_name' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $client = Client::where('id', $this->client_id)->first();
        $client->name = $this->name;
        $client->email = $this->email;
        $client->phone = $this->phone;
        $client->address = $this->address;
        $client->company_name = $this->company_name;
        $client->designation = $this->designation;
        $client->save();

        $contacts = SubClient::where('client_id', $this->client_id)->get();
        foreach($contacts as $contact){
            $cont = SubClient::find($contact->id);
            $cont->delete();
        }

        foreach($this->contact_name as $key => $cname){
            $cont = new SubClient();
            $cont->client_id = $client->id;
            $cont->name = $this->contact_name[$key];
            $cont->email = $this->contact_email[$key];
            $cont->save();
        }

        session()->flash('success', 'Client updated successfully');
        return redirect()->route('client.list');
    }

    public function render()
    {
        return view('livewire.client.edit-client-component')->layout('livewire.layouts.base');
    }
}
