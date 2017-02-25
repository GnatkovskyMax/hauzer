<div class="admin-menu">
    <div class="wrap-nav">
        <ul>
            <li>Главная</li>
            <li>Обьекты</li>
            <li>Посты</li>
            <li>Сервис</li>
        </ul>
    </div>
</div>
<div class="wrap-Admin">
    <div class="wrapAdminFilter">
        <form method="post">
            <label class="LabelInputIDAdmin">Поиск по ID объекта
                <input placeholder="id" class="inputIDAdmin">
            </label>
            <div class="wrap_info">
                <table class="wrap_info_table">
                    <tr>
                        <td><span>Статус объекта</span></td>
                        <td><select class="selectAdmin">
                            <option>Все</option>
                            <option>Арендa</option>
                            <option>Продажа</option>
                            <option>Сдано</option>
                            <option>Продано</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td><span>Ответственный менеджер</span></td>
                        <td><select class="selectAdmin">
                            <option>Все</option>
                            <?
                            require 'dev/selectAgents.php';
                            ?>
                        </select></td>
                    </tr>
                    <td><span>По дате</span></td>
                    <td><select class="selectAdmin">
                            <option>Не указано</option>
                            <option>По возрастанию</option>
                            <option>По убыванию</option>
                        </select></td>
                    </tr>
                </table>
                <table class="wrap_info_table">
                    <tr>
                        <td><span>Город</span></td>
                        <td><select class="selectAdmin">
                                <option>Все</option>
                                <?
                                require 'dev/selectCity.php';
                                ?>
                            </select></td>
                    </tr>
                    <tr>
                        <td><span>Район</span></td>
                        <td><select class="selectAdmin">
                                <option>Все</option>
                                <?
                                require 'dev/selectDistrictAdmin.php';
                                ?>
                            </select></td>
                    </tr>
                    <tr>
                        <td><span>Количество комнат</span></td>
                        <td><select class="selectAdmin">
                                <option>Все</option>
                                <?
                                require 'dev/selectRoomsAdmin.php';
                                ?>
                            </select></td>
                    </tr>
                </table>
            </div>
            <input type="submit" value="Искать">
        </form>
    </div><!--
    --><div class="wrapAdminNav">
        <?
        require 'dev/adminNav.php';
        ?>
    </div>
</div>

<div class="object-admin">
        <table class="admin-table">
            <tr>
                <td class="table-id">id</td>
                <td>Город</td>
                <td>Улица</td>
                <td>Стоимость</td>
                <td>Комнат</td>
                <td>Площадь</td>
                <td>Дата создания</td>
                <td>Состояние</td>
                <td>Имя агента</td>
                <td>Фамилия агента</td>
                <td>Дествие</td>
            </tr>
            <?
            require 'dev/objectAdmin.php';
            ?>
        </table>
        <div class="back-dialog" id="dialog">
            <div class="dialog-content">
                 <div class="dialog-title">
                    <span>Удаление обьекта</span>
                </div>
                <p>Удалить обьект?</p>
                <input  id="delete-obj" type="button" name="but" value="Удалить">
                 <input class="closed" type="button" value="Отмена">
            </div>
        </div>
    </div>
</div>
