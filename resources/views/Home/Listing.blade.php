@if(!empty($data))
    @foreach($data as $key=>$val)
        @if($val['outputType']=="ROOM")
            <x-roomcard :val="$val" :key="$key" />
        @else
        <x-roomiecard :val="$val" :key="$key" />
        @endif
    @endforeach
@endif