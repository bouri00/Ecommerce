 @extends('layouts/MasterPage')
 @section('content')      
<div class="container">
<section id="breadcrumbs" class="breadcrumbbgimage">
  
  <img src="{{asset('files/1/0003/5812/1538/files/Untitled-1_c5a0ad7b-2894-41e7-a2ab-07fa8eb580240157.png?v=1519631815')}}" alt=""> 
  
  <div class="breadcrumbwrapper">
      <nav>
        <ol class="breadcrumb" itemscope itemtype="#">
          <li itemprop="itemlistelement" itemscope itemtype="#">
            <a href="#" title="Back to the frontpage" itemprop="item">
              <span itemprop="name"> Accueil </span>
            </a>
            <meta itemprop="position" content="1" />
          </li>
          
          <li class="active" itemprop="itemlistelement" itemscope itemtype="#">
            <span itemprop="item"><span itemprop="name">Compte</span></span>
            <meta itemprop="position" content="2" />
          </li>
          
        </ol>
      </nav>
    
  </div>
</section>
</div>

<div class="container">
  <div class="wraper-inner">
    <h1 class="page-title">Connexion</h1>
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <div class="formaccount formlogin">
          <div class="alert alert-success" id="resetSuccess" style="display:none;">
            We&#39;ve sent you an email with a link to update your password.
          </div>
          <div id="CustomerLoginForm" class="form-vertical block">
            <form>
   
          <h3 class="block-title">Login</h3>

          

          <label for="CustomerEmail">Email</label>
          <input type="email" name="email" id="CustomerEmail" class="" autocorrect="off" autocapitalize="off" autofocus>

          
            <label for="CustomerPassword">Password</label>
            <input type="password" value="" name="password" id="CustomerPassword" class="">
          

         <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                              <a href="{{url('fact')}}">
                                Connécter
                              </a>
                                <a href="{{url('register')}}">
                                 <button type="submit" class="btn btn-primary">
                                    Register
                                </button></a>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
               </div>  
          </div>
        </div>
    </div>
  </div>
</div>
@endsection