<?php

namespace App\Models;
use CodeIgniter\Model;

class UtentiModel extends Model {
    protected $table = 'utenti';

    protected $allowedFields = [
        'id',
        'username',
        'password_hash',
        'last_access',
        'last_ip',
        'permission_level',
        'approvato'
    ];
}