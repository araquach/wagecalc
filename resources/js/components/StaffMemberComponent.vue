<template>
	<tr>
		<td>{{ fullName() }}</td>
        <td><input type="text" v-model="services"></td>
        <td><input type="text" v-model="products"></td>
        <td>{{ total }}</td>
        <td><input type="text" v-model="preBooked"></td>
        <td><input type="text" v-model="sick"></td>
        <td><input type="text" v-model="tips"></td>
        <td>{{ wage }}</td>
	</tr>
</template>

<script> 

    export default {

    	props: ['employee'],

        data() {
            return {
                services: 0,
                products: 0,
                sick: 0,
                preBooked: 0,
                tips: 0
            }
        },

        methods: {

            fullName() {
                return this.employee.first_name + ' ' + this.employee.last_name;
            }

        },

        computed: {

            total() {
                return parseFloat(this.services) + parseFloat(this.products);
            },

            wage() {
                return parseFloat(this.total) / 2;
            }

        }

    }
</script>