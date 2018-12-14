@extends('layouts.app')

@section('content')
<div class="row">
      <div class="medium-12 large-12 columns">
        <h4>{{ $modify == 1 ? 'Modify Client' : 'New Client' }}</h4>
        <form action="{{ $modify == 1 ? route('update_clinte', [ 'client_id' => 1 ]) : route('create_client') }}" method="post">
          <div class="medium-4  columns">
            <label>Title</label>
            <select name="form[title]">
            @foreach( $titles as $title )
                          <option value="{{ $title }}" >{{ $title }}.</option>
            @endforeach
                        </select>
          </div>
          <div class="medium-4  columns">
            <label>Name</label>
            <input name="name" type="text">
          </div>
          <div class="medium-4  columns">
            <label>Last Name</label>
            <input name="lastName" type="text">
          </div>
          <div class="medium-8  columns">
            <label>Address</label>
            <input name="address" type="text">
          </div>
          <div class="medium-4  columns">
            <label>zip_code</label>
            <input name="zipCode" type="text">
          </div>
          <div class="medium-4  columns">
            <label>City</label>
            <input name="city" type="text">
          </div>
          <div class="medium-4  columns">
            <label>State</label>
            <input name="state" type="text">
          </div>
          <div class="medium-12  columns">
            <label>Email</label>
            <input name="email" type="text">
          </div>
          <div class="medium-12  columns">
            <input value="SAVE" class="button success hollow" type="submit">
          </div>
        </form>
      </div>
    </div>
@endsection