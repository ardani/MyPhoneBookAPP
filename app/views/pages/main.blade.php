@extends('layout.default')
@section('content')
<div class="uk-margin">
@if(Auth::check())
    <a class="uk-button uk-button-success" href="{{URL::to('phonebook/add')}}">Add Phonebook</a>
    <div class="uk-grid">
        <div class="uk-width-10-10">
            <table class="uk-table uk-table-hover uk-table-striped uk-table-condensed">
                <caption>List Of Phonebook</caption>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Facebook</th>
                        <th>Twitter</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($phones as $phone)
                    <tr>
                        <td>{{$phone->name}}</td>
                        <td>{{$phone->no_telp}}</td>
                        <td>{{$phone->gender}}</td>
                        <td>{{$phone->email}}</td>
                        <td>{{$phone->facebook}}</td>
                        <td>{{$phone->twitter}}</td>
                        <td>{{$phone->address}}</td>
                        <td><a href="{{ URL::to('phonebook/edit', ['id' => $phone->id]) }}">Edit</a> |
                        <a href="{{ URL::to('phonebook/delete', ['id' => $phone->id]) }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@else
<div class="uk-grid">
        <div class="uk-width-10-10">
            <table class="uk-table uk-table-hover uk-table-striped uk-table-condensed">
                <caption>List Of Phonebook</caption>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Facebook</th>
                        <th>Twitter</th>
                        <th>Address</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($phones as $phone)
                    <tr>
                        <td>{{$phone->name}}</td>
                        <td>{{$phone->no_telp}}</td>
                        <td>{{$phone->gender}}</td>
                        <td>{{$phone->email}}</td>
                        <td>{{$phone->facebook}}</td>
                        <td>{{$phone->twitter}}</td>
                        <td>{{$phone->address}}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endif
 </div>
@endsection
