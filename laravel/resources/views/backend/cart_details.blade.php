@extends('backend.layout.main')

@section('main_section')
<div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">DataTables</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">DataTables</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Data Table</div>
                    </div>
                    <div class="ibox-body table-responsive">
                    <div style="overflow-x:auto;">
                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                            <tr>                            
                                <th>Cart Id</th>
                                <th>Product Name</th>
                                <th>Customer Name</th>
                                <th>Qty</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($fetch as $d)
                            <tr>                            
                                <td>{{$d->id}}</td>
                                <td>{{$d->prod_name}}</td>
                                <td>{{$d->name}}</td>
                                <td>{{$d->qty}}</td>                          
                            </tr>
                            @endforeach
                            </tbody>

                        </table>
</div>
                    </div>
                </div>
               
            </div>
               <!-- PAGE LEVEL PLUGINS-->
    
    <!-- PAGE LEVEL SCRIPTS-->
    
    @endsection