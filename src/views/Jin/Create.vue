<template>
  <div>
    <h1 class="text-2xl mb-4">Create Jin</h1>

    <hr class="mb-4">

    <AppCard title="Form Jin">

      <AppInput
        label="Nama Jin"
        class="block mb-4"
        v-model="form.name"
      />
      <AppInput
        label="Golongan"
        class="block mb-4"
        v-model="form.faction"
      />
      <AppInput
        label="Keahlian"
        class="block mb-4"
        v-model="form.ability"
      />

      <div class="flex flex-row-reverse">
        <AppButton title="Submit" @click="handleSubmit" />
      </div>
    </AppCard>

  </div>
</template>

<script>
import axios from 'axios'

const formInit = { name: null, faction: null, ability: null }

export default {
  data () {
    return {
      form: { ...formInit }
    }
  },

  methods: {
    handleSubmit () {
      axios.post('http://localhost:8000/jinns/create', this.form)
        .then(() => {
          this.form = { ...formInit }
          this.$router.push('/jin')
        })
        .catch(err => console.log(err.response))
    }
  }
}
</script>
