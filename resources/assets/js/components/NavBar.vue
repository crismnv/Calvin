<template>
<div class="navbar">
  <header class="main-header ed-container">

        <!-- <div class="ed-item ed-container s-70 l-30 cross-center"> -->
            <!-- <img src="../assets/calvin-feik.png" alt="TommyFeik" class="main-header__logo"> -->
            
            <router-link 
            class="ed-item ed-container s-70 l-30 cross-center main-header__empresa"
            tag="div" 
            to="/">
            <div class="ed-item s-25 m-15 l-25">
                <!-- <img src="../assets/panda2.png" alt="TommyFeik" class="main-header__logo"> -->
            </div><h2 class="ed-item s-40 m-25 l-50 main-header__title">CalvinFeik</h2>
            </router-link>
        <!-- </div> -->
        <div class="ed-item s-30 l-70 main-end cross-center">
            <div class="nav-toggle" id="nav-toggle"></div>
            <nav id="nav" class="main-nav">
                <ul id="menu" class="main-menu">
                    <li class="main-menu__item "><router-link to="/nosotros" active-class="active" class="main-menu__link">Nosotros</router-link></li>
                    <li class="main-menu__item"><router-link to="/marcas" active-class="active"  class="main-menu__link ">Nuestras Marcas</router-link></li>
                    <li class="main-menu__item"><router-link to="/contacto" active-class="active"  class="main-menu__link">Contáctanos</router-link></li>
                    <!-- <li class="main-menu__item"><router-link to="/" active-class="active"  class="main-menu__link">Enlace4</router-link></li> -->
                </ul>
            </nav>
        </div>
  </header>
</div>
</template>

<script>
export default {
  name: "NavBar"
}
</script>

