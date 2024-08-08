<x-layouts.layout>

    <x-slot name=title>
        Edit
    </x-slot>

    <div class="container m-5">
        <div class="row">
            <div class="col-md-12">
            
                @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                
                <div class="card">
                    <div class="card-header">
                        <h4>Edit User
                            <a href="{{ url('users') }}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('users/'.$users->id.'/register') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                            <div class="mb-3">
                                <label for="firstName">First name:</label>
                                <input type="text" name="firstName" id="firstName" class="form-control" value="{{ $users->firstName }}"></br>
                                @error('firstName') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>


                            <div class="mb-3">
                                <label for="lastName">Last name:</label>
                                <input type="text" name="lastName" id="lastName" class="form-control" value="{{ $users->lastName}}"></br>
                                @error('lastName')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="username">Username:</label>
                                <input type="text" name="username" id="username" class="form-control" value="{{ $users->username }}"></br>
                                @error('username')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="emailid">Email id:</label>
                                <input type="email" name="emailid" id="emailid" class="form-control" value="{{ $users->emailid }}"></br>
                                @error('emailid')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="dob">DOB:</label>
                                <input type="date" name="dob" id="dob" class="form-control" value="{{old('dob')}}"></br>
                                @error('dob')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="mobileNo">Mobile no:</label>
                                <input type="text" name="mobileNo" id="mobileNo" class="form-control" value="{{ $users->mobileNo }}"></br>
                                @error('mobileNo')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="image">Image:</label>
                                <input type="file" name="image" id="image" class="form-control" value="{{old('image')}}"></br>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary" value="submit">Update</button>
                            </div>
                        </form>
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