
			<div class="field">
				{!! Form::label('first_name', 'First Name', ['class' => 'label']) !!}
				<div class="control">
					{!! Form::text('first_name', old(''), ['class' => 'input']) !!}
				</div>
				{!! $errors->first('first_name', '<div class="errorMessage">:message</div>') !!}
			</div>

			<div class="field">
			{!! Form::label('last_name', 'Last Name', ['class' => 'label']) !!}
				<div class="control">
					{!! Form::text('last_name', old('last_name'), ['class' => 'input']) !!}
				</div>
			{!! $errors->first('last_name', '<div class="errorMessage">:message</div>') !!}
			</div>

			
			<div class="field">
				{!! Form::label('birth_date', 'Birth Date', ['class' => 'label']) !!}
				<div class="control">
					{!! Form::text('birth_date', old('birth_date'), ['class' => 'input']) !!}
				</div>
				{!! $errors->first('birth_date', '<div class="errorMessage">:message</div>') !!}
			</div>

			<div class="field">
				{!! Form::label('salon', 'Salon', ['class' => 'label']) !!}
				<div class="control">
					{!! Form::select('salon', array(
						'Jakata' => 'Jakata',
						'PK' => 'PK'
						), old('salon'), ['placeholder' => 'Select Salon']) !!}
				</div>
				{!! $errors->first('salon', '<div class="errorMessage">:message</div>') !!}
			</div>

			<div class="field">
				{!! Form::label('position', 'Position', ['class' => 'label']) !!}
				<div class="control">
					{!! Form::select('position', array(
						'Junior' => 'Junior',
						'Junior Stylist' => 'Junior Stylist',
						'Graduate Stylist' => 'Graduate Stylist',
						'Stylist' => 'Stylist',
						'Stylist Adv' => 'Stylist Adv',
						'Senior Stylist' => 'Senior Stylist',
						'Senior Stylist Adv' => 'Senion Stylist Adv',
						'Director' => 'Director'

						), old('position'), ['placeholder' => 'Select Level']) !!}
				</div>
				{!! $errors->first('position', '<div class="errorMessage">:message</div>') !!}
			</div>

			<div class="field">
			{!! Form::label('holiday_entitlement', 'Holiday Entitlement', ['class' => 'label']) !!}
			<div class="control">
				{!! Form::text('holiday_entitlement', old('holiday_entitlement'), ['class' => 'input']) !!}
			</div>
			{!! $errors->first('holiday_entitlement', '<div class="errorMessage">:message</div>') !!}
			</div>

			<div class="field">
			{!! Form::label('basic_wage', 'Basic Wage', ['class' => 'label']) !!}
			<div class="control">
				{!! Form::text('basic_wage', old('basic_wage'), ['class' => 'input']) !!}
			</div>
			{!! $errors->first('basic_wage', '<div class="errorMessage">:message</div>') !!}
			</div>

			<div class="field">
			{!! Form::label('hours_pd', 'Hours Per Day', ['class' => 'label']) !!}
			<div class="control">
				{!! Form::text('hours_pd', old('hours_pd'), ['class' => 'input']) !!}
			</div>
			{!! $errors->first('hours_pd', '<div class="errorMessage">:message</div>') !!}
			</div>

			<div class="field">
			{!! Form::label('days_pw', 'Days Per Week', ['class' => 'label']) !!}
			<div class="control">
				{!! Form::text('days_pw', old('days_pw'), ['class' => 'input']) !!}
			</div>
			{!! $errors->first('days_pw', '<div class="errorMessage">:message</div>') !!}
			</div>

			<div class="field">
			{!! Form::label('percentage_return', 'Percentage Return', ['class' => 'label']) !!}
			<div class="control">
				{!! Form::text('percentage_return', old('percentage_return'), ['class' => 'input']) !!}
			</div>
			{!! $errors->first('percentage_return', '<div class="errorMessage">:message</div>') !!}
			</div>

			{!! Form::hidden('active', 1) !!}




