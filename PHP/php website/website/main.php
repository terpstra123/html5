<?php
    include("header.php");

    $messages = array();

   if(!isset($_GET["roepnaam"]) && !isset($_GET["favkleur"])) {
        $messages[] = "Je moet eerst het formulier invullen";
    } else if (strlen($_GET["roepnaam"]) < 2){
        $messages[] = "een naam oet minimaal 2 letters bevatten";
    }else if(strlen($_GET ["favkleur"]) < 3){
        $messages[] = "Een kleur moet minimaal 3 letters bevatten";
    }

    if (!count($messages)== 0) {
        //messages weergeven
        $html = "<ul>";
        foreach ($messages as $message) {
            $html .= "<li>".$message."</li>";
        }
        $html .="</ul>";
        echo $html;
    }else{
       echo "Hallo ". $_GET["roepnaam"]



?>
        <div style= "background-color:<?php echo $_GET["favkleur"]; ?>; height: 200px; width: 200px" > </div >

<?php
      }

    include("footer.php");
?>