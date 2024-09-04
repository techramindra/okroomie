@php
$total=sizeof($data??[]);
$page=request()->page;
if($total<12)
{
    $count=1;
}
else
{
    $count=ceil($total/8);
}
@endphp

@if($page>1)
<li class="paginate" page="{{abs($page-1)}}">
     <a href="javascript:;">
        <i class="fa fa-arrow-left"></i> previous
    </a> 
</li>
@endif
@for($i=1;$i<=$count;$i++)
<li class="paginate" page="{{$i}}"> 
    <a href="javascript:;" class="{{$i==$page?'active_page':''}}">{{$i}}</a> 
</li>
@endfor
@if($page!=($i-1))
<li class="paginate" page="{{$page+1}}"> 
    <a href="javascript:;">Next
        <i class="fa fa-arrow-right"></i>
    </a> 
</li>
@endif