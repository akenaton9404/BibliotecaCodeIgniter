<div id="quotes" class="quotes" style="z-index: 1">
    <div class="quote">
        <div class="writer-pic">
            <img src="https://media.beniculturali.it/mibac/files/boards/49c057de355871e3b42c49876090930e/DANTE-2021.--jpg.jpg">
        </div>
        <div class="quote style-border">
            <p class="cit">“I costumi e le mode degli uomini cambiano come le foglie sul ramo, alcune delle quali vanno ed altre vengono.”</p>
            <p class="writer">- Dante Alighieri</p>
        </div>
    </div>
    <div class="quote">
        <div class="writer-pic">
            <img src="https://s26162.pcdn.co/wp-content/uploads/2022/05/Italo-Calvino.png">
        </div>
        <div class="quote style-border">
            <p class="cit">"Prendete la vita con leggerezza, che leggerezza non è superficialità, ma planare sulle cose dall'alto, non avere macigni sul cuore."</p>
            <p class="writer">- Italo Calvino</p>
        </div>
    </div>
</div>
<form id="register" action="<?php echo base_url(); ?>/LoginController/store" method="post" class="form" style="transform: translate(-100%, 0)">
    <h1>Register</h1>
    <label>
        Username
        <input type="text" name="register_username" required minlength="3" maxlength="60" value="<?= set_value('register_username') ?>">
        <p id="register_username_error" class="error" style="display: <?= session()->get('register_username_error') ? 'block' : 'none' ?>">Username già esistente</p>
    </label>
    <label>
        Password
        <input id="register_password" type="password" name="register_password" required minlength="6" maxlength="60" onkeyup="passwordCongruence()">
        <p id="register_password_strength" class="error" style="display: none"></p>
    </label>
    <label>
        Conferma password
        <input id="register_password_repeat" type="password" required minlength="6" maxlength="60" onkeyup="passwordCongruence()">
        <p id="register_password_congruence" class="error" style="display: none">Password diverse</p>
    </label>
    <input type="submit" value="Registrati">
    <a onclick="changeForm()">Hai già un account?</a>
</form>
<form id="login" action="<?php echo base_url(); ?>/LoginController/loginAuth" method="post" class="form" style="transform: translate(0, 0)">
    <h1 onclick="playStopAudio()">Login</h1>
    <label>
        Username
        <input type="text" name="login_username" required minlength="3" maxlength="60" value="<?= set_value('login_username') ?>" onclick="disableErrors()">
        <p id="login_username_error" class="error" style="display: <?= session()->get('login_username_error') ? 'block' : 'none' ?>">Username inesistente</p>
    </label>
    <label>
        Password
        <input type="password" name="login_password" required minlength="6" maxlength="60">
        <p id="login_password_error" class="error" style="display: <?= session()->get('login_password_error') ? 'block' : 'none' ?>">Password errata</p>
    </label>
    <input type="submit" value="Accedi">
    <a onclick="changeForm()">Non hai ancora un account?</a>
</form>

<script>
    let activeForm = "login";

    function changeForm() {
        if (activeForm === "login") {
            document.getElementById("login").style.transform = "translate(100%, 0)";
            document.getElementById("register").style.transform = "translate(0, 0%)";
            activeForm = "register";
        } else {
            document.getElementById("register").style.transform = "translate(-100%, 0)";
            document.getElementById("login").style.transform = "translate(0, 0%)";
            activeForm = "login";
        }
    }
    function disableErrors() {
        document.getElementById('login_username_error').style.display = 'none';
        document.getElementById('login_password_error').style.display = 'none';
        document.getElementById('register_username_error').style.display = 'none';
        document.getElementById('register_password_error').style.display = 'none';
    }
    function passwordCongruence() {
        if (document.getElementById('register_password').value !== document.getElementById('register_password_repeat').value) {
            document.getElementById('register_password_congruence').style.display = 'block';
        } else {
            document.getElementById('register_password_congruence').style.display = 'none';
        }
    }

    <?= session()->get('register') ? 'changeForm()' : ' ' ?>
</script>

