@extends('layouts.admin')
@section('title', 'Package')
@section('content')
            <!-- partial -->
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            Are you sure you want to delete this package?
                        </div>
                        <div class="modal-footer">
                            <form action="{{route('admin.package.delete')}}" method="POST">
                                @csrf
                                <input type="hidden" name="tracking_code" value="{{$package->tracking_code}}">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success">Yes, Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal ends here -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title"> {{$package->title}} </h3>
                        <nav aria-label="breadcrumb">
                            <a class="btn btn-success" href="/admin/edit-package?ufier={{$package->id}}">Edit
                                Package <i class="mdi mdi-pen"></i></a>

                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Delete
                                Package <i class="mdi mdi-delete"></i></button>
                        </nav>
                    </div>
                    <style>
                        .text-black {
                            color: #2e2f36 !important;
                        }
                    </style>
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card mb-5">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row container-fluid">
                                                @foreach([
                                                    'tracking_code' => 'Tracking Code',
                                                    'title' => 'Title',
                                                    'description' => 'Description',
                                                    'status' => 'Status',
                                                    'mode' => 'Mode',
                                                    'sender_name' => 'Sender Name',
                                                    'sender_address' => 'Sender Address',
                                                    'sender_city' => 'Sender City',
                                                    'sender_state' => 'Sender State',
                                                    'sender_country' => 'Sender Country',
                                                    'sender_phone' => 'Sender Phone',
                                                    'sender_email' => 'Sender Email',
                                                    'recipient_name' => 'Recipient Name',
                                                    'recipient_address' => 'Recipient Address',
                                                    'recipient_city' => 'Recipient City',
                                                    'recipient_state' => 'Recipient State',
                                                    'recipient_country' => 'Recipient Country',
                                                    'recipient_phone' => 'Recipient Phone',
                                                    'type' => 'Type',
                                                    'net_weight' => 'Net Weight',
                                                    'gross_weight' => 'Gross Weight',
                                                    'quantity' => 'Quantity',
                                                ] as $key => $label)
                                                    <div class="form-group col-4">
                                                        <label>{{ $label }}</label>
                                                        <h4 class="text-black">{{ $package->$key }}</h4>
                                                    </div>
                                                @endforeach
                                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                <div class="col-md-12 col-lg-12">
                                    <div id="tracking-pre"></div>
                                    <div id="tracking">
                                        <div class="text-center tracking-status-intransit">
                                        <p class="tracking-status text-tight">TRACKING INFO</p>
                                        </div>
                                        <div class="tracking-list">
                                        <div class="tracking-item">
                                            <div class="tracking-icon status-intransit">
                                            <svg class="svg-inline--fa fa-shipping-fast fa-w-20" aria-hidden="true" data-prefix="fas" data-icon="shipping-fast" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M624 352h-16V243.9c0-12.7-5.1-24.9-14.1-33.9L494 110.1c-9-9-21.2-14.1-33.9-14.1H416V48c0-26.5-21.5-48-48-48H112C85.5 0 64 21.5 64 48v48H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h272c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H40c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h208c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h208c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H64v128c0 53 43 96 96 96s96-43 96-96h128c0 53 43 96 96 96s96-43 96-96h48c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zM160 464c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm320 0c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm80-208H416V144h44.1l99.9 99.9V256z"></path>
                                                </svg>
                                            </div>
                                            <div class="tracking-date">Aug 10, 2018<span>05:01 PM</span></div>
                                            <div class="tracking-content">DESTROYEDPER SHIPPER INSTRUCTION<span>KUALA LUMPUR (LOGISTICS HUB), MALAYSIA, MALAYSIA</span></div>
                                            <div class="mt-2">
                                            <a class="btn btn-success btn-xs pull-right">Edit</a> 
                                            <a class="btn btn-danger btn-xs">Delete</a>
                                                </div>
                                        </div>
                                        </div>
                                </div>
                                <div class="mt-2">
                                    <a class="btn btn-success btn-xs pull-right" href="{{route('admin.transit.create',['package_id' => $package->id])}}">Add transit</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
@endsection