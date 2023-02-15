@extends('backend.layout.main')

@section('main_section')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Table</h3>
                            <p class="text-subtitle text-muted">For user to check they list</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Table</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
               
                <!-- Table head options start -->
                <section class="section">
                    <div class="row" id="table-head">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Table head options</h4>
                                </div>
                                <div class="card-content">
                                <form action="{{url('/manage_employee')}}">
                                    <!-- table head dark -->
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Name</th>
                                                    <th>Address</th>
                                                    <th>Mobile</th>
                                                    <th>Email</th>
                                                    <th>Gender</th>
                                                    <th>Language</th>
                                                    <th>Birthdate</th>
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($fetch as $d)
                                                <tr>
                                                    <td class="text-bold-500">{{$d->id}}</td>
                                                    <td>{{$d->name}}</td>
                                                    <td>{{$d->address}}</td>
                                                    <td>{{$d->mobile}}</td>
                                                    <td>{{$d->email}}</td>
                                                    <td>{{$d->gender}}</td>
                                                    <td>{{$d->language}}</td>
                                                    <td>{{$d->birthdate}}</td>
                                                    <td><img src="{{url('backend/assets/upload/'.$d->image)}}" width="50px" alt=""></td>
                                                    <td>
                                            <a href="edit_employee/{{$d->id}}" class="btn btn-primary rounded-pill" data-toggle="tooltip" data-original-title="Edit">
                                            Edit</a>
                                        
                                            <a href="delete_employee/{{$d->id}}" class="btn btn-danger rounded-pill" data-toggle="tooltip" data-original-title="Delete">
                                             Delete</a>
                                        
                                        </td>
    
                                                </tr>
                                            @endforeach
                                            
                                            
                                                {{ $fetch->onEachSide(5)->links()}}
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Table head options end -->
            </div>

@endsection