<template>
    <h1>{{ patient }}</h1>
</template>

<script setup>
const doctor = defineProps({
        patient: Object,
    });
</script>
