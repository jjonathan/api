<?php

namespace App\Domains\Location\Actions;

use App\Domains\Location\Models\LocationModel;
use App\Domains\Location\DataTransferObject\LocationRequestData;
use Exception;

class SaveLocationAction
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

    public function execute(LocationRequestData $locationRequestData)
    {
        try {
            $this->locationModel->updateOrCreate([
                'user_id' => $locationRequestData->userId
            ],
            [
                'lat' => $locationRequestData->lat,
                'lon' => $locationRequestData->lon,
            ]);
        } catch (Exception $e) {
            return [
                'status' => 'error',
                'msg' => 'It is not possible to save the user location: ' . $e->getMessage()
            ];
        }

        return [
            'status' => 'ok',
            'msg' => 'User\'s location saved!'
        ];
    }

}