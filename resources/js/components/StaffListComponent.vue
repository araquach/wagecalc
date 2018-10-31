<template>
    <div id="main">
        <h1>Staff List</h1>
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Basic Wage</th>
                <th>Commission</th>
                <th>Total</th>
                <th>Services</th>
            </tr>
            <staff-member v-for="(person, index) in people" :person="person"></staff-member>
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
                people: [
                    { 
                        name: 'Adam',
                        age: 42,
                        basic: 1200,
                        commission: 500
                    },
                    {
                        name: 'Terry',
                        age: 53,
                        basic: 1000,
                        commission: 300
                    },
                    {
                        name: 'Graham',
                        age: 83,
                        basic: 600,
                        commission: 200
                    }
                ]
            }
        }

    }
        
        
</script>

<style scoped>

    #main {
        width: 800px;
        height: 300px;
        padding: 20px;
        background-color: grey;
    }

</style>