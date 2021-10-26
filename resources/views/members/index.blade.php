
<!-- Search members in a school -->

@extends('../layouts/layout')

@section('content')

<div class="form">
   <form action="./members/show" class="form__box">
   <h4 class="heading-4 p-2">Search for School Name</h4>
      <div class="form__field">
         <div class="form__input-box">
            <label for="schools" class="">School Name, or Keyword</label>
            <input type="text" list="schools" name="school">
         
            <datalist id="schools">
               @foreach($schools as $school) 
                  <option>{{$school->name}}</option>
               @endforeach
            </datalist>  
         </div>
         <div class="form__input-box">
            <input type="submit" value="Search">   
         </div>
   </div>  
   </form>
</div>



@endsection

