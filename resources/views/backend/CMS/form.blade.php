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
                        <label for="tittle" class="form-label">Tittel</label>
                        <input type="tittle" class="form-control" id="tittle" name='tittle'>
                        @error('tittle')
                        <p style="color:red">
                            {{$message}}
                        </P>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="text" class="form-label">Discreption</label>
                        <input type="text" class="form-control" id="discreption" name='discreption'>
                        @error('discreption')
                        <p style="color:red">
                            {{$message}}
                        </P>
                        @enderror
                    </div>
                    


                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
            </div>
        </div>

        @endsection