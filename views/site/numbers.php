<h1>Телефонные данные</h1>
<ol>
    <?php
    foreach ($numbers as $number) {
        echo '<p>' . $number->number . '</p>';
        echo '<p>' . $number->room_id . '</p>';
        echo '<p>' . $number->abonent_id . '</p>';
        echo '<p>' . '-------------------' . '</p>';
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