<h1>Телефонные данные</h1>
<ol>
    <?php
    foreach ($telephones as $telephone) {
        echo '<li>' . $telephone->number . '</li>';
        echo '<li>' . $telephone->room_id->name . '</li>';
        echo '<li>' . $telephone->abonent_id->name . '</li>';
    }
    ?>
</ol>
<h2>Добавить новый телефон</h2>
<form method="post">
    <label>Номер <input type="text" name="number"></label>
    <label>Помещение <input type="text" name="room"></label>
    <label>Абонент <input type="text" name="abonent"></label>
    <button>Добавить</button>
</form>