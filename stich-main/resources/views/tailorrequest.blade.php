@auth


    @extends('app')
    @section('content')
        <div class="row">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Experience</th>
                        <th scope="col">address</th>
                        <th scope="col">phone_number</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($aplicant as $item)
                        <tr>
                            {{ $id = $item->user }}
                            <form action="/acceptedadmin/{{ $item->user_id }}" method="post">
                                @csrf
                                {{-- @method('PATCH') --}}
                                {{-- <th scope="row">1</th> --}}
                                <td>{{ $item->user_id }}</td>
                                <td>{{ $item->username }}</td>
                                <td>{{ $item->gender }}</td>
                                <td>{{ $item->experience }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->phone_number }}</td>
                                <td>{{ $item->email }}</td>
                                <td><button href="acceptedadmin/{{ $item->user_id }}" type="submit"
                                        class="btn btn-primary">Primary</button></td>


                            </form>
                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    @endsection
@endauth
