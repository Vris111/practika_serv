<h1 class="topic">Помещения</h1>
<ol>
    <?php
    foreach ($rooms as $room) {
        echo '<p>' . $room->name . '</p>';
        echo '<p>' . $room->type_id . '</p>';
        echo '<p>' . $room->division_id . '</p>';
        echo '<p>' . '---------------' . '</p>';
    }
    ?>
</ol>
<h2>Добавить новое помещение</h2>
<form method="post" class="form">
    <label>Название <input type="text" name="name"></label>
    <label>Тип помещения <input type="text" name="type"></label>
    <label>Подразделение <input type="text" name="division"></label>
    <button class="btn">Добавить</button>
</form>