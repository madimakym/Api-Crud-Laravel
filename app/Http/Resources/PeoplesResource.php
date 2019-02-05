<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PeoplesResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'firstname'       => $this->firstname,
            'lastname'    => $this->lastname,
            'mail'     => $this->mail,
            'phone'     => (int) $this->phone,
            'adress'     => $this->adress,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }

    // public function with($request){
    //     return[
    //         'version' => '1.0.0',
    //         'author_url' => url('www.makymadi.com')
    //     ];
    // }
}
