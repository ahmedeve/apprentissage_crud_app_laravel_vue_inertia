<template>
    <div class="max-w-md bg-white p-6 rounded-md shadow-md">
    <h1 class="text-3xl font-bold mb-6">Register Doctor</h1>
        <form @submit.prevent="submitForm" class="max-w-md bg-white p-6 rounded-md shadow-md">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
            <input type="text" name="name" v-model="docForm.name" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">

            <label for="specialization" class="block text-gray-700 text-sm font-bold mb-2">specialization:</label>
            <input type="text" name="specialization" v-model="docForm.specialization" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
            <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Register Doctor</button>
        </form>
    </div>
</template>
<script setup>
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'

const docForm = reactive({
  name: null,
  specialization: null,
})

function submitForm() {
  router.post('/doctors', docForm);
}
</script>
