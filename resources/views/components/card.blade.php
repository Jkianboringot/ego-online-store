@props(['color','bgColor'=>'white'])

 <div {{ $attributes->class("card card-text-$color  card-bg-$bgColor ") }}>
    <div 
    
   >{{ $title }}</div>
    @if($slot->isEmpty())
    <p>pls provide some content</p>
    @else
    {{ $slot }}
    @endif

    

    <div class="card-footer">{{ $footer }}</div>
</div>

{{-- 
this $attributes thing is really useful becasue becuse image you want to have a attribute in a class what is moveble 
like you wnat it to change constantly we can use slots but what if the thier is already
a class define and you wnt to keep that class and not interfere with it, well first 
we need to get the the class attribute that are things that are not connected to props
$attribute will take that but now how are we suppose to make them not interfere with
each other becuase $attribute will take anything not difene in props e.g(class=rounded)
,we merge them of course and we can do this by $attribute->class(put here the class of where you put slots)
e.g <div {{ $attributes->class() }}class="card card-text-{{ $color }} card-bg-{{ $bgColor }}"></div> to
 <div {{ $attributes->class("card card-text-$color  card-bg-$bgColor ") }}></div> 
 ,remeber this will only merge classes and what every is inside anything like lang='en' willb
 be outisde of it --}}
