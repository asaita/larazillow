<template>
  <div>Index page</div>
  <Link href="/hello"> Show Page</Link>

  <div>
    The message is {{ message }}
  </div>
</template>


<script setup>

import { Link } from '@inertiajs/vue3'

defineProps({
  message:String,
})

</script>

//default layout  yaptığımız için bunu kaldırdık. 
//Başka layaout yaparsak aşağıdakini kulanacağız
<!-- <script>
import MainLayout from '../../Layouts/MainLayout.vue';
    export default{
        layout:MainLayout
    }
</script> -->