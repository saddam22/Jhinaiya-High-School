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

<div class="mdc-layout-grid">
<div class="mdc-layout-grid__inner">
<div class="mdc-layout-grid__cell--span-12">
<div class="mdc-card">
{!! Form::open(['url'=>'/add/include_school', 'method'=>'post', 'enctype'=>'multipart/form-data']) !!}
<h6 class="card-title">Add Include School</h6>
<div class="template-demo">
<div class="mdc-layout-grid__inner">
<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
<div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon">
  <i class="material-icons mdc-text-field__icon">favorite</i>
  <input type="file" class="mdc-text-field__input" name="include_school_image">
  <div class="mdc-notched-outline">
    <div class="mdc-notched-outline__leading"></div>
    <div class="mdc-notched-outline__notch">
      <label for="text-field-hero-input" class="mdc-floating-label">Photo</label>
    </div>
    <div class="mdc-notched-outline__trailing"></div>
  </div>
</div>
</div>
</div>
</div><br>
<div class="template-demo">
<div class="mdc-layout-grid__inner">
<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
<div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon">
  <i class="material-icons mdc-text-field__icon">favorite</i>
  <input type="text" class="mdc-text-field__input" name="include_school_title">
  <div class="mdc-notched-outline">
    <div class="mdc-notched-outline__leading"></div>
    <div class="mdc-notched-outline__notch">
      <label for="text-field-hero-input" class="mdc-floating-label">Title</label>
    </div>
    <div class="mdc-notched-outline__trailing"></div>
  </div>
</div>
</div>
</div>
</div><br>
<div class="template-demo">
<div class="mdc-layout-grid__inner">
<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
<div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon">
  <i class="material-icons mdc-text-field__icon">favorite</i>
  <textarea rows="10" cols="5" class="mdc-text-field__input" name="include_school_address" placeholder="Enter Address"></textarea>
  <div class="mdc-notched-outline">
    <div class="mdc-notched-outline__leading"></div>
    <div class="mdc-notched-outline__notch">
      <label for="text-field-hero-input" class="mdc-floating-label">Address</label>
    </div>
    <div class="mdc-notched-outline__trailing"></div>
  </div>
</div>
</div>
</div>
</div>

<div class="menu-button-container">
<input type="submit" value="Submit" class="mdc-button mdc-menu-button mdc-button--raised">
</div>
{!! Form::close() !!}
</div>
</div>
</div>
</div>



@endsection
