@extends('layouts.app')


@section('content')   
   
   <!-- Jumbotron -->
     <div class="jumbotron">
            <h1>{{ $company->name}}</h1>
            <p class="lead">{{$company->description}}</p>
            {{-- <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p> --}}
          </div>
    <h3><u>Company Projects</u></h3>
    <br><br><br>
          <!-- Example row of columns -->
          <div class="container">
          <div class="row">
              @foreach($company->projects as $project)
            <div class="col-lg-4">
              <h2>{{$project->name}}</h2>
              <p>{{$project->description}}</p>
              <p><a class="btn btn-primary" href="/projects/{{$project->id}}" role="button">View details &raquo;</a></p>
            </div>
            @endforeach
          </div>
          </div>
    
          <!-- Site footer -->
          <footer class="footer">
            <p>&copy; Company 2017</p>
          </footer>
    
        </div> <!-- /container -->
    

        @endsection