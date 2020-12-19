<template>
  <label>
    <div class="mb-1">{{ label }}</div>
    <input
      class="w-full border border-gray-400 rounded p-2"
      :type="type"
      :value="value"
      @input="$emit('input', $event.target.value)"
    >
  </label>
</template>

<script>
export default {
  props: ['label', 'value', 'type']
}
</script>
