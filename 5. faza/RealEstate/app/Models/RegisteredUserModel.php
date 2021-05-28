<?php namespace App\Models;

use CodeIgniter\Model;
class RegisteredUserModel extends Model
{
    protected $table         = 'registereduser';
    protected $allowedFields = [
        'Id','Name', 'Surname'
    ];
}