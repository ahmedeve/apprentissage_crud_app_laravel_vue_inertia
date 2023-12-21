<template>
    <h1>{{ doctor.name }}</h1>
    <h1>{{ doctor.specialization }}</h1>
</template>

<script setup>
    defineProps({ doctor: Object });
</script>
