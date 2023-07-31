<template>
    <div v-for="listing in listings" :key="listing.id">

        <Link :href="`/listing/${listing.id}`">
            
            {{ listing.street }} 

        </Link>
            
            {{ listing.street_nr }} - {{ listing.city }}
            for {{ listing.price }}
        
        

        

    </div>

</template>

<script setup>
import {Link} from '@inertiajs/vue3'
defineProps({
    listings: Array,
})

</script>