<h1>подразделения</h1>
<ol>
    <?php
    foreach ($abonents as $abonent) {
        echo '<li>' . $abonent->surname . '</li>';
        echo '<li>' . $abonent->name . '</li>';
        echo '<li>' . $abonent->patronymic . '</li>';
        echo '<li>' . $abonent->date_of_birth . '</li>';
        echo '<li>' . $abonent->division->name . '</li>';
    }
    ?>
</ol>
<h2>Добавить нового абонента</h2>
<form method="post">
    <label>Фамилия <input type="text" name="surname"></label>
    <label>Имя <input type="text" name="name"></label>
    <label>Отчество <input type="text" name="patronymic"></label>
    <label>Дата рождения <input type="date" name="date_of_birth"></label>
    <label>Тип подразделения <input type="text" name="type"></label>
    <button>Добавить</button>
</form>