<template>

<Link href="/"> Main Page</Link>&nbsp;
<Link href="/hello"> Show Page</Link>

<div> Zaman tut tutabilirsen {{ timer }}</div>

<slot>Default</slot>

</template>

<script setup>

import { Link } from '@inertiajs/vue3'
import {ref} from 'vue'

const timer=ref(0);

//1000 her milisaniye, burdaki valueda javascripteki attr value
setInterval(() => timer.value++, 1000);


</script>