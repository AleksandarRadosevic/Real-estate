<?php namespace App\Models;

use CodeIgniter\Model;
class adModel extends Model
{
    protected $table       = 'advertisement';
    protected $allowedFields = [
        'IdOwner', 'IdAd', 'TimePosted','Price','Topic','IdType','Size','Address','IdPlace','Description'
    ];
}