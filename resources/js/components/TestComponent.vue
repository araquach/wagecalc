<template>
     <div>

     <table class="table">
         <tr v-for="(item, i) in items">
             <td>{{ i + 1 }}</td>
             <td>{{ item.name }}</td>
             <td>£{{ item.price }}</td>
             <td>{{ item.colour }}</td>
         </tr>
     </table>

    </div>



</template>

<script>
    export default {
        
    	data () {

    		return {

    			items: [

                    {name:'Frizbee', price: 5, colour:'Red'},
                    {name:'Yoyo', price: 10, colour:'Green'},
                    {name:'Bat', price: 20, colour:'Blue'}

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
