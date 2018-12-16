<template>
    <div id="main" class="container">
        <h2 class="title">Jakata</h2>
        <table class="table">
            <tr>
                <th>Name</th>
                <th v-show="!show">Services</th>
                <th v-show="!show">Products</th>
                <th v-show="!show">Total Rev</th>
                <th v-show="!show">Extras</th>
                <th v-show="!show">Pre Booked Hols</th>
                <th v-show="!show">Sick Days</th>
                <th v-show="!show">Tips</th>
                <th v-show="!show">Wage</th>
                <th v-show="!show">Notes</th>
    
                <th v-show="show">Basic</th>
                <th v-show="show">Extras</th>
                <th v-show="show">Tips</th>
                <th v-show="show">Sick</th>
                <th v-show="show">Commission</th>
                <th v-show="show">Total</th>
                <th v-show="show">Notes</th>
            </tr>
            <staff-member v-for="(employee, index) in employees" :employee="employee" :show="show" v-if="employee.salon == 'Jakata'"></staff-member>
        </table>

        
        <h2 class="title">PK</h2>
        <table class="table">
            <tr>
                <th>Name</th>
                <th v-show="!show">Services</th>
                <th v-show="!show">Products</th>
                <th v-show="!show">Total Rev</th>
                <th v-show="!show">Extras</th>
                <th v-show="!show">Pre Booked Hols</th>
                <th v-show="!show">Sick Days</th>
                <th v-show="!show">Tips</th>
                <th v-show="!show">Wage</th>
                <th v-show="!show">Notes</th>
    
                <th v-show="show">Basic</th>
                <th v-show="show">Extras</th>
                <th v-show="show">Tips</th>
                <th v-show="show">Sick</th>
                <th v-show="show">Commission</th>
                <th v-show="show">Total</th>
                <th v-show="show">Notes</th>
            </tr>
            <staff-member v-for="(employee, index) in employees" :employee="employee" :show="show" v-if="employee.salon == 'PK'"></staff-member>
        </table>

        <button class="button is-primary" @click="toggleView">Toggle View</button>

        <download-csv
            class   = "button is-link"
            :data   = "json_data"
            :fields = "json_fields"
            type    = "csv"
            name    = "wages.csv">
         
            Download CSV
         
        </download-csv> 

    </div>
</template>

<script>
    import StaffMember from './StaffMemberComponent.vue';

    export default {

        components: {
            'staff-member': StaffMember
        },

        methods: {
            toggleView() {
                if(this.show === false) {
                    this.show = true;
                }
                else if(this.show === true) {
                    this.show = false;
                }
            }
        },

        data() {
            return {
                employees: [],
                show: false,
                json_fields: {
                    'Complete name': 'name',
                    'City': 'city',
                    'Telephone': 'phone.mobile',
                    'Telephone 2' : {
                        field: 'phone.landline',
                        callback: (value) => {
                            return `Landline Phone - ${value}`;
                        }
                    },
                },
                json_data: [
                    {
                        'name': 'Tony Peña',
                        'city': 'New York',
                        'country': 'United States',
                        'birthdate': '1978-03-15',
                        'phone': {
                            'mobile': '1-541-754-3010',
                            'landline': '(541) 754-3010'
                        }
                    },
                    {
                        'name': 'Thessaloniki',
                        'city': 'Athens',
                        'country': 'Greece',
                        'birthdate': '1987-11-23',
                        'phone': {
                            'mobile': '+1 855 275 5071',
                            'landline': '(2741) 2621-244'
                        }
                    }
                ],
                json_meta: [
                    [
                        {
                            'key': 'charset',
                            'value': 'utf-8'
                        }
                    ]
                ],
            }
        },

        mounted() {
            
            axios.get('/staffall').then(response => this.employees = response.data);

        }

    }
        
        
</script>