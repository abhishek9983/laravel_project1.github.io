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
                                                            <th scope="col"> tittle</th>
                                                            <th scope="col"> discreption</th>
                                                            <th scope="col">stutas</th>
                                                            <th scope="col">action</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($Users as $key=>$showdatas)
                                                        <tr>
                                                            <td>
                                                                {{$key+1}}
                                                            </td>
                                                            <td>{{$showdatas->tittle}}</td>
                                                            <td>{{$showdatas->discreption}}</td>
                                                            <td>
                                                                @if($showdatas->stutas=='1')
                                                                <a href="{{url('stutas-update/'.$showdatas->id)}}" class="btn btn-info">Active</a>
                                                                @else
                                                                <a href="{{url('stutas-update/'.$showdatas->id)}}" class="btn btn-danger">Inactive</a>
                                                                @endif
                                                            </td>
                                                           

                                                            <td>
                                                                <a href="{{url('editcmslist/'.$showdatas->id)}}" class="btn btn-info">Edit</a>
                                                                <a href="{{url('deletecms/'.$showdatas->id)}}" class="btn btn-danger ">Delete</a>

                                                            </td>

                                                        </tr>
                                                        @endforeach

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>


                                        @endsection