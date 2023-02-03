<?php

namespace App\Models;

use CodeIgniter\Model;

class AutoreModel extends Model {
    protected $table = 'autore';

    protected $allowedFields = [
        'id',
        'nome',
        'cognome',
        'data_nascita'
    ];
}