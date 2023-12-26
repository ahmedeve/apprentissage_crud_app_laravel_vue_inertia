<template>
    <h1>{{ service }}</h1>
</template>

<script setup>
import { onMounted } from 'vue';


const service = defineProps({
    service: Object,
});

onMounted(() => {
    console.log(service);
    });

</script>
