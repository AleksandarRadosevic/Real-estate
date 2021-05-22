<?php namespace App\Models;

use CodeIgniter\Model;
class UserModel extends Model
{
    protected $table         = 'korisnik';
     protected $primaryKey = 'IdK';

    protected $useAutoIncrement = true;

    protected $allowedFields = [
        'KorisnickoIme', 'Lozinka', 'Mejl','BrTelefona'
    ];
}