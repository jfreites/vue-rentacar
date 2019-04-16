<template>
    <div>
        <h2>Vehicle List</h2>
        <ul>
            <li v-for="(vehicle, index) in vehicles" :key="index">
                {{vehicle.title}}
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    computed: {
        vehicles() {
            return this.$store.getters.allVehicles
        }
    },
    mounted() {
        this.$store.dispatch('getVehicles')
    }
}
</script>

