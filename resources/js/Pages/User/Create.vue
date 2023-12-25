<template>
    <GuestLayout>
        <form @submit.prevent="submit">
            <div>
                <InputLabel for="name" value="Name" />

                <TextInput
                    id="name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="userForm.name"
                    required
                    autofocus
                    autocomplete="name"
                />

                <InputError class="mt-2" :message="userForm.errors.name" />
            </div>

            <div v-if="user_type.registerDoctor">
                <InputLabel for="specialization" value="Specialization" />

                <TextInput
                    id="specialization"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="userForm.specialization"
                    required
                    autocomplete="name"
                />

                <InputError
                    class="mt-2"
                    :message="userForm.errors.specialization"
                />
            </div>

            <div class="mt-4">
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="userForm.email"
                    required
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="userForm.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" />

                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="userForm.password"
                    required
                    autocomplete="new-password"
                />

                <InputError class="mt-2" :message="userForm.errors.password" />
            </div>

            <div class="mt-4">
                <InputLabel
                    for="password_confirmation"
                    value="Confirm Password"
                />

                <TextInput
                    id="password_confirmation"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="userForm.password_confirmation"
                    required
                    autocomplete="new-password"
                />

                <InputError
                    class="mt-2"
                    :message="userForm.errors.password_confirmation"
                />
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link
                    :href="route('login')"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    Already registered?
                </Link>

                <PrimaryButton
                    class="ms-4"
                    :class="{ 'opacity-25': userForm.processing }"
                    :disabled="userForm.processing"
                >
                    Register
                </PrimaryButton>
            </div>
        </form>
    </GuestLayout>
</template>

<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { ref, reactive, onMounted, computed} from 'vue';
import { useForm, Link} from '@inertiajs/vue3';
const user_type = defineProps({
    registerDoctor: {
        type: Boolean,
        },
    registerPatient: {
        type: Boolean,
        },
    });
const userForm = useForm(user_type.registerDoctor ?
                {
                    'name': '',
                    'specialization': '',
                    'email': '',
                    'password': '',
                    'password_confirmation': ''
                }
                : user_type.registerPatient ?
                {
                    'name': '',
                    'email': '',
                    'password': '',
                    'password_confirmation': ''
                } : {} );
function submit () {
    if (user_type.registerDoctor){
        userForm.post(route('doctors.store'), {
            onFinish: () => userForm.reset('password', 'password_confirmation'),
        });
    }
    if (user_type.registerPatient){
        userForm.post(route('patients.store'), {
            onFinish: () => userForm.reset('password', 'password_confirmation'),
        });
    }
}

onMounted(() => {
})

</script>
