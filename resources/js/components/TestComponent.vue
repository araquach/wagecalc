<template>
     <div>

     <table class="table">
         <tr v-for="item in items">
             <td>{{ item.name }}</td>
             <td>£{{ item.price | Increase }}</td>
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
            },

            Increase(value) {
                return value + 200;
            }
        },


		mounted() {
            console.log('Component mounted.')
        }
    }
</script>
