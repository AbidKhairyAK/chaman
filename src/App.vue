<template>
  <div id="app" class="bg-gray-100 font-family-karla flex">
    <AppSidebar />
    <div class="relative w-full flex flex-col h-screen overflow-y-hidden">
      <AppHeader />
      <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
          <router-view />
        </main>
        <AppFooter />
      </div>
    </div>
  </div>
</template>

<script>
import AppSidebar from '@/components/Layout/AppSidebar'
import AppHeader from '@/components/Layout/AppHeader'
import AppFooter from '@/components/Layout/AppFooter'

export default {
  components: { AppSidebar, AppHeader, AppFooter }
}
</script>

<style>
@import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
.font-family-karla { font-family: karla; }
.bg-sidebar { background: #3d68ff; }
.cta-btn { color: #3d68ff; }
.upgrade-btn { background: #1947ee; }
.upgrade-btn:hover { background: #0038fd; }
.active-nav-link { background: #1947ee; }
.nav-item:hover { background: #1947ee; }
.account-link:hover { background: #3d68ff; }
</style>