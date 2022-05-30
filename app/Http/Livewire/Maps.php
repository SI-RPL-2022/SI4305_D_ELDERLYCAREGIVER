<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\locations;

class Maps extends Component

{
    public $long, $lat;
    public $geoJson;

    private function loadlocation(){
        $users = User::where('status', 'admin')->get();

        $customlocation = [];

        foreach($users as $user) {
            $customlocation[] = [
                'type' => 'Feature',
                'geometry' => [
                    'coordinates' => [$user->locations->long, $user->locations->lat],
                    'type' => 'Point',
                ],
                'properties' => [
                    'locationId' => $user->locations->id,
                    'alamat' => $user->locations->alamat,

                ],

            ];
        }

        $geolocation = [
            'type' => 'FeatureCollection',
            'features' => $customlocation,
        ];

        $geoJson = collect($geolocation)->toJson();
        $this->geoJson = $geoJson;
    }

    public function render()
    {
        $this->loadlocation();
        return view('livewire.maps')->layout('user.lokasi');
    }
}
