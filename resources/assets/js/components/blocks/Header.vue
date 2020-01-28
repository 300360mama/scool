<template>
  <header>
    <nav class="navigation">
      <i class="fas fa-bars"></i>
      <ul>
        <li class="menu">
          <router-link to="/">Головна</router-link>
        </li>
        <li class="menu">
          <router-link to="/items">Предмети</router-link>
        </li>
        <li class="menu">
          <router-link to="/interesting">Цікавинки</router-link>
        </li>
        <li class="menu">
          <router-link to="/preschooler">Дошкільнятам</router-link>
        </li>
        <li class="menu">
          <router-link to="/games">Розвиваючі ігри</router-link>
        </li>
      </ul>
    </nav>
    <h1 class="logo_text">SCHOOL</h1>
  </header>
</template>

<script>
export default {
  mounted() {}
};
</script>
