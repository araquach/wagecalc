<template>
	<tr>
		<td>{{ fullName() }}</td>
        <td><div class="field"><div class="control"><input class="input" type="text" v-model.number="services"></div></div></td>
        <td><input class="input" type="text" v-model.number="products"></td>
        <td>{{ totalRev }}</td>
        <td><input class="input" type="text" v-model.number="preBooked"></td>
        <td><input class="input" type="text" v-model.number="sick"></td>
        <td><input class="input" type="text" v-model.number="tips"></td>
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

            totalRev() {
                return this.services + this.products;
            },

            dailyWage() {
                return this.employee.hours_pd * this.employee.basic_wage;
            },

            basicSalary() {
                return ((this.dailyWage * this.employee.days_pw) * 52) / 12;
            },

            wagePcm() {
                return (((this.employee.hours_pd * this.employee.days_pw) * 52) / 12) * this.employee.basic_wage;
            },

            daysPcm() {
                return (this.employee.days_pw * 52) / 12;
            },

            commissionTarget() {
                return this.wagePcm * this.employee.target_multiplier;
            },

            totalSickValue() {
                return ((this.employee.hours_pd * this.employee.basic_wage) * this.sick);
            },

            finalCommissionTarget() {
                return (this.commissionTarget / this.daysPcm) * (this.daysPcm - this.preBooked);
                
            },

            calculatedRev() {
                return this.services + (this.products / 2);
            },

            commissionAchieved() {
                return ((this.calculatedRev - this.finalCommissionTarget) / 100) * this.employee.percentage_return;
            },

            // If Total Revenue is Greater than Final Target then      
            // ((Total Revenue - FINAL_TARGET) / 100) * Percentage_Return = commission achieved

            wage() {
                if(this.calculatedRev > this.finalCommissionTarget) {
                    var wage = this.wagePcm + this.commissionAchieved - this.totalSickValue + this.tips;

                    return wage.toFixed(2); 
                }

                 var wage = this.basicSalary.toFixed(2) - this.totalSickValue + this.tips;
                 
                 return wage.toFixed(2);
            }
        
        }

    }
</script>