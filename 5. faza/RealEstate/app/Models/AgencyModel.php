<?php namespace App\Models;

use CodeIgniter\Model;
class AgencyModel extends Model
{
    protected $table         = 'agency';
    protected $allowedFields = [
        'IdA', 'Name', 'AverageMark'
    ];
}