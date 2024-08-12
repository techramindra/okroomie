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