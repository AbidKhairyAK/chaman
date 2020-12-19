<template>
  <button
    class="bg-white border border-blue-500 text-blue-700 py-2 px-8 rounded transition-all duration-500"
    v-on="$listeners"
  >
    {{ title }}
  </button>
</template>

<style scoped>
button:hover {
  @apply bg-gradient-to-tr from-blue-400 to-teal-700 text-white;
}
</style>

<script>
export default {
  props: ['title']
}
</script>
