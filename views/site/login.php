<h1 class="topic" >Авторизация</h1>
<h3><?= $message ?? ''; ?></h3>

<h3><?= app()->auth->user()->name ?? ''; ?></h3>
<?php
if (!app()->auth::check()):
    ?>
    <form method="post" class="login_form">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <label>Логин  <input style="width: 200px; height: 30px; font-size: 16px" type="text" name="login"></label>
        <label>Пароль <input class="inp_login" type="password" name="password"></label>
        <button class="login_btn">Войти</button>
    </form>
<?php endif;