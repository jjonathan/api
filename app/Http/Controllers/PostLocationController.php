<?php

namespace App\Http\Controllers;

use App\Domains\Location\Actions\SaveLocationAction;
use App\Domains\Location\DataTransferObject\LocationRequestData;
use App\Http\Requests\PostLocationRequest;

class PostLocationController extends Controller
{
    public function __invoke(PostLocationRequest $postLocationRequest, SaveLocationAction $saveLocationAction)
    {
        return $saveLocationAction->execute(LocationRequestData::fromRequest($postLocationRequest));
    }
}
