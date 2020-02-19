@extends('back.master')

@section('back_title')
Jhinaiya High School
@endsection

@section('css_js')
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('back') }}/assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="{{ asset('back') }}/assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('back') }}/assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="{{ asset('back') }}/assets/vendors/jvectormap/jquery-jvectormap.css">
  <!-- End plugin css for this page -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="{{ asset('back') }}/assets/css/demo/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="{{ asset('back') }}/assets/images/favicon.png" />

@endsection

@section('main-content')
<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card p-0">
                  <h6 class="card-title card-padding pb-0">Manage Include School</h6>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>SL NO</th>
                          <th>Picture</th>
                          <th>Title</th>
                          <th>Address</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      	<?php $i = 0 ?>
                      	@foreach($include_school_message as $include_schools)
                        <tr>
                          <td>{{ ++$i }}</td>
                          <td><img src="{{ asset($include_schools->include_school_image) }}" width="60"></td>
                          <td>{{ $include_schools->include_school_title }}</td>
                          <td>{{ $include_schools->include_school_address }}</td>
                          <td>
                           <a href="" class="mdc-button mdc-menu-button mdc-button--raised">Edit</a>
                           <a href="" class="mdc-button mdc-menu-button mdc-button--raised">Delete</a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
          </div>
      </div>
  </main>
</div>
@endsection