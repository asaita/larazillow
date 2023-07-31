<template>
  <Link href="/"> Main Page</Link>&nbsp;
  <Link href="/hello"> Show Page</Link>

  <!-- <div> Kızımı bu kadar çok seviyorum {{ timer }}</div> -->
  <div v-if="flashSuccess" class="success">

    {{ flashSuccess }}

  </div>

  <slot>Default</slot>
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

<style scoped>
.success{

  background-color: chocolate;
  color: black;

}

</style>