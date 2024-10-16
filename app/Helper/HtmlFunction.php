<?php 
function pre($data)
{
    echo"<pre>";
    print_r($data);
    echo"</pre>";

}
function profilepic($image,$name,$type=0)
{
    if($image!=null && file_exists('storage/app/'.$image)){
	   return '<img src="'.url('storage/app/'.$image).'">';
	}else{
        $name=strtoupper(substr($name, 0,1));
        return '<div class="innner_name">'.$name.'</div>';
    }
}
function shortstr($str,$lent=10)
{
    $sdd='';
    if(strlen($str)>20)
    {
        $sdd='...';
    }
    return substr($str,0,$lent).$sdd;
}