<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap4/css//bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/fontawesome.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <?php
            include_once("top.php");
            ?>
        </div>
        <div class="row">
            <?php
            include_once("middle.php");
            ?>
        </div>


        <div class="row" style="font-size: 1rem;">
            <?php
            include_once("left.php");
            ?>




            <div class="col-9">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-9">
                                Liste des PFE's:
                            </div>
                        <div class="row"></div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Titre</th>
                                    <th>Type</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require_once("functions.php");
                                if(isset ($_GET["types"])){
                                    $pfe=getPfeByType($_GET["types"]);
                                }
                                foreach ($pfe as $key=>$v){
                                    echo "<tr>";
                                    echo "<td>".$v->id."</td>";
                                    echo "<td>".$v->titre."</td>";
                                    echo "<td>".$v->types."</td>";
                                    echo '<td><a class="btn btn-danger" href="del.php?id='.$v->id.'">supprimer</a></td>';
                                    echo "</tr>";
                                }
                                ?>
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>