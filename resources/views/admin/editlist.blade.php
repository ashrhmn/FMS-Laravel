@extends('layout.app')

@section('content')



<table>

 <form action="edit" method="POST">
    {{@csrf_field()}}

    
    <b><p>Please fill in this form to Updated account.</p><b>

    <input type="hidden" name="id" value="{{$data->id}}">

<b>Username:</b><input type="text" name="username" value="{{$data->username}}" placeholder=""/></br>
@error('username')
<span>{{$message}}</span>
@enderror</br>

<b>Name:</b><input type="text" name="name" value="{{$data->name}}" placeholder=""/></br>
@error('name')
<span>{{$message}}</span>
@enderror</br>

<b>Email:</b><input type="email" name="email" value="{{$data->email}}"placeholder=""/></br>
@error('email')
<span>{{$message}}</span>
@enderror</br>

<b>Phone No:</b><input type="phone" name="phone" value="{{$data->phone}}" placeholder=""/></br>
@error('phone')
<span>{{$message}}</span>
@enderror</br>

<b>Date Of Birth:</b>   <input type="text" name="dob" value="{{$data->dob}}" placeholder=""/></br>
@error('dob')
<span>{{$message}}</span>
@enderror</br>

</span><b>Address:</b></label>
<input id="address" type="text" name="address" value="{{$data->address}}"/><br>
@error('address')
<span>{{$message}}</span>
@enderror</br>


<button type="submit" class="bg-blue-300 text-5xl text-center hover:bg-green-400">Updated</button>

</form>
</table>



@endsection
