<template>
    <div id="main" class="container">
        <h2 class="title">Jakata</h2>
        <table class="table is-striped">
            <tr>
                <th>Name</th>
                <th v-if="!show">Services</th>
                <th v-if="!show">Products</th>
                <th v-if="!show">Total Rev</th>
                <th v-if="!show">Extras</th>
                <th v-if="!show">Pre Booked Hols</th>
                <th v-if="!show">Sick Days</th>
                <th v-if="!show">Tips</th>
                <th v-if="!show">Wage</th>
                <th v-if="!show">Notes</th>
    
                <th v-if="show">Basic</th>
                <th v-if="show">Extras</th>
                <th v-if="show">Tips</th>
                <th v-if="show">Sick</th>
                <th v-if="show">Commission</th>
                <th v-if="show">Total</th>
                <th v-if="show">Notes</th>
            </tr>
            <staff-member v-for="(employee, index) in employees" :employee="employee" :show="show" v-if="employee.salon == 'Jakata'"></staff-member>
        </table>

        <h2 class="title">PK</h2>
        <table class="table is-narrow">
            <tr>
                <th>Name</th>
                <th v-if="!show">Services</th>
                <th v-if="!show">Products</th>
                <th v-if="!show">Total Rev</th>
                <th v-if="!show">Extras</th>
                <th v-if="!show">Pre Booked Hols</th>
                <th v-if="!show">Sick Days</th>
                <th v-if="!show">Tips</th>
                <th v-if="!show">Wage</th>
                <th v-if="!show">Notes</th>
    
                <th v-if="show">Basic</th>
                <th v-if="show">Extras</th>
                <th v-if="show">Tips</th>
                <th v-if="show">Sick</th>
                <th v-if="show">Commission</th>
                <th v-if="show">Total</th>
                <th v-if="show">Notes</th>
            </tr>
            <staff-member v-for="(employee, index) in employees" :employee="employee" :show="show" v-if="employee.salon == 'PK'"></staff-member>
        </table>

        <button class="button" @click="toggleView">Toggle View</button>

    </div>
</template>

<script>
    import StaffMember from './StaffMemberComponent.vue';

    export default {

        components: {
            'staff-member': StaffMember
        },

        methods: {
            toggleView() {
                if(this.show == 'false') {
                    this.show = 'true';
                }

                this.show = 'false';
            }
        },

        data() {
            return {
                employees: [],
                show: false
            }
        },

        mounted() {
            
            axios.get('/staffall').then(response => this.employees = response.data);

        }

    }
        
        
</script>