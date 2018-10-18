<template>
     <div>

     <table>
         <tr v-for="item in items">
             <td>{{ item.name | Upper}}</td>
             <td>£{{ item.price }}</td>
         </tr>
     </table>

    </div>



</template>

<script>
    export default {
        
    	data () {

    		return {

    			items: [

                    {'name':'Ball', 'price': 5},
                    {'name':'Yoyo', 'price': 10},
                    {'name':'Bat', 'price': 20}

                ],

    		}

    	},

        methods: {

            testMethod() {

                

            }

        },

        filters: {
            Upper(value) {
                return value.toUpperCase();
            }
        },


		mounted() {
            console.log('Component mounted.')
        }
    }
</script>
