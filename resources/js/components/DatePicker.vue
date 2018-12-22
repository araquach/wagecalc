<template>
    <div class="field">
 
        <div class="control">
            <input type="text" class="input" name="birth_date">



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
		  
		mounted() {
		    const calendar = bulmaCalendar.attach(this.$refs.calendarTrigger, {
		      startDate: this.date,
		    })[0]
		    calendar.on('date:selected', e => (this.date = e.start || null))
		  },
		  
		computed: {
		    niceDate() {
		      if (this.date) {
		        return this.date.toLocaleDateString()
		      }
		    }
		  }

    }
        
        
</script>