<?php namespace App\Models;

use CodeIgniter\Model;
class PrivilegedUserModel extends Model
{
    protected $table         = 'privilegeduser';
    protected $allowedFields = [
        'Id', 'Name', 'Surname'];
}