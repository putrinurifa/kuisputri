@extends('layouts.app')
@section('content')
<br>    
        <div class="d-flex justify-content-center" style="position:relative; top:100px;">
            <div class="w-4/12 bg-white p-6 rounded-lg">
                <form action="" method="post">
                @csrf
                    <div class="mb-4">
                        <label for="name" class="sr-only">Name</label>
                        <input types="text" name="name" id="name" placeholder="Your Name"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name')border border-danger @enderror"  values="">
                    </div>
                    @error('name')
                        <div class="text-danger">
                            {{ $message}}
                        </div>
                    @enderror 
                    <div class="mb-4">
                        <label for="username" class="sr-only">Username</label>
                        <input types="text" name="username" id="username" placeholder="Username"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg  @error('username')border border-danger @enderror" values="">
                    </div>
                    @error('username')
                        <div class="text-danger">
                            {{ $message}}
                        </div>
                    @enderror 
                    <div class="mb-4">
                        <label for="email" class="sr-only">Email</label>
                        <input types="text" name="email" id="email" placeholder="Your Email"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg  @error('email')border border-danger @enderror" values="">
                    </div>
                    @error('email')
                        <div class="text-danger">
                            {{ $message}}
                        </div>
                    @enderror 
                    <div class="mb-4">
                        <label for="password" class="sr-only">Password</label>
                        <input types="password" name="password" id="password" placeholder="Choose a Password"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password')border border-danger @enderror" values="">
                    </div>
                    @error('password')
                        <div class="text-danger">
                            {{ $message}}
                        </div>
                    @enderror
                    <div class="mb-4">
                        <label for="password_confirmation" class="sr-only">Password Again </label>
                        <input types="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat Your Password "
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" values="">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary btn-lg">Register </button>
                    </div>
                </form>
            </div>
        </div>
<br>
@endsection