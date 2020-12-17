<template>
  <div>

    <div class="flex justify-between mb-4">
      <h1 class="text-2xl">Daftar Jin</h1>

      <button class="bg-blue-500 text-white p-2 rounded hover:bg-blue-700">
        <i class="fas fa-plus"></i>
        Tambah Data
      </button>
    </div>

    <hr class="mb-4">

    <AppCard title="Table Jin">
      <table class="w-full">
        <thead>
          <tr>
            <th>nama</th>
            <th>golongan</th>
            <th>keahlian</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Slamet</td>
            <td>dzulumat</td>
            <td>Bodyguard</td>
          </tr>
        </tbody>
      </table>
    </AppCard>

  </div>
</template>

<style scoped>
td, th {
  @apply border border-gray-400 p-2 bg-white;
}
</style>