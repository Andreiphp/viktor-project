<?php require('layout/header.php'); ?>
    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-picture"></i> Проекты</h2>
                </div>
                <div class="box-content">
                    <br>
                    <ul class="thumbnails gallery">
                        <?php foreach ($projects as $project) { ?>
                            <li id="-24" class="thumbnail">
                                    <img class="" src="../../dist/img/projects/<?php echo $project['img'] ?>" alt="Sample Image 24">

                                <span> <a href="/admin/project/delete/<?php echo $project['id'];?>" class="glyphicon glyphicon-remove"></a></span>
                                <span  style="float: right"><a href="/admin/project/edit/<?php echo $project['id'];?>" class="glyphicon glyphicon-edit"></a></span>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<?php require('layout/footer.php'); ?>