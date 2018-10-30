<template>
    <div>
        <h1>Staff List</h1>
        <staff-member v-for="staffMember in staffMembers"></staff-member>
    </div>
</template>

<script>
    import StaffMember from './StaffMemberComponent.vue';

    export default {

        components: {
            'staff-member': StaffMember
        },
    
        data(){
            staffMembers: ['Adam', 'Matt', 'Jimmy']
        }

    }
        
        
</script>

<style scoped>

    div {
        width: 400px;
        height: 300px;
        background-color: green;
    }

</style>