<body id="myPage">

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

<!--CONTENIDO PRIMERA SECCION -->

<div style="padding: 80px 0; background: #e6e6e6;">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
        <div style="display: flex; flex-wrap: wrap;">
            
            <div style="flex: 1; min-width: 300px; min-height: 500px; position: relative;">
                <img src="<?php echo base_url('assets/imagenes/seccion1.png'); ?>" style="width: 90%; height: 90%; object-fit: cover;">
            </div>
            
            <div style="flex: 1; min-width: 300px; padding: 40px;">
                <div style="background: white; padding: 40px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                    <span style="background: #022336; color: white; padding: 5px 15px; border-radius: 3px; font-weight: bold; text-transform: uppercase;">BENELUX</span>
                    <h2 style="margin: 20px 0; color: #333;">Refréscate con nuestros aires condicionador</h2>
                    <p style="color: #666; line-height: 1.6; margin-bottom: 25px;">Envío gratis | Hasta 12 meses sin intereses</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MAPA DE BOXITO -->
<div class="w3-row-padding w3-padding-64">
    <div class="w3-col m6">
        <h3><b>Visítanos en cualquiera de nuestras sucursales</b></h3>
        <p><b>Dirección:</b> Calle 123, Colonia Centro, Mérida, Yucatán</p>
        <p><b>Teléfono:</b> +52 999 981 4590</p>
        <p><b>Horario:</b><br>Lunes a viernes 8:00 AM - 7:00 PM<br>Sábado 8:00 AM - 4:00 PM<br>Domingo 9:00 AM - 2:00 PM</p>
    </div>
    
    <div class="w3-col m6">
        <div class="w3-card-4">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14895.89592226532!2d-89.63457850340711!3d21.033727079733243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f567420f25e5fd1%3A0xe10184f449ecdf61!2sBoxito%20Suc.%20Cum!5e0!3m2!1ses-419!2smx!4v1760576381640!5m2!1ses-419!2smx" 
                width="100%" 
                height="300" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>
    </div>
</div>











</body>
</html>
