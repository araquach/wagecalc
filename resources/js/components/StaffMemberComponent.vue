<template>
	<tr>
		<td>{{ person.name }}</td>
	    <td>{{ person.age }}</td>
	    <td>{{ person.basic }}</td>
	    <td>{{ person.commission }}</td>
	    <td>{{ total }}</td>
	    <td><input type="text" v-model="services"></td>
	</tr>
</template>

<script> 

    export default {

    	props: ['person'],

    	data() {
    		return {
    			services: 0
    		}
    		
    	},

    	computed: {
    		total() {
    			return parseInt(this.person.basic) + parseInt(this.services);
    		}
    	}

    }
</script>