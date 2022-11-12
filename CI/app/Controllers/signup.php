<?php

namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;
  
class signup extends Controller
{
    public function index()
    {
        helper(['form']);
        $data = [];
        echo view('signup_form', $data);
    }
  
    public function store()
    {
        
        helper(['form']);
        $rules = [
            'username'          => 'required|min_length[2]|max_length[50]',
            'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
            'password'      => 'required|min_length[4]|max_length[50]',
        ];
          
        if($this->validate($rules)){
            $userModel = new UserModel();
            $data = [
                'name'     => $this->request->getVar('name'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $userModel->save($data);
            return redirect()->to('/login');
        }
        else{
            $data['validation'] = $this->validator;
            echo view('signup_form', $data);
        }
          
        /*if($this->validate($rules)){
            $userModel = new UserModel();
            $data = [
                'name'     => $this->request->getVar('name'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $userModel->save($data);
            return redirect()->to('/login');
        }else{
            $data['validation'] = $this->validator;
            echo view('signup_form', $data);
        }*/
          
    }
  
}
/*namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\UserModel;

class signup extends Controller
{
    public function index()
    {
        helper(['form']);
        $data = [];
        return view('signup_form', $data);
    }
    public function insert()
    {
        //creating a key value pair for storing data from the form 
        $data = ['name'=>$this->request->getVar('username'),
        'email'=>$this->request->getVar('email'),
        'password'=>$this->request->getVar('password')];
        
        $model = new UserModel();
        $model->insert($data);

        echo "<h1>Data submitted</h1>";
    
        
        
    }
}*/
?>