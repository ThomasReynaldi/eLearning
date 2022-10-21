@extends('layouts.app')

@section('content')
  <div class="page-body">      
  <!-- Link CSS-->           
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/calendar.css')}}">    
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/sweetalert2.css')}}">
  <!-- Container-fluid starts-->        
    <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          <h3>General</h3>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="https://laravel.pixelstrap.com/viho/dashboard">Home</a></li>
              <li class="breadcrumb-item">Widgets</li>
            <li class="breadcrumb-item active">General</li>
          </ol>
        </div>
        <div class="col-lg-6">
          <!-- Bookmark Start-->        
          <!-- Bookmark Ends-->
        </div>
      </div>
    </div>
</div>        
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card o-hidden border-0">
                        <div class="bg-warning b-r-4 card-body">
                            <div class="media static-top-widget">
                                <div class="align-self-center text-center"><i data-feather="clock"></i></div>
                                <div class="media-body">
                                    <span class="m-0">Jam Pelajaran</span>
                                    <h4 class="mb-0 counter">15</h4>
                                    <i class="icon-bg" data-feather="clock"></i>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card o-hidden border-0">
                        <div class="bg-primary b-r-4 card-body">
                            <div class="media static-top-widget">
                                <div class="align-self-center text-center"><i data-feather="layers"></i></div>
                                <div class="media-body">
                                    <span class="m-0">Sertifikat</span>
                                    <h4 class="mb-0 counter">15</h4>
                                    <i class="icon-bg" data-feather="layers"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card o-hidden border-0">
                        <div class="bg-warning b-r-4 card-body">
                            <div class="media static-top-widget">
                                <div class="align-self-center text-center"><i data-feather="list"></i></div>
                                <div class="media-body">
                                    <span class="m-0">Diklat Aktif</span>
                                    <h4 class="mb-0 counter">2</h4>
                                    <i class="icon-bg" data-feather="list"></i>
                                </div>
                            </div>                            
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card o-hidden border-0">
                        <div class="bg-primary b-r-4 card-body">
                            <div class="media static-top-widget">
                                <div class="align-self-center text-center"><i data-feather="target"></i></div>
                                <div class="media-body">
                                    <span class="m-0">Diklat Target</span>
                                    <h4 class="mb-0 counter">20</h4>
                                    <i class="icon-bg" data-feather="target"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 xl-50 col-sm-6 box-col-6">
                    <div class="card">
                        <div class="mobile-clock-widget">
                            <div class="bg-svg">
                                <svg class="climacon climacon_cloudLightningMoon" id="cloudLightningMoon" version="1.1" viewBox="15 15 70 70">
                                    <clippath id="moonCloudFillClipfill11">
                                        <path d="M0,0v100h100V0H0z M60.943,46.641c-4.418,0-7.999-3.582-7.999-7.999c0-3.803,2.655-6.979,6.211-7.792c0.903,4.854,4.726,8.676,9.579,9.58C67.922,43.986,64.745,46.641,60.943,46.641z"></path>
                                    </clippath>
                                    <clippath id="cloudFillClipfill19">
                                        <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
                                    </clippath>
                                    <g class="climacon_iconWrap climacon_iconWrap-cloudLightningMoon">
                                        <g clip-path="url(#cloudFillClip)">
                                            <g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud" clip-path="url(#moonCloudFillClip)">
                                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"></path>
                                            </g>
                                        </g>
                                        <g class="climacon_wrapperComponent climacon_wrapperComponent-lightning">
                                            <polygon class="climacon_component climacon_component-stroke climacon_component-stroke_lightning" points="48.001,51.641 57.999,51.641 52,61.641 58.999,61.641 46.001,77.639 49.601,65.641 43.001,65.641 "></polygon>
                                        </g>
                                        <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M59.999,65.641c-0.28,0-0.649,0-1.062,0l3.584-4.412c3.182-1.057,5.478-4.053,5.478-7.588c0-4.417-3.581-7.998-7.999-7.998c-1.602,0-3.083,0.48-4.333,1.29c-1.231-5.316-5.974-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,12c0,5.446,3.632,10.039,8.604,11.503l-1.349,3.777c-6.52-2.021-11.255-8.098-11.255-15.282c0-8.835,7.163-15.999,15.998-15.999c6.004,0,11.229,3.312,13.965,8.204c0.664-0.114,1.338-0.205,2.033-0.205c6.627,0,11.999,5.371,11.999,11.999C71.999,60.268,66.626,65.641,59.999,65.641z"></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div>
                                <ul class="clock" id="clock">
                                    <li class="hour" id="hour"></li>
                                    <li class="min" id="min"></li>
                                    <li class="sec" id="sec"></li>
                                </ul>
                                <div class="date f-24 mb-2" id="date"><span id="monthDay"></span><span id="year">, </span></div>
                                <div>
                                    <p class="m-0 f-14 text-light">Jakarta, Indonesia                                            </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-6 box-col-6">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Pie Chart</h5>
					</div>
					<div class="card-body apex-chart">
						<div id="piechart"></div>
					</div>
				</div>
			</div>                
            <div class="container-fluid calendar-basic">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div id="menu">
                          <div id="menu-navi">
                            <div class="menu-navi-left">
                              <button class="btn btn-primary move-today" type="button" data-action="move-today">Today</button>
                            </div>
                            <div class="render-range menu-navi-center" id="renderRange"></div>
                            <div class="menu-navi-right">
                              <button class="btn btn-primary" id="dropdownMenu-calendarType" type="button" data-bs-toggle="dropdown"><i id="calendarTypeIcon"></i><span id="calendarTypeName">Dropdown</span><i class="fa fa-angle-down"></i></button>
                              <ul class="dropdown-menu" role="menu">
                                <li role="presentation"><a class="dropdown-menu-title" role="menuitem" data-action="toggle-daily"><i class="fa fa-bars"></i>Daily</a></li>
                                <li role="presentation"><a class="dropdown-menu-title" role="menuitem" data-action="toggle-weekly"><i class="fa fa-th-large"></i>Weekly</a></li>
                                <li role="presentation"><a class="dropdown-menu-title" role="menuitem" data-action="toggle-monthly"><i class="fa fa-th"></i>Month</a></li>
                                <li role="presentation"><a class="dropdown-menu-title" role="menuitem" data-action="toggle-weeks2"><i class="fa fa-th-large"></i>2 weeks</a></li>
                                <li role="presentation"><a class="dropdown-menu-title" role="menuitem" data-action="toggle-weeks3"><i class="fa fa-th-large"></i>3 weeks</a></li>
                                <li class="dropdown-divider" role="presentation"></li>
                                <li role="presentation"><a role="menuitem" data-action="toggle-workweek">
                                    <input class="tui-full-calendar-checkbox-square" type="checkbox" value="toggle-workweek" checked=""><span class="checkbox-title"></span>Show weekends</a></li>
                                <li role="presentation"><a role="menuitem" data-action="toggle-start-day-1">
                                    <input class="tui-full-calendar-checkbox-square" type="checkbox" value="toggle-start-day-1"><span class="checkbox-title"></span>Start Week on Monday</a></li>
                                <li role="presentation"><a role="menuitem" data-action="toggle-narrow-weekend">
                                    <input class="tui-full-calendar-checkbox-square" type="checkbox" value="toggle-narrow-weekend"><span class="checkbox-title"></span>Narrower than weekdays</a></li>
                              </ul>
                              <div class="move-btn">
                                <button class="btn btn-primary move-day" type="button" data-action="move-prev"><i class="fa fa-angle-left" data-action="move-prev"></i></button>
                                <button class="btn btn-primary move-day" type="button" data-action="move-next"><i class="fa fa-angle-right" data-action="move-next"></i></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div id="lnb">
                          <div class="lnb-new-schedule">
                            <button class="btn lnb-new-schedule-btn btn-primary" id="btn-new-schedule" type="button" data-bs-toggle="modal">New schedule</button>
                          </div>
                          <div class="lnb-calendars" id="lnb-calendars">
                            <div class="lnb-calendars-d1" id="calendarList"></div>
                            <div class="lnb-calendars-item m-0 p-0">
                              <label>
                                <input class="tui-full-calendar-checkbox-square" type="checkbox" value="all" checked=""><span></span><strong>View all</strong>
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div id="right">
                          <div id="calendar"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
</div>                
    <!-- Container-fluid Ends-->
  </div>
     <!-- latest jquery-->
     <script src="{{asset ('assets/js/jquery-3.5.1.min.js')}}"></script>
<!-- feather icon js-->
<script src="{{asset ('assets/js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{asset ('assets/js/icons/feather-icon/feather-icon.js')}}"></script>
<!-- Sidebar jquery-->
<script src="{{asset ('assets/js/config.js')}}"></script>
<!-- Bootstrap js-->
<script src="{{asset ('assets/js/bootstrap/popper.min.js')}}"></script>
<script src="{{asset ('assets/js/bootstrap/bootstrap.min.js')}}"></script>
<!-- Plugins JS start-->
    
        <script src="{{asset('assets/js/prism/prism.min.js')}}"></script>
        <script src="{{asset('assets/js/clipboard/clipboard.min.js')}}"></script>
        <script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('assets/js/counter/counter-custom.js')}}"></script>
        <script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>
        <script src="{{asset('assets/js/datepicker/date-picker/datepicker.js')}}"></script>
        <script src="{{asset('assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
        <script src="{{asset('assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>
        <script src="{{asset('assets/js/owlcarousel/owl.carousel.js')}}"></script>
        <script src="{{asset('assets/js/general-widget.js')}}"></script>
        <script src="{{asset('assets/js/height-equal.js')}}"></script>
        <script src="{{asset('assets/js/tooltip-init.js')}}"></script>
    <!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="{{asset('assets/js/script.js')}}"></script>
	<script src="{{ asset('assets/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('assets/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('assets/js/chart/apex-chart/chart-custom.js') }}"></script>
    <script src="{{asset('assets/js/calendar/tui-code-snippet.min.js')}}"></script>
    <script src="{{asset('assets/js/calendar/tui-time-picker.min.js')}}"></script>
    <script src="{{asset('assets/js/calendar/tui-date-picker.min.js')}}"></script>
    <script src="{{asset('assets/js/calendar/moment.min.js')}}"></script>
    <script src="{{asset('assets/js/calendar/chance.min.js')}}"></script>
    <script src="{{asset('assets/js/calendar/tui-calendar.js')}}"></script>
    <script src="{{asset('assets/js/calendar/calendars.js')}}"></script>
    <script src="{{asset('assets/js/calendar/schedules.js')}}"></script>
    <script src="{{asset('assets/js/calendar/app.js')}}"></script>
    <script src="{{('assets/js/sweet-alert/sweetalert.min.js')}}"></script>
    <script src="{{('assets/js/sweet-alert/app.js')}}"></script>
    <script src="{{('assets/js/tooltip-init.js')}}"></script>
    <script src="{{asset('assets/js/notify/bootstrap-notify.min.js')}}"></script>
    <script src="{{asset('assets/js/notify/notify-script.js')}}"></script>
    <script src="{{asset('assets/js/tooltip-init.js')}}"></script>
    @endsection
