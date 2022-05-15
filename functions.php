<?php
    function getConnection(){
        return new PDO("mysql:host=localhost;dbname=pfeDb","root","");
    }

    function getAllPfes(){
        $tab=[];
        $conn=getConnection();
        $req=$conn->query("SELECT * FROM pfe");
        $req->setFetchMode(PDO::FETCH_OBJ);
        while($row=$req->fetch()){
            $tab[]=$row;
        }
        return $tab;
    }

    function getAllPfeTypes(){
        $tab=[];
        $conn=getConnection();
        $req=$conn->query("SELECT DISTINCT types FROM pfe");
        $req->setFetchMode(PDO::FETCH_OBJ);
        while($row=$req->fetch()){
            $tab[]=$row;
        }
        return $tab;
    }

    function getPfeByType($types){
        $tab=[];
        $conn=getConnection();
        $req=$conn->prepare("SELECT * FROM pfe WHERE types=?");
        $req->execute([$types]);
        $req->setFetchMode(PDO::FETCH_OBJ);
        while($row=$req->fetch()){
            $tab[]=$row;
        }
        return $tab;
    }


    function deletePfe($id){
        $conn=getConnection();
        $req=$conn->prepare("DELETE FROM pfe WHERE id=?");
        $req->bindParam(1,$id);
        $req->execute([$id]);
    }

function counts(){
    return sizeof(getAllPfes());
}
function countsByType($t){
    return sizeof(getPfeByType($t));
}




?>