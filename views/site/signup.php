<h1 class="topic">Регистрация нового сисадмина</h1>
<h3><?= $message ?? ''; ?></h3>
<form method="post" class="login_form">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <label>Имя <input style="height: 30px; background-color: #ffff; font-size: 16px; width: 230px" type="text" name="name"></label>
    <label>Логин <input style="height: 30px; background-color: #ffff; font-size: 16px; width: 210px" type="text" name="login"></label>
    <label>Пароль <input class="inp_login" type="password" name="password"></label>
    <button class="login_btn">Зарегистрировать</button>
</form>