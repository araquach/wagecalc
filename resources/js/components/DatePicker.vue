<template>
    <div class="field">
 		<div class="control">
            <input type="text" class="input" name="birth_date" :value="changeDate()">
			<button ref='calendarTrigger' type='button'>Change</button>
        </div>
    </div>
</template>

<script>

	import bulmaCalendar from 'bulma-calendar/dist/js/bulma-calendar';
    
    export default {

        data() {
		    return {
		      date: '',
		    }
		  },

		methods: {

            changeDate() {
                if(this.value == '')
                return 'Hello';
            	else
            	return this.niceDate;
            }

        },
		  
		mounted() {
		    const calendar = bulmaCalendar.attach(this.$refs.calendarTrigger, {
		      startDate: this.date,
		    })[0]
		    calendar.on('date:selected', e => (this.date = e.start || null))
		  },
		  
		computed: {
		    niceDate() {
		      if (this.date) {
		        return this.date.toISOString().split('T')[0];
		      }
		      else {
		      	return 'Enter a Date';
		      }
		    }
		  }

    }
        
        
</script>