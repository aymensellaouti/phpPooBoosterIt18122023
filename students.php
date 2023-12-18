<?php 
    // Préparer nos données
    include_once 'class/Student.php';
    $anneSophie = new Student('Anne Sophie', [15,17,5,20,10]);
    $clement = new Student('Clement', [10,16,9,20,8]);
    $students = [$anneSophie, $clement];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <title>Students</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php foreach ($students as $student): ?>     
            <div class="col-6">
                <ol class="list-group">
                    <li class="list-group-item list-group-item-secondary"><?=$student->getName() ?></li>
                    <?php foreach ($student->getNotes() as $note): 
                           if ($note < 10 ) $class = 'danger';
                           elseif ($note == 10) $class = 'warning';
                           else $class = 'success';
                    ?>   
                        <li class="list-group-item list-group-item-<?=$class?>">
                            <?= $note ?>
                        </li>
                    <?php endforeach ?>
                </ol>
                <div class="alert alert-primary"><?=$student->moyenne() ?></div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</body>
</html>