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
    <form class="page_number_chooser" action="<?php echo base_url(); ?>/TablesController/changeTable/1" method="post">
    <?php for ($i = 1; $i <= $pagesNumber["total"]; $i++) : ?>
        <input name="pageNumber" value="<?= $table_name ?>_<?= $i ?>" value="" style="<?= $i == $pagesNumber["currentPage"] ? "border: 2px solid var(--main-secondary);" : "" ?>" class="page_choose_button" type="submit" onclick="changePage(this.id)">
    <?php endfor; ?>
    </form>
</div>