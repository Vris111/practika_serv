<h1 class="topic">Телефонные данные</h1>
<div style="display: flex; gap 50px">
    <div style="margin-left: 14%; margin-top: 40px; border: 1px solid black; width: 1000px; height: 600px; padding: 20px;
 box-shadow: 5px 5px 10px 1px; margin-right: 50px; aline-items: center">
        <div style="border: 1px solid black; width: 980px; padding: 10px; height: 580px; box-shadow: 5px 5px 10px 1px;">
            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px">
                <div>
                    <form action="" method="post">
                        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
                        <input style="width: 250px; padding: 3px" type="search" name="search" id="search-input" placeholder="Поиск по номеру помещения">
                        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
                        <input type="submit" style="width: 70px "></input>
                    </form>
                </div>
            </div>
            <div style="display: flex; font-size: 24px; gap: 160px">
                <p style="margin-right: 140px">Номер телефона</p>
                <p>Номер помещения</p>
                <p>Абонент</p>
            </div>
            <?php
            $count = 0;
            foreach ($numbers as $number) {
                echo '<div style="display: flex; flex-direction: row; justify-content: space-around; box-shadow: 1px 1px 2px 1px; >';
                echo '<p style="font-size: 40px; aline-items: center;">' . $number->number . '</p>';
                echo '<p style="font-size: 24px">' . $number->room_id . '</p>';
                echo '<p style="font-size: 24px">' . $number->abonent_id . '</p>';
                $count++;
                echo '</div>';
            }
            echo '<p style="font-size: 24px; margin-top: 20px">' . $count . '</p>';
            ?>
        </div>
    </div>
    <div style="display:flex; flex-direction: column; margin-top: 80px">
        <h2>Добавить новый телефон</h2>
        <form method="post" class="" style='border: 1px solid black; width: 330px; height: 150px; padding: 20px; display: flex;
 flex-direction:column; gap: 10px; background-color: #fc5e00; margin-top: 10px;'>
            <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
            <h3><?= $message ?? ''; ?></h3>
            <label class="label">Номер <input style="width: 250px; height: 20px" type="text" name="number"></label>
            <div style='display:flex;'>
                <p style="margin-right: 5px">Помещение</p>
                <select style="height: 20px; width: 100px;" name="room_id" id="room_id">
                    <?php
                    foreach ($rooms as $room){
                        echo '<option value="' . $room->id . '">' . $room->name . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div style='display:flex;'>
                <p style="margin-right: 5px">Абонент</p>
                <select style="height: 20px; width: 80px" name="abonent_id" id="abonent_id ">
                    <?php
                    foreach ($abonents as $abonent){
                        echo '<option value="' . $abonent->id . '">' . $abonent->name . '</option>';
                    }
                    ?>
                </select>
            </div>
            <button class="btn">Добавить</button>
        </form>
    </div>
</div>
</div>