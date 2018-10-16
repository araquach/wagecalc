<template>
     <div>
        
        <h1 :class="className">Welcome to this calculator!</h1>

        <h2>{{ reversedMessage }}</h2>
        <ul>
            <li v-for="employee in employees" v-text="employee"></li>
        </ul>

        <input type="text" v-model="newEmployee">
        <button @click="addName">Add Name</button>

    </div>
</template>

<script>
    export default {
        
    	data () {

    		return {

    			message: 'Hello World',

                newEmployee: '',

                employees: [],

                className: 'red'

    		}

    	},

        methods: {

            addName() {

                this.employees.push(this.newEmployee);

                this.newEmployee = '';

            }

        },

        computed: {

            reversedMessage() {

                return this.message.split('').reverse().join('');

            }

        },

		mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style>

.red {
    color: red;
}

.blue {
    color: blue;
}

</style>
