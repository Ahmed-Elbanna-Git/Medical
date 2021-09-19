<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Room;

use App\Http\Requests\RoomRequest;

class RoomController extends CrudController
{

     public function __construct(Request $request)
    {

        $this->model = new Room();
        $this->basicViewFolder = 'rooms';
        $this->basicRoute = 'rooms';
        $this->request = $request;

        $this->validationRequestClass = new RoomRequest();

        parent::__construct();
    }
  
}
