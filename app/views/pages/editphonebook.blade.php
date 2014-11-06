@extends('layout.default')
@section('content')
@if ($errors->has())
        <div class="uk-alert uk-alert-danger">
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach
        </div>
    @endif
    <h3 class="uk-text-large">Edit New Phonebook</h3>
    <form class="uk-form uk-form-horizontal" method="post" action="{{URL::to('phonebook/update')}}">
    <div class="uk-form-row">
        <label for="form-h-it" class="uk-form-label">Name</label>
        <div class="uk-form-controls">
            <input type="text" placeholder="full name" name="name" value="{{$phones->name}}" id="form-h-it">
            <input type="hidden" placeholder="full name" name="id" value="{{$phones->id}}" id="form-h-it">
        </div>
    </div>
     <div class="uk-form-row">
            <label for="form-h-it" class="uk-form-label">Gender</label>
            <div class="uk-form-controls">
                {{Form::select('gender', array('L' => 'Laki Laki', 'P' => 'perempuan'), $phones->gender)}}
            </div>
        </div>
   <div class="uk-form-row">
           <label for="form-h-it" class="uk-form-label">No Telp</label>
           <div class="uk-form-controls">
               <input type="text" placeholder="no telp" id="form-h-it" name="no_telp" value="{{$phones->no_telp}}">
           </div>
       </div>
    <div class="uk-form-row">
        <label for="form-h-t" class="uk-form-label">Address</label>
        <div class="uk-form-controls">
            <textarea placeholder="address" rows="5" cols="30" id="form-h-t" name="address">{{$phones->address}}</textarea>
        </div>
    </div>
    <div class="uk-form-row">
        <label for="form-h-t" class="uk-form-label">Email</label>
        <div class="uk-form-controls">
              <input type="text" placeholder="email"  name="email" id="form-h-it" value="{{$phones->email}}">
        </div>
    </div>
    <div class="uk-form-row">
        <label for="form-h-t" class="uk-form-label">Facebook</label>
        <div class="uk-form-controls">
             <input type="text" placeholder="facebook" name="facebook" id="form-h-it" value="{{$phones->facebook}}">
        </div>
    </div>
     <div class="uk-form-row">
            <label for="form-h-t" class="uk-form-label">Twitter</label>
            <div class="uk-form-controls">
                <input type="text" placeholder="twitter" name="twitter" id="form-h-it" value="{{$phones->twitter}}">
            </div>
        </div>
    <button class="uk-button uk-button-success" type="submit">Save</button> <a class="uk-button uk-button-danger" href="{{URL::to('/')}}">back</a>
</form>
@endsection
