<x-layouts.layout>

    <x-slot name=title>
        users
    </x-slot>

    <div class="container m-5">
        <div class="row">
            <div class="col-md-12">
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4>Users
                            <a href="{{ url('users/register') }}" class="btn btn-primary float-end">Add Users</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <!-- {{ $users }} -->


                        <table class="table table-bordered table striped">
                            <thead>
                                <tr>
                                    <th>First name</th>
                                    <th>Last name</th>
                                    <th>Username</th>
                                    <th>Email id</th>
                                    <th>DOB</th>
                                    <th>Mobile no</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $items)
                                <tr>
                                    <td>{{ $items->firstName }}</td>
                                    <td>{{ $items->lastName }}</td>
                                    <td>{{ $items->username }}</td>
                                    <td>{{ $items->emailid }}</td>
                                    <td>{{ $items->DOB }}</td>
                                    <td>{{ $items->mobileNo }}</td>
                                    <td>
                                        <img src="{{ $items->image }}" style="width: 70px; height: 70px;" alt="Img">
                                    </td>
                                    <td>
                                        <a href="{{ url('users/'.$items->id.'/edit') }}"><i class="bi bi-pencil-square me-3" style="color: blue; font-size: 1.5rem;"></i></a>
                                        <a href="{{ url('users/'.$items->id.'/delete') }}" onclick="return confirm('Are you sure?')"><i class="bi bi-trash" style="color: blue; font-size: 1.5rem;"></i></a>
                                    </td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-slot name=scripts>
        <script>
            console.log('This is CRUD Operation');
        </script>
    </x-slot>

</x-layouts.layout>