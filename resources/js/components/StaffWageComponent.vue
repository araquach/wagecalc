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
                <p v-for="employee in employees"></p>
            </tbody>
        </table>

    </div>
</template>

<script>
    export default {
        
    	data () {

    		return {

    			employees: [],

            }


        },

		mounted() {
            
            axios.get('/staffall').then(response => this.employees = response.data);

        }
    }
</script>