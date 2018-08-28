 @extends('layouts/MasterPage')
 @section('content')      
<div class="container">
<section id="breadcrumbs" class="breadcrumbbgimage">
  
  <img src="files/1/0003/5812/1538/files/Untitled-1_c5a0ad7b-2894-41e7-a2ab-07fa8eb580240157.png?v=1519631815" alt=""> 
  
  <div class="breadcrumbwrapper">
      <nav>
        <ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
          <li itemprop="itemlistelement" itemscope itemtype="http://schema.org/ListItem">
            <a href="../index.html" title="Back to the frontpage" itemprop="item">
              <span itemprop="name"> Accueil </span>
            </a>
            <meta itemprop="position" content="1" />
          </li>
          
          <li class="active" itemprop="itemlistelement" itemscope itemtype="http://schema.org/ListItem">
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
        <form method="" action="" id="customer_login" accept-charset="UTF-8">
          <input type="hidden" name="form_type" value="customer_login" />
          <input type="hidden" name="utf8" value="✓" />

          <h3 class="block-title">Login</h3>

          

          <label for="CustomerEmail">Email</label>
          <input type="email" name="customer[email]" id="CustomerEmail" class="" autocorrect="off" autocapitalize="off" autofocus>

          
            <label for="CustomerPassword">Password</label>
            <input type="password" value="" name="customer[password]" id="CustomerPassword" class="">
          

          <div class="submit">
            
              <p><a href="#recover" id="RecoverPassword">Forgot your password?</a></p>
            
             
            <input type="submit" class="btn" value="Connecter">
          </div>

        </form>
      </div>

      <div id="RecoverPasswordForm" class="hide">

        <div class="block">
          <h3 class="block-title">Reset your password</h3>
          <p>We will send you an email to reset your password.</p>
        </div>

        <div class="form-vertical">
          <form method="post" action="https://ss-clickboom.myshopify.com/account/recover" accept-charset="UTF-8"><input type="hidden" name="form_type" value="recover_customer_password" /><input type="hidden" name="utf8" value="✓" />

            

            
            

            <label for="RecoverEmail">Email</label>
            <input type="email" value="" name="email" id="RecoverEmail" class="input-full"autocorrect="off" autocapitalize="off">

            <div class="submit">
              <p>
                <input type="submit" class="btn" value="Submit">
              </p>

              <button type="button" id="HideRecoverPasswordLink" class="text-link">Cancel</button>
            </div>
          </form>
        </div>

      </div>
          
          
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="formaccount formlogin block">
          <h3 class="block-title">Créer un compte </h3>
          <div class="formcontent">
            <div class="registerdescription">
              <p>Inscrivez-vous pour un compte gratuit à Application Ecommerce. L'inscription est rapide et facile. Cela vous permet de commander depuis notre boutique. Pour commencer à magasiner, cliquez sur s'inscrir </p>
            </div>
            <div class="submit">
              <a class="btn default" href="http://localhost:90/inscription">
                <i class="fa fa-user-plus" aria-hidden="true"></i><span>créer Nouveau compte</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection