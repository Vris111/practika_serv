<h1 class="topic">Абоненты</h1>
<ol>
    <?php
    foreach ($abonents as $abonent) {
        echo '<p>' . $abonent->surname . '</p>';
        echo '<p>' . $abonent->name . '</p>';
        echo '<p>' . $abonent->patronymic . '</p>';
        echo '<p>' . $abonent->date_of_birth . '</p>';
        echo '<p>' . '-------------------------' . '</p>';
    }
    ?>
</ol>
<h2>Добавить нового абонента</h2>
<form method="post" class="form">
    <label>Фамилия <input type="text" name="surname"></label>
    <label>Имя <input type="text" name="name"></label>
    <label>Отчество <input type="text" name="patronymic"></label>
    <label>Дата рождения <input type="date" name="date_of_birth"></label>
    <label>Тип подразделения <input type="text" name="type"></label>
    <button class="btn">Добавить</button>
</form>