<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    //creating a variable storing a table name
   // $db = \Config\Database::connect();
    protected $table = 'logininfo';
    protected $allowedFields = ['username','email','password'];

    /*public function insert($data=null, bool $returnID=true)
    {
        $this->db->insert('logininfo',$data);
    }*/
}

?>