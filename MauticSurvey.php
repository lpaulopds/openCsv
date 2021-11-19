<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Mautic User Survey Results 2021 - Redacted</title>
</head>
<body>
    <?php $file = new SplFileObject('MauticSurvey2021.csv', 'r') ?>
    <?php $file->seek(PHP_INT_MAX) ?>

    <?php $filename = fopen("MauticSurvey2021.csv", "r") ?>
    <?php $header = fgetcsv($filename, 0, ",") ?>
    <?php $countColumns = count($header) ?>
    
    <h3>Mautic User Survey Results 2021 - Redacted</h3>
    <p>Total Columns: <b><?= $countColumns ?></b></p>
    <p>Total lines of file: <b><?= $file->key() + 1 ?></b></p>

    <table>
        <thead>
            <tr>
                <?php foreach ($header as $headerColumn): ?>
                    <th><?= $headerColumn ?></th>
                <?php endforeach ?>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = fgetcsv($filename, 0, ",")): ?>
                <tr>
                    <?php foreach ($row as $rowColumn): ?>
                        <td><?= $rowColumn ?></td>
                    <?php endforeach ?>
                </tr>
            <?php endwhile ?>
        </tbody>
    </table>
    <?php fclose($filename) ?>
</body>
</html>
