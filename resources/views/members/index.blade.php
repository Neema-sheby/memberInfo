
<!-- Search members in a school -->

@extends('../layouts/layout')

@section('content')

<div class="form">
   <form action="./members/show" class="form__box">
      <div class="form__field">
         <label for="schools" class="">School Name, or Keyword</label>
         <input type="text" list="schools" name="school">
         <datalist id="schools">
            @foreach($schools as $school) 
               <option>{{$school->name}}</option>
            @endforeach
         </datalist>  
         <input type="submit" value="Search">   
   </div>  
   </form>
</div>



@endsection

