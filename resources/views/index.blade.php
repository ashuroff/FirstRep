@extends('base')

@section('main')
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Contacts</h1>
        <div class="col-sm-12">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Job Title</td>
                    <td>City</td>
                    <td>Country</td>
                    <td colspan=2>Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($contact as $contacts)
                    <tr>
                    <td>{{$contacts->id}}</td>
                    <td>{{$contacts->first_name}} {{$contacts->last_name}}</td>
                    <td>{{$contacts->email}}</td>
                    <td>{{$contacts->job_title}}</td>
                    <td>{{$contacts->city}}</td>
                    <td>{{$contacts->country}}</td>
                    <td>
                    <a href="{{route('contacts.edit',$contacts->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                    <form action="{{route('contacts.destroy', $contacts->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                    </td>
                    </tr>
                @endforeach
                <div>
<a href="{{route('contacts.create')}}" style="margin: 19px" class="btn btn-primary">New Contact</a>    
</div> 

            </tbody>
        </table>
    </div>
</div>
@endsection