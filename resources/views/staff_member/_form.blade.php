
			<div class="field">
				{!! Form::label('first_name', 'First Name', ['class' => 'label']) !!}
				<div class="control">
					{!! Form::text('first_name', '', ['class' => 'input']) !!}
				</div>
				{!! $errors->first('first_name', '<div class="errorMessage">:message</div>') !!}
			</div>

			<div class="field">
			{!! Form::label('last_name', 'Last Name', ['class' => 'label']) !!}
				<div class="control">
					{!! Form::text('last_name', '', ['class' => 'input']) !!}
				</div>
			{!! $errors->first('last_name', '<div class="errorMessage">:message</div>') !!}
			</div>

			
			<div class="field">
				{!! Form::label('birth_date', 'Birth Date', ['class' => 'label']) !!}
				<div class="control">
					{!! Form::text('birth_date', '', ['class' => 'input']) !!}
				</div>
				{!! $errors->first('birth_date', '<div class="errorMessage">:message</div>') !!}
			</div>

			<div class="field">
				{!! Form::label('salon', 'Salon', ['class' => 'label']) !!}
				<div class="control">
					{!! Form::select('salon', array(
						'Jakata' => 'Jakata',
						'PK' => 'PK'
						), ['placeholder' => 'Select Salon']) !!}
				</div>
				{!! $errors->first('salon', '<div class="errorMessage">:message</div>') !!}
			</div>

			<div class="field">
				{!! Form::label('position', 'Position', ['class' => 'label']) !!}
				<div class="control">
					{!! Form::text('position', '', ['class' => 'input']) !!}
				</div>
				{!! $errors->first('position', '<div class="errorMessage">:message</div>') !!}
			</div>

			<div class="field">
			{!! Form::label('holiday_entitlement', 'Holiday Entitlement', ['class' => 'label']) !!}
			<div class="control">
				{!! Form::text('holiday_entitlement', '', ['class' => 'input']) !!}
			</div>
			{!! $errors->first('holiday_entitlement', '<div class="errorMessage">:message</div>') !!}
			</div>

			<div class="field">
			{!! Form::label('basic_wage', 'Basic Wage', ['class' => 'label']) !!}
			<div class="control">
				{!! Form::text('basic_wage', '', ['class' => 'input']) !!}
			</div>
			{!! $errors->first('basic_wage', '<div class="errorMessage">:message</div>') !!}
			</div>

			<div class="field">
			{!! Form::label('hours_pd', 'Hours Per Day', ['class' => 'label']) !!}
			<div class="control">
				{!! Form::text('hours_pd', '', ['class' => 'input']) !!}
			</div>
			{!! $errors->first('hours_pd', '<div class="errorMessage">:message</div>') !!}
			</div>

			<div class="field">
			{!! Form::label('days_pw', 'Days Per Week', ['class' => 'label']) !!}
			<div class="control">
				{!! Form::text('days_pw', '', ['class' => 'input']) !!}
			</div>
			{!! $errors->first('days_pw', '<div class="errorMessage">:message</div>') !!}
			</div>

			<div class="field">
			{!! Form::label('target_multiplier', 'Target Multiplier', ['class' => 'label']) !!}
			<div class="control">
				{!! Form::text('target_multiplier', '', ['class' => 'input']) !!}
			</div>
			{!! $errors->first('target_multiplier', '<div class="errorMessage">:message</div>') !!}
			</div>

			<div class="field">
			{!! Form::label('percentage_return', 'Percentage Return', ['class' => 'label']) !!}
			<div class="control">
				{!! Form::text('percentage_return', '', ['class' => 'input']) !!}
			</div>
			{!! $errors->first('percentage_return', '<div class="errorMessage">:message</div>') !!}
			</div>


