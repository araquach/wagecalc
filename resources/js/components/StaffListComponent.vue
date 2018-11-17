<template>
    <div id="main" class="container">
        <h2 class="title">Jakata</h2>
        <table class="table is-striped">
            <tr>
                <th>Name</th>
                <th>Services</th>
                <th>Products</th>
                <th>Total Rev</th>
                <th>Extras</th>
                <th>Pre Booked Hols</th>
                <th>Sick Days</th>
                <th>Tips</th>
                <th>Wage</th>
                <th>Notes</th>
                <th class="hidden">Basic</th>
                <th class="hidden">Extras</th>
                <th class="hidden">Tips</th>
                <th class="hidden">Sick</th>
                <th class="hidden">Commission</th>
                <th class="hidden">Total</th>
                <th class="hidden">Notes</th>
            </tr>
            <staff-member v-for="(employee, index) in employees" :employee="employee" v-if="employee.salon == 'Jakata'"></staff-member>
        </table>

        <h2 class="title">PK</h2>
        <table class="table is-narrow">
            <tr>
                <th>Name</th>
                <th>Services</th>
                <th>Products</th>
                <th>Total Rev</th>
                <th>Pre Booked Hols</th>
                <th>Sick Days</th>
                <th>Tips</th>
                <th>Wage</th>
                <th>Notes</th>
            </tr>
            <staff-member v-for="(employee, index) in employees" :employee="employee" v-if="employee.salon == 'PK'"></staff-member>
        </table>

    </div>
</template>

<script>
    import StaffMember from './StaffMemberComponent.vue';

    export default {

        components: {
            'staff-member': StaffMember
        },

        data() {
            return {
                employees: []
            }
        },

        mounted() {
            
            axios.get('/staffall').then(response => this.employees = response.data);

        }

    }
        
        
</script>