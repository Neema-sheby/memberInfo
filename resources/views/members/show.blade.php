

<!-- displays members in the selected school -->

@extends('../layouts/layout')

@section('content')
<div class="member">
    <div class="member__box">
            <h4 class="heading-4 p-2">Members in {{$schoolName}}</h4>
            @foreach($memberArr as $member)
            <div class="member__detail-box">
                <div class="member__name">
                    <span  class="member__name--1" >{{$member->name}}</span> 
                    <i class="ion-android-arrow-dropright-circle btn__member-details"></i>     
                </div>
                <div class="member__details hidden">
                    <p class="heading-5">Email Address : </p>
                    <p class="para mb-1">{{$member->email}} </p>
                    <p class="heading-5">Schools : 
                        @foreach($member->school as $school)
                        <p class="para">{{$school}}</p>
                        @endforeach
                    </p>

                </div>
            </div>

            @endforeach  
    </div>
</div>

@endsection