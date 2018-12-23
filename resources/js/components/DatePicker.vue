<template>
    <div class="field">
 		<div class="control">
            <input type="text" class="input" name="birth_date" :value="niceDate">
			<button ref='calendarTrigger' type='button'>Change</button>
        </div>
    </div>
</template>

<script>

	import bulmaCalendar from 'bulma-calendar/dist/js/bulma-calendar';
    
    export default {

        props: ['oldDate'],

        data() {
		    return {
		      date: ''
		    }
		  },
		  
		mounted() {
		    const calendar = bulmaCalendar.attach(this.$refs.calendarTrigger, {
		      startDate: this.date, showFooter: false
		    })[0]
		    calendar.on('date:selected', e => (this.date = e.start || null))
		  },
		  
		computed: {
		    niceDate() {
		      if (this.date) {
		        return this.date.toISOString().split('T')[0];
		      }
		      else {
		      	return this.oldDate;
		      }
		    }
		  }
    }
        
        
</script>