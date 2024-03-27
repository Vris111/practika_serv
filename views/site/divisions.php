<h1>подразделения</h1>
<ol>
    <?php
    foreach ($divisions as $division) {
        echo '<p>' . $division->name . '</p>';
        echo '<p>' . $division->type_id . '</p>';
    }
    ?>
</ol>
<h2>Добавить новое подразделение</h2>
<form method="post">
    <label>Название <input type="text" name="name"></label>
    <label>Тип подразделения <input type="text" name="type"></label>
    <button>Добавить</button>
</form>