<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\resident;
use App\Models\room;
use App\Models\user;

class RoomController extends Component
{

    protected $listeners = [
        'addroom'
    ];

    public function render()
    {
        $room = resident::where('user_id', auth()->user()->id)->get();
        $user = user::where('id', auth()->user()->id)->first();

        return view('livewire.room', [
            'room' => $room,
            'user' => $user,
        ]);
    }

    public function switchroom($room_id)
    {
        $room = resident::where('id', $room_id)->first();
        $this->emit('switchroom', $room);
    }

    public function addroom()
    {

    }
}
