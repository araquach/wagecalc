
			{!! Form::label('first_name', 'First Name') !!}
			{!! Form::text('first_name') !!}
			{!! $errors->first('first_name', '<div class="errorMessage">:message</div>') !!}

			{!! Form::label('last_name', 'Last Name') !!}
			{!! Form::text('last_name') !!}
			{!! $errors->first('last_name', '<div class="errorMessage">:message</div>') !!}

			{!! Form::label('birth_date', 'Birth Date') !!}
			{!! Form::text('birth_date') !!}
			{!! $errors->first('birth_date', '<div class="errorMessage">:message</div>') !!}

			{!! Form::label('salon', 'Salon') !!}
			{!! Form::select('salon', array(
				'Jakata' => 'Jakata',
				'PK' => 'PK'
				), ['placeholder' => 'Select Salon']) !!}
			{!! $errors->first('salon', '<div class="errorMessage">:message</div>') !!}

			{!! Form::label('position', 'Position') !!}
			{!! Form::text('position') !!}
			{!! $errors->first('position', '<div class="errorMessage">:message</div>') !!}

			{!! Form::label('holiday_entitlement', 'Holiday Entitlement') !!}
			{!! Form::text('holiday_entitlement') !!}
			{!! $errors->first('holiday_entitlement', '<div class="errorMessage">:message</div>') !!}

			{!! Form::label('basic_wage', 'Basic Wage') !!}
			{!! Form::text('basic_wage') !!}
			{!! $errors->first('basic_wage', '<div class="errorMessage">:message</div>') !!}

			{!! Form::label('hours_pd', 'Hours Per Day') !!}
			{!! Form::text('hours_pd') !!}
			{!! $errors->first('hours_pd', '<div class="errorMessage">:message</div>') !!}

			{!! Form::label('days_pw', 'Days Per Week') !!}
			{!! Form::text('days_pw') !!}
			{!! $errors->first('days_pw', '<div class="errorMessage">:message</div>') !!}

			{!! Form::label('target_multiplier', 'Target Multiplier') !!}
			{!! Form::text('target_multiplier') !!}
			{!! $errors->first('target_multiplier', '<div class="errorMessage">:message</div>') !!}

			{!! Form::label('commission_value', 'Commission Value') !!}
			{!! Form::text('commission_value') !!}
			{!! $errors->first('commission_value', '<div class="errorMessage">:message</div>') !!}


