<?php require('layout/header.php'); ?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-picture"></i>Блок елемент(Услуги!!!)</h2>
            </div>
            <div class="box-content">
                <br>
            </div>
            <div class="form-group">
                <form action="/admin/save_services/" enctype="multipart/form-data" method="post">
                        <textarea id="editor1" name="txt" cols="100"
                                  rows="20"><?php echo $services[0]['text']?></textarea><br>

                    <img style="width: 100px" src="../../dist/img/<?php echo $services[0]['img']?>">
                    <label>Фото
                        <input type="file" name="image" required><br>
                    </label>
                    <input type="submit" value="сохранить">
                </form>
            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->

<?php require('layout/footer.php'); ?>
