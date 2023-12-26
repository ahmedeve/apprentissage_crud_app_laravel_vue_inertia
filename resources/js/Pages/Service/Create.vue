<template>

    <GuestLayout>
        <form @submit.prevent="submit">

            <div>
                <InputLabel for="name" value="Name" />

                <TextInput
                    id="name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.name"
                    required
                    autofocus
                    autocomplete="name"
                />

                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div>
                <InputLabel for="doctorName" value="Doctor" />

                <TextInput
                    id="doctor_name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.doctor_name"
                    required
                />

                <InputError
                    class="mt-2"
                    :message="form.errors.doctor_name"
                />
            </div>

            <div class="flex items-center justify-end mt-4">
                <PrimaryButton
                    class="ms-4"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                >
                    Register
                </PrimaryButton>
            </div>
        </form>
    </GuestLayout>

</template>

<script setup>

import { useForm } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
const form = useForm({
    'name': '',
    'doctor_name': '',
});

function submit(){
    console.log(form);
    form.post(route('services.store'));
}
</script>
