<?php

namespace App\Models;

use CodeIgniter\Model;

class LibroModel extends Model {
    protected $table = 'libro';

    protected $allowedFields = [
        'id',
        'id_categoria',
        'titolo',
        'data_pubblicazione',
        'ISBN',
        'prezzo',
        'data_scrittura'
    ];
}