<template>
  <label>
    <div class="mb-1">{{ label }}</div>
    <input
      class="w-full border border-gray-400 rounded p-2"
      :value="value"
      :type="type"
    >
  </label>
</template>

<script>
export default {
  props: ['label', 'value', 'type']
}
</script>