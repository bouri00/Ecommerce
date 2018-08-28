
@extends('layouts/MasterPage')
@section('content')


<div class="container">

<div>
	

	<div class="page-cart">
      <h2 class="page-title">Panier </h2>
    </div>

    <form action="" method="" novalidate class="cart">
    
     <table>

        <thead class="cart__row cart__header">
           <th>Titre</th>
           <th>Description</th>
           <th>Image</th>
           <th>Prix</th>
           <th>Quantite</th>
          <th class="text-right">Total</th>
        </thead>
        <tbody>
            <tr class="cart__row border-bottom line1 cart-flex border-top">
            	<td>{{$paniers->titre}}</td>
            	<td class="cart__meta small--text-left cart-flex-item">
                <div class="list-view-item__title">
                  
                    {{$paniers->description}}
                  
                </div>
                <
              <td> <img src="<?php echo $paniers->imagePath; ?>" alt=""
                                   width="200px" height="80px"/></td>
               <td>{{$paniers->prix}}  $</td>
    
              </td>
        
              <td class="cart__update-wrapper cart-flex-item text-right">
                <a href="/cart/change?line=1&amp;quantity=0" class="btn btn--small btn--secondary cart__remove medium-up--hide">Supprimer</a>
                <div class="cart__qty">
                  <label for="updates_6844924264514:a6c819b69d2eb191ab94a1b882242d61" class="cart__qty-label">Quantity</label>
                  <input class="cart__qty-input" type="number" name="updates[]" id="updates_6844924264514:a6c819b69d2eb191ab94a1b882242d61" value="1" min="0" pattern="[0-9]*">
                </div>
                <input type="submit" name="update" class="btn btn--small cart__update medium-up--hide" value="Update">
              </td>
              <td class="text-right small--hide">
                

                <div>
                  <span class='money'>$34.00</span>
                </div>

                
              </td>
              <!--
              <td><p class="small--hide">
                <a href="/cart/change?line=1&amp;quantity=0" class="btn btn--small btn--secondary cart__remove">Modifier</a>
                </p></td>-->
            </tr>
          
        </tbody>
      </table>
           <footer class="cart__footer">
           	<div class="col-md-6 col-xs-12 medium-up--one-half cart-note">
              <label for="CartSpecialInstructions" class="cart-note__label small--text-center"></label>
            </div>
        <div class="row">
          <div class="col-md-6 col-xs-12 text-right small--text-center medium-up--one-half">
            <div>
              <span class="cart__subtotal-title">Montant :</span>
              <span class="cart__subtotal"><span class='money'>$34.00</span></span>
            </div>
            <br><br>

            <a href="{{url('collection')}}" class="btn btn--secondary cart__update cart__continue--large small--hide" >Continuer Achat</a>
              <a href="{{ url('getlogin/'.$paniers->id) }}" class="btn btn--secondary cart__update cart__continue--large small--hide" >Acheter</a>
          </div>
        </div>

      </footer>
      
</div>

</div>








@endsection