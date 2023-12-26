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
                <InputLabel for="specialization" value="Profession" />

                <TextInput
                    id="specialization"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.specialization"
                    required
                />

                <InputError
                    class="mt-2"
                    :message="form.errors.specialization"
                />
            </div>


            <div>
                <InputLabel for="serviceName" value="Service" />

                <TextInput
                    id="service_name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.service_name"
                    required
                />

                <InputError
                    class="mt-2"
                    :message="form.errors.service_name"
                />
            </div>

            <div class="mb-4">
                <label for="datetime" class="block text-sm font-medium text-gray-600">Rendez-vous Datetime</label>
                <input type="datetime-local" id="rendez_vous_date" name="datetime" v-model="form.rendez_vous_date" class="mt-1 p-2 w-full border rounded-md">
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
    'specialization': '',
    'service_name': '',
    'rendez_vous_date': ''
    });


function submit(){
    console.log(form.name);
    console.log(form.specialization);
    console.log(form.service_name);
    console.log(form.rendez_vous_date);
    form.post(route('appointements.debugstore'));
}
</script>
