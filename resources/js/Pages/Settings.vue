<script>
import { Head } from '@inertiajs/vue3';

// Uses a different layout to the default used by the other pages.
import Layout from "../Shared/Layout2.vue";

export default {
  components: { Head },
  layout: Layout
};
</script>

<template>
  <Head title="My App - Settings" />

  <h1 class="text-3xl">Settings</h1>
</template>
