<h1 class="topic">Подразделения</h1>
<div style="display: flex; gap 50px">
<div style="margin-left: 27%; margin-top: 40px; border: 1px solid black; width: 800px; height: 600px; padding: 20px; box-shadow: 5px 5px 10px 1px;"> 
<div style="border: 1px solid black; width: 780px; padding: 10px; height: 580px; box-shadow: 5px 5px 10px 1px;">
    <?php
    foreach ($divisions as $division) {
        echo '<div style="display: flex; flex-direction: row; justify-content: space-around; box-shadow: 1px 1px 2px 1px; >';
        echo '<p style="font-size: 40px">' . $division->name . '</p>';
        echo '<p style="font-size: 24px">' . $division->type_id . '</p>';
        echo '</div>';
    }
    ?>
</div>
</div>
<div style="display:flex; flex-direction: column; margin-top: 80px; margin-left: 50px">
<h2>Добавить новое подразделение</h2>
<form method="post" class="form" style='border: 1px solid black; width: 330px; height: 100px; padding: 20px; display: flex; flex-direction:column; gap: 10px; background-color: #fc5e00; margin-top: 10px;'>
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <label class="label">Название <input style="width: 245px; height: 20px" type="text" name="name"></label>
    <div style='display:flex;'>
        <p style="margin-right: 5px">Тип подразделения</p>
        <select style="height: 20px; width: 60px;" name="type_id" id="type_id">
            <?php
            foreach ($divisions_types as $divisions_type){
                echo '<option value="' . $divisions_type->id . '">' . $divisions_type->name . '</option>';
            }
            ?>
        </select>
    </div>
    <button class="btn">Добавить</button>
</form>
</div>
</div>