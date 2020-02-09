<?php

namespace App\Http\Resources\Client;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Facades\Log;

class ClientCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $this->collection->transform(function($item) {
            $outs = $item->toArray();
            $outs['players'] = array_map(function($item) {
                return [$item['id'], $item['name']];
            }, $outs['players']);
            return $outs;
        });

        return ['data' => $this->collection];
        //return parent::toArray($request);
    }
}
