    @extends('app')
    @section('content')
        @auth

            <div class="row">
                <div class="col-md-6">
                    @if (session('success'))
                        <p class="alert alert-success">{{ session('success') }}</p>
                    @endif
                    @if ($errors->any())
                        @foreach ($errors->all() as $err)
                            <p class="alert alert-danger">{{ $err }}</p>
                        @endforeach
                    @endif
                    <form action="{{ route('tailor.action') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label>Starting Price <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="starting_price" value="1231232" />
                        </div>
                        <div class="mb-3">
                            <label> tailor experience <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="tailor_experience1" value="yuour" />
                        </div>
                        <input type="checkbox" name="camera_video[0]" value="fix cloth"> <label>Fix cloth</label>
                        <input type="checkbox" name="camera_video[1]" value="custom cloth"> <label>custom cloth</label>
                        <div class="mb-3">
                            <button class="btn btn-primary">Change</button>
                            <a class="btn btn-danger" href="{{ route('home') }}">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        @endsection
    @endauth
