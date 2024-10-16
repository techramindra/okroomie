@extends('layouts.frontendMaster')
@section('contents')
<section id="formdata">

</section>
@endsection('contents')
@push('carousel_script')
<script>
    
    $(document).ready(function (abcabn) {
        loadform()
    $("#form").on('submit',(function(abcabn) {
    //$(".loadings").show();
    abcabn.preventDefault();
        $.ajax({
            url: "",
            type: "POST",
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(data){
                   // $(".ewqew").show();
              //  alert(data);
              
            },
            error: function(){}          
        });
    }));
});
function loadform(page=0) 
    {
        $.post("{{route('roomie-save1')}}", {
            page: page,
            _token: "{{csrf_token()}}"
        }, function(data) {
            $("#formdata").html(data)
         
        });
    }
</script>
@endpush