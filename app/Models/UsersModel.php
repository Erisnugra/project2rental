<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = "users";
    protected $primaryKey = "id_user";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ["username", "password", "name", 'role', 'status_user'];

    public function data_user($username, $password)
    {
        return $this->db->table('users')->where([
            'username' => $username,
            'password' => $password,
        ])->get()->getRowArray();
    }


    public function login_admin($username, $password)
    {
        return $this->db->table('users')->where([
            'username' => $username,
            'password' => $password,
        ])->get()->getRowArray();
    }

    public function login_user($username, $password)
    {
        return $this->db->table('users')->where([
            'username' => $username,
            'password' => $password,
        ])->get()->getRowArray();
    }

    public function register($data)
    {
        $this->db->table('users')->insert($data);
    }
}
