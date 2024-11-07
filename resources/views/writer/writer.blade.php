@extends('layout.main')


@section('container')
<div class="container my-5">
    <h2 class="fw-bold text-dark text-center mb-4">Our Writers:</h2>
    <div class="row justify-content-center">
        
        <div class="col-md-4 text-center mb-4">
            <div class="card border-0">
                <div class="card-body">
                @foreach ($writers as $w)
                  @foreach ($categories as $c)
                    @if($c->writer->id == $w->id)
                    <a href="{{ route('writer.detail', ['wid' => $w->id, 'cid'=>$c->id]) }}">
                    <img src="{{ asset($w->image) }}" class="rounded-circle mb-3" style="width: 150px; height: 150px;">
                    <h5>{{ $w->name }}</h5>
                    </a>
                    @endif
                  @endforeach
                @endforeach
              </div>
          </div>
    </div>
</div>
@endsection

