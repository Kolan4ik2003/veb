<script setup>
defineProps({
    catalog: {}
})
</script>

<template>
        <h3>{{ catalog.nameverx }}</h3>   
        <img src="https://avatars.mds.yandex.net/i?id=c50912e65ffec3d061bb9b5cdbe38a5b_l-9236689-images-thumbs&n=13" alt="Букет Роз" width="300">
        <p><a><router-link :to="{name: 'content-info' , params: {id:catalog.id}} ">{{ catalog.name }} {{ catalog.price }}</router-link></a></p>
</template>