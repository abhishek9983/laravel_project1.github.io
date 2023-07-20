                                @extends('backend/defult')
                                @section('content')

                                <div class="container-fluid pt-4 px-4">
                                    <div class="row g-4">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9">
                                            <div class="bg-secondary rounded h-100 p-4">
                                                <h6 class="mb-4">Basic Table</h6>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col"> name</th>
                                                            <th scope="col">position</th>
                                                            <th scope="col">about</th>
                                                            <th scope="col">image</th>
                                                            <th scope="col">slug</th>
                                                            <th scope="col">Action</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($Users as $key=>$showdatas)
                                                        <tr>
                                                            <td>
                                                                {{$key+1}}
                                                            </td>

                                                            <td>{{$showdatas->name}}</td>
                                                            <td>{{$showdatas->position}}</td>
                                                            <td>{{$showdatas->about}}</td>
                                                            <td>
                                                                <img src="{{url('image/'.$showdatas->image)}}" class="rounded-circle" width="50px" height="50px">
                                                            </td>
                                                            <td>{{$showdatas->slug}}</td>



                                                            <td>
                                                                <a href="{{url('editTrainerslist/'.$showdatas->id)}}" class="btn btn-info">Edit</a>
                                                                <a href="{{url('deleteTrainers/'.$showdatas->id)}}" class="btn btn-danger ">Delete</a>

                                                            </td>



                                                        </tr>
                                                        @endforeach

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>


                                        @endsection