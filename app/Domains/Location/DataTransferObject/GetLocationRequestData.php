<?php

namespace App\Domains\Location\DataTransferObject;

use Illuminate\Http\Request;
use Spatie\DataTransferObject\DataTransferObject;

class GetLocationRequestData extends DataTransferObject
{
    /**
     * @var int
     */
    public $userId;

    public static function fromRequest(Request $request): self
    {
        return new self([
            'userId' => (int) $request->user_id
        ]);
    }
}
