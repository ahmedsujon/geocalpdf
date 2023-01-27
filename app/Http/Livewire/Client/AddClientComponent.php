<?php

namespace App\Http\Livewire\Client;

use App\Models\Client;
use App\Models\SubClient;
use Livewire\Component;

class AddClientComponent extends Component
{
    public$name, $email, $phone, $company_name, $designation, $fields = [], $contact_name = [], $contact_email = [], $i = 1;

    public function addField($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->fields ,$i);
    }

    public function removeField($i)
    {
        unset($this->fields[$i]);
    }
    
    public function storeData()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|unique:clients,email',
            'company_name' => 'required',
            'phone' => 'required',
            'designation' => 'required',
        ]);

        $client = new Client();
        $client->name = $this->name;
        $client->email = $this->email;
        $client->phone = $this->phone;
        $client->company_name = $this->company_name;
        $client->designation = $this->designation;
        $client->save();

        foreach($this->contact_name as $key => $cname){
            $cont = new SubClient();
            $cont->client_id = $client->id;
            $cont->name = $this->contact_name[$key];
            $cont->email = $this->contact_email[$key];
            $cont->save();
        }

        session()->flash('success', 'Client added successfully');
        return redirect()->route('client.list');
        $this->resetInputs();
    }

    public function resetInputs()
    {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->company_name = '';
        $this->designation = '';
    }

    public function render()
    {
        return view('livewire.client.add-client-component')->layout('livewire.layouts.base');
    }
}
