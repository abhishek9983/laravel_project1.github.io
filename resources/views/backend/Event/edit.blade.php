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
                        <label for="text" class="form-label">Tittel</label>
                        <input type="text" value="{{$edituser->tittle}}" class="form-control" id="tittle" name='tittle'>
                        @error('tittle')
                        <p style="color:red">
                            {{$message}}
                        </P>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="text" class="form-label">ABOUT</label>
                        <input type="text" value="{{$edituser->about}}" class="form-control" id="about" name='about'>
                        @error('about')
                        <p style="color:red">
                            {{$message}}
                        </P>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="file" class="form-label">Image</label>
                        <input type="file" value="{{$edituser->image}}" name='image' id="image">
                    </div>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
            </div>
        </div>

        @endsection