@extends('layouts.AdminApp')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">GAMBAR</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror"
                                    name="image">

                                <!-- error message untuk image -->
                                @error('image')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">JUDUL</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    name="title" value="{{ old('title') }}" placeholder="Masukkan Judul Post">

                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">EVENT</label>
                                <div id="eventContainer">
                                    @foreach ($events as $index => $event)
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="event"
                                                id="event{{ $index }}" value="{{ $event }}">
                                            <label class="form-check-label" for="event{{ $index }}">
                                                {{ $event }}
                                            </label>
                                        </div>
                                    @endforeach
                                    <button type="button" class="btn btn-sm btn-primary mt-2" id="addEvent">Tambah
                                        Event</button>
                                </div>

                                <!-- error message untuk event -->
                                @error('event')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">KONTEN</label>
                                <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="5"
                                    placeholder="Masukkan Konten Post" id="content">{{ old('content') }}</textarea>

                                <!-- error message untuk content -->
                                @error('content')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal for entering custom event name -->
    <div class="modal fade" id="customEventModal" tabindex="-1" role="dialog" aria-labelledby="customEventModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="customEventModalLabel">Tambah Event Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control" id="customEventName" placeholder="Nama Event Baru">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" id="confirmCustomEvent">OK</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content');
        var eventCounter = {{ count($events) }};

        $(document).on('click', '#addEvent', function() {
            $('#customEventModal').modal('show');
        });

        $(document).on('click', '#confirmCustomEvent', function() {
            var customEventName = $('#customEventName').val().trim();

            if (customEventName !== '') {
                var eventHTML = `
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="event" id="event${eventCounter}" value="${customEventName}">
                        <label class="form-check-label" for="event${eventCounter}">
                            ${customEventName}
                        </label>
                    </div>
                `;

                $(eventHTML).insertBefore('#addEvent');
                eventCounter++;

                $('#customEventModal').modal('hide');
                $('#customEventName').val('');
            }
        });
    </script>
@endsection
