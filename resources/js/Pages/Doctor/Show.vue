<template>
    <h1>{{ doctor.doctor }}</h1>
    <h1>{{ doctor.user }}</h1>
    <h1>{{ doctor.request }}</h1>
    <h1>{{ doctor.data }}</h1>
</template>

<script setup>
const doctor = defineProps({
        doctor: Object,
    });
</script>
