<template>
    <div id="main">
        <h1>Staff List</h1>
        <staff-member></staff-member>
    </div>
</template>

<script>
    import StaffMember from './StaffMemberComponent.vue';

    export default {

        components: {
            'staff-member': StaffMember
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