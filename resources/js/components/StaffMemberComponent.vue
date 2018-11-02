<template>
	<tr>
		<td>{{ fullName() }}</td>
        <td><input v-model="services"></td>
        <td><input v-model="products"></td>
        <td>{{ total }}</td>
        <td><input v-model="preBooked"></td>
        <td><input v-model="sick"></td>
        <td><input v-model="tips"></td>
        <td><strong>{{ wage }}</strong></td>
        <td><input v-model="notes"></td>
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

            total() {
                return parseFloat(this.services) + parseFloat(this.products);
            },

            prodCommission() {
            	return (parseFloat(this.products) * 25) / 100;
            },

            serviceCommission() {
            	var remainder = (parseFloat(this.services) - this.employee.basic_wage);

            	return (parseFloat(this.employee.target_multiplier) * remainder) / 100;
            },

            monthlyHours() {
            	var hoursPW = parseInt(this.employee.hours_pd) * parseInt(this.employee.days_pw);
            	var hoursPM = (parseInt(hoursPW) * 52) / 12;

            	return hoursPM;
            },

            hourlyWage() {
            	return parseInt(this.employee.basic_wage) / this.monthlyHours;
            },

            deductSick() {
            	return (parseInt(this.sick) * 8) * this.hourlyWage;
            },

            wage() {
                var wage = parseFloat(this.total) - this.deductSick + parseFloat(this.tips) + this.prodCommission + this.serviceCommission;

                return wage.toFixed(2);
            },

        }

    }
</script>