<script>
export default {
  props: {
    active: Boolean,
  }
};
</script>

<template>
  <!--
    Conditional class underlines page link if that's the page that's
    currently displayed. This boolean prop is passed from the Nav.vue
    component.
    The <slot /> displays the link text (eg. Home, Settings, Users).
    Also passed from the Nav.vue component.
  -->
  <Link
    class="text-blue-500 hover:underline"
    :class="{'font-bold underline': active}"
  ><slot /></Link>
</template>
