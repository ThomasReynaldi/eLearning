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
            <h3>Jadwal Pengajar</h3>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Applications</a></li>
              <li class="breadcrumb-item">Menu</li>
              <li class="breadcrumb-item active">Jadwal Pengajar</li>
            </ol>
          </div>
          <div class="col-sm-6">
            <!-- Bookmark Start-->
            <!-- <div class="bookmark">
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
            </div> -->
            <!-- Bookmark Ends -->
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="col-sm-12">
        <div class="card">
          <!-- <div class="card-header">
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-original-title="test"
              data-bs-target="#addPengajar">Tambah Jadwal Pengajar</button>
          </div> -->
          <div class="card-body">
            <div class="table-responsive">
              <table class="display table table-bordered" id="basic-1">
                <thead>
                  <tr style="text-align: center">
                    <th style="width: 55px">No</th>
                    <th>NIP Pengajar</th>
                    <th>Nama Pengajar</th>
                    <th>Waktu Mulai</th>                    
                    <th>Waktu Sesesai</th>                    
                    <th>Status</th>                    
                    <!-- <th>Action</th> -->
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $a)
                    <tr style="text-align: center">
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $a['id_pengajar'] }}</td>
                      <td>{{ $a['nm_pengajar'] }}</td>
                      <td>{{ $a['wkt_mulai'] }}</td>
                      <td>{{ $a['wkt_akhir'] }}</td>
                      @if ($a['stts_pengajar'] == 'Active')
                        <td>
                          <span class="span badge rounded badge-success">
                            Active
                          </span>
                        </td>
                      @else
                        <td>
                          <span class="span badge rounded badge-danger">
                            Non Active
                          </span>
                        </td>
                      @endif
                      <!-- <td>
                        <form method="POST" action="pengajar/delete/{{ $a['id_pengajar'] }}">
                          @csrf
                          <a type="button" class="btn btn-primary btn-xs edit" data-bs-id="{{ $a->id_pengajar }}"><i
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
    </div>
  </div>
  @include('dashboard.master.pengajar.add')
  @include('dashboard.master.pengajar.edit')
  @pushOnce('js')
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('assets/js/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/form-validation-custom.js') }}"></script>
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
    <script type="text/javascript">
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
    
      $(document).ready(function() {
        $('.edit').on("click", function(e) {
          e.preventDefault()
          var id = $(this).attr('data-bs-id');
          $.ajax({
            url: "/master/pengajar/edit/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
              $('#id_pengajar').val(data.id_pengajar);
              $('#nm_pengajar').val(data.nm_pengajar);
              $('#wkt_mulai').val(data.wkt_mulai);
              $('#wkt_akhir').val(data.wkt_akhir);
              $('input[id="stts_pengajar"][value="' + data.stts_pengajar + '"]').prop('checked', true);
              $('#editPengajar').modal('show');
              console.log(data.stts_pengajar)
            }
          });
        });

        $('#update').on("click", function(e) {
          e.preventDefault()
          var id_pengajar = $("#id_pengajar").val();
          $.ajax({
            type: "PUT",
            data: $('#datapengajar').serialize(),
            url: '/master/pengajar/update/' + id_pengajar,
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

      $(function () {
        function processAjaxData(urlPath){
          window.history.pushState(null, null, urlPath);
        }

        function addModal() {
          let urlParams = new URLSearchParams(window.location.search);
          let isOpen = urlParams.has('modal-add-is-open');
          if (typeof isOpen === 'boolean' && isOpen === true) {
            console.log(typeof isOpen); // true
            let addpengajar = $('#addpengajar');
            addpengajar.modal('show');
            addpengajar.on('hidden.bs.modal', function (event) {
              processAjaxData('/master/pengajar');
            });
          }

        }

        addModal();
      });

    </script>
  @endPushOnce
@endsection
