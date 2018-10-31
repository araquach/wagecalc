<template>
    <div id="main">
        <h1>Staff List</h1>
        <staff-member v-for="(person, index) in people" :person="person"></staff-member>
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
                        age: 42 
                    },
                    {
                        name: 'Terry',
                        age: 53
                    },
                    {
                        name: 'Graham',
                        age: 83
                    }
                ]
            }
        }

    }
        
        
</script>

<style scoped>

    #main {
        width: 400px;
        height: 300px;
        padding: 20px;
        background-color: green;
    }

</style>