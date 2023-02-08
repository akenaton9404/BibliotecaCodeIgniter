<div id="side-menu" class="side_menu">
    <form action="<?php echo base_url(); ?>/TablesController/changeTable/1" method="post">
        <?php foreach ($db_tables as $db_table) : ?>
            <input type="submit" class="page_chooser" name="table" value="<?= $db_table ?>" <?= strcasecmp($db_table, $table_name) == 0 ? 'style="background: linear-gradient(to right, transparent 0, transparent 98%, var(--link-color) 98%, var(--link-color) 100%);"' : '' ?>>
        <?php endforeach; ?>
    </form>
    <div class="logout">
        <p id="username" style="max-width: 50%; overflow-x: hidden; display: inline; white-space: nowrap; text-decoration: underline; cursor: pointer" onclick="editProfile()"><?= session()->get('username') ?></p>
        <form action="<?php echo base_url(); ?>/LoginController/logout" method="post" style="display: flex; flex-direction: row; aspect-ratio: 1/1; width: 8%; height: auto">
            <input type="image" src="<?= base_url('/img/logout.png') ?>" alt="logout">
        </form>
    </div>
</div>

<script>
    let _scrollFlow = 1;
    let _username = document.getElementById('username')

    let _interval = 25;

    setInterval(async () => {
        _username.scrollLeft += _scrollFlow
        if (_username.scrollLeft === (_username.scrollWidth - _username.clientWidth - 1) || _username.scrollLeft === 0) {
            _scrollFlow *= -1;
        }
    }, _interval)

    function editProfile() {

    }
</script>