<template>
  <div>
    <h1 class="text-2xl mb-4">Create Jin</h1>

    <hr class="mb-4">

    <AppCard title="Form Jin">

      <AppInput
        label="Nama Jin"
        class="block mb-4"
        v-model="form.name"
        :error="errors.name"
      />
      <AppInput
        label="Golongan"
        class="block mb-4"
        v-model="form.faction"
        :error="errors.faction"
      />
      <AppInput
        label="Keahlian"
        class="block mb-4"
        v-model="form.ability"
        :error="errors.ability"
      />

      <div class="flex flex-row-reverse">
        <AppButton title="Submit" @click="handleSubmit" />
      </div>
    </AppCard>

  </div>
</template>

<script>
import axios from 'axios'
import validate from 'validate.js'
import isEmpty from 'lodash/isEmpty'

validate.validators.presence.options = { allowEmpty: false }

const formInit = { name: null, faction: null, ability: null }

export default {
  data () {
    return {
      form: { ...formInit },
      rules: {
        name: { presence: true },
        faction: { presence: true },
        ability: { presence: true }
      },
      errors: {}
    }
  },

  methods: {
    getData () {
      axios.get('http://localhost:8000/jinns/' + this.$route.params.id)
        .then(res => this.form = res.data)
    },
    handleSubmit () {
      const errors = validate(this.form, this.rules)
      this.errors = errors ?? {}

      if (!isEmpty(errors)) return alert('ada error bang!')

      axios.post('http://localhost:8000/jinns/update', this.form)
        .then(() => {
          this.form = { ...formInit }
          this.$router.push('/jin')
        })
        .catch(err => console.log(err.response))
    }
  },

  created () {
    this.getData()
  }
}
</script>
