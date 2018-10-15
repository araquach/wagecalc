<template>
    <h1>{{ staff.name }}</h1>
    <p>{{ staff.age }}</p>
</template>

<script>
    export default {
        
    	data () {

    		return {

    			staff: ["name":"Matt", "age":20, "salon":"Jakata"],

    			mesg: 'Hellooo'

    		}

    	},

		mounted() {
            console.log('Component mounted.')
        }
    }
</script>
