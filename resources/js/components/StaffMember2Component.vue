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

            dailyWage() {
                // hours pd * basic wage
                return this.employee.hours_pd * this.employee.basic_wage;
            },

            basicSalary() {
                //  ((daily wage * days pw) *52) / 12
                return ((this.dailyWage * this.employee.days_pw) * 52) / 12;
            },

            wagePcm() {

                // (((Hours_pd x Days_pw) x 52) /12) x Basic_wage
                return (((this.employee.hours_pd * this.employee.days_pw) * 52) / 12) * this.employee.basic_wage;
            },

            daysPcm() {
                // how is working days pcm calculated?
            },

            commissionTarget() {
                // Wage PCM x Target Multiplier
                return this.wagePcm * this.employee.target_multiplier;
            },

            deductSick() {
                // ((Hours _PD x Basic_Wage) x Sick Days) - Wage PCM
                return ((this.emplyee.hours_pd * this.employee.basic_wage) * this.sick) - this.wagePcm;
            },

            // PRE BOOKED HOLS VALUE??

            finalTarget() {
                // (Commission Target / Number of working Days PCM) x (Number of working days PCM - pre booked Hols)
                
            },

            commissionAchieved() {
                // ((Services + (Products /2)  = Total Revenue

                // If Total Revenue is Greater than Final Target then 
                // ((Total Revenue - FINAL_TARGET) / 100) * Percentage_Return = commission achieved

                // If Total Revenue is Less Then show NULL

                var totalRev = ((this.services + (this.products / 2);

                if (totalRev > this.finalTarget) {
                   return ((totalRev - this.finalTarget) / 100) * this.employee.percentage_return;
                }

                return NULL; 
            },

            wage() {
                
            }
        
        }

    }
</script>