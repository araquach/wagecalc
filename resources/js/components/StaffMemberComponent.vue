    <template>
        
        <td>{{ employee.first_name }} {{ employee.last_name }}</td>
        <td><input type="text" v-model="services.number"></td>
        <td><input type="text" v-model="products.number"></td>
                   
    </template>

    <script>
        export default {

            props:  {

                // employees: []

            },

            computed: {


            }
        }
    </script>