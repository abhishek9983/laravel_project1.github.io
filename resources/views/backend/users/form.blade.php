@extends('backend/defult')
@section('content')

<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-3"></div>
        <div class="col-sm-8">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">laravel Form</h6>
                <form method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">name</label>
                        <input type="name" class="form-control" id="name" name='name'>
                        @error('name')
                    <p style="color:red">
                      {{$message}}
                    </P>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" name='email'id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                       
                    </div>
                    @error('email')
                    <p style="color:red">
                      {{$message}}
                    </P>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control"name='password' id="password">
                        @error('password')
                    <p style="color:red">
                      {{$message}}
                    </P>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="mobile" class="form-label">mobile</label>
                        <input type="mobile" class="form-control"name='mobile' id="mobile">
                        @error('mobile')
                    <p style="color:red">
                      {{$message}}
                    </P>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="address" class="form-control" name='address'id="address">
                        @error('address')
                    <p style="color:red">
                      {{$message}}
                    </P>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="IMG" class="form-label">Photo</label>
                        <input type="file"name='photo' id="photo">
                    </div>

                  
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
            </div>
        </div>

        @endsection