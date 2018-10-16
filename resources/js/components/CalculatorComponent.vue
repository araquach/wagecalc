<template>
     <div>
        <h1>The Calculator</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Stylist</th>
                    <th>Services</th>
                    <th>Products</th>
                    <th>Total Rev</th>
                </tr>
            </thead>
            <tbody> 
                <tr v-for="employee in employees">
                    <td>{{ employee.name }}</td>
                    <td><input type="text" v-model="services"></td>
                    <td><input type="text" v-model="products"></td>
                    <td>{{ calcTotalRev }}</td>
                </tr>
            </tbody>
        </table>

    </div>
</template>

<script>
    export default {
        
    	data () {

    		return {

    			employees: [

                    { name : 'Matt', wage : 1300, multiplier : 20 },
                    { name : 'Adam', wage : 800, multiplier : 10 },
                    { name : 'Laura', wage : 1200, multiplier : 30 }

                ],


                products: '',

                services: '',

            }


        },

        methods: {

    

        },

        computed: {

            calcTotalRev() {

                return parseInt(this.products) + parseInt(this.services);

            }

        },

		mounted() {
            console.log('Component mounted.')
        }
    }
</script>