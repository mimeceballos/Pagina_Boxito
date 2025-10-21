<!DOCTYPE html>
<html>
<head>
<title>BOXITO</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- NAVBAR -->
<div class="w3-top">
  <div class="w3-bar w3-left-align" style="background-color: #022336; color: white;">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white" href="javascript:void(0);" onclick="openNav()" style="background-color: #022336; color: white;">
      <i class="fa fa-bars"></i>
    </a>
    <a href="<?php echo base_url('welcome'); ?>" class="w3-bar-item w3-button" style="background-color: #e70128; color: white;">
         <img src="<?php echo base_url('assets/imagenes/logo.png'); ?>" alt="TU EMPRESA" style="height:25px; vertical-align:middle;">
    </a>


    <!-- BOTON DESPLEGABLE QUIENES SOMOS -->
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-button" title="Notifications" style="background-color: #022336; color: white;">
        ¿Quiénes somos? <i class="fa fa-caret-down"></i>
      </button>     
      <div class="w3-dropdown-content w3-card-4 w3-bar-block">
        <a href="<?php echo base_url('welcome/nosotros'); ?>" class="w3-bar-item w3-button">Nosotros</a>
        <a href="<?php echo base_url('welcome/mision'); ?>" class="w3-bar-item w3-button">Misión</a>
        <a href="<?php echo base_url('welcome/vision'); ?>"class="w3-bar-item w3-button">Visión</a>
      </div>
    </div>

    <!-- BOTON DESPLEGABLE DEPARTAMENTOS-->
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-button" title="Notifications" style="background-color: #022336; color: white;">
        Departamento<i class="fa fa-caret-down"></i>
      </button>     
      <div class="w3-dropdown-content w3-card-4 w3-bar-block">
        <a href="<?php echo base_url('welcome/aire'); ?>" class="w3-bar-item w3-button">Aires y ventilación</a>
        <a href="<?php echo base_url('welcome/plomeria'); ?>" class="w3-bar-item w3-button">Plomería</a>
        <a href="<?php echo base_url('welcome/baños'); ?>"class="w3-bar-item w3-button">Baños</a>
        <a href="<?php echo base_url('welcome/piso'); ?>" class="w3-bar-item w3-button">Pisos</a>
        <a href="<?php echo base_url('welcome/cocina'); ?>" class="w3-bar-item w3-button">Cocinas</a>
        <a href="<?php echo base_url('welcome/hogar'); ?>"class="w3-bar-item w3-button">Hogar</a>
        <a href="<?php echo base_url('welcome/electricidad'); ?>" class="w3-bar-item w3-button">Electricidad</a>
        <a href="<?php echo base_url('welcome/ferreteria.php'); ?>" class="w3-bar-item w3-button">Ferretería</a>
      </div>
    </div>

    <!-- OTROS BOTONES-->
    <a href="<?php echo base_url('welcome/oferta'); ?>" class="w3-bar-item w3-button w3-hide-small w3-hover-white" style="color: white;">Ofertas</a>
    <!-- <a href="<?php echo base_url('welcome/departamento'); ?>" class="w3-bar-item w3-button w3-hide-small w3-hover-white" style="color: white;">Departamento</a>-->
    <a href="<?php echo base_url('welcome/contactanos'); ?>" class="w3-bar-item w3-button w3-hide-small w3-hover-white" style="color: white;">Contáctanos</a>


    <!-- BARRA DE BUSQUEDA -->
    <div class="search">
      <div class="barra">
          <div><span class="material-symbols-outlined" id="lupa"></span></div>
            <input type="text" placeholder="Buscar"></input>
          </div>
      </div>
    </div>


  </div>
</div>


<style>
/*PADDING DEL NAVBAR*/
.w3-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

/*BARRA*/
.search{
    flex-grow: 1;
    height: 30px;
    background-color: #e9e9e9;
    border-radius: 40px;
    margin-left: auto;
    max-width: 600px;
    margin-right: 15px;
}

.barra{
    display: flex;
    align-items: center;
    height: 30px;
    padding: 0 10px;

}

#lupa{
    color: #767676;
    font-size: 20px;
    font-weight: bold;
    margin-right: 5px;
}

.barra input{
   border: none;
   outline: none;
   background-color: inherit;
   padding: 0px 8px;
   font-size: 14px;
   flex-grow: 1;
   width: 100%;
}

</style>




</head>