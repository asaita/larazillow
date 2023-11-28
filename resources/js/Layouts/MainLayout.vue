<template>


  <header class="border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 w-full p-4">
    <div class="container mx-auto">
      <nav class="p4 flex items-center justify-between">
        <div class="text-lg font-medium">
          <Link :href="route('listing.index')">Listings</Link>
        </div>
        <div class="text-xl text-indigo-600 dark:text-indigo-300 font-bold text-center">
          <Link :href="route('listing.index')">LaraZillow</Link>
        </div>
        <div>
          <Link :href="route('listing.create')" class="bg-indigo-600 hover:bg-indigo-400 text-white font-medium p-2 rounded-md">
            + New Listing</Link>
        </div>
        
       
       </nav>
      
    </div>

  </header>

  <!-- <div> Kızımı bu kadar çok seviyorum {{ timer }}</div> -->

  <main class="container mx-auto p-4">

    <div v-if="flashSuccess" class="mb-4 border rounded-md shadow-md border-green-300 bg-green-100 dark:border-green-1000 dark:bg-green-900 p-2">
  
      {{ flashSuccess }}
    
  
    </div>
    <slot>Default</slot>
  </main>

</template>

<script setup>

import { Link, usePage } from '@inertiajs/vue3'
import { computed } from 'vue'

const page = usePage()
const flashSuccess=computed(
  ()=>page.props.flash.success,
)


//import {ref} from 'vue'

// const timer=ref(0)

// //1000 her milisaniye, burdaki valueda javascripteki attr value
// setInterval(() => timer.value++, 1000)


</script>

