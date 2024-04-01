<h1 class="topic">Помещения</h1>
<div style="display: flex; gap 50px">
    <div style="margin-left: 14%; margin-top: 40px; border: 1px solid black; width: 1000px; height: 600px; padding: 20px; box-shadow: 5px 5px 10px 1px;">
        <div style="border: 1px solid black; width: 980px; padding: 10px; height: 580px; box-shadow: 5px 5px 10px 1px;">
            <?php
            foreach ($rooms as $room) {
                echo '<div style="display: flex; flex-direction: row; justify-content: space-around; box-shadow: 1px 1px 2px 1px; >';
                echo '<p style="font-size: 40px">' . $room->name . '</p>';
                $room_type = '';
                foreach ($rooms_types as $rooms_type){
                    if ($rooms_type['id'] == $room->type_id){
                        $room_type = $rooms_type['name'];
                        break;
                    }
                }
                echo '<p style="font-size: 24px">' . $room_type . '</p>';
                $division_name = '';
                foreach ($divisions as $division){
                    if ($division['id'] == $room->division_id){
                        $division_name = $division['name'];
                        break;
                    }
                }
                echo '<p style="font-size: 24px">' . $division_name . '</p>';
                echo '<p style="font-size: 24px"><img style="width: 30px; height: 30px" src="/public/img/' . $room->img . '" alt=""></p>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
    <div style="display:flex; flex-direction: column; margin-top: 80px; margin-left: 50px">
        <h2>Добавить новое помещение</h2>
        <form method="post" class="form" style='border: 1px solid black; width: 330px; height: 170px; padding: 20px; display: flex;
 flex-direction:column; gap: 10px; background-color: #fc5e00; margin-top: 10px;' enctype="multipart/form-data">
            <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
            <h3><?= $message ?? ''; ?></h3>
            <label class="label">Название <input style="width: 249px; height: 20px" type="text" name="name"></label>
            <div style='display:flex;'>
                <p style="margin-right: 5px">Тип помещения </p>
                <select style="height: 20px; width: 80px;" name="type_id" id="type_id">
                    <?php
                    foreach ($rooms_types as $rooms_type){
                        echo '<option value="' . $rooms_type->id . '">' . $rooms_type->name . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div style='display:flex;'>
                <p style="margin-right: 5px">Подразделение</p>
                <select style="height: 20px; width: 85px;" name="division_id" id="division_id">
                    <?php
                    foreach ($divisions as $division){
                        echo '<option value="' . $division->id . '">' . $division->name . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div style='display:flex'>
                <label class="label">Фото  <input type="file" name="img"></label>
            </div>
            <button class="btn">Добавить</button>
        </form>
    </div>
</div>
