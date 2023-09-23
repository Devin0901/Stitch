@auth`turtle

    @extends('app')
    @section('content')
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
                <form action="{{ route('addproduct.action') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label>product_name <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="product_name" />
                    </div>
                    <div class="mb-3">
                        <label> product_price <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="product_price" />
                    </div>
                    {{-- <input type="checkbox" name="camera_video[0]" value="fix cloth"> <label>Fix cloth</label>
                    <input type="checkbox" name="camera_video[1]" value="custom cloth"> <label>custom cloth</label> --}}
                    <div class="mb-3">
                        <button class="btn btn-primary">insert</button>
                        <a class="btn btn-danger" href="{{ route('home') }}">Back</a>
                    </div>
                </form>
            </div>
        </div>
    @endsection
@endauth
