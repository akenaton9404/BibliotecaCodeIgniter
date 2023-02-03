<?php

namespace App\Models;

use CodeIgniter\Model;

class ScritturaModel extends Model {
    protected $table = 'scrittura';

    protected $allowedFields = [
        'id',
        'id_autore',
        'id_libro'
    ];
}