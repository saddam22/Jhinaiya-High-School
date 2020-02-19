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
 <form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data">
  @csrf
<h6 class="card-title">Add New Slide</h6>
<div class="template-demo">
<div class="mdc-layout-grid__inner">
<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
<div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon">
  <i class="material-icons mdc-text-field__icon">favorite</i>
  <input class="mdc-text-field__input" id="menu" name="title">
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
  <input class="mdc-text-field__input" id="menu" name="title_head">
  <div class="mdc-notched-outline">
    <div class="mdc-notched-outline__leading"></div>
    <div class="mdc-notched-outline__notch">
      <label for="text-field-hero-input" class="mdc-floating-label">Sub Title</label>
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
  <textarea rows="10" cols="5" class="mdc-text-field__input" name="title_para" placeholder="Enter Upcoming Events"></textarea>
  <div class="mdc-notched-outline">
    <div class="mdc-notched-outline__leading"></div>
    <div class="mdc-notched-outline__notch">
      <label for="text-field-hero-input" class="mdc-floating-label">Description</label>
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
  <input type="file" name="image" placeholder="Enter Photo">
</div>

</div>
</div>
</div><br>
 <a href="{{ route('slider.index') }}" class="btn btn-primary">Back</a>
  <button type="submit" class="btn btn-danger">Submit</button>
  </form>
</div>
</div>
</div>
</div>
@endsection
