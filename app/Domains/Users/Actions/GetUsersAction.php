<?php

namespace App\Domains\Users\Actions;

use App\Domains\Location\Models\LocationModel;
use Exception;

class GetUsersAction
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

    public function execute()
    {
        try {
            $usersIds = $this->locationModel->all()->pluck('user_id');
        } catch (Exception $e) {
            return [
                'status' => 'error',
                'msg' => 'There\'s been an error: ' . $e->getMessage()
            ];
        }
        return [
            'status' => 'ok',
            'data' => $usersIds
        ];
    }

}