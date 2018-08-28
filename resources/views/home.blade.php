

@extends('Layouts/MasterPage')

@section('content')
 <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-dashboard"></i>
               </div>
               <div class="header-title">
                  <h1>Admin Dashboard</h1>
                  <small>admin BigCom.</small>
                  <small>     
                    @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Accueil</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

</small>
                            
            </section>

 <section class="content">
               <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <div id="cardbox1">
                        <div class="statistic-box">
                           <i class="fa fa-user-plus fa-3x"></i>
                           <div class="counter-number pull-right">
                              <span class="count-number">11</span> 
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3> Active Client</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <div id="cardbox2">
                        <div class="statistic-box">
                           <i class="fa fa-user-secret fa-3x"></i>
                           <div class="counter-number pull-right">
                              <span class="count-number">4</span> 
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3>  Active Admin</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <div id="cardbox3">
                        <div class="statistic-box">
                           <i class="fa fa-money fa-3x"></i>
                           <div class="counter-number pull-right">
                              <i class="ti ti-money"></i><span class="count-number">965</span> 
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3>  Total Expenses</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <div id="cardbox4">
                        <div class="statistic-box">
                           <i class="fa fa-files-o fa-3x"></i>
                           <div class="counter-number pull-right">
                              <span class="count-number">11</span> 
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3> Running Projects</h3>
                        </div>
                     </div>
                  </div>
               </div>
     </section>
    <!-- Chart -->
                  <div class="col-sm-5 col-md-3">
                        <div class="panel-heading">
                           <div class="panel-title">
                           </div>
                        </div>
                        <div class="panel-body cht" >
                           <canvas id="doughutChart" height="300"></canvas>
                        </div>
                     
                  </div>




@endsection