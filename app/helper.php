<?php echo "hi there this is helper";
if(!function_exists("pre"))
{
    function pre($data)
    {
        echo"<pre>";
        print_r($data);
        echo"</pre>";

    }
}