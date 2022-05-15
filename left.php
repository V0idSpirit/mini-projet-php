<div class="col-3 ">
    <div class="list-group">
        
                        <span><a href="index.php" class="list-group-item list-group-item-action active fa-solid fa-database"  aria-current="true"><b class="bi bi-arrow-right-circle-fill">&nbsp;&nbsp;Tous les PFEs&nbsp;&nbsp;<button type="button" class="btn btn-warning btn-sm px-1 py-0" style="border-radius: 15px;">
                            <?php
                                require_once("functions.php");
                                echo counts();
                            ?>
                        </button></b></a></span>
                        
                        <?php
                                    require_once("functions.php");
                                    $pfe = getAllPfeTypes();
                                    foreach ($pfe as $key => $v){
                                        echo '<span>';
                                        echo '<a href="pfe.php?types=';
                                        echo $v->types; 
                                        echo '" class="list-group-item list-group-item-action">';
                                        echo'<b class="fa fa-arrow-right-square" >PFEs &nbsp;';
                                        echo $v->types;
                                        echo '&nbsp;';
                                        echo '<button type="button" class="btn btn-sm px-2 py-0 text-white" style="border-radius: 15px;background-color: #08AFA7;">';
                                        echo countsByType(($v->types));
                                        echo '</button>';
                                        echo '</b>';
                                        echo '</a>';
                                        echo '</span>';

                                    }
                                    ?>                    
    </div>
</div>