 @extends('layouts/MasterPage')
 @section('content')       

<div class="container">
<section id="breadcrumbs" class="breadcrumbbgimage">
<img src="files/1/0003/5812/1538/files/Untitled-1_c5a0ad7b-2894-41e7-a2ab-07fa8eb580240157.png?v=1519631815" alt=""> 
<div class="breadcrumbwrapper">
    
      <div class="breadcrumbtitle">
        <h3>Produit</h3>
      </div>
      <nav>
        <ol class="breadcrumb" itemscope itemtype="#">
          <li itemprop="itemlistelement" itemscope itemtype="#">
            <a href="#" title="Back to the frontpage" itemprop="item">
              <span itemprop="name">Accueil</span>
            </a>
            <meta itemprop="position" content="1" />
          </li>
          
          <li class="active" itemprop="itemlistelement" itemscope itemtype="#">
            <span itemprop="item"><span itemprop="name">Liste Produit</span></span>
            <meta itemprop="position" content="2" />
          </li>
        </ol>
      </nav>
    
  </div>
</section>
</div>

<div class="container">
  <h2 class="page-title hidden">Top Produit </h2>
</div>
<div id="shopify-section-template-hotdeal" class="shopify-section">
<div class="page-hotdeal">
  <div class="container">
    <div class="deal-image">
      <p>
        <img src="files/1/0003/5812/1538/files/new-years-eve-in-silver-and-gold_1650x350_crop_center_0cc39141-f6c4-4d66-9709-cdc4b533e3cd_1650x350_crop_center4c7e.jpg?v=1519886909" alt="" />
      </p>
    </div>
    
<ul>
    <div class="wrap ss-owl">
      <div id="filters" class="button-group ss-owl owl-carousel" 
           data-nav="false"  
           data-margin    ="10"
           data-column1 ="6" 
           data-column2 ="5" 
           data-column3 ="4" 
           data-column4 ="2" 
           data-column5 ="1">
      <li> <a href="#All">
       <button class="button is-checked" data-filter="*" id="#all">
          <span>Afficher Tout</span>
          
          <img class="ico-deal img-responsive" alt="" src="files/1/0003/5812/1538/files/show-all7837.png?v=1519886920" />
          
        </button></a></li> 
        <li>
          <a href="#Cam">
        <button class="button" data-filter=".camera">
          <span>Accessoire</span>
          
          <img class="ico-deal img-responsive" alt="" src="files/1/0003/5812/1538/files/deal-373b4.png?v=1519886942" />
          
        </button></a></li>
        <li>
          <a href="#ELCT">
        <button class="button" data-filter=".electronics">
          <span>Electronique</span>
          
          <img class="ico-deal img-responsive" alt="" src="files/1/0003/5812/1538/files/deal-10ed6.png?v=1519886956" />
          
        </button></a></li>
        <li>
          <a href="#SMRT">
        <button class="button" data-filter=".smartphone">
          <span>Smartphone</span>
          
          <img class="ico-deal img-responsive" alt="" src="files/1/0003/5812/1538/files/deal-2ed81.png?v=1519886972" />
          
        </button></a></li>
        
    <li>
    <a href="#PC">   <button class="button" data-filter=".laptop">
          <span>Pc-Portable</span>
          
          <img class="ico-deal img-responsive" alt="" src="files/1/0003/5812/1538/files/deal-4b0d4.png?v=1519886987" />
          
        </button></a> </li>
        
      <li>  
        <a href="#Jeu"><button class="button" data-filter=".game-box">
          <span>Jeux</span>
          
          <img class="ico-deal img-responsive" alt="" src="files/1/0003/5812/1538/files/deal-51176.png?v=1519886999" />
          
        </button></a>
      </li>
        
      </div>

</div>
</ul>


      <div class="products-listing grid row deals-grid">
        <div class="product-layout">
        
  @foreach($produits as $produit) 
   
                                    
              <div class="col-md-3 col-sm-4 col-xxs-6 product element-item transition frontpage electronics " data-category="frontpage">
              
<div class="product-item">
  <div class="product-item-container grid-view-item  ">
    <div class="left-block">
      <div class="product-image-container product-image">
        <a class="grid-view-item__link image-ajax" href="#">
        
         <img class="img-responsive" src="{{ $produit->imagePath }}" height="400px" width="150px" alt="">
               
          </a>
          {{$produit->description}}
                    
       
      </div>
      <br><br>
      <div class="wrap-label">
        
        <span class="label-product label-sale"><span class="hidden">{{ $produit->titre }}</span>
          -10%</span>
        
      </div>
               
      <div class="btn-button add-to-cart action">
         
       <a class="btn grl btn_df" href="{{ url('affiche/'.$produit->id) }}"  title="Add to cart"> Détail</a>
       </div>
    </div>
    </div>
      </div>

    </div>


      @endforeach
  
    </div>
      </div>
   





@endsection