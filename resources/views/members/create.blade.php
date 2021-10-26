

@extends('../layouts/layout')

<!-- Form to add members -->

@section('content')

<p class="form__msg">{{session('msg')}}</p>

<div class="form">
    <div class="form__bg"></div>
    <form action="/members" method="POST" class="form__box">
    <h4 class="heading-4 p-2">Add Members</h4>
        @csrf
        <div class="form__field">
            <div class="form__input-box">
                <label for="name">Name</label>
                <input type="text" name="name">
            </div>
            <div class="form__input-box">
                <label for="email" class="">Email Address</label>
                <input type="email" name="email">  
            </div>
            <div class="form__input-box">
            <label for="school[]" class="">Select Schools</label>
                <select name="school[]" multiple size="3">
                   <option  class="heading-option">- - - - - - Press Ctrl to select multiple schools - - - - - -</option>
                    @foreach($schools as $school)
                    <option value="{{$school->name}}" class="form__option">{{$school->name}}</option>
                    @endforeach
                </select>             
            </div>    
            <div class="form__input-box">     
                <input type="submit" value="Add Member">  
            </div> 
        </div>
          
    </form>

</div>

@endsection