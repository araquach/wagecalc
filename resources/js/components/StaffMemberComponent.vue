<template>
    <div>
	    <div v-for="person in people">
	    	<p>{{ person }}</p>
	    </div>
	</div>
    
</template>

<script> 

    export default {
        
    	data() {
    		return {
    			people: [
    				'adam', 'john', 'graham'
    			]
    		}
    	}

    }
</script>