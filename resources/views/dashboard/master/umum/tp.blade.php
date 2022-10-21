@extends('layouts.app')
@section('content')
  @pushOnce('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sweetalert2.css') }}">    
  @endPushOnce
  <div class="page-body">
    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <div class="col-sm-6">
            <h3>Tipografi</h3>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="home">Dashboard</a></li>
              <li class="breadcrumb-item">Menu umum</li>
              <li class="breadcrumb-item active">Materi Tipografi</li>
            </ol>
          </div>
          <div class="col-sm-6">
            <!-- Bookmark Start-->        
            <!-- Bookmark Ends-->
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-12 col-xl-6 xl-100">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>Tipografi</h5>
                  </div>
                  <div class="card-body">
                    <ul class="nav nav-pills nav-warning" id="pills-warning-tab" role="tablist">
                      <li class="nav-item"><a class="nav-link active" id="pills-warning-deskripsi-tab" data-bs-toggle="pill" href="#pills-warning-deskripsi" role="tab" aria-controls="pills-warning-deksripsi" aria-selected="true"><i class="icofont icofont-file"></i>Deskripsi</a></li>
                      <li class="nav-item"><a class="nav-link" id="pills-warning-ebook-tab" data-bs-toggle="pill" href="#pills-warning-ebook" role="tab" aria-controls="pills-warning-ebook" aria-selected="false"><i class="icofont icofont-book-alt"></i>E-Book</a></li>
                      <li class="nav-item"><a class="nav-link" id="pills-warning-video-tab" data-bs-toggle="pill" href="#pills-warning-video" role="tab" aria-controls="pills-warning-video" aria-selected="false"><i class="icofont icofont-ui-video-play"></i>Video</a></li>
                      <li class="nav-item"><a class="nav-link" id="pills-warning-audio-tab" data-bs-toggle="pill" href="#pills-warning-audio" role="tab" aria-controls="pills-warning-video" aria-selected="false"><i class="icofont icofont-file-audio"></i>Audio</a></li>
                    </ul>
                    <div class="tab-content" id="pills-warning-tabContent">
                      <div class="tab-pane fade show active" id="pills-warning-deskripsi" role="tabpanel" aria-labelledby="pills-warning-deskripsi-tab">
                        <p class="mb-0 m-t-30">Ini nantinya akan berisi deskripsi</p>
                      </div>
                      <div class="tab-pane fade" id="pills-warning-ebook" role="tabpanel" aria-labelledby="pills-warning-ebook-tab">
                      <div class="card-body">
                      <iframe style="width:900px;height:500px" src="https://online.fliphtml5.com/ljrpp/yhma/"  seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" ></iframe>
                      </div>
                      </div>
                      <div class="tab-pane fade" id="pills-warning-video" role="tabpanel" aria-labelledby="pills-warning-video-tab">
                        <h2>yt</h2>
                      </div>
                      <div class="tab-pane fade" id="pills-warning-audio" role="tabpanel" aria-labelledby="pills-warning-audio-tab">
                        <h2>nanti isi audio</h2>
                        <audio src="{{asset('assets/audio/horse.ogg')}}"controls></audio>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                            </div>
  </div>
  @pushOnce('js')
    
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('assets/js/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/form-validation-custom.js') }}"></script>
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
    <script type="text/javascript">
    <script src="{{ asset('assets/js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/theme-customizer/customizer.js') }}"></script>    
      @endPushOnce
@endsection
