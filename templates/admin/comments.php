<?php require('layout/header.php'); ?>


<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-user"></i> Комментарии</h2>
                <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                                class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered responsive">
                    <thead>
                    <tr>
                        <th>Фото</th>
                        <th>Дата</th>
                        <th>Пользователь</th>
                        <th>Статус</th>
                        <th>Действие</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($comments as $value) { ?>

                        <tr>
                            <td><img src="/dist/img/comments/<?php echo $value['img'] ?>"></td>
                            <td class="center"><?php echo $value['date'] ?></td>
                            <td class="center"><?php echo $value['user_name'] ?></td>
                            <td class="center">
                                <span class="label-warning label label-default"><?php echo $value['status'] ?></span>
                                <div data-comments='<?php echo $value['id'] ?>'><?php echo $value['discription'] ?></div>
                            </td>
                            <td class="center">
                                <!--                                <a  class="btn btn-success" href="#">-->
                                <!--                                    <i class="glyphicon glyphicon-zoom-in icon-white"></i>-->
                                <!--                                    Смотреть-->
                                <!--                                </a>-->
                                <?php if ($value['status'] === 'новый') { ?>

                                    <a class="btn btn-info" href="/admin/comments/publish/<?php echo $value['id'] ?>">
                                        <i class="glyphicon glyphicon-edit icon-white"></i>
                                        Опубликовать
                                    </a>

                                <?php } ?>
                                <a class="btn btn-danger" href="/admin/comments/delete/<?php echo $value['id'] ?>">
                                    <i class="glyphicon glyphicon-trash icon-white"></i>
                                    Удалить
                                </a>
                            </td>
                        </tr>

                    <?php } ?>
                    </tbody>
                </table>
                <ul class="pagination pagination-centered">
                    <?php if ($page > 1) { ?>
                        <li><a href="/admin/comments/1">первая</a></li>
                        <li><a href="/admin/comments/<?php echo($page - 1) ?>">назад</a></li>
                    <?php } ?>

                    <?php for ($i = 1; $i <= $pagNav; $i++) {
                        if ($page == $i) { ?>
                            <li class="active"><a href="/admin/comments/<?php echo $i ?>"><?php echo $i ?></a></li>
                        <?php } else { ?>
                            <li class=""><a href="/admin/comments/<?php echo $i ?>"><?php echo $i ?></a></li>
                            <?php
                        }
                    } ?>


                    <?php if ($page < $pagNav) { ?>
                        <li><a href="/admin/comments/<?php echo($page + 1) ?>">вперед</a></li>
                        <li><a href="/admin/comments/<?php echo $pagNav ?>">последняя</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php require('layout/footer.php'); ?>
