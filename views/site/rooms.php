<h1>Помещения</h1>
<ol>
    <?php
    foreach ($rooms as $room) {
        echo '<li>' . $room->name . '</li>';
        echo '<li>' . $room->type_id->name . '</li>';
        echo '<li>' . $room->division_id->name . '</li>';
    }
    ?>
</ol>
<h2>Добавить новое помещение</h2>
<form method="post">
    <label>Название <input type="text" name="name"></label>
    <label>Тип помещения <input type="text" name="type"></label>
    <label>Подразделение <input type="text" name="division"></label>
    <button>Добавить</button>
</form>