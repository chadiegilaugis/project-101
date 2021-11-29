<!-- Firstname Field -->
<div class="col-sm-12">
    {!! Form::label('firstname', 'Firstname:') !!}
    <p>{{ $masterList->firstname }}</p>
</div>

<!-- Lastname Field -->
<div class="col-sm-12">
    {!! Form::label('lastname', 'Lastname:') !!}
    <p>{{ $masterList->lastname }}</p>
</div>

<!-- Age Field -->
<div class="col-sm-12">
    {!! Form::label('age', 'Age:') !!}
    <p>{{ $masterList->age }}</p>
</div>

<!-- Address Field -->
<div class="col-sm-12">
    {!! Form::label('address', 'Address:') !!}
    <p>{{ $masterList->address }}</p>
</div>

<!-- Contact Number Field -->
<div class="col-sm-12">
    {!! Form::label('contact_number', 'Contact Number:') !!}
    <p>{{ $masterList->contact_number }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $masterList->email }}</p>
</div>

