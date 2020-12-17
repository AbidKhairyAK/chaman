<template>
  <div class="bg-white rounded shadow-lg p-4">
    <h2 class="font-bold border-b border-gray-400 pb-3 mb-6">{{ title }}</h2>
    <slot />
  </div>
</template>

<script>
export default {
  props: ['title']
}
</script>