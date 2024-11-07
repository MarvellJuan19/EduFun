@extends('layout.main')


@section('container')

<div class="container">
        <div class="profile d-flex align-items-center my-3">
            <img src="{{ asset($writer->image) }}" alt="" class="rounded-circle me-3">
            <div>
                <h2 class="m-0">{{ $writer->name }}</h2>
                <p class="m-0 text-muted">{{ $category->name }}</p>
            </div>
        </div>
        <div class="card mb-3 border-0 rounded-3">
            <div class="row g-0">
                @foreach($category_details as $cds)
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://storage.googleapis.com/a1aa/image/wYdbKo4FZf2NCaAXCxHDdEhpIBbhUwErkVIoLffPr2iAfb1OB.jpg" alt="" class="img-fluid" height="200" width="400">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{$cds->name}}</h5>
                                @php
                                  $writer = Str::words($cds->Category->writer->name, 1, '');
                                @endphp
                                <p class="card-text"><small class="text-muted">{{ $cds->created_at->format('j F Y') }} | by: {{ $writer }}</small></p>
                                @php
                                  $shortText = Str::words($cds->description, 12, '...');
                                @endphp
                                <p class="card-text">{!! $shortText !!}</p>
                                <a href="#" class="btn btn-primary">read more...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>

@endsection