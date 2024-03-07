<?php 

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"
    />

    <style>
      * {
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
    padding: 0;
}

/* Estilos para el modo claro */
body.modo-claro {
    background-color: #fff;
    color: #000;
}

/* Estilos para el modo oscuro */
body.modo-oscuro {
    background-color: #161815;
    color: #fff;
}


.section-padding {
    padding: 16px;
}

.carousel-item {
    height: 80vh;
    min-width: 300px;
}

.carousel-caption {
    bottom: 25px; 
    z-index: 2;
   
}

.carousel-caption h5 {
    font-size: 45px;
    text-transform: uppercase;
    letter-spacing: 50px;
    margin-top: 25px;
}

.carousel-caption p {
    width: 60%;
    margin: auto;
    font-size: 25px;
    line-height: 1.9;
    
}
h1, h2 {
    color: #0066cc;
}

.carusel-iner::before{
    content: 0;
    position: absolute;
    width: 100%;
    height: 100%;
    top:  0;
    background-color: rgba(0, 30, 82, 0.327);
    left: 0;
    z-index: 1;
}

.navbar a {
    font-size: 15px;
    text-transform: uppercase;
    font-weight: 500; 
    
}

.navbar-dark .navbar-brand{
    color: #fff;
    font-size: 25px;
    text-transform: uppercase;
    font-weight: bold;
    letter-spacing: 3px;
    margin: auto 2em;
}

.navbar-light .navbar-brand:focus, .navbar-light .navbar-brand:hover{
    color: #000;
}

.w-100{
    height: 100vh;
}

.navbar-toggler{
    padding: 1px 5px;
    font-size: 18px;
    line-height: 0.3;
}

.services .card-body i {
    font-size: 50px;
}

.team .card-body i{
    font-size: 20px;
}


@media(max-width:767px){
    .navbar-nav{
        text-align: center;
    }

    .carousel-item{
        height: 70vh;

    }

    .w-100{
        height: 70vh;

    }

    .carousel-caption{
        bottom: 125px;
    }

    .carousel-caption h1{
        font-size: 17px;

    }

    .carousel-caption a {
        padding: 10px 15px;
        font-size: 15px;
    }

    .carousel-caption p{
        width: 100%;
        line-height: 1.5;
        font-size: 12px;
    }
    .about-text{
        padding-top: 50px;

    }
    .card{
        margin-bottom: 30px;
    }
    .section-padding{
        padding: 50px 0;
    }
}

.text-primary{
    font-size: 25px;
}

.btn-container {
    display: table-cell;
    vertical-align: middle;
    text-align: center;
  }
  
  .btn-container i {
    display: inline-block;
    position: relative;
    top: -9px;
  }
  
  label {
    font-size: 13px;
    color: #424242;
    font-weight: 500;
  }
  
  .btn-color-mode-switch {
    display: inline-block;
    margin: 0px;
    position: relative;
  }
  
  .btn-color-mode-switch > label.btn-color-mode-switch-inner {
    margin: 0px;
    width: 140px;
    height: 30px;
    background: #E0E0E0;
    border-radius: 26px;
    overflow: hidden;
    position: relative;
    transition: all 0.3s ease;
      /*box-shadow: 0px 0px 8px 0px rgba(17, 17, 17, 0.34) inset;*/
    display: block;
  }
  
  .btn-color-mode-switch > label.btn-color-mode-switch-inner:before {
    content: attr(data-on);
    position: absolute;
    font-size: 12px;
    font-weight: 500;
    top: 7px;
    right: 20px;
  }
  
  .btn-color-mode-switch > label.btn-color-mode-switch-inner:after {
    content: attr(data-off);
    width: 70px;
    height: 16px;
    background: #fff;
    border-radius: 26px;
    position: absolute;
    left: 2px;
    top: 2px;
    text-align: center;
    transition: all 0.3s ease;
    box-shadow: 0px 0px 6px -2px #111;
    padding: 5px 0px;
  }
  
  .btn-color-mode-switch > .alert {
    display: none;
    background: #FF9800;
    border: none;
    color: #fff;
  }
  
  .btn-color-mode-switch input[type="checkbox"] {
    cursor: pointer;
    width: 50px;
    height: 25px;
    opacity: 0;
    position: absolute;
    top: 0;
    z-index: 1;
    margin: 0px;
  }
  
  .btn-color-mode-switch input[type="checkbox"]:checked + label.btn-color-mode-switch-inner {
    background: #151515;
    color: #fff;
  }
  
  .btn-color-mode-switch input[type="checkbox"]:checked + label.btn-color-mode-switch-inner:after {
    content: attr(data-on);
    left: 68px;
    background: #3c3c3c;
  }
  
  .btn-color-mode-switch input[type="checkbox"]:checked + label.btn-color-mode-switch-inner:before {
    content: attr(data-off);
    right: auto;
    left: 20px;
  }
  
  .btn-color-mode-switch input[type="checkbox"]:checked ~ .alert {
    display: block;
  }
  
  .dark-preview {
    background: #0d0d0d;
  }
  
  .white-preview {
    background: #fff;
  }
  
  .fondow{
    background: #212529;
    margin: 2em;
    border-radius: .5em;
    display: flex;

  }

  img{
    border-radius: .5em;
  }
  
  .flexi{
    margin: 2em 2em ;
    display: flex;
    flex-grow: initial;

  }

.footer__p{
  display: flex;
  justify-content: center;
  padding-top: 2em;
}

.theme-switch {
  --toggle-size: 15px;
  /* the size is adjusted using font-size,
     this is not transform scale,
     so you can choose any size */
  --container-width: 5.625em;
  --container-height: 2.5em;
  --container-radius: 6.25em;
  /* radius 0 - minecraft mode :) */
  --container-light-bg: #3D7EAE;
  --container-night-bg: #1D1F2C;
  --circle-container-diameter: 3.375em;
  --sun-moon-diameter: 2.125em;
  --sun-bg: #ECCA2F;
  --moon-bg: #C4C9D1;
  --spot-color: #959DB1;
  --circle-container-offset: calc((var(--circle-container-diameter) - var(--container-height)) / 2 * -1);
  --stars-color: #fff;
  --clouds-color: #F3FDFF;
  --back-clouds-color: #AACADF;
  --transition: .5s cubic-bezier(0, -0.02, 0.4, 1.25);
  --circle-transition: .3s cubic-bezier(0, -0.02, 0.35, 1.17);
}

.theme-switch, .theme-switch *, .theme-switch *::before, .theme-switch *::after {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-size: var(--toggle-size);
}

.theme-switch__container {
  width: var(--container-width);
  height: var(--container-height);
  background-color: var(--container-light-bg);
  border-radius: var(--container-radius);
  overflow: hidden;
  cursor: pointer;
  -webkit-box-shadow: 0em -0.062em 0.062em rgba(0, 0, 0, 0.25), 0em 0.062em 0.125em rgba(255, 255, 255, 0.94);
  box-shadow: 0em -0.062em 0.062em rgba(0, 0, 0, 0.25), 0em 0.062em 0.125em rgba(255, 255, 255, 0.94);
  -webkit-transition: var(--transition);
  -o-transition: var(--transition);
  transition: var(--transition);
  position: relative;
}

.theme-switch__container::before {
  content: "";
  position: absolute;
  z-index: 1;
  inset: 0;
  -webkit-box-shadow: 0em 0.05em 0.187em rgba(0, 0, 0, 0.25) inset, 0em 0.05em 0.187em rgba(0, 0, 0, 0.25) inset;
  box-shadow: 0em 0.05em 0.187em rgba(0, 0, 0, 0.25) inset, 0em 0.05em 0.187em rgba(0, 0, 0, 0.25) inset;
  border-radius: var(--container-radius)
}

.theme-switch__checkbox {
  display: none;
}

.theme-switch__circle-container {
  width: var(--circle-container-diameter);
  height: var(--circle-container-diameter);
  background-color: rgba(255, 255, 255, 0.1);
  position: absolute;
  left: var(--circle-container-offset);
  top: var(--circle-container-offset);
  border-radius: var(--container-radius);
  -webkit-box-shadow: inset 0 0 0 3.375em rgba(255, 255, 255, 0.1), inset 0 0 0 3.375em rgba(255, 255, 255, 0.1), 0 0 0 0.625em rgba(255, 255, 255, 0.1), 0 0 0 1.25em rgba(255, 255, 255, 0.1);
  box-shadow: inset 0 0 0 3.375em rgba(255, 255, 255, 0.1), inset 0 0 0 3.375em rgba(255, 255, 255, 0.1), 0 0 0 0.625em rgba(255, 255, 255, 0.1), 0 0 0 1.25em rgba(255, 255, 255, 0.1);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-transition: var(--circle-transition);
  -o-transition: var(--circle-transition);
  transition: var(--circle-transition);
  pointer-events: none;
}

.theme-switch__sun-moon-container {
  pointer-events: auto;
  position: relative;
  z-index: 2;
  width: var(--sun-moon-diameter);
  height: var(--sun-moon-diameter);
  margin: auto;
  border-radius: var(--container-radius);
  background-color: var(--sun-bg);
  -webkit-box-shadow: 0.062em 0.062em 0.062em 0em rgba(254, 255, 239, 0.61) inset, 0em -0.062em 0.062em 0em #a1872a inset;
  box-shadow: 0.062em 0.062em 0.062em 0em rgba(254, 255, 239, 0.61) inset, 0em -0.062em 0.062em 0em #a1872a inset;
  -webkit-filter: drop-shadow(0.062em 0.125em 0.125em rgba(0, 0, 0, 0.25)) drop-shadow(0em 0.062em 0.125em rgba(0, 0, 0, 0.25));
  filter: drop-shadow(0.062em 0.125em 0.125em rgba(0, 0, 0, 0.25)) drop-shadow(0em 0.062em 0.125em rgba(0, 0, 0, 0.25));
  overflow: hidden;
  -webkit-transition: var(--transition);
  -o-transition: var(--transition);
  transition: var(--transition);
}

.theme-switch__moon {
  -webkit-transform: translateX(100%);
  -ms-transform: translateX(100%);
  transform: translateX(100%);
  width: 100%;
  height: 100%;
  background-color: var(--moon-bg);
  border-radius: inherit;
  -webkit-box-shadow: 0.062em 0.062em 0.062em 0em rgba(254, 255, 239, 0.61) inset, 0em -0.062em 0.062em 0em #969696 inset;
  box-shadow: 0.062em 0.062em 0.062em 0em rgba(254, 255, 239, 0.61) inset, 0em -0.062em 0.062em 0em #969696 inset;
  -webkit-transition: var(--transition);
  -o-transition: var(--transition);
  transition: var(--transition);
  position: relative;
}

.theme-switch__spot {
  position: absolute;
  top: 0.75em;
  left: 0.312em;
  width: 0.75em;
  height: 0.75em;
  border-radius: var(--container-radius);
  background-color: var(--spot-color);
  -webkit-box-shadow: 0em 0.0312em 0.062em rgba(0, 0, 0, 0.25) inset;
  box-shadow: 0em 0.0312em 0.062em rgba(0, 0, 0, 0.25) inset;
}

.theme-switch__spot:nth-of-type(2) {
  width: 0.375em;
  height: 0.375em;
  top: 0.937em;
  left: 1.375em;
}

.theme-switch__spot:nth-last-of-type(3) {
  width: 0.25em;
  height: 0.25em;
  top: 0.312em;
  left: 0.812em;
}

.theme-switch__clouds {
  width: 1.25em;
  height: 1.25em;
  background-color: var(--clouds-color);
  border-radius: var(--container-radius);
  position: absolute;
  bottom: -0.625em;
  left: 0.312em;
  -webkit-box-shadow: 0.937em 0.312em var(--clouds-color), -0.312em -0.312em var(--back-clouds-color), 1.437em 0.375em var(--clouds-color), 0.5em -0.125em var(--back-clouds-color), 2.187em 0 var(--clouds-color), 1.25em -0.062em var(--back-clouds-color), 2.937em 0.312em var(--clouds-color), 2em -0.312em var(--back-clouds-color), 3.625em -0.062em var(--clouds-color), 2.625em 0em var(--back-clouds-color), 4.5em -0.312em var(--clouds-color), 3.375em -0.437em var(--back-clouds-color), 4.625em -1.75em 0 0.437em var(--clouds-color), 4em -0.625em var(--back-clouds-color), 4.125em -2.125em 0 0.437em var(--back-clouds-color);
  box-shadow: 0.937em 0.312em var(--clouds-color), -0.312em -0.312em var(--back-clouds-color), 1.437em 0.375em var(--clouds-color), 0.5em -0.125em var(--back-clouds-color), 2.187em 0 var(--clouds-color), 1.25em -0.062em var(--back-clouds-color), 2.937em 0.312em var(--clouds-color), 2em -0.312em var(--back-clouds-color), 3.625em -0.062em var(--clouds-color), 2.625em 0em var(--back-clouds-color), 4.5em -0.312em var(--clouds-color), 3.375em -0.437em var(--back-clouds-color), 4.625em -1.75em 0 0.437em var(--clouds-color), 4em -0.625em var(--back-clouds-color), 4.125em -2.125em 0 0.437em var(--back-clouds-color);
  -webkit-transition: 0.5s cubic-bezier(0, -0.02, 0.4, 1.25);
  -o-transition: 0.5s cubic-bezier(0, -0.02, 0.4, 1.25);
  transition: 0.5s cubic-bezier(0, -0.02, 0.4, 1.25);
}

.theme-switch__stars-container {
  position: absolute;
  color: var(--stars-color);
  top: -100%;
  left: 0.312em;
  width: 2.75em;
  height: auto;
  -webkit-transition: var(--transition);
  -o-transition: var(--transition);
  transition: var(--transition);
}



.theme-switch__checkbox:checked + .theme-switch__container {
  background-color: var(--container-night-bg);
}

.theme-switch__checkbox:checked + .theme-switch__container .theme-switch__circle-container {
  left: calc(100% - var(--circle-container-offset) - var(--circle-container-diameter));
}

.theme-switch__checkbox:checked + .theme-switch__container .theme-switch__circle-container:hover {
  left: calc(100% - var(--circle-container-offset) - var(--circle-container-diameter) - 0.187em)
}

.theme-switch__circle-container:hover {
  left: calc(var(--circle-container-offset) + 0.187em);
}

.theme-switch__checkbox:checked + .theme-switch__container .theme-switch__moon {
  -webkit-transform: translate(0);
  -ms-transform: translate(0);
  transform: translate(0);
}

.theme-switch__checkbox:checked + .theme-switch__container .theme-switch__clouds {
  bottom: -4.062em;
}

.theme-switch__checkbox:checked + .theme-switch__container .theme-switch__stars-container {
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}



.nav-link{
color: white;
}

.d-block{
  filter: blur(8px);
  margin-top: 50px;
}


.tomarT{
  border-radius: 500px;
  margin-top: 50px;
 
}


    </style>
  </head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">   
       
        <label id="modo-toggle" class="theme-switch">
          <input type="checkbox" class="theme-switch__checkbox">
          <div class="theme-switch__container">
            <div class="theme-switch__clouds"></div>
            <div class="theme-switch__stars-container">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144 55" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M135.831 3.00688C135.055 3.85027 134.111 4.29946 133 4.35447C134.111 4.40947 135.055 4.85867 135.831 5.71123C136.607 6.55462 136.996 7.56303 136.996 8.72727C136.996 7.95722 137.172 7.25134 137.525 6.59129C137.886 5.93124 138.372 5.39954 138.98 5.00535C139.598 4.60199 140.268 4.39114 141 4.35447C139.88 4.2903 138.936 3.85027 138.16 3.00688C137.384 2.16348 136.996 1.16425 136.996 0C136.996 1.16425 136.607 2.16348 135.831 3.00688ZM31 23.3545C32.1114 23.2995 33.0551 22.8503 33.8313 22.0069C34.6075 21.1635 34.9956 20.1642 34.9956 19C34.9956 20.1642 35.3837 21.1635 36.1599 22.0069C36.9361 22.8503 37.8798 23.2903 39 23.3545C38.2679 23.3911 37.5976 23.602 36.9802 24.0053C36.3716 24.3995 35.8864 24.9312 35.5248 25.5913C35.172 26.2513 34.9956 26.9572 34.9956 27.7273C34.9956 26.563 34.6075 25.5546 33.8313 24.7112C33.0551 23.8587 32.1114 23.4095 31 23.3545ZM0 36.3545C1.11136 36.2995 2.05513 35.8503 2.83131 35.0069C3.6075 34.1635 3.99559 33.1642 3.99559 32C3.99559 33.1642 4.38368 34.1635 5.15987 35.0069C5.93605 35.8503 6.87982 36.2903 8 36.3545C7.26792 36.3911 6.59757 36.602 5.98015 37.0053C5.37155 37.3995 4.88644 37.9312 4.52481 38.5913C4.172 39.2513 3.99559 39.9572 3.99559 40.7273C3.99559 39.563 3.6075 38.5546 2.83131 37.7112C2.05513 36.8587 1.11136 36.4095 0 36.3545ZM56.8313 24.0069C56.0551 24.8503 55.1114 25.2995 54 25.3545C55.1114 25.4095 56.0551 25.8587 56.8313 26.7112C57.6075 27.5546 57.9956 28.563 57.9956 29.7273C57.9956 28.9572 58.172 28.2513 58.5248 27.5913C58.8864 26.9312 59.3716 26.3995 59.9802 26.0053C60.5976 25.602 61.2679 25.3911 62 25.3545C60.8798 25.2903 59.9361 24.8503 59.1599 24.0069C58.3837 23.1635 57.9956 22.1642 57.9956 21C57.9956 22.1642 57.6075 23.1635 56.8313 24.0069ZM81 25.3545C82.1114 25.2995 83.0551 24.8503 83.8313 24.0069C84.6075 23.1635 84.9956 22.1642 84.9956 21C84.9956 22.1642 85.3837 23.1635 86.1599 24.0069C86.9361 24.8503 87.8798 25.2903 89 25.3545C88.2679 25.3911 87.5976 25.602 86.9802 26.0053C86.3716 26.3995 85.8864 26.9312 85.5248 27.5913C85.172 28.2513 84.9956 28.9572 84.9956 29.7273C84.9956 28.563 84.6075 27.5546 83.8313 26.7112C83.0551 25.8587 82.1114 25.4095 81 25.3545ZM136 36.3545C137.111 36.2995 138.055 35.8503 138.831 35.0069C139.607 34.1635 139.996 33.1642 139.996 32C139.996 33.1642 140.384 34.1635 141.16 35.0069C141.936 35.8503 142.88 36.2903 144 36.3545C143.268 36.3911 142.598 36.602 141.98 37.0053C141.372 37.3995 140.886 37.9312 140.525 38.5913C140.172 39.2513 139.996 39.9572 139.996 40.7273C139.996 39.563 139.607 38.5546 138.831 37.7112C138.055 36.8587 137.111 36.4095 136 36.3545ZM101.831 49.0069C101.055 49.8503 100.111 50.2995 99 50.3545C100.111 50.4095 101.055 50.8587 101.831 51.7112C102.607 52.5546 102.996 53.563 102.996 54.7273C102.996 53.9572 103.172 53.2513 103.525 52.5913C103.886 51.9312 104.372 51.3995 104.98 51.0053C105.598 50.602 106.268 50.3911 107 50.3545C105.88 50.2903 104.936 49.8503 104.16 49.0069C103.384 48.1635 102.996 47.1642 102.996 46C102.996 47.1642 102.607 48.1635 101.831 49.0069Z" fill="currentColor"></path>
              </svg>
            </div>
            <div class="theme-switch__circle-container">
              <div class="theme-switch__sun-moon-container">
                <div class="theme-switch__moon">
                  <div class="theme-switch__spot"></div>
                  <div class="theme-switch__spot"></div>
                  <div class="theme-switch__spot"></div>
                </div>
              </div>
            </div>
          </div>
        </label>
        

        <a href="#" class="navbar-brand"
          ><span class="text-primary">Search</span> For Agro</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarS"
          aria-controls="navbarS"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarS">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a href="index2.php" class="nav-link">Inicio</a>
            </li>
            <li class="nav-item">
                <a href="progreso.php" class="nav-link">Progreso</a>
              </li>
            <li class="nav-item">
              <a href="cultivos.php" class="nav-link">Cultivos</a>
            </li>
            <li class="nav-item">
              <a href="index.php" class="nav-link">Cerrar session</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</div>
    <div id="carouselE" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselE"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselE"
          data-bs-slide-to="1"
          aria-current="true"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselE"
          data-bs-slide-to="2"
          aria-current="true"
          aria-label="Slide 3"
        ></button>
      </div>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/img1.jpg" class="d-block w-100" alt="" />
          <div class="carousel-caption">
            <h1>Cuidado del cultivo</h1>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non
              aliquam ante. Donec fermentum scelerisque pulvinar. Integer
              tincidunt dui ut risus porttitor mollis. Proin tristique elit ut
              nulla consequat faucibus. Fusce non risus erat. Nullam et eleifend
              metus. Aliquam erat volutpat. Integer efficitur elementum ligula
              id commodo. Ut et ipsum laoreet, laoreet quam quis, sodales
            </p>
            <a href="#" class="btn btn-primary mt-3">Más Información</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/img2.jpg" class="d-block w-100" alt="" />
          <div class="carousel-caption">
            <h1>Cuidado del cultivo</h1>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non
              aliquam ante. Donec fermentum scelerisque pulvinar. Integer
              tincidunt dui ut risus porttitor mollis. Proin tristique elit ut
              nulla consequat faucibus. Fusce non risus erat. Nullam et eleifend
              metus. Aliquam erat volutpat. Integer efficitur elementum ligula
              id commodo. Ut et ipsum laoreet, laoreet quam quis, sodales nunc.
            </p>
            <a href="#" class="btn btn-primary mt-3">Más Información</a>
          </div>
        </div>

        <div class="carousel-item">
          <img src="img/img3.jpg" class="d-block w-100" alt="" />
          <div class="carousel-caption">
            <h1>Cuidado del cultivo</h1>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non
              aliquam ante. Donec fermentum scelerisque pulvinar. Integer
              tincidunt dui ut risus porttitor mollis. Proin tristique elit ut
              nulla consequat faucibus. Fusce non risus erat. Nullam et eleifend
              metus. Aliquam erat volutpat. Integer efficitur elementum ligula
              id commodo. Ut et ipsum laoreet, laoreet quam quis, sodales nunc.
            </p>
            <a href="#" class="btn btn-primary mt-3">Más Información</a>
          </div>
        </div>
      </div>

      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselE"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"> </span>
        <span class="visually-hidden">hola</span>
      </button>

      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselE"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"> </span>
        <span class="visually-hidden">hola</span>
      </button>
    </div>
<div class="fondow">
    <section class="about section-padding">
    
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12 col-12">
            <div class="about-img">
              <img src="img/arroz.jpg" class="img-fluid" alt="" />
            </div>
          </div>
          
            <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md5">
              <div class="about-text text-white">
                <h2>TENGO <br />HAMBREEEEEEEE</h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                  non aliquam ante. Donec fermentum scelerisque pulvinar.
                  Integer tincidunt dui ut risus porttitor mollis. Proin
                  tristique elit ut nulla consequat faucibus. Fusce non risus
                  erat. Nullam et eleifend metus. Aliquam erat volutpat. Integer
                  efficitur elementum ligula id commodo. Ut et ipsum laoreet,
                  laoreet quam quis, sodales nunc. Proin pharetra, nulla ac
                  mollis eleifend, mauris nunc maximus enim, vel interdum dolor
                  felis rhoncus lectus. Pellentesque mattis mi magna, a
                  convallis ex placerat id. Nulla luctus lorem non augue laoreet
                  tincidunt. Cras eget mollis turpis, sit amet egestas dui. Nunc
                  consequat nunc ut velit ultricies, ac vehicula mi fringilla.
                  Morbi vehicula dolor turpis. Cras eget nisi et velit posuere
                  tincidunt cursus eu mi.
                </p>
                <a href="#" class="btn btn-primary">Mas informacion</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>
    <section class="services section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-header text-center text-white pb-5">
              <h2>Nuestros servicios</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-4">
            <div class="card text-white text-center bg-dark pb-2">
              <div class="card-body">
                <i class="bi bi-laptop"></i>
                <h3 class="card-title">Registrate</h3>
                <p class="lead">
                  maximus enim, vel interdum dolor felis rhoncus lectus.
                  Pellentesque mattis mi magna, a convallis ex placerat id.
                  Nulla luctus lorem non augue laoreet tincidunt. Cras eget
                  mollis turpis, sit amet egestas dui. Nunc consequat nunc ut
                  velit ultricies, ac vehicula mi fringilla. Morbi vehicula
                  dolor turpis. Cras eget nisi et velit posuere tincidunt cursus
                  eu mi
                </p>
                <button class="btn bg-primary text-white">
                  <a
                    href="inicarSe.html"
                    class="text-white text-decoration-none"
                    >Mas informacion</a
                  >
                </button>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="card text-white text-center bg-dark pb-2">
              <div class="card-body">
                <i class="bi bi-people-fill"></i>
                <h3 class="card-title">Nosotros</h3>
                <p class="lead">
                  maximus enim, vel interdum dolor felis rhoncus lectus.
                  Pellentesque mattis mi magna, a convallis ex placerat id.
                  Nulla luctus lorem non augue laoreet tincidunt. Cras eget
                  mollis turpis, sit amet egestas dui. Nunc consequat nunc ut
                  velit ultricies, ac vehicula mi fringilla. Morbi vehicula
                  dolor turpis. Cras eget nisi et velit posuere tincidunt cursus
                  eu mi
                </p>
                <button class="btn bg-primary text-white">
                  Mas informacion
                </button>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="card text-white text-center bg-dark pb-2">
              <div class="card-body">
                <i class="bi bi-chat-square-text"></i>
                <h3 class="card-title">Contactanos</h3>
                <p class="lead">
                  maximus enim, vel interdum dolor felis rhoncus lectus.
                  Pellentesque mattis mi magna, a convallis ex placerat id.
                  Nulla luctus lorem non augue laoreet tincidunt. Cras eget
                  mollis turpis, sit amet egestas dui. Nunc consequat nunc ut
                  velit ultricies, ac vehicula mi fringilla. Morbi vehicula
                  dolor turpis. Cras eget nisi et velit posuere tincidunt cursus
                  eu mi
                </p>
                <button class="btn bg-primary text-white">
                  Mas informacion
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="portafolio section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-header text-center text-white pb-5">
              <h2>Cultivos</h2>
              <p>
                maximus enim, vel interdum dolor felis rhoncus lectus.
                Pellentesque mattis mi magna, a convallis ex placerat id. Nulla
                luctus lorem non augue laoreet tincidunt. Cras eget mollis
                turpis, sit amet egestas dui. Nunc consequat nunc ut velit
                ultricies, ac vehicula mi fringilla. Morbi vehicula dolor
                turpis. Cras eget nisi et velit posuere tincidunt cursus eu mi
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-12 col-lg-4">
            <div class="card text-light text-center bg-dark pb-2">
              <div class="card-body text-white">
                <div class="img-arena mb-4">
                  <img src="img/maiz.jpg" class="img-fluid" alt="" />
                </div>
                <h3>Maiz</h3>
                <p class="lead">
                  maximus enim, vel interdum dolor felis rhoncus lectus.
                  Pellentesque mattis mi magna, a convallis ex placerat id.
                  Nulla luctus lorem non augue laoreet tincidunt. Cras eget
                  mollis turpis, sit amet egestas dui. Nunc consequat nunc ut
                  velit ultricies, ac vehicula mi fringilla. Morbi vehicula
                  dolor turpis. Cras eget nisi et velit posuere tincidunt cursus
                  eu mi
                </p>
                <button class="btn bg-primary text-white">
                  Mas informacion
                </button>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-12 col-lg-4">
            <div class="card text-light text-center bg-dark pb-2">
              <div class="card-body text-white">
                <div class="img-arena mb-4">
                  <img src="img/maiz.jpg" class="img-fluid" alt="" />
                </div>
                <h3>Maiz</h3>
                <p class="lead">
                  maximus enim, vel interdum dolor felis rhoncus lectus.
                  Pellentesque mattis mi magna, a convallis ex placerat id.
                  Nulla luctus lorem non augue laoreet tincidunt. Cras eget
                  mollis turpis, sit amet egestas dui. Nunc consequat nunc ut
                  velit ultricies, ac vehicula mi fringilla. Morbi vehicula
                  dolor turpis. Cras eget nisi et velit posuere tincidunt cursus
                  eu mi
                </p>
                <button class="btn bg-primary text-white">
                  Mas informacion
                </button>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-12 col-lg-4">
            <div class="card text-light text-center bg-dark pb-2">
              <div class="card-body text-white">
                <div class="img-arena mb-4">
                  <img src="img/maiz.jpg" class="img-fluid" alt="" />
                </div>
                <h3>Maiz</h3>
                <p class="lead">
                  maximus enim, vel interdum dolor felis rhoncus lectus.
                  Pellentesque mattis mi magna, a convallis ex placerat id.
                  Nulla luctus lorem non augue laoreet tincidunt. Cras eget
                  mollis turpis, sit amet egestas dui. Nunc consequat nunc ut
                  velit ultricies, ac vehicula mi fringilla. Morbi vehicula
                  dolor turpis. Cras eget nisi et velit posuere tincidunt cursus
                  eu mi
                </p>
                <button class="btn bg-primary text-white">
                  Mas informacion
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="portafolio section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-header text-center text-white pb-5">
              <h2>Plagas</h2>
              <p>
                maximus enim, vel interdum dolor felis rhoncus lectus.
                Pellentesque mattis mi magna, a convallis ex placerat id. Nulla
                luctus lorem non augue laoreet tincidunt. Cras eget mollis
                turpis, sit amet egestas dui. Nunc consequat nunc ut velit
                ultricies, ac vehicula mi fringilla. Morbi vehicula dolor
                turpis. Cras eget nisi et velit posuere tincidunt cursus eu mi
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-12 col-lg-4">
            <div class="card text-light text-center bg-dark pb-2">
              <div class="card-body text-white">
                <div class="img-arena mb-4">
                  <img src="img/maiz.jpg" class="img-fluid" alt="" />
                </div>
                <h3>Maiz</h3>
                <p class="lead">
                  maximus enim, vel interdum dolor felis rhoncus lectus.
                  Pellentesque mattis mi magna, a convallis ex placerat id.
                  Nulla luctus lorem non augue laoreet tincidunt. Cras eget
                  mollis turpis, sit amet egestas dui. Nunc consequat nunc ut
                  velit ultricies, ac vehicula mi fringilla. Morbi vehicula
                  dolor turpis. Cras eget nisi et velit posuere tincidunt cursus
                  eu mi
                </p>
                <button class="btn bg-primary text-white">
                  Mas informacion
                </button>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-12 col-lg-4">
            <div class="card text-light text-center bg-dark pb-2">
              <div class="card-body text-white">
                <div class="img-arena mb-4">
                  <img src="img/maiz.jpg" class="img-fluid" alt="" />
                </div>
                <h3>Maiz</h3>
                <p class="lead">
                  maximus enim, vel interdum dolor felis rhoncus lectus.
                  Pellentesque mattis mi magna, a convallis ex placerat id.
                  Nulla luctus lorem non augue laoreet tincidunt. Cras eget
                  mollis turpis, sit amet egestas dui. Nunc consequat nunc ut
                  velit ultricies, ac vehicula mi fringilla. Morbi vehicula
                  dolor turpis. Cras eget nisi et velit posuere tincidunt cursus
                  eu mi
                </p>
                <button class="btn bg-primary text-white">
                  Mas informacion
                </button>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-12 col-lg-4">
            <div class="card text-light text-center bg-dark pb-2">
              <div class="card-body text-white">
                <div class="img-arena mb-4">
                  <img src="img/maiz.jpg" class="img-fluid" alt="" />
                </div>
                <h3>Maiz</h3>
                <p class="lead">
                  maximus enim, vel interdum dolor felis rhoncus lectus.
                  Pellentesque mattis mi magna, a convallis ex placerat id.
                  Nulla luctus lorem non augue laoreet tincidunt. Cras eget
                  mollis turpis, sit amet egestas dui. Nunc consequat nunc ut
                  velit ultricies, ac vehicula mi fringilla. Morbi vehicula
                  dolor turpis. Cras eget nisi et velit posuere tincidunt cursus
                  eu mi
                </p>
                <button class="btn bg-primary text-white">
                  Mas informacion
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="footer__p">
        <p class="footer__p-color">&copy; 2024 Todos los derechos reservados.</p>
      </div>
    </footer>

    <script>
      const body = document.body;
      const labelToggle = document.querySelector(".theme-switch");
    
      labelToggle.addEventListener("click", (event) => {
        if (event.target.tagName.toLowerCase() !== 'input') {
          if (body.classList.contains("modo-oscuro")) {
            body.classList.remove("modo-oscuro");
            localStorage.setItem("modo", "claro");
          } else {
            body.classList.add("modo-oscuro");
            localStorage.setItem("modo", "oscuro");
          }
        }
      });
    
      const modoAlmacenado = localStorage.getItem("modo");
      if (modoAlmacenado) {
        body.classList.add(
          modoAlmacenado === "oscuro" ? "modo-oscuro" : "modo-claro"
        );
      }
    </script>
    
    
    
    <script
    
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"

    ></script>
  </body>
</html>
