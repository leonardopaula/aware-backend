<template>
    <breeze-authenticated-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Sensors
            </h2>
        </template>

        <div class="py-12 grid grid-cols-1 gap-4">
            <div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h3 class="font-semibold text-xl text-gray-800">Accelerometer</h3>
                        <div class="overflowed">
                            <table class="table-fixed w-full">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="px-4 py-2" style="width:18%">Date</th>
                                    <th class="px-4 py-2 w-20">Id.</th>
                                    <th class="px-4 py-2">Device</th>
                                    <th class="px-4 py-2">Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="row in data.accelerometer" :key="row.id">
                                    <td class="border px-4 py-2">{{ row.timestamp }}</td>
                                    <td class="border px-4 py-2">{{ row._id }}</td>
                                    <td class="border px-4 py-2">{{ row.device_id }}</td>
                                    <td class="border px-4 py-2">{{ row.double_values_0 + ', ' + row.double_values_1 + '...' }}</td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h3 class="font-semibold text-xl text-gray-800">Location</h3>
                        <div class="overflowed">
                            <table class="table-fixed w-full">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="px-4 py-2" style="width:18%">Date</th>
                                    <th class="px-4 py-2 w-20">Id.</th>
                                    <th class="px-4 py-2">Device</th>
                                    <th class="px-4 py-2">Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="row in data.location" :key="row.id">
                                    <td class="border px-4 py-2">{{ row.timestamp }}</td>
                                    <td class="border px-4 py-2">{{ row._id }}</td>
                                    <td class="border px-4 py-2">{{ row.device_id }}</td>
                                    <td class="border px-4 py-2">{{ row.provider + ', ' + row.double_latitude + ',' + row.double_longitude + '...' }}</td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h3 class="font-semibold text-xl text-gray-800">Battery</h3>
                        <div class="overflowed">
                            <table class="table-fixed w-full">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="px-4 py-2" style="width:18%">Date</th>
                                    <th class="px-4 py-2 w-20">Id.</th>
                                    <th class="px-4 py-2">Device</th>
                                    <th class="px-4 py-2">Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="row in data.battery" :key="row.id">
                                    <td class="border px-4 py-2">{{ row.timestamp }}</td>
                                    <td class="border px-4 py-2">{{ row._id }}</td>
                                    <td class="border px-4 py-2">{{ row.device_id }}</td>
                                    <td class="border px-4 py-2">{{ row.battery_status + ', ' + row.battery_level + ',' + row.battery_scale + ',' + row.battery_temperature + ',' + row.battery_adaptor + ',' + row.battery_health + '...' }}</td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h3 class="font-semibold text-xl text-gray-800">Light</h3>
                        <div class="overflowed">
                            <table class="table-fixed w-full">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="px-4 py-2" style="width:18%">Date</th>
                                    <th class="px-4 py-2 w-20">Id.</th>
                                    <th class="px-4 py-2">Device</th>
                                    <th class="px-4 py-2">Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="row in data.light" :key="row.id">
                                    <td class="border px-4 py-2">{{ row.timestamp }}</td>
                                    <td class="border px-4 py-2">{{ row._id }}</td>
                                    <td class="border px-4 py-2">{{ row.device_id }}</td>
                                    <td class="border px-4 py-2">{{ row.double_light_lux + ', ' + row.accuracy }}</td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </breeze-authenticated-layout>
</template>

<script>
    import BreezeAuthenticatedLayout from '@/Layouts/Authenticated'

    export default {
        components: {
            BreezeAuthenticatedLayout,
        },

        props: ['data', 'errors'],
        data() {
            return {}
        },
        created() {
            console.log(this.data);
        }
    }
</script>
<style scoped>
.overflowed{
    height: 200px;
    overflow: auto;
}
</style>
