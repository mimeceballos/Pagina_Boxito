<div class="w3-container w3-padding-64 w3-light-grey" id="departamento">
    <div class="w3-center w3-padding-32">
        <h1 style="color: #0F0E0E; margin-bottom: 8px;"><b>HOGAR</b></h1>
    </div>
    <div class="w3-row-padding">

         <?php
        if(!empty($hogar_seccion)){
            foreach($hogar_seccion as $item) {
                 echo "<h1>".$item->contenido."</h1>";
            }
        }
        ?>
        
    </div>
</div>