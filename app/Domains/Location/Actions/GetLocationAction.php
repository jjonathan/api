<?php

namespace App\Domains\Location\Actions;

use App\Domains\Location\DataTransferObject\GetLocationRequestData;
use App\Domains\Location\Models\LocationModel;
use Exception;

class GetLocationAction
{

    /**
     * LocationModel
     *
     * @var LocationModel
     */
    private $locationModel;

    public function __construct(LocationModel $locationModel)
    {
        $this->locationModel = $locationModel;
    }

    public function execute(GetLocationRequestData $locationRequestData)
    {
        $userLocation = $this->locationModel->where('user_id', $locationRequestData->userId)->first();
        if (!$userLocation) {
            return [
                'status' => 'error',
                'msg' => 'User not found!'
            ];
        }
        return [
            'status' => 'ok',
            'data' => $userLocation
        ];
    }

}