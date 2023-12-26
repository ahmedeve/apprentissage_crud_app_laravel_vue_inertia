<template>
    <h1>print doctors</h1>
    <div>
        <ul v-for="patient in patients" :key="patient.id">
            <h2>doctor with id {{ patient.id }}</h2>
            <li>{{ patient.name }}</li>
        </ul>
    </div>
</template>

<script setup>

const patients = defineProps({
    patients: Object,
    });

</script>
