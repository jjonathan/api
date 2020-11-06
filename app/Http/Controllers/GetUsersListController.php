<?php

namespace App\Http\Controllers;

use App\Domains\Users\Actions\GetUsersAction;

class GetUsersListController extends Controller
{
    public function __invoke(GetUsersAction $getUsersAction)
    {
        return $getUsersAction->execute();
    }
}
