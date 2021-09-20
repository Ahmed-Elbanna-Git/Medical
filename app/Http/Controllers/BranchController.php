<?php

namespace App\Http\Controllers;
use App\Models\Branch;
use Illuminate\Http\Request;
use App\Http\Requests\BranchRequest;

class BranchController extends CrudController
{

     public function __construct(Request $request)
    {

        $this->model = new Branch();
        $this->basicViewFolder = 'Branches';
        $this->basicRoute = 'Branches';
        $this->request = $request;

        $this->validationRequestClass = new BranchRequest();

        parent::__construct();
    }
  
}