<?php require('layout/header.php'); ?>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-picture"></i> Добавить поект</h2>
            </div>
            <form action="/admin/add-new-project/" enctype="multipart/form-data" method="post">
                <div class="form-group" style="margin-top: 10px">
                    <label>Назание проекта<input type="text" name="name" required></label>
                </div>
                <div class="form-group">
                    <label><input type="file" name="image" ></label>
                </div>
                <div class="control-group">
                    <label class="control-label" for="selectError">Выберите категорию</label>
                    <div class="controls" style="margin: 10px">
                        <select id="selectError" name="cat" data-rel="chosen">
                            <?php foreach ($cat as $value) { ?>
                                <option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
                            <? } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <textarea id="editor1" name="txt" cols="100" rows="20" required></textarea>
                </div>
                <input type="submit">
            </form>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->

<?php require('layout/footer.php'); ?>
