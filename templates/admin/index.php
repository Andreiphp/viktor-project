<?php require('layout/header.php'); ?>

<div class="">
    <a href="/price/price.txt">прайс</a>
</div>
<strong>
    Загружаемый файл должен называться price.txt
</strong>
<form action="/admin/redact-price" method="post" enctype="multipart/form-data">
    <input type="file" name="file" required>
    <input type="submit" value="загрузить">
</form>
<?php require('layout/footer.php'); ?>
