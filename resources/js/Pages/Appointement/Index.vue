<template>
    <div >
        <ul v-for="appointement in appointements" :key="appointement.id">
            <h1>{{ appointement.doctor_id }}</h1>
            <h1>{{ appointement.patient_id }}</h1>
        </ul>
    </div>
</template>

<script setup>

const appointements = defineProps({
    appointements: Object,
    });

</script>
