<?php

namespace App\Http\Controllers;

use App\Domains\Location\Actions\GetLocationAction;
use App\Domains\Location\DataTransferObject\GetLocationRequestData;
use App\Http\Requests\GetLocationRequest;

class GetLocationController extends Controller
{
    public function __invoke(GetLocationRequest $getLocationRequest, GetLocationAction $getLocationAction)
    {
        return $getLocationAction->execute(GetLocationRequestData::fromRequest($getLocationRequest));
    }
}
