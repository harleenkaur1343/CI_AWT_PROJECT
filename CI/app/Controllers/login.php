<?php
namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\UserModel;

class login extends Controller
{
    public function index()
    {
        return view('login_form');
    }
}
?>