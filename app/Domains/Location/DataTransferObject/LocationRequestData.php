<?php

namespace App\Domains\Location\DataTransferObject;

use Illuminate\Http\Request;
use Spatie\DataTransferObject\DataTransferObject;

class LocationRequestData extends DataTransferObject
{
    /**
     * @var int
     */
    public $userId;

    /**
     * @var float
     */
    public $lat;

    /**
     * @var float
     */
    public $lon;

    public static function fromRequest(Request $request): self
    {
        return new self([
            'userId' => (int) $request->user_id,
            'lat' => (float) $request->lat,
            'lon' => (float) $request->lon
        ]);
    }
}
