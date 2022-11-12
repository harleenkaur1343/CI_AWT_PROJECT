<?php
namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;


class User extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function login_action()
    {
        $model = new UserModel();
        $result=$model->where('email',$this->request->getVar('email'))->first();
        

        if($result!=null)
        {
            if($result['password']==$this->request->getVar('password'))
            {
                echo"
                <body style='background-color:#1d1d1d;'>
                <h1 style='color:#fff;padding:25px;text-align:center;'>
                    Login successful!
                </h1>
                
                <a href = 'http://localhost/CI/public/' style='color:#F7526F; font-size:16px; text-align:center;display:block;' >Go to Home page</a>
                </body>
                ";
            }
            else{
                return view('login_form.php'); 
                echo "<h1>Wrong password</h1>"; 
            }
        }
        else{
          // return view('login_form.php');
            echo "<h1>Wrong email</h1>"; 

        }
    }
    
}


?>