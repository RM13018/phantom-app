<template>
  <div>
    <nav class="blue darken-2">
      <div class="nav-wrapper">
        <div class="container">
          <router-link to="/">
            <a class="brand-logo">Phantom Note</a>
          </router-link>
          <router-link to="/">
            <a data-target="mobile-demo" class="sidenav-trigger">
              <i class="material-icons">menu</i>
            </a>
          </router-link>
          <ul class="right hide-on-med-and-down">
            <li>
              <router-link to="/inicio-session">
                <a class="blue darken-4">Inicia sesion</a>
              </router-link>
            </li>
            <li>
              <router-link to="/registro">
                <a>Registrate</a>
              </router-link>
            </li>
            <li>
              <router-link to="/contact">
                <a>contacto</a>
              </router-link>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <ul class="sidenav" id="mobile-demo">
      <li>
        <router-link to="/inicio-session">
          <a class="blue darken-4">Inicia sesion</a>
        </router-link>
      </li>
      <li>
        <router-link to="/registro">
          <a>Registrate</a>
        </router-link>
      </li>
      <li>
        <router-link to="/contact">
          <a>contacto</a>
        </router-link>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  name: "Menu",
  data() {
    return {};
  }
};
</script>
