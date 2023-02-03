<?php

namespace App\Controllers;

use App\Models\UtentiModel;
use CodeIgniter\Controller;

class TablesController extends Controller {
    public function index($tableName) {
        helper(['form', 'string']);
        $tableModel = model(ucfirst($tableName) . "Model");
        $tableData = ["table_name" => $tableName, "fields_name" => $tableModel->db->getFieldNames($tableModel->table), "tuples" => $tableModel->findAll()];

        foreach ($tableData["fields_name"] as $key => $value) :
            $tableData["fields_name"][$key] = string_prettier($value);
        endforeach;

        $menuData = ["table_name" => $tableName, "db_tables" => db_connect()->listTables()];

        echo view('/sections/header.php', ['styles' => [base_url('css/side-menu.css'), base_url('css/table-side.css')]]) . view('/sections/side_menu', $menuData) . view('tableVisualizer', $tableData) . view('/sections/footer.php');
    }

    public function changeTable() {
        return redirect()->to('/tables/' . $this->request->getVar('table'));
    }
}