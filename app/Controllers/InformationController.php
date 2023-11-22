<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class InformationController extends BaseController
{
    public function index()
    {
        echo view('main/index');
    }
    public function Finance()
    {
        echo view('main/finance');
    }
    public function barangay()
    {
        echo view('main/barangay');
    }
    public function events()
    {
        echo view('main/event');
    }
    public function contact()
    {
        echo view('main/contact');
    }

    private $information;
    public function __construct(){
    $this->information = new \App\Models\ResidentInformationModel();
    }
    public function Information()
    {
        $data['info'] = $this->information->findAll();
        return view('main/information', $data);
    }
    
        public function insertInformation()
        {
            $data = [
                'ResidentName' => $this->request->getVar('ResidentName'),
                'ContactNo' => $this->request->getVar('ContactNo'),
                'Status' => $this->request->getVar('Status'),
                'Gender' => $this->request->getVar('Gender'),
                'Birthdate' => $this->request->getVar('Birthdate'),
                'Age' => $this->request->getVar('Age'),
                'Address' => $this->request->getVar('Address'),

            ];
            $this->information->save($data);
            return redirect()->to('/information');
        }

}
