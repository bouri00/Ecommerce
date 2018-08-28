@extends('layouts/MasterPage')
@section('content')
<div class="container">
<section id="breadcrumbs" class="breadcrumbbgimage">
<img src="files/1/0003/5812/1538/files/Untitled-1_c5a0ad7b-2894-41e7-a2ab-07fa8eb580240157.png?v=1519631815" alt=""> 
<div class="breadcrumbwrapper">
<div class="breadcrumbtitle">
        <h3>Contactez Nous :</h3>
      </div>
      <br><br>
      <nav>
        <ol class="breadcrumb">
          <li itemprop="itemlistelement">
            <a href="../index.html" title="Back to the frontpage" itemprop="item">
              <span itemprop="name">Accueil</span>
            </a>
            <meta itemprop="position" content="1" />
          </li>
          
          <li class="active" itemprop="itemlistelement" itemscope itemtype="#">
            <span itemprop="item"><span itemprop="name">Contact</span></span>
            <meta itemprop="position" content="2" />
          </li>
          
        </ol>
      </nav>
    
  </div>
</section>
</div>
<div id="shopify-section-template-contact" class="shopify-section"><div class="container page-contact">
  <div class="row">
    <div class="contact-form col-xs-12">
      <div class="wrap">
      <h2 class="page-title">Contactez Nous :</h2>
      <div class="contact-map-wrap">
      <div class="block-map">
        <div class="block-content">
     
         <iframe src="http://www.ma-carte-geographique.com/my-google-maps.php?SID=1459109731-VkTvv" width="250" height="300" frameborder="0" hspace="0" vspace="0" marginheight="0" marginwidth="0" scrolling="no"></iframe>
        
        </div>
      </div>
        
    </div>

    <form action="{{url('email')}}" metode="post">
      <div class="contact-form form-vertical">
       
         
        <div class="grid grid--half-gutters">
          <div class="grid__item medium-up--one-half">
            <label class="hidden" for="ContactFormName">Entrer Votre Nom et Prenom ...</label>
            <input type="text" id="ContactFormName" name="nom" placeholder="Entrer Votre Nom et Prenom ...">
          </div>
          <div class="grid__item medium-up--one-half">
            <label class="hidden" for="ContactFormEmail" class="">Entrer Votre Email...</label>
            <input type="email" id="ContactFormEmail" name="email" placeholder="Entrer Votre Email..." >
          </div>
        </div>
        <label class="hidden" for="ContactFormMessage"> Message</label>
        <input type="text" name="message" id="ContactFormMessage"  placeholder="Message">
      
      
              <button type="submit" class="button btn">Envoyer</button>
  
    </div>

        </form>	
      </div>	
    </div>  
    </div>
  <div class="info-contacts col-xs-12">
      <div class="store-info">
    <div class="row">
      
      
        <ul class="list-info">
          <li class="item-info main-info col-sm-4 col-xs-12 "><div class="icon-contact">
              <i class="fa fa-map-marker"></i>
            </div>
            <div class="info-content">
              
              <h2><a title="Main office" href="#">Adresse</a></h2>
              
              
              <div class="des-info">62 Rue IShak el Marouni ETG 1 Maarif 20000 Casablanca – Maroc </div>
            </div>
            
          </li>
          <li class="item-info email-info col-sm-4 col-xs-12 "><div class="icon-contact">
              <i class="fa fa-phone"></i>
            </div>
            <div class="info-content">
              
              <h2><a title="Main office" href="#">Telephone</a></h2>
              
              
              <div class="des-info">( +212 )4 567 890  -  ( +212 )4 567 899</div>
            </div>
            
          </li>
          <li class="item-info phone col-sm-4 col-xs-12 "><div class="icon-contact">
              <i class="fa fa-envelope"></i>
            </div>
            <div class="info-content">
              
              <h2>E-mail</h2>
              <div class="des-info">Mustafabouri@Gmail.com</div>
            </div>
            
          </li>

        </ul>
    </div>
  </div>     
</div>    
  </div>

</div>
<style>
  .main-content{
  	padding-bottom: 0 !important; 
  }
</style>
</div>
        </div>
        <div id="shopify-section-homepage-logolist" class="shopify-section home-section">

@endsection




