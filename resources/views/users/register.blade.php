<x-layouts.layout>

    <x-slot name=title>
        Add Users
    </x-slot>

    <div class="container m-5">
        <div class="row">
            <div class="col-md-12">
            
                @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4>Add Users
                            <a href="{{ url('users') }}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{url('users/register')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="mb-3">
                                <label for="firstName">First name:</label>
                                <input type="text" name="firstName" id="firstName" class="form-control" value="{{old('firstName')}}"></br>
                                @error('firstName') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>


                            <div class="mb-3">
                                <label for="lastName">Last name:</label>
                                <input type="text" name="lastName" id="lastName" class="form-control" value="{{old('lastName')}}"></br>
                                @error('lastName')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="username">Username:</label>
                                <input type="text" name="username" id="username" class="form-control" value="{{old('username')}}"></br>
                                @error('username')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="emailid">Email id:</label>
                                <input type="email" name="emailid" id="emailid" class="form-control" value="{{old('emailid')}}"></br>
                                @error('emailid')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="dob">DOB:</label>
                                <input type="date" name="dob" id="dob" class="form-control" value="{{old('dob')}}"></br>
                                @error('emailid')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="mobileNo">Mobile no:</label>
                                <input type="text" name="mobileNo" id="mobileNo" class="form-control" value="{{old('mobileNo')}}"></br>
                                @error('mobileNo')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password">Password:</label>
                                <input type="password" name="password" id="password" class="form-control" value="{{old('password')}}"></br>
                                @error('password')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="confirmPassword">Confirm password:</label>
                                <input type="password" name="confirmPassword" id="confirmPassword" class="form-control" value="{{old('confirmPassword')}}"></br>
                                @error('confirmPassword')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="image">Image:</label>
                                <input type="file" name="image" id="image" class="form-control" value="{{old('image')}}"></br>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary" value="submit">Submit</button>
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



<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dbconnection</title>
</head>

<body>
    <div class="container-sm">
        <form action="/user-details" method="POST">
            @csrf
            <h1>Register</h1>
            @if(session('success'))
            <h2>{{session('success')}}</h2>
            @endif
            <div class="mb-3">
                <label for="firstName">First name:</label>
                <input type="text" name="firstName" id="firstName" class="form-control" value="{{old('firstName')}}"></br>
                @error('firstName')
                <div>{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-2">
                <label for="lastName">Last name:</label>
                <input type="text" name="lastName" id="lastName" class="form-control" value="{{old('lastName')}}"></br>
                @error('lastName')
                <div>{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-2">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" class="form-control" value="{{old('username')}}"></br>
                @error('username')
                <div>{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-2">
                <label for="emailid">Email id:</label>
                <input type="email" name="emailid" id="emailid" class="form-control" value="{{old('emailid')}}"></br>
                @error('emailid')
                <div>{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-2">
                <label for="mobileNo">Mobile no:</label>
                <input type="text" name="mobileNo" id="mobileNo" class="form-control" value="{{old('mobileNo')}}"></br>
                @error('mobileNo')
                <div>{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-2">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control" value="{{old('password')}}"></br>
                @error('password')
                <div>{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-2">
                <label for="confirmPassword">Confirm password:</label>
                <input type="password" name="confirmPassword" id="confirmPassword" class="form-control" value="{{old('confirmPassword')}}"></br>
                @error('confirmPassword')
                <div>{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-2">
                <button type="submit" class="btn btn-primary" value="submit">Submit</button>
            </div>
        </form>
    </div>

</body>

</html> -->