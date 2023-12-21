<template>
    <h1>print doctors</h1>
    <div>
        <ul v-for="doctor in doctors" :key="doctor.name">
            <h2>doctor with id {{ doctor.id }}</h2>
            <li>{{ doctor.name }}</li>
            <li>{{ doctor.specialization }}</li>
        </ul>
    </div>
</template>

<script>
export default {
    props: {
        doctors: Array,
        },
    data(){
        return {
            first_doc: this.doctors[0].name,
        }
    },
}
</script>
