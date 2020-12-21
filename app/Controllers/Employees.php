<?php

namespace App\Controllers;

use App\Models\WSModel;

class Employees extends BaseController
{
    public function testtoken()
    {
        $ws = new WSModel();

        print_r($ws->getToken());
    }
    public function index()
    {
        $ws = new WSModel();

        $employeesData = $ws->getEmployees();

        $data['employeesData'] = json_decode($employeesData);

        return view('home', $data);
    }

    public function new()
    {
        return view('new');
    }

    public function create()
    {
        $ws = new WSModel();

        $data = $this->request->getPost();

        $result = $ws->createEmployees($data);

        print_r($result);
    }
}
