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
                    <td>{{ employee.first_name }}</td>
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

    			employees: [],

                products: '',

                services: '',

            }


        },

        methods: {

    

        },

        computed: {

            calcTotalRev(employee) {

                return parseInt(this.products) + parseInt(this.services);

            }

        },

		mounted() {
            
            axios.get('/staffall').then(response => this.employees = response.data);

        }
    }
</script>