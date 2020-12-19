<template>
  <div>

    <div class="flex justify-between mb-4">
      <h1 class="text-2xl">Daftar Jin</h1>

      <router-link to="/jin/create" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-700">
        <i class="fas fa-plus"></i>
        Tambah Data
      </router-link>
    </div>

    <hr class="mb-4">

    <AppCard title="Table Jin">
      <vue-good-table
        :columns="table_columns"
        :rows="table_data"
      >
        <template #table-row="props">
          <span v-if="props.column.field == 'action'">
            <router-link :to="'/jin/update/' + props.row.id" class="bg-yellow-500 p-2 text-sm rounded mr-2">
              edit
            </router-link>
            <button @click="deleteData(props.row.id)" class="bg-red-500 p-2 text-sm rounded text-white">
              delete
            </button>
          </span>
        </template>
      </vue-good-table>
    </AppCard>

  </div>
</template>

<script>
import axios from 'axios'

export default {
  data () {
    return {
      table_data: [],
      table_columns: [
        { label: 'Nama Jin', field: 'name', filterOptions: { enabled: true } },
        { label: 'Golongan', field: 'faction', filterOptions: { enabled: true } },
        { label: 'Kemampuan', field: 'ability', filterOptions: { enabled: true } },
        { label: 'Action', field: 'action' }
      ]
    }
  },

  methods: {
    getTableData () {
      axios.get('http://localhost:8000/jinns/')
        .then(({ data }) => this.table_data = data)
    },
    deleteData (id) {
      axios.delete('http://localhost:8000/jinns/delete/' + id)
        .then(() => this.getTableData())
    }
  },

  created () {
    this.getTableData()
  },
}
</script>

<style scoped>
td, th {
  @apply border border-gray-400 p-2 bg-white;
}
</style>
