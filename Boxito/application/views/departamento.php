<!-- DEPARTAMENTOS -->
<div class="w3-container w3-padding-64 w3-light-grey" id="departamento">
    <div class="w3-center w3-padding-32">
        <h1 style="color: #0F0E0E; margin-bottom: 8px;"><b>DEPARTAMENTOS</b></h1>
    </div>
    <div class="w3-row-padding">
    	
		<!-- AIRES Y VENTILACIÓN -->
    	<div class="w3-col m3 w3-margin-bottom">
        <div class="w3-card-4 w3-white w3-hover-shadow" style="margin-bottom: 30px; border: 1px solid #ddd; height: 400px; display: flex; flex-direction: column;">
            <div class="w3-container" style="background: #022336; padding: 20px; flex-shrink: 0;">
                <h2 style="color: white; margin: 0; text-align: center;" id="aire">AIRES ACONDICIONADO</h2>
            </div>
            <div class="w3-container w3-padding-24 tarjeta" style="flex-grow: 1; overflow-y: auto; max-height: 300px;">
                <?php
                if(!empty($aire_seccion)){
                    foreach($aire_seccion as $item) {
                        echo "<h1>".$item->contenido."</h1>";
                    }
                }
                ?>
            </div>
        </div>
        </div>
        
        <!-- PLOMERÍA -->
        <div class="w3-col m3 w3-margin-bottom">
        <div class="w3-card-4 w3-white w3-hover-shadow" style="margin-bottom: 30px; border: 1px solid #ddd; height: 400px; display: flex; flex-direction: column;">
            <div class="w3-container" style="background: #022336; padding: 20px; flex-shrink: 0;">
                <h2 style="color: white; margin: 0; text-align: center;" id="plomeria">PLOMERIA</h2>
            </div>
            <div class="w3-container w3-padding-24 tarjeta" style="flex-grow: 1; overflow-y: auto; max-height: 300px;">
                <?php
                if(!empty($plomeria_seccion)){
                    foreach($plomeria_seccion as $item) {
                        echo "<h1>".$item->contenido."</h1>";
                    }
                }
                ?>
            </div>
        </div>
        </div>
        
        <!-- BAÑOS -->
        <div class="w3-col m3 w3-margin-bottom">
        <div class="w3-card-4 w3-white w3-hover-shadow" style="margin-bottom: 30px; border: 1px solid #ddd; height: 400px; display: flex; flex-direction: column;">
            <div class="w3-container" style="background: #022336; padding: 20px; flex-shrink: 0;">
                <h2 style="color: white; margin: 0; text-align: center;" id="baño">BAÑO</h2>
            </div>
            <div class="w3-container w3-padding-24 tarjeta" style="flex-grow: 1; overflow-y: auto; max-height: 300px;">
                <?php
                if(!empty($baño_seccion)){
                    foreach($baño_seccion as $item) {
                        echo "<h1>".$item->contenido."</h1>";
                    }
                }
                ?>
            </div>
        </div>
        </div>

		<!-- PISOS -->
    	<div class="w3-col m3 w3-margin-bottom">
        <div class="w3-card-4 w3-white w3-hover-shadow" style="margin-bottom: 30px; border: 1px solid #ddd; height: 400px; display: flex; flex-direction: column;">
            <div class="w3-container" style="background: #022336; padding: 20px; flex-shrink: 0;">
                <h2 style="color: white; margin: 0; text-align: center;" id="piso">PISOS</h2>
            </div>
            <div class="w3-container w3-padding-24 tarjeta" style="flex-grow: 1; overflow-y: auto; max-height: 300px;">
                <?php
                if(!empty($piso_seccion)){
                    foreach($piso_seccion as $item) {
                        echo "<h1>".$item->contenido."</h1>";
                    }
                }
                ?>
            </div>
        </div>
        </div>

		<!-- COCINAS -->
    	<div class="w3-col m3 w3-margin-bottom">
        <div class="w3-card-4 w3-white w3-hover-shadow" style="margin-bottom: 30px; border: 1px solid #ddd; height: 400px; display: flex; flex-direction: column;">
            <div class="w3-container" style="background: #022336; padding: 20px; flex-shrink: 0;">
                <h2 style="color: white; margin: 0; text-align: center;" id="cocina">COCINAS</h2>
            </div>
            <div class="w3-container w3-padding-24 tarjeta" style="flex-grow: 1; overflow-y: auto; max-height: 300px;">
                <?php
                if(!empty($cocina_seccion)){
                    foreach($cocina_seccion as $item) {
                        echo "<h1>".$item->contenido."</h1>";
                    }
                }
                ?>
            </div>
        </div>
        </div>

		<!-- HOGAR -->
    	<div class="w3-col m3 w3-margin-bottom">
        <div class="w3-card-4 w3-white w3-hover-shadow" style="margin-bottom: 30px; border: 1px solid #ddd; height: 400px; display: flex; flex-direction: column;">
            <div class="w3-container" style="background: #022336; padding: 20px; flex-shrink: 0;">
                <h2 style="color: white; margin: 0; text-align: center;" id="hogar">HOGAR</h2>
            </div>
            <div class="w3-container w3-padding-24 tarjeta" style="flex-grow: 1; overflow-y: auto; max-height: 300px;">
                <?php
                if(!empty($hogar_seccion)){
                    foreach($hogar_seccion as $item) {
                        echo "<h1>".$item->contenido."</h1>";
                    }
                }
                ?>
            </div>
        </div>
        </div>

		<!-- ELECTRICIDAD -->
    	<div class="w3-col m3 w3-margin-bottom">
        <div class="w3-card-4 w3-white w3-hover-shadow" style="margin-bottom: 30px; border: 1px solid #ddd; height: 400px; display: flex; flex-direction: column;">
            <div class="w3-container" style="background: #022336; padding: 20px; flex-shrink: 0;">
                <h2 style="color: white; margin: 0; text-align: center;" id="electricidad">ELECTRICIDAD</h2>
            </div>
            <div class="w3-container w3-padding-24 tarjeta" style="flex-grow: 1; overflow-y: auto; max-height: 300px;">
                <?php
                if(!empty($electricidad_seccion)){
                    foreach($electricidad_seccion as $item) {
                        echo "<h1>".$item->contenido."</h1>";
                    }
                }
                ?>
            </div>
        </div>
        </div>

		<!-- FERRETERÍA -->
    	<div class="w3-col m3 w3-margin-bottom">
        <div class="w3-card-4 w3-white w3-hover-shadow" style="margin-bottom: 30px; border: 1px solid #ddd; height: 400px; display: flex; flex-direction: column;">
            <div class="w3-container" style="background: #022336; padding: 20px; flex-shrink: 0;">
                <h2 style="color: white; margin: 0; text-align: center;" id="ferreteria">FERRETERIÍA</h2>
            </div>
            <div class="w3-container w3-padding-24 tarjeta" style="flex-grow: 1; overflow-y: auto; max-height: 300px;">
                <?php
                if(!empty($ferreteria_seccion)){
                    foreach($ferreteria_seccion as $item) {
                        echo "<h1>".$item->contenido."</h1>";
                    }
                }
                ?>
            </div>
        </div>
        </div>

    </div>
</div>