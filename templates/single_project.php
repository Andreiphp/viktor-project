<?php include_once '/templates/layout/header2.php'; ?>
<div class="bread_cramps">
    <div class="container">
        <ul class="cramps_list">
            <li><a href="/" title="главная">Главная</a></li>
            <li class=""><a class="active" href="/portfolio/" title="о нас">Проекты</a></li>
            <li class=""><a class="active" href="/" title="о нас"><?php echo $single_project[0][0]['title']?></a></li>
        </ul>
    </div>
</div>

<div class="single_pr_content mr_top">
    <div class="container">
        <div class="page-header">
           <h2 style="color: #0b0b0b">
               <?php echo $single_project[0][0]['title']?>
           </h2>
        </div>
    </div>
    <div class="container">
        <div class="fotorama"
             data-width="800"
             data-height="550"
             data-allowfullscreen="native"
            data-nav="thumbs">
            <?php foreach ($single_project[1] as $item =>$value){ ?>
                <img src="/dist/img/projects/<?php echo $value['img']?>">
            <?php } ?>
        </div>
        <div class="progect_info">
            <div class="left_content">
                <?php echo $single_project[0][0]['discription']?>

            </div>
        </div>
    </div>
</div>

<?php include_once '/templates/layout/footer.php'; ?>
