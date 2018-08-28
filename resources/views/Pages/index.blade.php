@extends('layouts/MasterPage')
@section('content')
<div id="shopify-section-1516423038516" class="shopify-section home-section">
<link href="files/1/0003/5812/1538/t/3/assets/ss_sliderfb1d.css?10581966032365022831" rel="stylesheet" type="text/css" media="all" />
<script src="files/1/0003/5812/1538/t/3/assets/jquery.themepunch.tools.minfb1d.js?10581966032365022831" type="text/javascript"></script>
<script src="files/1/0003/5812/1538/t/3/assets/jquery.themepunch.revolution.minfb1d.js?1519271477" type="text/javascript"></script>
<div class="widget-slideshow widget-slideshow1">
  <div class="container-full">
    <div class="col-slider">    
        <div class="tp-banner-container" data-section-id="1516423038516" data-section-type="slideshow-section" style="visibility: hidden; opacity: 0;">
        <span class="slider-preload" style="display: block;"></span>
        
         <div class="tp-banner-1516423038516" data-speed="5000">
          @foreach($pros as $pro)  
          <ul>
            <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-link="#" data-target="_blank">
              <img src="files/1/0003/5812/1538/files/img-1_x1024b2c8.png?v=1519271477" alt="" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="caption stb lfl "
                   data-x="700"
                   data-y="center"
                   data-offset="0"
                   data-speed="500"
                   data-start="800"
                   data-easing="Power4.easeOut"
                   data-endspeed="300"
                   data-endeasing="Power4.easeIn"
                   data-captionhidden="off"
                   style="z-index: 6">
                <div class="tp-caption-slide-1" style="color: #ffffff; font-size: 40px;"> {{$pro->titre}}</div>
                <div class="tp-caption-slide-2" style="color: #ffffff; font-size: 16px;">{{$pro->description}}</div>
              </div>
            </li>
            <li data-transition="fade" data-slotamount="2" data-masterspeed="1000" >
              <img src="files/1/0003/5812/1538/files/slider1_x10247685.png?v=1519271477" alt="" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="caption stb lfl "
                   data-x="700"
                   data-y="center"
                   data-offset="0"
                   data-speed="500"
                   data-start="800"
                   data-easing="Power4.easeOut"
                   data-endspeed="300"
                   data-endeasing="Power4.easeIn"
                   data-captionhidden="off"
                   style="z-index: 6">
                
                <div class="tp-caption-slide-1" style="color: #ffffff; font-size: 40px;">{{$pro->titre}} </div>
                <div class="tp-caption-slide-2" style="color: #ffffff; font-size: 16px;">{{$pro->description}}</div>
              </div>
            </li> 
            <li data-transition="fade" data-slotamount="3" data-masterspeed="1000" >
              <img src="files/1/0003/5812/1538/files/img-2_x1024ac64.png?v=1519271477" alt="" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="caption stb lfl "
                   data-x="700"
                   data-y="center"
                   data-offset="0"
                   data-speed="500"
                   data-start="800"
                   data-easing="Power4.easeOut"
                   data-endspeed="300"
                   data-endeasing="Power4.easeIn"
                   data-captionhidden="off"
                   style="z-index: 6">
                
                <div class="tp-caption-slide-1" style="color: #ffffff; font-size: 40px;"> {{$pro->titre}}</div>
                <div class="tp-caption-slide-2" style="color: #ffffff; font-size: 16px;"> {{$pro->description}}</div>

              </div>
            </li>
          </ul>

          @endforeach
          <div class="tp-bannertimer"></div>
        </div>
            
      </div>
    </div>
  </div>
</div>
  <script type="text/javascript">
    var revapi;
    jQuery(document).ready(function($) {
        $('.slider-preload').hide();
        $('.tp-banner-container').css({'visibility': 'visible', 'opacity': '1'});
        revapi = $('.tp-banner-1516423038516').revolution({
          delay:5000,
          startwidth: 1920,
          startheight:560,
          startWithSlide: 0,
          hideThumbs:10,
          fullWidth:"off",
          navigationType: "bullet",
          navigationStyle: "round",
          navigationArrows: "none",
          fullScreen: 'off',
          hideTimerBar: 'off'
        })
//       })
    })
  </script>
</div>
<div id="shopify-section-1515400925186" class="shopify-section home-section">
<div class="widget-services-v1 home-policy">
  <div class="container">
    <div class="services-inline">
      <h3 class="title-home hidden">Home Service</h3>
      <div class="row">
        <div class="policy policy0 col-md-3 col-sm-3 col-xxs-6 col-xs-12">
          <div class="policy_inner">
          
          <div class="service-ico">
              <i class="fa fa-truck"></i>
          </div>
           
          <div class="service-info">
            <h2 class="title">Livraison</h2>
            <p class="des">Service de Livraison</p>
          </div>
        </div>
        </div>
        <div class="policy policy1 col-md-3 col-sm-3 col-xxs-6 col-xs-12">
          <div class="policy_inner">
          
          <div class="service-ico">
              <i class="fa fa-money"></i>
          </div>
           
          <div class="service-info">
            <h2 class="title">Garantie d'argent</h2>
            <p class="des">30 jours de garantie de remboursement</p>
          </div>
        </div>
        </div>
        <div class="policy policy2 col-md-3 col-sm-3 col-xxs-6 col-xs-12">
          <div class="policy_inner">
          
          <div class="service-ico">
              <i class="fa fa-shield"></i>
          </div>
           
          <div class="service-info">
            <h2 class="title">Achats sécurisés</h2>
            <p class="des">Garantie de magasinage sécurisé</p>
          </div>
        </div>
        </div>
        <div class="policy policy3 col-md-3 col-sm-3 col-xxs-6 col-xs-12">
          <div class="policy_inner">
          
          <div class="service-ico">
              <i class="fa fa-gear"></i>
          </div>
           
          <div class="service-info">
            <h2 class="title">Support en ligne</h2>
            <p class="des">Nous suivons en ligne (24/24)</p>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div id="shopify-section-1519369977143" class="shopify-section home-section"><div class="home-banner home-banner1 banners">
  <div class="container">
    <div class="row">

      <div class="col-sm-4">
        <div class="banner-home banner-image">
          
          <a href="collections/smartphone.html" title="ss-clickboom">
            <img class="img-responsive" alt="ss-clickboom" src="files/1/0003/5812/1538/files/banner1-indexc6ec.png?v=1519370051" />
          </a>
        </div>
      </div>
      <div class="col-sm-8">
        <div class="row">
        <div class="col-sm-12">
          <div class="banner-home banner-image">
            
            <a href="collections/headphone.html" title="ss-clickboom">
              <img class="img-responsive" alt="ss-clickboom" src="files/1/0003/5812/1538/files/banner2-index42f9.png?v=1519370063" />
            </a>
            
          </div>
        </div>
        <div class="col-xs-6 full-xs">
          <div class="banner-home banner-image">
            
            <a href="collections.html" title="ss-clickboom">
              <img class="img-responsive" alt="ss-clickboom" src="files/1/0003/5812/1538/files/banner3-index210c.png?v=1519370077" />
            </a>
            
          </div>
        </div>
        <div class="col-xs-6 full-xs">
          <div class="banner-home banner-image">
            
            <a href="collections/electronics.html" title="ss-clickboom">
              <img class="img-responsive" alt="ss-clickboom" src="files/1/0003/5812/1538/files/banner4-index9464.png?v=1519370087" />
            </a>
            
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
<div id="shopify-section-1519360575022" class="shopify-section home-section">
<div class="widget-product-carousel  style1">
  <div class="container">
    
    <div class="widget-head">
    <h2> <div class="home-title"><span>Dernier</span>Produit</div></h2> 
    </div>
    
    <div class="products-listing grid">
      <div class="product-layout block-content">
        <div class="ss-carousel ss-owl">
          <div class="owl-carousel" 
               data-nav		="true" 
               data-margin		="30"
               data-autoplay	="false" 
               data-autospeed	="10000" 
               data-speed		="300"
               data-column1	="4" 
               data-column2	="3" 
               data-column3	="3" 
               data-column4	="2" 
               data-column5	="2">
     @foreach($derniers as $dernier)     

        <div class="item">
<div class="product-item">
  <div class="product-item-container grid-view-item   ">
   
    <div class="left-block">
      <div class="product-image-container product-image">
        <a class="grid-view-item__link image-ajax" href="">
          <img class="img-responsive" src="{{$dernier->imagePath}}" width="100px" height="150px" alt="" />
        </a>
        <ul class="swatch-list"></ul>
      </div>
        
      <div class="wrap-label">
      </div>
   
    </div>
    <div class="right-block">
      <div class="caption">
        <h4 class="title-product"><a class="product-name" href="">{{$dernier->titre}}</a></h4>
        <div class="price">
    <span class="visually-hidden">Regular price</span>
    <span class="price-new"><span class='money'>{{$dernier->prix}} $</span></span>
        </div>
      </div>

      <div class="btn-button add-to-cart action">

       <a class="btn grl btn_df" href="{{ url('affiche/'.$dernier->id) }}"  title="Add to cart"> Détail</a>

      </div>

    </div> 
 
   </div>
</div>   
  
  </div>
  @endforeach
        </div>
      </div>
    </div>
  </div>
   </div>
    </div>
  </div>





<!-- Feature product  -->



<div class="widget-product-carousel  style1">
  <div class="container">
    
    <div class="widget-head">
      <div class="home-title"><span>featured</span> products</div>
    </div>
    
    <div class="products-listing grid">
      <div class="product-layout block-content">
        <div class="ss-carousel ss-owl">
          <div class="owl-carousel" 
               data-nav		="true" 
               data-margin		="30"
               data-autoplay	="false" 
               data-autospeed	="10000" 
               data-speed		="300"
               data-column1	="4" 
               data-column2	="3" 
               data-column3	="3" 
               data-column4	="2" 
               data-column5	="2">
      
 @foreach($derniers as $value)             
<div class="item">
<div class="product-item" data-id="product-515478945858">
  <div class="product-item-container grid-view-item   ">
    <div class="left-block">
      <div class="product-image-container product-image">
        <a class="grid-view-item__link image-ajax" href="products/capicola-insirloin.html">
          <img class="img-responsive" src="{{$value->imagePath}}" alt="Capicola insirloin" />

        </a>

        <ul class="swatch-list"></ul>

      </div>

      
      <div class="wrap-label">
        
        
        <span class="label-product label-sale"><span class="hidden">Sale</span>
          -12%</span>
        
        
        <span class="label-product label-new">new</span>
        
      </div>

      <div class="button-link">       
        <div class="quickview-button">
          <a class="quickview iframe-link visible-lg btn_df" href="javascript:void(0)" data-variants_id="6844925182018" data-toggle="modal" data-target="#myModal" data-id="capicola-insirloin" title="Quick View"><i class="icons icon-magnifier"></i><span class="hidden-xs hidden-sm hidden-md">Quick View</span></a>
        </div>
        <div class="product-addto-links">
        
            <a class="btn btn_df wl btnProduct" href="account/login.html" data-toggle="tooltip" title="Add to wishlist">
                <i class="icons icon-heart"></i>
                <span class="hidden-xs hidden-sm hidden-md">Add to wishlist</span>
            </a>
        
    </div>
      </div>
    </div>
    <div class="right-block">
      <div class="caption">
        <div class="custom-reviews hidden-xs">          
          <span class="shopify-product-reviews-badge" data-id="515478945858"></span>          
        </div>
        <h4 class="title-product"><a class="product-name" href="products/capicola-insirloin.html">{{$value->titre}}</a></h4>
        <div class="price">
          <span class="visually-hidden">Regular price</span>
          <span class="price-new"><span class='money'>${{$value->prix}}</span></span>
          <span class="price-old"> <span class='money'>$98.00</span> </span>
            </div>
                 </div>
                    <div class="btn-button add-to-cart action  ">    
                      <form action="https://ss-clickboom.myshopify.com/cart/add" method="post" class="variants" data-id="              AddToCartForm-515478945858" enctype="multipart/form-data">   
                         <input type="hidden" name="id" value="6844925182018" />           
                         <a class="btn-addToCart grl btn_df" href="javascript:void(0)" 
                         title="Add to cart">
                          <i class="fafa-shopping-basket hidden"></i><span >Add to cart</span></a>
                      </form>  
                    </div>
                  </div> 
                </div>
              </div>          
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
            
            
             

            


<div align="center">
<div class="widget-head">
    <h2> <div class="home-title"><span>Nos   </span>  Partenaire</div></h2> 
    </div></div>
<br><br>
<div align="center">
        <div id="shopify-section-homepage-logolist" class="shopify-section home-section">
<div class="widget-logolist no-margin">
  <div class="container">
    <div class="wrap">
    
    <div class="home-title hidden">
      <h2>logo publicité</h2>
    </div>
    <div class="ss-carousel ss-owl logo-bars">
      <div class="product-layout owl-carousel" 
           data-nav     ="true" 
           data-margin    ="30"
           data-autoplay  ="true" 
           data-autospeed ="1000" 
           data-speed   ="300"
           data-column1   ="6" 
           data-column2   ="6" 
           data-column3   ="5" 
          >
    
        <div class="logo-item" >
          
          <a href="#" class="logo-bar__link">
            
            <img class="img-responsive" alt="ss-clickboom" src="files/1/0003/5812/1538/files/logo/iut2.jpg?v=1519288135" />
            
          </a>
        </div>
            <div class="logo-item">
          
          <a href="#" class="logo-bar__link">
            
            <img class="img-responsive" alt="ss-clickboom" src="files/1/0003/5812/1538/files/logo/ifiag.png?v=1519288145" />
            
          </a>
        </div>

        <div class="logo-item" >
          
          <a href="#" class="logo-bar__link">
            <img class="img-responsive" alt="ss-clickboom" src="files/1/0003/5812/1538/files/logo/itagency.png?v=1519288129" />
          </a>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
</div>
</div>
@endsection
