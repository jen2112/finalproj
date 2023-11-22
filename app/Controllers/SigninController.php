<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RegistrationModel;
class SigninController extends BaseController
{
   
        public function index()
        {
            helper(['form']);
            echo view('signin');
        } 
      
        public function loginAuth()
        {
            $session = session();
            $userModel = new RegistrationModel();
            $email = $this->request->getVar('email');
            $password = $this->request->getVar('password');
            
            $data = $userModel->where('email', $email)->first();
            
            if($data){
                $pass = $data['password'];
                $authenticatePassword = password_verify($password, $pass);
                if($authenticatePassword){
                    $ses_data = [
                        'id' => $data['id'],
                        'name' => $data['name'],
                        'email' => $data['email'],
                        'isLoggedIn' => TRUE
                    ];
                    if($data['email'] == 'dan@try.com')
                    {
                        $session->set($ses_data);
                    return redirect()->to('/information');
                    }
                    
                    else{
                    $session->set($ses_data);
                    echo 'hello';
                    }                
                }
                else{
                    $session->setFlashdata('msg', 'Password is incorrect.');
                    return redirect()->to('/signin');
                }
            }
            else{
                $session->setFlashdata('msg', 'Email does not exist.');
                return redirect()->to('/signin');
            }
        }
            
    }

