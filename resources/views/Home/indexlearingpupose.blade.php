{{--
COntroller fro it

public function index(){
        return view('Home.index',[
            'name'=>'kian',
            'status'=>'god',
            'country'=>'ge',
            'proceed'=>true,
        ]);
    }--}}


<div @class(['my-css-class',
'georgia'=>$country==='ge'] //second parameter is condition
 )
 @style(['color:red','color:cyan'=>$country==='ge']
        //color is red if contry is not ge if its ge its willl be cyan   
 )
 >
 {{ $name }} is a {{ $status }}
 <p>Year: {{ $year }}</p>
</div>


@include('shared.button',['status'=>'include','color'=>'yellow'])
<br>
@includeif('shared.butto',['status'=>'includeif','color'=>'orange'])
    <!-- show nothing because if shared.button does ont exist it does nothing -->
<br>
  
@includewhen($proceed,'shared.button',['status'=>'includewhen','color'=>'cyan'])
    <!-- will only show  if proceed is true-->
<br>
    
@includeUnless(!$proceed,'shared.button',['status'=>'includeunless','color'=>'cyan'])
    <!-- will only show if proceed is false -->
<br>

@includeFirst(['shared.button','button'],['status'=>'includeunless','color'=>'cyan'])
    <!-- will show shared.button if it exist first else it will show button -->
<br>





@php
$cars=[1,2,3,4,5];
$motor=[0,9,8,7,6,];
@endphp

@foreach ($cars as  $car)
    @include('car.view',['car'=>$car])
@endforeach

<br>
<!-- this too do the exact same things  -->

@each('car.view',$motor,'car')
    {{-- this @each can have a 4th parameter, it acts as  backup view if car.view does ont exit
        if it does not it will go to that 4th parameter --}}
        <br>
        


@includeif('car.alert',['messege'=>'fuck you rou cheated','color'=>'red'])
@includeif('car.alert',['messege'=>'i like dead people','color'=>'blue'])