<script setup>
defineProps({
    catalog: {}
})
</script>

<template>
        <h3>{{ catalog.nameverx }}</h3>   
        <img :src="catalog.image" :alt="catalog.nameverx" width="300">
        <p><a><router-link :to="{name: 'content-info' , params: {id:catalog.id}} ">{{ catalog.name }} {{ catalog.price }}</router-link></a></p>
</template>