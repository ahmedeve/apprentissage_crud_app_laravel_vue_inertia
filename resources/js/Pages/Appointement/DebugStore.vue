<template>

</template>


<script setup>
import { onMounted } from 'vue';

const appointement = defineProps({
    appointement: Object,
});

onMounted(() => {
    console.log(appointement);
});

</script>
