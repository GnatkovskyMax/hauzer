<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 21.02.2017
 * Time: 3:10
 */
?>
<form action="/admin/addObject" enctype="multipart/form-data"  method="POST" class="addObject">
    <label>Город <input type="text" name="city"></label></br>
    <label>Район<input type="text" name="district"></label></br>
    <label>Улица<input type="text" name="street"></label></br>
    <label>Номер дома<input type="text" name="house_number"></label></br>
    <label>Номер квартиры<input type="text" name="apartament_number"></label></br>
    <label>Краткое описание<textarea name="basic_description"></textarea></label></br>
    <label>Полное описание<textarea name="descriptione"></textarea></label></br>
    <label>кв.м.<input type="text" name="square_meter"></label></br>
    <label>Количество комнат<input type="text" name="rooms"></label></br>
    <label><input  type="text" name="total_area"></label></br>
    <label><input type="text" name="area"></label></br>
    <label>Цена<input type="text" name="price"></label></br>
    <label>TOP<input type="checkbox" name="top" class="for_top_img"></label></br>
    <select  name="service" style="display:block">
        <option value="rent">Аренда</option>
        <option value="sale">Продажа</option>
        <option value="rent_hours">Аренда посуточно</option>
    </select></br>
    <label><input type="file" name="image0" class="file"><input type="radio" name="general" value="0" ><input
                type="text" name="alt0" placeholder="Введите Альт-атрибут для картинки"></label><div class="addFile">addFile+</div></br>
    <button type="submit">Добавить объект!</button>
</form>
