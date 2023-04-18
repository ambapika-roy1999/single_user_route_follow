<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class mapEvent extends ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public $coordinates;
    public function __construct()
    {
        $this->coordinates = [
              ["lat" =>22.604575278515313, "lng" =>88.37576882153124, "tag" => 'CatarCraft', "color" =>'orange', "type" =>'store' ],
              [ "lat"=>22.60453668963043, "lng"=>88.3756932901428, "tag"=> '--', "color"=>'red', "type"=>'--'],
              [ "lat"=>22.604407408607194, "lng"=>88.37584530591637, "tag"=> '--', "color"=>'red', "type"=>'--'],
              [ "lat"=>22.60427654846609, "lng"=>88.37597280527409, "tag"=> '--', "color"=>'red', "type"=>'--'],
              [ "lat"=>22.604248533845464, "lng"=>88.37603634164803, "tag"=> '--', "color"=>'red', "type"=>'--'],
              [ "lat"=>22.604356362467875, "lng"=>88.37609715885063, "tag"=> 'Mahabir masala store', "color"=>'green', "type"=>'store'],
              [ "lat"=>22.60426604298402, "lng"=>88.37606668737887, "tag"=> '--', "color"=>'red', "type"=>'--'],
              [ "lat"=>22.604248533845464, "lng"=>88.37606194585844, "tag"=> '--', "color"=>'red', "type"=>'--'],
              [ "lat"=>22.604210013732768 , "lng"=>88.37607901533202, "tag"=> '--', "color"=>'red', "type"=>'--'],
              [ "lat"=>22.604180748244023, "lng"=>88.37609715885063, "tag"=> '--', "color"=>'purple', "type"=>'--'],
              [ "lat"=>22.604090475576303 , "lng"=>88.37619283772551, "tag"=> '--', "color"=>'red', "type"=>'--'],
              [ "lat"=>22.604040502725457 , "lng"=>88.37625147968393, "tag"=> '--', "color"=>'red', "type"=>'--'],
              [ "lat"=>22.604016682428572, "lng"=>88.37628035952426, "tag"=> '--', "color"=>'red', "type"=>'--'],
              [ "lat"=>22.603989444548446, "lng"=>88.37632461597295, "tag"=> '--', "color"=>'red', "type"=>'--'],
              [ "lat"=>22.604041444128413, "lng"=>88.37633936812247, "tag"=> '--', "color"=>'red', "type"=>'--'],
              [ "lat"=>22.60402919058299, "lng"=>88.3763864083939, "tag"=> 'SBI ATM', "color"=>'blue', "type"=>'store']
            ];
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {

        return new PrivateChannel('mapEventList.'. $this->coordinates);
    }
}
