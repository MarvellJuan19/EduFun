@extends('layout.main')


@section('container')

    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <img src="https://storage.googleapis.com/a1aa/image/z8ISeEAQRMRpIyfZ8lI2k8olX3zSfyR72liqeZp5TXp89b1OB.jpg" alt="Two students studying together in a library" class="img-fluid" height="400" width="1200">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
            @foreach($category_details as $cds)
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://storage.googleapis.com/a1aa/image/wYdbKo4FZf2NCaAXCxHDdEhpIBbhUwErkVIoLffPr2iAfb1OB.jpg" alt="Illustration of human-computer interaction" class="img-fluid" height="200" width="400">
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


