@extends('backend.layout.main')

@section('main_section')
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                     
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Manage Music</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                       
                                    </div>
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>Add Music</button>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Music Name</th>
                                                <th>Movie Name/ Album Name</th>
                                                <th>Music Company Name</th>
                                                <th>Singer Name</th>
                                                <th>Music Image</th>
                                                <th>Music File</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($fetch as $d)
                                        <tr class="spacer"></tr>
                                            <tr class="tr-shadow">
                                                <td> {{$d->id}} </td>
                                                <td>{{$d->music_name}}</td>
                                                <td>{{$d->movie_album}}</td>
                                                <td>{{$d->company_name}}</td>
                                                <td>{{$d->singer_name}}</td>
                                                <td><img src="{{url('backend/musicimg/'.$d->music_img)}}" width="50px" alt="">
                                                </td>
                                                <td><audio controls src="{{url('backend/music/'.$d->music_file)}}"></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                        
@endsection