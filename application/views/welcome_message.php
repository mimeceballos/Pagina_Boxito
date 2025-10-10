<body id="myPage">

<!-- NAVBAR -->
<div class="w3-top">
  <div class="w3-bar w3-left-align" style="background-color: #022336; color: white;">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white" href="javascript:void(0);" onclick="openNav()" style="background-color: #022336; color: white;">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#" class="w3-bar-item w3-button" style="background-color: #e70128; color: white;">
      <i class="fa fa-home w3-margin-right"></i>BOXITO
    </a>
    <a href="#departamento" class="w3-bar-item w3-button w3-hide-small w3-hover-white" style="color: white;">Departamento</a>
    <a href="#ofertas" class="w3-bar-item w3-button w3-hide-small w3-hover-white" style="color: white;">Ofertas</a>
    <a href="#sucursales" class="w3-bar-item w3-button w3-hide-small w3-hover-white" style="color: white;">Sucursales</a>

  </div>
</div>

<!-- IMAGEN DEL INICIO -->
<div class="w3-display-container w3-animate-opacity">
  <img src="assets/imagenes/lugar.jpg" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
  <div class="w3-container w3-display-bottomleft w3-margin-bottom">  
		<button onclick="document.getElementById('id01').style.display='block'" 
        class="w3-button w3-large w3-hover-red" 
        style="background-color: #022336; color: white;"
        title="Nosotros">Nosotros</button>
  </div>
</div>

<!-- MODAL PARA CLICK IMAGENES-->
<div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
  <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption"></p>
  </div>
</div>

<!-- MODAL DE NOSOTROS -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-top">
    <header class="w3-container w3-display-container" style="background-color: #022336; color: white;"> 
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright" style="background-color: #e70128; color: white;">
        <i class="fa fa-remove"></i>
      </span>
      <h4 style="color: white;"><b>La familia boxito</b></h4>
    </header>
    <div class="w3-container" style="color: #022336;">
      <p>Somos Grupo Boxito, la empresa de distribución de materiales de plomería, eléctricos, iluminación, pisos, azulejos, cocinas, muebles de baño y ferretería más grande del sureste de México; servimos a mayoristas, constructores, hotelería, desarrolladores y público en general a través de más de 50 tiendas estratégicamente distribuidas en todo el sureste mexicano</p>
	  <p>Contamos con el respaldo de más de 300 proveedores líderes en cada una de las líneas de producto que comercializamos y mas de 15,000 artículos para construcción, remodelación o decoración de su hogar, negocio o proyecto.</p>
    </div>
  </div>
</div>

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

<!-- OFERTAS -->
<div class="w3-row-padding w3-padding-64" id="ofertas">
	<div class="w3-center w3-padding-32">
	<h1 style="color: #0F0E0E; margin-bottom: 8px;"><b>OFERTAS DEL MOMENTO</b></h1>
    <p><h3><i>Compra en línea en boxito.com</i></h3></p>
	</div>
	
	<!-- aires -->
	<div class="w3-container">
		<h2><b>Aires acondicionados en oferta</b></h2>
		</div>
		<div class="w3-row-padding">
			<div class="w3-col m4 w3-margin-bottom">
				<div class="w3-light-grey">
					<img src="assets/imagenes/aire1.png" style="width:100%" onclick="onClick(this)" alt="<h2><b>Aire Acondicionado Minisplit Benelux - ON/OFF</b></h2><h3>MX$4199.00</h3>Disfruta del equilibrio perfecto entre eficiencia, confort y durabilidad con el Minisplit Benelux Platino Serie E On/Off. Diseñado para ofrecer un enfriamiento rápido, silencioso y ecoeficiente, este equipo es ideal para mantener tu espacio cómodo en cualquier temporada del año. Disponible en capacidades que se adaptan a tu espacio: 12,000 / 18,000 / 24,000 / 36,000 BTU.">
				</div>
			</div>
			<div class="w3-col m4 w3-margin-bottom">
				<div class="w3-light-grey">
					<img src="assets/imagenes/aire2.png" style="width:100%" onclick="onClick(this)" alt="<h2><b>Aire Acondicionado Minisplit Benelux - Inverter</b></h2><h3>MX$5599.00</h3>Disfruta del equilibrio perfecto entre eficiencia, confort y durabilidad con el Minisplit Benelux Platino Inverter Diseñado para ofrecer un enfriamiento rápido, silencioso y ecoeficiente, este equipo es ideal para mantener tu espacio cómodo en cualquier temporada del año. Disponible en capacidades que se adaptan a tu espacio: 12,000 / 18,000 / 24,000 / 36,000 BTU.">
				</div>
			</div>
			<div class="w3-col m4 w3-margin-bottom">
				<div class="w3-light-grey">
					<img src="assets/imagenes/aire3.png" style="width:100%" onclick="onClick(this)" alt="<h2><b>Mirage Minisplit On/Off</b></h2><h3>NO DISPONIBLE</h3>Tecnología inverter que optimiza el consumo energético. Función de deshumidificación, para mantener el ambiente confortable. Diseño compacto y elegante que se adapta a cualquier decoración. Operación silenciosa, permitiendo un ambiente tranquilo.">
				</div>
			</div>
		</div>

	</div>

	<!-- CALENTADORES -->
    <div class="w3-container ">
        <h2><b>Calentadores en oferta</h2>
    </div>
    <div class="w3-row-padding ">
        <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
                <img src="assets/imagenes/calentador1.png" style="width:100%" onclick="onClick(this)" alt="<h2><b>Calentador Fortis Depósito Eléctrico Calorex</b></h2><h3>MX$3999.00</h3>Diseño compacto que facilita la instalación en espacios reducidos. Eficiencia energética que ayuda a reducir el consumo eléctrico.Temperatura ajustable para mayor confort en el uso diario">
            </div>
        </div>
        <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
                <img src="assets/imagenes/calentador2.png" style="width:100%" onclick="onClick(this)" alt="<h2><b>Calentador de Paso Poderus Calorex</b></h2><h3>NO DISPONIBLE</h3>Calentador de paso que proporciona agua caliente de manera continua. Ideal para uso doméstico. Diseño compacto que ahorra espacio en cualquier lugar. Fácil instalación y mantenimiento, sin necesidad de tanque. Eficiencia energética que ayuda a reducir costos de consumo.">
            </div>
        </div>
        <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
                <img src="assets/imagenes/calentador3.png" style="width:100%" onclick="onClick(this)" alt="<h2><b>Calentador de Depósito Maximus Calorex</b></h2><h3>MX$5965.00</h3>Ideal para familias medianas. Diseño eficiente que permite calentar agua rápidamente. Fácil instalación y mantenimiento. Adecuado para uso en diferentes climas. Energéticamente eficiente para reducir costos en electricidad.">
            </div>  
        </div>  
    </div>

    <div class="w3-container "></div>
    <div class="w3-row-padding ">
        <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
                <img src="assets/imagenes/calentador4.png" style="width:100%" onclick="onClick(this)" alt="<h2><b>Calentador de Depósito Vattium 41 L Calorex</b></h2><h3>MX$5719.00</h3>Ideal para hogares pequeños y medianos. Diseño eficiente que optimiza el consumo energético.Temperatura ajustable según las necesidades del usuario.Instalación sencilla y rápida, sin complicaciones. Compatible con diferentes sistemas de fontanería.">
            </div>
        </div>
        <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
                <img src="assets/imagenes/calentador5.png" style="width:100%" onclick="onClick(this)" alt="<h2><b>Primo Calentador instantáneo a gas 6 L</b></h2><h3>MX$1435.00</h3>Calentador Primo diseñado para brindar agua caliente con eficiencia y seguridad. Capacidad 6 L · Gas.">
            </div>
        </div>
        <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
                <img src="assets/imagenes/calentador6.png" style="width:100%" onclick="onClick(this)" alt="<h2><b>Optimus Calentador Optimus instantáneo a gas 5 /b></h2><h3>MX$1579.00</h3>Calentador Optimus diseñado para brindar agua caliente con eficiencia y seguridad. Capacidad 5 L · Gas.">
            </div>
        </div>
    </div>

    <!-- PISOS -->
    <div class="w3-container">
        <h2><b>Pisos en oferta</h2>
    </div>
    <div class="w3-row-padding">
        <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
                <img src="assets/imagenes/piso1.png" style="width:100%" onclick="onClick(this)" alt="<h2><b>PISO JAKAR FD BEIGE55X55 1.82 MT LJAKACF15GE La</b></h2><h3>MX$362.18</h3>Diseño elegante en tono beige, ideal para cualquier decoración. Dimensiones de 55x55 cm, perfecto para espacios amplios o pequeños. Fácil de limpiar y mantener, proporcionando practicidad en el día a día. Resistente al desgaste, ideal para áreas de alto tráfico. Compatible con sistemas de calefacción radiante.">
            </div>
        </div>
        <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
                <img src="assets/imagenes/piso2.png" style="width:100%" onclick="onClick(this)" alt="<h2><b>PISO TAPALPA CAOBA 22.3X60 2.01 MT Vitromex</b></h2><h3>MX$412.05</h3>Diseño elegante que aporta calidez a cualquier espacio. Dimensiones ideales de 22.3 x 60 cm para una instalación versátil. Acabado en color caoba que combina con diversos estilos de decoración. Resistente al desgaste, ideal para su uso en áreas de alto tráfico. Fácil de limpiar y mantener, perfecto para hogares y negocios.">
            </div>
        </div>
        <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
                <img src="assets/imagenes/piso3.png" style="width:100%" onclick="onClick(this)" alt="<h2><b>PISO MARE RECTIFICADO BRILLANTE SG 61X61 </b></h2><h3>MX$473.71</h3>Acabado rectificado que proporciona un aspecto moderno y elegante. Superficie brillante que refleja la luz, aportando luminosidad al espacio. Fácil de limpiar y mantener, ideal para áreas de alto tráfico. Resistencia a la humedad, adecuada para uso en interiores. Formato de 61x61 cm que permite una fácil instalación y diseño versátil.">
            </div>  
        </div>  
    </div>

    <div class="w3-container"></div>
    <div class="w3-row-padding">
        <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
                <img src="assets/imagenes/piso4.png" style="width:100%" onclick="onClick(this)" alt="<h2><b>PISO CANEA CREAM 45X45 1.62 M2 Vitromex</b></h2><h3>MX$306.18</h3>Tamaño ideal de 45x45 cm para diversas aplicaciones. Diseño elegante que se adapta a cualquier estilo de decoración. Superficie fácil de limpiar y mantener. Resistente y duradero para uso en interiores. Cobertura de 1.62 m2 por paquete, ideal para proyectos de tamaño medio.">
            </div>
        </div>
        <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
                <img src="assets/imagenes/piso5.png" style="width:100%" onclick="onClick(this)" alt="<h2><b>PISO MAZARELLO RECTIFICADO BRILLANTE SG </b></h2><h3>MX$488.56</h3>Acabado brillante que proporciona elegancia y luminosidad a cualquier espacio. Superficie rectificada para un ajuste perfecto y acabado uniforme. Ideal para su uso en interiores, incluyendo salas y comedores. Fácil de limpiar y mantener, ideal para la vida diaria. Presentación en formato de losa de 61x61 cm, optimizando la instalación.">
            </div>
        </div>
        <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
                <img src="assets/imagenes/piso6.png" style="width:100%" onclick="onClick(this)" alt="<h2><b>PISO GIARDINO RECTIFICADO MATE SG 61X61</b></h2><h3>MX$473.71</h3>Acabado rectificado que proporciona un ajuste perfecto entre piezas. Superficie mate que reduce brillantes no deseados. Dimensiones de 61x61 cm que permiten una fácil instalación. Ideal para interiores y exteriores, brindando versatilidad. Fácil mantenimiento y limpieza para un uso diario.">
            </div>  
        </div>  
    </div>

    <!-- VENTILADORES -->
    <div class="w3-container">
        <h2><b>Ventiladores en oferta</h2>
    </div>
    <div class="w3-row-padding">
        <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
                <img src="assets/imagenes/ventilador1.png" style="width:100%" onclick="onClick(this)" alt="<h2><b>VENTILADOR DE PISO 20 HORUS Masterfan</b></h2><h3>MX$669.00</h3>Horus 20”: flujo potente con 3 velocidades, motor cercano a 90 W y hasta ~1150 RPM. Ideal para refrescar rápidamente interiores.">
            </div>
        </div>
        <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
                <img src="assets/imagenes/ventilador2.png" style="width:100%" onclick="onClick(this)" alt="<h2><b>QJFC3101 VENTILADOR MALLORCA 42PULG</b></h2><h3>MX$669.00</h3>Mallorca 42” con 4 aspas MDF reversibles (blanco/teka). Compacto, silencioso y decorativo; perfecto para recámaras y estudios.">
            </div>
        </div>
        <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
                <img src="assets/imagenes/ventilador3.png" style="width:100%" onclick="onClick(this)" alt="<h2><b>VENTILADOR DE TECHO SOLARIS BLANCO </b></h2><h3>MX$2199.00</h3>Solaris 52” blanco: motor WhisperWind reversible, 5 aspas y operación silenciosa; pensado para espacios grandes.">
            </div>  
        </div>  
    </div>

    <div class="w3-container"></div>
    <div class="w3-row-padding">
        <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
                <img src="assets/imagenes/ventilador4.png" style="width:100%" onclick="onClick(this)" alt="<h2><b>Ventilador Tifón Satin Masterfan</b></h2><h3>MX$899.00</h3>Tifón 56” industrial satinado: 3 aspas de metal, 5 velocidades con control de pared, ~75 W y 330 RPM. Mantiene circulación constante en áreas grandes (hasta ~144 m²).">
            </div>
        </div>
        <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
                <img src="assets/imagenes/ventilador5.png" style="width:100%" onclick="onClick(this)" alt="<h2><b>VENTILADOR INDUSTRIAL DE TECHO MOD.C-5601</b></h2><h3>MX$1649.00</h3>Ventilador industrial de techo 56” color blanco. Modelo C-5601 orientado a espacios de trabajo y bodegas; construcción robusta y gran desplazamiento de aire. (Las especificaciones varían por proveedor; confirma ficha técnica para potencia/velocidades exactas.)">
            </div>
        </div>
        <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
                <img src="assets/imagenes/ventilador6.png" style="width:100%" onclick="onClick(this)" alt="<h2><b>VENTILADOR DE TECHO SOLARIS BLANCO 52 PULGADAS</b></h2><h3>MX$2199.00</h3>Solaris 52” blanco: motor WhisperWind reversible, 5 aspas y operación silenciosa; pensado para espacios grandes.">
            </div>  
        </div>  
    </div>

    <!-- INODOROS -->
    <div class="w3-container">
        <h2><b>Inodoros en oferta</h2>
    </div>
    <div class="w3-row-padding">
        <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
                <img src="assets/imagenes/inodoro1.png" style="width:100%" onclick="onClick(this)" alt="<h2><b>Paquete WC Florencia con Lavabo Genova 4</b></h2><h3>MX$1459.00</h3>Paquete Ceramosa color blanco: WC Florencia alargado y lavabo Génova con perforación 4 para mezcladora. Conjunto práctico para baño completo y de fácil instalación.">
            </div>
        </div>
        <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
                <img src="assets/imagenes/inodoro2.png" style="width:100%" onclick="onClick(this)" alt="<h2><b>ASIENTO ALARGADO PREMIUM96 SLOW DROP</b></h2><h3>MX$369.00</h3>Asiento alargado Premium 96 con sistema Slow Drop (cierre suave) en blanco. Evita golpes y alarga la vida de las bisagras.">
            </div>
        </div>
        <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
                <img src="assets/imagenes/inodoro3.png" style="width:100%" onclick="onClick(this)" alt="<<h2><b>WC Danubio Alargado Blanco Ceramosa</b></h2><h3>MX$1999.00</h3>WC Ceramosa Danubio alargado, color blanco. Diseño ergonómico, descarga confiable y cerámica vitrificada para mayor durabilidad.">
            </div>  
        </div>  
    </div>

    <div class="w3-container"></div>
    <div class="w3-row-padding">
        <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
                <img src="assets/imagenes/inodoro4.png" style="width:100%" onclick="onClick(this)" alt="<h2><b>ONE PIECE PBK101 TOSCANA BLANCO</b></h2><h3>MX$2129.00</h3>WC one piece PBK101 Toscana blanco. Cuerpo monolítico, diseño estilizado y limpieza sencilla; ideal para baños contemporáneos.">
            </div>
        </div>
        <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
                <img src="assets/imagenes/inodoro5.png" style="width:100%" onclick="onClick(this)" alt="<h2><b>Paquete Jazmín WC Alargado + Lavabo 4 </b></h2><h3>MX$2769.00</h3>Paquete Cato Jazmín: WC alargado y lavabo 4 con pedestal. Solución integral para renovar baño con estilo limpio y funcional.">
            </div>
        </div>
        <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
                <img src="assets/imagenes/inodoro6.png" style="width:100%" onclick="onClick(this)" alt="<h2><b>WC Colony Alargado 15 Blanco American Standard</b></h2><h3>MX$2189.00</h3>American Standard Colony alargado 15 (altura estándar). Taza ergonómica, descarga confiable y esmaltado que reduce adherencias.">
            </div>  
        </div>  
    </div>

    <div class="w3-container"></div>
    <div class="w3-row-padding">
        <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
                <img src="assets/imagenes/inodoro7.png" style="width:100%" onclick="onClick(this)" alt="<h2><b>WC Colony Alargado ADA 16 Blanco American Standard</b></h2><h3>MX$2405.00</h3>American Standard Colony alargado 16 ADA (altura confort). Mayor comodidad y accesibilidad, con descarga eficiente. Blanco.">
            </div>
        </div>
        <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
                <img src="assets/imagenes/inodoro8.png" style="width:100%" onclick="onClick(this)" alt="<h2><b>WC Danubio Alargado Marfil Ceramosa</b></h2><h3>MX$2175.00</h3>WC Ceramosa Danubio alargado en marfil. Estilo clásico, cerámica de alta resistencia y operación silenciosa.">
            </div>
        </div>
        <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
                <img src="assets/imagenes/inodoro9.png" style="width:100%" onclick="onClick(this)" alt="<h2><b>INODORO MAINSTREAM MARFIL 3469128MX.021</b></h2><h3>MX$3439.00</h3>Inodoro Mainstream en marfil (código 3469128MX.021). Perfil clásico, operación estable y limpieza sencilla.">
            </div>  
        </div>  
    </div>

    <!-- LINEA BLANCA -->
    <div class="w3-container">
        <h2><b>Linea blanca en oferta</h2>
    </div>
    <div class="w3-row-padding">
        <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
                <img src="assets/imagenes/blanca1.png" style="width:100%" onclick="onClick(this)" alt="<h2><b>Refrigerador Andromeda 10´ Grafito Mabe</b></h2><h3>MX$7999.00</h3>Refrigerador 10 pies cúbicos color grafito con distribución de aire para mejor enfriamiento y conservación uniforme. Tamaño práctico para cocinas compactas.">
            </div>
        </div>
        <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
                <img src="assets/imagenes/blanca2.png" style="width:100%" onclick="onClick(this)" alt="<h2><b>Horno Microondas 1.1 Mabe</b></h2><h3>MX$2149.00</h3>Horno de microondas Mabe 1.1 pies cúbicos con programas automáticos (palomitas, bebidas, pizza, verduras, etc.), niveles de potencia y descongelado por tiempo o peso para resultados uniformes.">
            </div>
        </div>
        <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
                <img src="assets/imagenes/blanca3.png" style="width:100%" onclick="onClick(this)" alt="<h2><b>Estufa 20 Parrillas de Alambrón Negra Mabe</b></h2><h3>MX$4449.00</h3>Estufa de 20” con parrillas de alambrón: diseño que transmite el calor del quemador de forma rápida y estable. Cubierta fácil de limpiar y parrillas resistentes para uso diario.">
            </div>  
        </div>  
    </div>

    <div class="w3-container"></div>
    <div class="w3-row-padding">
        <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
                <img src="assets/imagenes/blanca4.png" style="width:100%" onclick="onClick(this)" alt="<h2><b>Estufa 30' Parrillas de Alambrón Plata Mabe</b></h2><h3>MX$7299.00</h3>Estufa de 30” con parrillas de alambrón para una transferencia de calor eficiente. Formato amplio para cocinar con sartenes grandes y limpieza sencilla en la cubierta.">
            </div>
        </div>
        <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
                <img src="assets/imagenes/blanca5.png" style="width:100%" onclick="onClick(this)" alt="<h2><b>Refrigerador Automático 11´ Tecnología Home Ene</b></h2><h3>MX$9599.00</h3>Refrigerador 11 pies cúbicos automático en grafito con Tecnología Home Energy Saver: componentes de alta eficiencia para menor consumo y enfriamiento óptimo; anaqueles amplios para botellas grandes.">
            </div>
        </div>
        <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
                <img src="assets/imagenes/blanca6.png" style="width:100%" onclick="onClick(this)" alt="<h2><b>Lavadora Semiautomática 16 KG Mabe</b></h2><h3>MX$4099.00</h3>Lavadora semiautomática 16 kg con sistema de ventilas Air Vent, filtro fácil de retirar y recubrimientos que ayudan a inhibir bacterias en tina/propela; pensada para cargas grandes y cuidado de prendas.">
            </div>  
        </div>  
    </div>


</div>

<!-- SUCURSALES -->
<div class="w3-container w3-padding-64 w3-center" id="sucursales">
<h2>NUESTRAS SUCURSALES</h2>

<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="assets/imagenes/yucatan.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Yucatán</h3>
</div>

<div class="w3-quarter">
  <img src="assets/imagenes/campeche.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Campeche</h3>
</div>

<div class="w3-quarter">
  <img src="assets/imagenes/quintana.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Quintana Roo</h3>
</div>

<div class="w3-quarter">
  <img src="assets/imagenes/tabasco.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Tabasco</h3>
</div>

</div>
</div>



<script>
//FUNCION AL HACER CLICK
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>
