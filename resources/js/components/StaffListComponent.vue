<template>
    <div id="main" class="container">
        <h2 class="title">Jakata</h2>
        <table class="table">
            <tr>
                <th>Name</th>
                <th v-show="!show">Services</th>
                <th v-show="!show">Products</th>
                <th v-show="!show">Total Rev</th>
                <th v-show="!show">Extras</th>
                <th v-show="!show">Pre Booked Hols</th>
                <th v-show="!show">Sick Days</th>
                <th v-show="!show">Tips</th>
                <th v-show="!show">Wage</th>
                <th v-show="!show">Notes</th>
    
                <th v-show="show">Basic</th>
                <th v-show="show">Extras</th>
                <th v-show="show">Tips</th>
                <th v-show="show">Sick</th>
                <th v-show="show">Commission</th>
                <th v-show="show">Total</th>
                <th v-show="show">Notes</th>
            </tr>
            <staff-member v-for="(employee, index) in employees" :employee="employee" :show="show" v-if="employee.salon == 'Jakata'"></staff-member>
        </table>

        
        <h2 class="title">PK</h2>
        <table class="table">
            <tr>
                <th>Name</th>
                <th v-show="!show">Services</th>
                <th v-show="!show">Products</th>
                <th v-show="!show">Total Rev</th>
                <th v-show="!show">Extras</th>
                <th v-show="!show">Pre Booked Hols</th>
                <th v-show="!show">Sick Days</th>
                <th v-show="!show">Tips</th>
                <th v-show="!show">Wage</th>
                <th v-show="!show">Notes</th>
    
                <th v-show="show">Basic</th>
                <th v-show="show">Extras</th>
                <th v-show="show">Tips</th>
                <th v-show="show">Sick</th>
                <th v-show="show">Commission</th>
                <th v-show="show">Total</th>
                <th v-show="show">Notes</th>
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
                if(this.show === false) {
                    this.show = true;
                }
                else if(this.show === true) {
                    this.show = false;
                }
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