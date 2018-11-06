<template>
	<tr>
		<td>{{ fullName() }}</td>
        <td><div class="field"><div class="control"><input class="input" type="text" v-model="services"></div></div></td>
        <td><input class="input" type="text" v-model="products"></td>
        <td>{{ total }}</td>
        <td><input class="input" type="text" v-model="preBooked"></td>
        <td><input class="input" type="text" v-model="sick"></td>
        <td><input class="input" type="text" v-model="tips"></td>
        <td><strong>{{ wage }}</strong></td>
        <td><input class="input" type="text" v-model="notes"></td>
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
                tips: 0,
                notes: ''
            }
        },

        methods: {

            fullName() {
                return this.employee.first_name + ' ' + this.employee.last_name;
            }

        },

        computed: {       

            commissionTarget() {

            },

            monthlyWage() {

            },

            finalTarget() {

            },

            deductSick() {

            },

            commissionSum() {

            },

            commissionAchieved() {

            },

            wage() {
                return 100;
            }
        
        }

    }
</script>