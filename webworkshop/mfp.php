<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        .bg-light-dark {
            background-color: rgb(250, 250, 250) !important;
            margin-top: 20vh !important;
            width: 80vw;
            border-radius: 8px;
            text-align: center;
        }
    </style>
</head>
<body class="bg-dark">
    <div class="m-5 p-5 bg-light-dark d-block m-auto">
        <h3>
            <?php
                // Insert PHP Code here
                $name="deepika";
                echo "Hi deepika ";
                echo "Hi Sai <br>";
                echo"\\what 'are' you doing <br>";
                print $name;
                $ar='deep,koma,jyo,nuth,baji';
                print_r(explode(',',$ar));
                $arr=['deep','koma','jyo','baji','nuth'];
                print_r(implode(',',$arr));
                            ?>
        </h3>
    </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>