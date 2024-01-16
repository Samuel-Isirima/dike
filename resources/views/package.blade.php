@extends('layouts.about')
@section('title', 'Package')

@section('content')
<section class="breadcrumb-wrapper" data-bg-image="assets/images/banner/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-title text-center">Package Tracking</h1>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="/">
                                    <span>Home</span>
                                </a>
                            </span>
                            >
                            <span>
                                <span> Services</span>
                            </span>
                            >
                            <span>
                                <span> Package Tracking</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========== breadcrumb End ==============-->
<div class="container mt-4">
    <h4 style="text-align: center;" class="py-4">{{$package? $package->title : " ! Package not found"}}</h4>
   <div class="row">

   @if($package)
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
                                                    'net_weight' => 'Net Weight (lbs)',
                                                    'gross_weight' => 'Gross Weight (lbs)',
                                                    'quantity' => 'Quantity',
                                                ] as $key => $label)
                                                    <div class="form-group col-4">
                                                        <label>{{ $label }}</label>
                                                        <p class="text-black">{{ $package->$key }}</p>
                                                    </div>
                                                @endforeach
                                                </div>
                                </div>
                            </div>
                        </div>
                        @endif

      <div class="col-md-12 col-lg-12">
         <div id="tracking-pre"></div>
         <div id="tracking">
            <div class="text-center tracking-status-intransit">
               <p class="tracking-status text-tight">TRACKING INFO</p>
            </div>
            <div class="tracking-list">
            @if(empty($transits))
            <p class="m-4">There is no tracking history for this package yet. Please contact your provider.</p>
            @else
            @foreach($transits as $transit)
               <div class="tracking-item">
                  <div class="tracking-icon status-intransit">
                  <svg class="svg-inline--fa fa-shipping-fast fa-w-20" aria-hidden="true" data-prefix="fas" data-icon="shipping-fast" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                           <path fill="currentColor" d="M624 352h-16V243.9c0-12.7-5.1-24.9-14.1-33.9L494 110.1c-9-9-21.2-14.1-33.9-14.1H416V48c0-26.5-21.5-48-48-48H112C85.5 0 64 21.5 64 48v48H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h272c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H40c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h208c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h208c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H64v128c0 53 43 96 96 96s96-43 96-96h128c0 53 43 96 96 96s96-43 96-96h48c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zM160 464c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm320 0c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm80-208H416V144h44.1l99.9 99.9V256z"></path>
                     </svg>
                  </div>
                  <div class="tracking-date " style="font-weight: bold">{{$transit->status}}</div>
                  <div class="tracking-content">
                     <div class="row">
                           <div class="col-12 mb-2">
                           {{$transit->description}}
                           </div>
                           <div class="col-6">
                     <span style="font-size: 16px">Depature</span>
                     <span style="font-weight: bold; font-size: 14px">{{$transit->depature_country}}, {{$transit->depature_state}}, {{$transit->depature_city}}</span>
                     <span>{{$transit->date_sent}}</span>
                     </div>
                     <div class="col-6">
                     <span style="font-size: 16px">Arrival</span>
                     <span  style="font-weight: bold; font-size: 14px"> {{$transit->arrival_country}}, {{$transit->arrival_state}}, {{$transit->arrival_city}} </span>
                     <span>{{$transit->expected_date_of_arrival}}</span>
                     </div>
                  </div>
                  </div>
                
               </div>
               @endforeach
               @endif
            </div>
         </div>
      </div>
   </div>
</div>


@endsection