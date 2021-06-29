<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$page_title?></title>
</head>
<body>
    <?php foreach($result as $row) {?>
    <p><?=$row->first_name?></p>
    <p><?=$row->last_name?></p>
    <br/>
    <?php }?>
    <?php foreach($member as $row): ?>
    <p><?=$row->name?></p>
    <p><?=$row->age?></p>
    <br/>
    <?php endforeach; ?>
</body>
</html>