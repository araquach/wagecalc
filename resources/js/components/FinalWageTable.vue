<template>
    <div id="main">
        <h2 class="title">Jakata</h2>
        <table class="table is-striped">
            <tr>
                <th>Name</th>
                <th>Basic</th>
                <th>Extras/Deductions</th>
                <th>Tips</th>
                <th>Pre Booked Hols</th>
                <th>Sick Days</th>
                <th>Commission</th>
                <th>Total</th>
                <th>Notes</th>
            </tr>
            <final-wage-ind v-for="(employee, index) in employees" :employee="employee" v-if="employee.salon == 'Jakata'"></final-wage-ind>
        </table>

        <h2 class="title">PK</h2>
        <table class="table is-narrow">
            <tr>
                <th>Name</th>
                <th>Basic</th>
                <th>Extras/Deductions</th>
                <th>Tips</th>
                <th>Pre Booked Hols</th>
                <th>Sick Days</th>
                <th>Commission</th>
                <th>Total</th>
                <th>Notes</th>
            </tr>
            <final-wage-ind v-for="(employee, index) in employees" :employee="employee" v-if="employee.salon == 'PK'"></final-wage-ind>
        </table>
    </div>
</template>

<script>
	import FinallWageInd from './FinalWageInd.vue';
    
    export default {

        components: {
        	'final-wage-ind' : FinalWageInd
        },

        data() {
            return {
                
            }
        },

        mounted() {

        }

    }
        
        
</script>