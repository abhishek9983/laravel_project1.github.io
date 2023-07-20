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
                        <label for="text" class="form-label"></label>
                        <input type="text" value="{{$edituser->name}}" class="form-control" id="name" name='name'>
                        @error('name')
                        <p style="color:red">
                            {{$message}}
                        </P>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="text" class="form-label">Position</label>
                        <input type="text" value="{{$edituser->position}}"class="form-control" id="position" name='position'>
                        @error('position')
                    <p style="color:red">
                      {{$message}}
                    </P>
                    @enderror
                    </div>
                   
                    <div class="mb-3">
                        <label for="text" class="form-label">About</label>
                        <input type="text" value="{{$edituser->about}}" class="form-control" id="about" name='about'>
                        @error('about')
                    <p style="color:red">
                      {{$message}}
                    </P>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="text" class="form-label">Slug</label>
                        <input type="text"value="{{$edituser->slug}}" class="form-control" id="slug" name='slug'>
                        @error('slug')
                    <p style="color:red">
                      {{$message}}
                    </P>
                    @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="file" class="form-label">Image</label>
                        <input type="file"  name='image' id="image">
                    </div>

                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
            </div>
        </div>

        @endsection