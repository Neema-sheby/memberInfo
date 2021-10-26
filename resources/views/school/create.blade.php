@extends('../layouts/layout')

<!-- Form to add members -->

@section('content')

<p class="form__msg">{{session('msg')}}</p>

<div class="form">
    <div class="form__bg"></div>
    <form action="/school/create" method="POST" class="form__box" >
    <h4 class="heading-4 p-2">Add School</h4>
        @csrf
        <div class="form__field">
            <div class="form__input-box">
                <label for="schoolName">Name</label>
                <input type="text" name="schoolName">
            </div>
              
            <div class="form__input-box">     
                <input type="submit" value="Add School">  
            </div> 
        </div>
          
    </form>

</div>

@endsection