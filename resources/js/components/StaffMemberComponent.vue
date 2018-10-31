<template>
    <div>
	    <p>Name: {{ person.name }}, Age: {{ person.age }}</p>
	</div>
    
</template>

<script> 

    export default {

    	props: ['person']

    }
</script>