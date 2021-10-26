
<!-- WELCOME PAGE -->

@extends('./layouts/layout')

@section('content')

<section class="addSearch">
       <div class="addSearch__box">

             <div class="addSearch__box--1">
                   <ion-icon name="business-outline"></ion-icon>
                   <div class="addSearch__btn-box">
                     <a href="/school/create" class="addSearch__link">Add School</a>
                     <p>Click to add school to the database</p>  
                   </div>

              </div>


              <div class="addSearch__box--1">
                   <ion-icon name="person-add-outline"></ion-icon>
                   <div class="addSearch__btn-box">
                     <a href="/members/create" class="addSearch__link">Add Member</a>
                     <p>Click to add members to the database</p>  
                   </div>

              </div>


              <div class="addSearch__box--1">
                   <ion-icon name="search-outline"></ion-icon>
                   <div class="addSearch__btn-box">
                     <a href="/members" class="addSearch__link">Search Members</a>  
                     <p>Click to search members in school</p>  
                   </div>
              </div>
       </div>
</section>

@endsection
