<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormAuth extends Component
{
    public $name;
    public $email;

    protected function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|unique:users',
        ];
    }
     
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
 

    public function render()
    {
        return view('livewire.form-auth');
    }
}
