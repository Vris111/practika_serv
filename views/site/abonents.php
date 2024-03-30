<h1 class="topic">Абоненты</h1>
<div style="display: flex; gap 50px">
    <div style="margin-left: 10%; margin-top: 40px; border: 1px solid black; width: 1200px; height: 600px; padding: 20px; box-shadow: 5px 5px 10px 1px;">
        <div style="border: 1px solid black; width: 1180px; padding: 10px; height: 580px; box-shadow: 5px 5px 10px 1px;">
            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px">
                <div>
                    <form action="" method="post">
                        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
                        <input style="width: 250px; padding: 3px" type="search" name="search" id="search-input" placeholder="Поиск по номеру подразделения">
                        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
                        <input type="submit" class="btn"></input>
                    </form>
                </div>
            </div>
            <div style="display: flex; font-size: 24px; gap: 100px">
                <p style="margin-right: 200px">Фамилия</p>
                <p>Имя</p>
                <p>Отчество</p>
                <p>Дата рождения</p>
                <p>Подразделение</p>
            </div>
            <?php
            $count = 0;
            foreach ($abonents as $abonent) {
                echo '<div style="display: flex; flex-direction: row; justify-content: space-around; box-shadow: 1px 1px 2px 1px; >';
                echo '<p style="font-size: 40px">' . $abonent->surname . '</p>';
                echo '<p style="font-size: 24px">' . $abonent->name . '</p>';
                echo '<p style="font-size: 24px">' . $abonent->patronymic . '</p>';
                echo '<p style="font-size: 24px">' . $abonent->date_of_birth . '</p>';
                echo '<p style="font-size: 24px">' . $abonent->division_id . '</p>';
                $count++;
                echo '</div>';
            }
            echo '<p style="font-size: 24px; margin-top: 20px">' . $count . '</p>';
            ?>
        </div>
    </div>
    <div style="display:flex; flex-direction: column; margin-top: 80px; margin-left: 50px">
        <h2>Добавить нового абонента</h2>
        <form method="post" class="form" style='border: 1px solid black; width: 330px; height: 200px; padding: 20px; display: flex; flex-direction:column; gap: 10px; background-color: #fc5e00; margin-top: 10px;'>
            <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
            <label class="label">Фамилия <input style="width: 250px; height: 20px" type="text" name="surname"></label>
            <label class="label">Имя <input style="width: 287px; height: 20px" type="text" name="name"></label>
            <label class="label">Отчество <input style="width: 247px; height: 20px" type="text" name="patronymic"></label>
            <label class="label">Дата рождения <input style="width: 205px; height: 20px" type="date" name="date_of_birth"></label>
            <div style='display:flex; align-items: center'>
                <p style="margin-right: 5px">Подразделение</p>
                <select style="height: 20px; margin-right: 10px" name="division_id" id="division_id ">
                    <?php
                    foreach ($divisions as $division){
                        echo '<option value="' . $division->id . '">' . $division->name . '</option>';
                    }
                    ?>
                </select>
                <button class="btn">Добавить</button>
        </form>
    </div>

</div>
