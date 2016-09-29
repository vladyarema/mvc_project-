
<div class="container">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <header>Шапка сайта</header>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            {if $message['status'] == 1}
                <div class="error">{$message['message']}</div>
            {/if}
            {if $result['status'] == 1}
                <div class="error">{$result['message']}</div>
            {/if}
            {if $res['status'] == 1}
                <div class="error">{$res['message']}</div>
            {/if}
            {if $rs['status'] == 1}
                <div class="error">{$rs['message']}</div>
            {/if}
            <div class="tabs">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab-1" data-toggle="tab">Доход</a></li>
                    <li><a href="#tab-2" data-toggle="tab">Расход</a></li>
                </ul>
            </div>


            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab-1"> 
                    <form action="/" class="text-center" method="post">
                        <input type="text" name="prise" placeholder="Сумма">
                        <select name="group">
                            <option value='0' selected="selected">Выберите группу</option>
                            {foreach $outgo as $value}
                                <option name='{$value['id']}' value='{$value['id']}'>{$value['name']}</option>
                            {/foreach}
                        </select>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-1">добавить группу</button>
                        <input type="text" name="keywords" placeholder="Ключевые слова">
                        <button name="button" class="btn btn-info">Добавить</button>
                        <input type="hidden" name="id_group" value="1" />
                    </form>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>Cума</td>
                                    <td>Группа</td>
                                    <td>Описание</td>
                                    <td>Дата</td>
                                </tr>
                            </thead>
                            <tbody>
                                {foreach $transaction_outgo as $transaction}
                                    <tr>
                                        <td>{$transaction['id']}</td>
                                        <td>{$transaction['cost']}</td>
                                        <td>{$transaction['name']}</td>
                                        <td>{$transaction['tag']}</td>
                                        <td>{$transaction['data']}</td>
                                    </tr>
                                {/foreach}
                            </tbody>
                        </table>
                        
                    </div>
                    
                </div>
                <div class="tab-pane fade" id="tab-2">
                    <form action="/" class="text-center" method="post">
                        <input type="text" name="prise" placeholder="Сумма">
                        <select name="group">
                            <option value='0' selected="selected">Выберите группу</option>
                            {foreach $income as $value}
                                <option name='{$value['id']}' value='{$value['id']}'>{$value['name']}</option>
                            {/foreach}

                        </select>
                        <button class="btn btn-danger" data-toggle="modal" data-target="#modal-1">Добавить группу</button>
                        <input type="text" name="keywords" placeholder="Ключевые слова">
                        <button name="button" class="btn btn-info">Добавить</button>
                        <input type="hidden" name="id_group" value="2">
                    </form>

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>Cума</td>
                                    <td>Группа</td>
                                    <td>Описание</td>
                                    <td>Дата</td>
                                </tr>
                            </thead>
                            <tbody>
                                {foreach $transaction_income as $transaction}
                                    <tr>
                                        <td>{$transaction['id']}</td>
                                        <td>{$transaction['cost']}</td>
                                        <td>{$transaction['name']}</td>
                                        <td>{$transaction['tag']}</td>
                                        <td>{$transaction['data']}</td>
                                    </tr>
                                {/foreach}
                            </tbody>
                        </table>
                        
                    </div>
                </div>
                <!-- содержание всплывающего окна --> 
                <div class="modal fade" id="modal-1">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button class="close" type="button" data-dismiss="modal">
                                    <i class="fa fa-close"></i>
                                </button>
                                <h4 class="modal-title">Новая группа</h4>
                            </div>
                            <div class="modal-body">
                                <form action="/" method="post" class="display_block">
                                    <input type="text" name="name" placeholder="Имя группы">
                                    <input type="text" name="description" placeholder="Описание группы">
                                    <select name="group">
                                        <option selected="selected" value="0">Выберите группу</option>
                                        <option name="0" value="1">Доход</option>
                                        <option name="1" value="2">Расход</option>
                                    </select>
                                    <input name="submit" type="submit" class="btn btn-success" value="добавить группу">
                                </form>

                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-danger" type="button" data-dismiss="modal">отмена</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- конец всплывающего окна -->
            </div>

        </div>
        <div class="col-sm-1"></div>

    </div>
</div>
