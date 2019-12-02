<!DOCTYPE html>
<html>
    <head>
        <title>testdb table</title>
        <link href="/css/normalize.css" rel="stylesheet">
        <link href="/css/index.css" rel="stylesheet">
    </head>
    <body>

        <table>

        <?php foreach ($result as $row): ?>
            <tr>
            <?php foreach ($row as $value): ?>
                <td><?= $value ?></td>
            <?php endforeach ?>
            </tr>
        <?php endforeach ?>

        </table>

    </body>
</html>
