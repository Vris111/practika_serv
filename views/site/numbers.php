<h1 class="topic">Телефонные данные</h1>
<div style="display: flex; gap 50px">
<div style="margin-left: 14%; margin-top: 40px; border: 1px solid black; width: 1000px; height: 600px; padding: 20px;
 box-shadow: 5px 5px 10px 1px; margin-right: 50px; aline-items: center"> 
<div style="border: 1px solid black; width: 980px; padding: 10px; height: 580px; box-shadow: 5px 5px 10px 1px;">
    <?php
    foreach ($numbers as $number) {
        echo '<div style="display: flex; flex-direction: row; justify-content: space-around; box-shadow: 1px 1px 2px 1px; >';
        echo '<p style="font-size: 40px; aline-items: center;">' . $number->number . '</p>';
        echo '<p style="font-size: 24px">' . $number->room_id . '</p>';
        echo '<p style="font-size: 24px">' . $number->abonent_id . '</p>';
        echo '</div>';
    }
    ?>
</div>
</div>
<div style="display:flex; flex-direction: column; margin-top: 80px">
<h2>Добавить новый телефон</h2>
<form method="post" class="" style='border: 1px solid black; width: 330px; height: 120px; padding: 20px; display: flex;
 flex-direction:column; gap: 10px; background-color: #fc5e00; margin-top: 10px;'>
    <label class="label">Номер <input style="width: 250px; height: 20px" type="text" name="number"></label>
    <label class="label">Помещение <input style="width: 210px; height: 20px" type="text" name="room"></label>
    <label class="label">Абонент <input style="width: 235px; height: 20px" type="text" name="abonent"></label>
    <button class="btn">Добавить</button>
</form>
</div>
</div>
</div>