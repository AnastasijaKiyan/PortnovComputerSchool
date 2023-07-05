<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sample form</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h2 style="align:center">The request I received was:</h2>
        <div style="background-color:lightgrey;width:600px;margin-left:auto;margin-right:auto">
            <?php
                $rawdata = file_get_contents("php://input");
                print_r($rawdata);
            ?>
        </div>
    </body>
</html>