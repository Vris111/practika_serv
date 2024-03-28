<h1 class="topic" >Авторизация</h2>
<h3><?= $message ?? ''; ?></h3>

<h3><?= app()->auth->user()->name ?? ''; ?></h3>
<?php
if (!app()->auth::check()):
    ?>
    <form method="post" class="login_form">
        <label>Логин  <input class="inp_login" style="width: 100px" type="text" name="login"></label>
        <label>Пароль <input class="inp_login" type="password" name="password"></label>
        <button class="login_btn">Войти</button>
    </form>
<?php endif;