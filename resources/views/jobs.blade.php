@extends('base')
@section('main')
<form action="/contacts-jobStore" method="post" enctype="multipart/form-data">
 @csrf
<div class="row">
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Person features</h4>

      </div>

      <div class="card-body">
          <div class="form-group">
            <label for="job">Job</label>
            <input type="text" name="job" class="form-control">
          </div>
          <div class="form-group">
            <label for="diploma">Diploma</label>
            <input class="form-control" type="text" name="diploma">
          </div>
          <div class="form-group">
            <label for="age">Age</label>
            <input class="form-control" name="age">
          </div>
          <button type="submit" class="btn btn-info">Add</button>
      </div>
      <div class="card">
      {{-- foreach ($contact->jobs as $job)
        
            echo $job->age;
        }  --}} 
        @foreach ($contact as $contacts)
        @foreach ($contacts->jobs as $jobl)
            <h1>{{$jobl->name}}</h1>
        @endforeach
        @endforeach
      </div>  
      </div>
    </div>
  <div class="col-md-6">
            <div class="card">
                <div class="form-group">
                    <select name="contact_id" class="form-control input-lg">
                        <option value="0" selected>Select Name</option>
                        @foreach($contact as $contacts)
                        <option value="{{($contacts->id)}}">{{$contacts->first_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="optionsValues">
                </div>
            </div>
        </div>
</div>    
</form>
@endsection
