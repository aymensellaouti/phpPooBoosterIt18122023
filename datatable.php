<?php
include_once 'class/Person.php';
include_once 'class/Annuaire.php';
$aymen = new Person('sellaouti', 'aymen', new DateTime('1982-07-02'));
$massi = new Person('Rebout', 'Massi', new DateTime('1987-05-03'));

$annuaire = new Annuaire();
$annuaire->add($aymen);
$annuaire->add($massi);

$heads = $annuaire->getHead();
$data = $annuaire->getData();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <title>Datatable</title>
</head>

<body>

    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <?php foreach ($heads as $head) : ?>
                    <th><?= $head ?></th>
                <?php endforeach ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $element) : ?>
                <tr>
                    <?php foreach ($element as $value) : ?>
                        <th><?= $value ?></th>
                    <?php endforeach ?>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>


    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        new DataTable('#example');
    </script>
</body>

</html>