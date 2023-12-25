<template>

    <h1 v-if="registerDoctor">this guy is doc</h1>
    <h1 v-else-if="registerPatient">this is guy is a patient</h1>

</template>

<script setup>
    defineProps({
        registerDoctor: {
            type: Boolean,
            },
        registerPatient: {
            type: Boolean,
            },
        });
</script>
