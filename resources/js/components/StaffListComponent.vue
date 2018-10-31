<template>
    <div id="main">
        <h1>Staff List</h1>
        <table class="table">
            <tr>
                <th>Name</th>
            </tr>
            <staff-member v-for="(employee, index) in employees" :employee="employee"></staff-member>
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