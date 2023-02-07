<div class="table_side">

    <span id="tooltip" class="tooltip"></span>

    <div class="model_table">
        <h1 class="table_title"><?= esc($table_name) ?></h1>
        <div id="table_content" class="table_content">
            <table id="table">
                <thead id="thead">
                    <tr id="table_head_row">
                    <?php foreach ($fields_name as $field_name) : ?>
                        <td><?= string_prettier($field_name) ?></td>
                    <?php endforeach; ?>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($tuples as $tuple) : ?>
                    <tr>
                    <?php foreach ($tuple as $key => $attribute) : ?>
                        <td ondblclick="fieldModify(this)" onmouseover="showColumnName(this, '<?= string_prettier($key) ?>')" onmouseleave="showColumnName(this, '<?= string_prettier($key) ?>')"><?= $attribute ?></td>
                    <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>