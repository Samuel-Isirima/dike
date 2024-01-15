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
                        <div class="col-md-12 grid-margin stretch-card">
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
                    </div>
                </div>
                <!-- content-wrapper ends -->
@endsection