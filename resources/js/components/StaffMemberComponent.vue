<template>
	<tr>
		<td>{{ employee.first_name }} {{ employee.last_name }}</td>
	</tr>
</template>

<script> 

    export default {

    	props: ['employee']

    }
</script>