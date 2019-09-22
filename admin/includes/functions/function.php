<?php
//edit par abdellah khaddou 
// se document en se trove des function de site web

//function pour change automatique page titre 
// name : pageTitre version : v1.0
//----------------------------------
function pageTitre(){
    global $Titre;
    if(isset($Titre)){
        echo $Titre;
    }else{
        echo "Dashbord";
    }
}
//function pour redirect user another page  
// name : redirect version : v1.0
//----------------------------------
function redirect($msg,$url = null,$sec=3){
    if($url == null){
        $url  ='index.php';
        $link = "en aller accuiel page";
    }else{
        if(isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER']!=''){
            $url  = $_SERVER['HTTP_REFERER'];
            $link = "en revenir en arierre";
        }else{
             $url  ='index.php';
            $link = "en aller accuiel page";
        }
    }
    
    echo $msg;
    echo "<div class='alert alert-info '><i class='fa-li fa fa-spinner fa-spin'></i> ".$link." a ".$sec."</div>";
    header("refresh:$sec;url=$url");
    exit();
}
//=======================================
// function pour Select des donnes dans base de donnes 
//=======================================
function fetchRes($select,$table,$condition=NULL,$verifier=NULL){
    global $con;
   
    $stmt=$con->prepare("SELECT $select FROM $table $condition ");
   
    $stmt->execute(array($verifier));
    $resultas = $stmt->fetchAll();
    return $resultas;
}
?>
