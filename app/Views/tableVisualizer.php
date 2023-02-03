<div class="table_side">

    <span id="tooltip" class="tooltip"></span>

    <div class="model_table">
        <h1 class="table_title"><?= esc($table_name) ?></h1>
        <div class="table_content">
            <table>
                <thead>
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
                            <td onmouseover="showTooltip(this, '<?= string_prettier($key) ?>')" onmouseleave="showTooltip(this, '<?= string_prettier($key) ?>')"><?= $attribute ?></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    let isTooltipShow = false;

    function showTooltip(element, field_name) {
        if (isTooltipShow) {
            document.getElementById('tooltip').style.visibility = 'hidden'
        } else {
            document.getElementById('tooltip').innerText = field_name
            document.getElementById('tooltip').style.top = element.getBoundingClientRect().top + "px"
            document.getElementById('tooltip').style.left = (element.getBoundingClientRect().left + element.getBoundingClientRect().width / 2) + "px"
            document.getElementById('tooltip').style.visibility = 'visible'
        }

        isTooltipShow = !isTooltipShow;
    }
</script>