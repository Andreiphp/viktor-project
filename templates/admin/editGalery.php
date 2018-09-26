<?php require('layout/header.php'); ?>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-picture"></i> Фото Проекта</h2>
            </div>
            <div class="box-content">
                <br>
                <ul class="thumbnails gallery">
                    <?php foreach ($images as $image) { ?>
                        <li id="image-24" class="thumbnail">
                            <a style="background:url()"
                               title="Sample Image 24" href="">
                                <img class="" src="/../../dist/img/projects/<?php echo $image['img'] ?>"
                                     alt="Sample Image 24">
                            </a>
                            <span> <a href="/admin/projects/delete/images/<?php echo $image['id'] ?>"
                                      class="glyphicon glyphicon-remove"></a></span>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="form-group">
                <form action="/admin/upload/images/<?php echo $id[1]; ?>" enctype="multipart/form-data" method="post">
                    <label Выберите файл>
                        <input type="file" name="image" ><br>
                        <textarea id="editor1" name="txt" cols="100"
                                  rows="20"><?php echo $discription[0]['discription'] ?></textarea><br>
                    </label>
                    <label>Главное фото проекта
                        <input type="file" name="image2"><br>
                    </label>
                    <input type="submit">

                </form>
            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->

<?php require('layout/footer.php'); ?>
