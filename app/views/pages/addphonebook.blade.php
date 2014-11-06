@extends('layout.default')
@section('content')
    <h3 class="uk-text-large">Add New Phonebook</h3>
   @if ($errors->has())
        <div class="uk-alert uk-alert-danger">
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach
        </div>
    @endif
        @if(Session::has('message'))
            <div class="uk-alert uk-alert-success">{{ Session::get('message') }}</div>
        @endif
    <form class="uk-form uk-form-horizontal" method="post" action="{{URL::to('phonebook/save')}}">
    <div class="uk-form-row">
        <label for="form-h-it" class="uk-form-label">Name</label>
        <div class="uk-form-controls">
            <input type="text" placeholder="full name" name="name" id="form-h-it" value="{{Input::old('name')}}">
        </div>
    </div>
     <div class="uk-form-row">
            <label for="form-h-it" class="uk-form-label">Gender</label>
            <div class="uk-form-controls">
                <select id="form-h-s" name="gender">
                   <option value="L">Laki laki</option>
                   <option value="P">Perempuan</option>
               </select>
            </div>
        </div>
   <div class="uk-form-row">
           <label for="form-h-it" class="uk-form-label">No Telp</label>
           <div class="uk-form-controls">
               <input type="text" placeholder="no telp" id="form-h-it" name="no_telp" value="{{Input::old('no_telp')}}">
           </div>
       </div>
    <div class="uk-form-row">
        <label for="form-h-t" class="uk-form-label">Address</label>
        <div class="uk-form-controls">
            <textarea placeholder="address" rows="5" cols="30" id="form-h-t" name="address">
                {{Input::old('address')}}
            </textarea>
        </div>
    </div>
    <div class="uk-form-row">
        <label for="form-h-t" class="uk-form-label">Email</label>
        <div class="uk-form-controls">
              <input type="text" placeholder="email"  name="email" id="form-h-it" value="{{Input::old('email')}}">
        </div>
    </div>
    <div class="uk-form-row">
        <label for="form-h-t" class="uk-form-label">Facebook</label>
        <div class="uk-form-controls">
             <input type="text" placeholder="facebook" name="facebook" id="form-h-it" value="{{Input::old('facebook')}}">
        </div>
    </div>
     <div class="uk-form-row">
            <label for="form-h-t" class="uk-form-label">Twitter</label>
            <div class="uk-form-controls">
                <input type="text" placeholder="twitter" name="twitter" id="form-h-it" value="{{Input::old('Twitter')}}">
            </div>
        </div>
    <button class="uk-button uk-button-success" type="submit">Save</button> <a class="uk-button uk-button-danger" href="{{URL::to('/')}}">back</a>
</form>
@endsection
