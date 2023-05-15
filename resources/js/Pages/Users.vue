<script setup>
const props = defineProps({ users: Array });
</script>

<template>
  <Head>
    <title>Users</title>
  </Head>
  
  <h1 class="text-3xl">Users</h1>

  <ul>
    <!--
      database.db3 needs changing to database.sqlite (database dir) and
      DB_CONNECTION=mysql needs changing to DB_CONNECTION=sqlite (.env)
      for this to work.
    -->
    <li v-for="user in users" :key="user.id" v-text="user.name"></li>
  </ul>
</template>
