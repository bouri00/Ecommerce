@extends('layouts/MasterPage')
@section('content')





<div class="container">

<section class="main">
<div class="wrap row">

<div class="grid-x">
 <div class="cell medium-6 large-12">


    @if(isset($details))
    <h2>Resultat de recherche :</h2>
    <br><br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Description</th>
                <th>Image</th>
                <th>Prix</th>
                <th>Categories</th>
                <th>Détail</th>
               
            </tr>
        </thead>
        <tbody>

            @foreach($details as $user)
            <tr>
                <td>{{$user->titre}}</td>
                <td>{{$user->description}}</td>
                <!--<td>{{$user->imagePath}}</td>-->
                <td> <img src="<?php echo $user->imagePath; ?>" alt=""
                                   width="200px" height="80px"/></td>
                <td>{{$user->prix}}</td>
                <td>{{$user->id_cat}}</td>
                <td><a href="{{url('affiche/'.$user->id) }}"> Détail</a> </td>
                
            </tr>

            @endforeach
        </tbody>
    </table>
       @endif
     
 
</div>
</div>

</div>
</section>

</div>



















@endsection