@extends('layouts.admin')
@section('title', 'Packages')
@section('content')
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Packages</h3>
              </div>

              <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Tracking Code</th>
                              <th>Created</th>
                              <th>Title</th>
                              <th>Status</th>
                              <th>Package Info</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($packages as $package)
                            <tr>
                              <td>{{$package->tracking_code}}</td>
                              <td>{{$package->created_at}}</td>
                              <td>{{$package->title}}</td>
                              <td><label class="badge badge-info">{{$package->status}}</label></td>
                              <td><a href="/admin/package?tracking_code={{$package->tracking_code}}" class="btn btn-primary">More details</a></td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                    </div>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
          <!-- content-wrapper ends -->
       
@endsection