<?php

namespace App\Controllers;

use App\Models\UtentiModel;
use CodeIgniter\Controller;

class TablesController extends Controller {

    public function index($tableName, $pageNumber = 1) {
        $_rowPerPage = 5;

        helper(['form', 'string']);
        $tableModel = model(ucfirst($tableName) . "Model");
        $tableData = [
            "table_name" => $tableName,
            "pagesNumber" => [
                "currentPage" => $pageNumber,
                "total" => ceil($tableModel->db->table($tableModel->table)->countAll() / $_rowPerPage)
            ],
            "fields_name" => $tableModel->db->getFieldNames($tableModel->table),
                                    //limit(nRows, Offset)
            "tuples" => $tableModel->limit($_rowPerPage, 1 * $pageNumber - 1)->find()
        ];

        foreach ($tableData["fields_name"] as $key => $value) :
            $tableData["fields_name"][$key] = string_prettier($value);
        endforeach;

        $menuData = ["table_name" => $tableName, "db_tables" => db_connect()->listTables()];

        echo view('/sections/header.php', [
            'styles' => [
                base_url('css/side-menu.css'),
                base_url('css/table-side.css'),
                base_url('css/info.css')],
            'js' => [
                base_url('js/columnName.js'),
                base_url('js/fieldModify.js'),
                base_url('js/infoBox.js')]]) .
            view('/sections/info.php') .
            view('/sections/side_menu', $menuData) .
            view('tableVisualizer', $tableData) .
            view('/sections/footer.php');
    }

    public function changeTable() {
        return redirect()->to('/tables/' . $this->request->getVar('table') . '/' . $this->request->getVar('pageNumber'));
    }
}