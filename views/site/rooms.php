<h1 class="topic">Помещения</h1>
<div style="display: flex; gap 50px">
<div style="margin-left: 14%; margin-top: 40px; border: 1px solid black; width: 1000px; height: 600px; padding: 20px; box-shadow: 5px 5px 10px 1px;"> 
<div style="border: 1px solid black; width: 980px; padding: 10px; height: 580px; box-shadow: 5px 5px 10px 1px;">
    <?php
    foreach ($rooms as $room) {
        echo '<div style="display: flex; flex-direction: row; justify-content: space-around; box-shadow: 1px 1px 2px 1px; >';
        echo '<p style="font-size: 40px">' . $room->name . '</p>';
        echo '<p style="font-size: 24px">' . $room->type_id . '</p>';
        echo '<p style="font-size: 24px">' . $room->division_id . '</p>';
        echo '</div>';
    }
    ?>
</div>
</div>
<div style="display:flex; flex-direction: column; margin-top: 80px; margin-left: 50px">
<h2>Добавить новое помещение</h2>
<form method="post" class="form" style='border: 1px solid black; width: 330px; height: 120px; padding: 20px; display: flex;
 flex-direction:column; gap: 10px; background-color: #fc5e00; margin-top: 10px;'>
    <label class="label">Название <input style="width: 249px; height: 20px" type="text" name="name"></label>
    <label class="label">Тип помещения <input style="width: 200px; height: 20px" type="text" name="type"></label>
    <label class="label">Подразделение <input style="width: 205px; height: 20px" type="text" name="division"></label>
    <button class="btn">Добавить</button>
</form>
</div>
</div>
