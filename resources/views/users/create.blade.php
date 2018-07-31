@extends('users.templates.master')

@section('maincontent')
<div class="row">
	<div class="col">
		<h2 class="text-center">Add User</h2>
		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
		{!! Form::open(['id' => 'userAddForm', 'url' => '/users']) !!}
		<div class="form-group">
			{!! Form::label('name', 'Name') !!}
			{!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			Gender
			<div class="form-group">
				Male
				{!! Form::radio('gender', 'Male'); !!}
				Female
				{!! Form::radio('gender', 'Female'); !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('phone', 'Phone') !!}
			{!! Form::text('phone', null, ['class' => 'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email', 'Email') !!}
			{!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('preferred_mode_contact', 'Preferred Mode of Contact') !!}
			{!! Form::select('preferred_mode_contact', ['Email' => 'Email', 'Phone' => 'Phone'], null, ['placeholder' => 'Select Preferred Mode of Contact', 'class' => 'form-control', 'required']); !!}
		</div>

		<div class="form-group">
			{!! Form::label('address', 'Address') !!}
			{!! Form::text('address', null, ['class' => 'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('nationality', 'Nationality') !!}
			{!! Form::text('nationality', null, ['class' => 'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('date_of_birth', 'Date of Birth') !!}
			{!! Form::date('date_of_birth', null, ['class' => 'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('education', 'Education') !!}
			{!! Form::text('education', null, ['class' => 'form-control', 'required']) !!}
		</div>

		<div class="form-group text-right">
			{!! Form::submit('Add User', ['class' => 'btn btn-success']) !!}
		</div>
		{!! Form::close() !!}
	</div>
</div>
@endsection