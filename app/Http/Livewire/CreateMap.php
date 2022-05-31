<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateMap extends Component
{
    
    public $long, $lat;
    
    public function render()
    {
        return view('livewire.create-map')->layout('user.regisuser', [
            "head" => "Register Pengasuh | Elderly Caregiver"
        ]);
    }
}