@section('events')

      <!-- START THE FEATURETTES -->
    @foreach($events as $event)
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <h2 class="featurette-heading">{{$event->title}} <span class="text-muted">{{$event->summary}}</span></h2>
          <p class="lead">{{$event->description}}</p>
        </div>
        <div class="col-md-7">
          <img class="featurette-image img-responsive center-block" src="{{asset('storage/'.$event->file_name)}}" alt="Generic placeholder image">
        </div>
      </div>
@endforeach
{{$events->links()}}
      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->
@stop