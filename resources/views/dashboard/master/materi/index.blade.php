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
            <h3>Materi Diklat</h3>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="home">Dashboard</a></li>
              <li class="breadcrumb-item">Kegiatan</li>
              <li class="breadcrumb-item active">Materi Diklat</li>
            </ol>
          </div>
          <div class="col-sm-6">
            <!-- Bookmark Start-->
            <div class="bookmark">
              <ul>
                <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top"
                    title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
                <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top"
                    title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top"
                    title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top"
                    title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                <li><a href="javascript:void(0)"><i class="bookmark-search" data-feather="star"></i></a>
                  <form class="form-inline search-form">
                    <div class="form-group form-control-search">
                      <input type="text" placeholder="Search..">
                    </div>
                  </form>
                </li>
              </ul>
            </div>
            <!-- Bookmark Ends-->
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <!-- <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-original-title="test"
              data-bs-target="#addThnAkademik">Add Materi Diklat</button> -->
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="display table table-bordered" id="basic-1">
                <thead>
                  <tr style="text-align: center">
                    <th style="width: 55px">No</th>                    
                    <th>Judul Materi</th>
                    <th>Penulis</th>
                    <th>Materi</th>
                    
                    <th>Status</th>
                    <!-- <th>Action</th> -->
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $a)
                    <tr style="text-align: center">
                      <td>{{ $loop->iteration }}</td>                      
                      <td ><a href="{{ $a['link']}}" target="_blank">{{ $a['nm_materi'] }}</a></td>
                      <td >{{ $a['nm_uploader'] }}</td>                                                        
                      <td><a href="www.google.com"target="_blank"><img src="{{asset('assets/images/qrflipp.png')}}"width="100"height="100"></a></td>
                      @if ($a['stts_materi'] == 'Active')
                        <td>
                          <span class="span badge rounded badge-success">
                            Sedang Aktif
                          </span>
                        </td>
                      @else
                        <td>
                          <span class="span badge rounded badge-danger">
                            Tidak Aktif
                          </span>
                        </td>
                      @endif
                      <!-- <td>
                        <form method="POST" action="thnakademik/delete/{{ $a['id_tahun'] }}">
                          @csrf
                          <a type="button" class="btn btn-primary btn-xs edit" data-bs-id="{{ $a->id_tahun }}"><i
                              class="fa fa-edit"></i></a>
                          <input name="_method" type="hidden" class="btn-primary btn-xs" value="DELETE">
                          <a type="submit" class="btn btn-danger btn-xs show_confirm"><i class="fa fa-trash"></i></a>
                        </form>
                      </td> -->
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- 
      <div class="col-sm-12 col-xl-6 xl-100">
                <div class="card height-equal">
                    <div class="card-header pb-0">
                        <h5>Tutorial Transisi</h5>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-pills" id="deskripsi" role="tablist">
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>    
                        <div class="dropdown-menu"><a class="dropdown-item" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a><a class="dropdown-item" href="#">Separated link</a></div>
                      </li>
                        <li class="nav-item">
                                <a class="nav-link active" id="pills-iconhome-tab" data-bs-toggle="pill" href="#pills-iconhome" role="tab" aria-controls="pills-iconhome" aria-selected="true"><i class="icofont icofont-ui-home"></i>Materi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-iconprofile-tab" data-bs-toggle="pill" href="#pills-iconprofile" role="tab" aria-controls="pills-iconprofile" aria-selected="false">
                                    <i class="icofont icofont-man-in-glasses"></i>Pengajar
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-iconcontact-tab" data-bs-toggle="pill" href="#pills-iconcontact" role="tab" aria-controls="pills-iconcontact" aria-selected="false">
                                    <i class="icofont icofont-contacts"></i>Pre-Test
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-iconfile-tab" data-bs-toggle="pill" href="#pills-iconcontact" role="tab" aria-controls="pills-iconfile" aria-selected="false">
                                    <i class="icofont icofont-file"></i>Materi
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content" id="deskripsiContent">
                            <div class="tab-pane fade show active" id="pills-iconhome" role="tabpanel" aria-labelledby="pills-iconhome-tab">
                              <p class="mb-0 m-t-30">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.It was popularised in the 1960s with the
                                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem IpsumIt was popularised in the 1960s with the
                                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publish It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
                              </p>
                              <br>
                                <a href="https://online.flippingbook.com/view/559602170/" class="fbo-embed" data-fbo-id="fa31f98629" data-fbo-ratio="3:2" data-fbo-lightbox="yes" data-fbo-width="100%" data-fbo-height="auto" data-fbo-version="1" style="max-width: 100%">Welcome Guide to FlippingBook Online</a><script async defer src="https://online.flippingbook.com/EmbedScriptUrl.aspx?m=redir&hid=559602170"></script>                                                                                            
                                <div class="card-body">
                            <iframe width="100%" height="357" src="https://www.youtube.com/embed/F7hepqqJu5U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              <img src="qrflipp.png" alt="">
                              </div>
                            </div>                                                     
                            <div class="tab-pane fade" id="pills-iconprofile" role="tabpanel" aria-labelledby="pills-iconprofile-tab">
                                <p class="mb-0 m-t-30">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.It was popularised in the 1960s with the
                                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem IpsumIt was popularised in the 1960s with the
                                    release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                </p>
                            </div>
                            <div class="tab-pane fade" id="pills-iconcontact" role="tabpanel" aria-labelledby="pills-iconcontact-tab">
                                <p class="mb-0 m-t-30">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.It was popularised in the 1960s with the
                                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem IpsumIt was popularised in the 1960s with the
                                    release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                </p>
                            </div>
                            <div class="tab-pane fade" id="pills-iconfile" role="tabpanel" aria-labelledby="pills-iconfile-tab">
                                <p class="mb-0 m-t-30">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.It was popularised in the 1960s with the
                                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem IpsumIt was popularised in the 1960s with the
                                    release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div> -->
                            </div>
  </div>
  @pushOnce('js')
    @include('dashboard.master.thnakademik.add')
    @include('dashboard.master.thnakademik.edit')
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
    <script>
      $('.show_confirm').click(function(e) {
        var form = $(this).closest("form");
        e.preventDefault();
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              swal("Poof! Your imaginary file has been deleted!", {
                icon: "success",
                // timer: 3000
              });
              form.submit();
            } else {
              swal("Your imaginary file is safe!", {
                icon: "info"
              });
            }
          })
      });
    </script>
    <script>
      @if (session()->has('success'))
        toastr.success(
          '{{ session('success') }}',
          'Wohoooo!', {
            showDuration: 300,
            hideDuration: 900,
            timeOut: 900,
            closeButton: true,
            newestOnTop: true,
            progressBar: true,
          }
        );
      @elseif (session()->has('error'))
        toastr.error(
          '{{ session('error') }}',
          'Whoops!', {
            showDuration: 300,
            hideDuration: 900,
            timeOut: 900,
            closeButton: true,
            newestOnTop: true,
            progressBar: true,
          }
        );
      @endif
    </script>
    <script>
      $(document).ready(function() {
        $('.edit').on("click", function(e) {
          e.preventDefault()
          var id = $(this).attr('data-bs-id');
          $.ajax({
            url: "/master/thnakademik/edit/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
              $('#id_tahun').val(data.id_tahun);
              $('#kd_tahun').val(data.kd_tahun);
              $('#nm_tahun').val(data.nm_tahun);
              $('#ket_tahun').val(data.ket_tahun);
              $('input[id="stts_tahun"][value="' + data.stts_tahun + '"]').prop('checked', true);
              $('#editThnAkademik').modal('show');
            }
          });
        });

        $('#update').on("click", function(e) {
          e.preventDefault()
          var id_tahun = $("#id_tahun").val();
          $.ajax({
            type: "PUT",
            data: $('#dataThnAkademik').serialize(),
            url: '/master/thnakademik/update/' + id_tahun,
            dataType: "json",
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
              toastr.success(
                data.success,
                'Wohoooo!', {
                  showDuration: 300,
                  hideDuration: 900,
                  timeOut: 900,
                  closeButton: true,
                  newestOnTop: true,
                  progressBar: true,
                  onHidden: function() {
                    window.location.reload();
                  }
                }
              );
            },
            error: function(data) {
              var errors = data.responseJSON.errors;
              var errorsHtml = '';
              $.each(errors, function(key, value) {
                errorsHtml += '<li>' + value[0] + '</li>';
              });
              toastr.error(errorsHtml, 'Whoops!');
            }
          });
        });
      });
    </script>
  @endPushOnce
@endsection
