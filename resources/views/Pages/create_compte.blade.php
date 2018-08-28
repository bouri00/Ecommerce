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
              <span itemprop="name">Accueil</span>
            </a>
            <meta itemprop="position" content="1" />
          </li>
          
          <li class="active" itemprop="itemlistelement" itemscope itemtype="http://schema.org/ListItem">
            <span itemprop="item"><span itemprop="name">Inscription</span></span>
            <meta itemprop="position" content="2" />
          </li>
          
        </ol>
      </nav>
    
  </div>
</section>
</div>

<div class="container">
  <div class="wraper-inner">
    <div class="row">

      <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 form-vertical">
        <div class="formaccount formlogin">
        <form method="post" action="https://ss-clickboom.myshopify.com/account" id="create_customer" accept-charset="UTF-8"><input type="hidden" name="form_type" value="create_customer" /><input type="hidden" name="utf8" value="✓" />

          <h1 class="page-title">Cree Nouveau Compte </h1>
          <br>

          <label for="FirstName">Prenom :</label>
          <input type="text" name="customer[first_name]" id="FirstName"  autofocus>

          <label for="LastName">Nom :</label>
          <input type="text" name="customer[last_name]" id="LastName" >

          <label for="Email">Email :</label>
          <input type="email" name="customer[email]" id="Email" class=""  autocorrect="off" autocapitalize="off">

          <label for="CreatePassword">Mot de passe : </label>
          <input type="password" name="customer[password]" id="CreatePassword" class="">

          <p class="text-center cr_acc">
            <input type="submit" value="Valider" class="btn">
          </p>

        </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection