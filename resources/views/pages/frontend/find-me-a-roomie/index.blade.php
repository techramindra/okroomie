@extends('layouts.frontendMaster')
@section('contents')
<section id="formdata">

</section>
@endsection('contents')
@push('carousel_script')
<script>
    
    $(document).ready(function (abcabn) {
        loadform(0)
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
function scc()
    {
        $('html, body').animate({
                    scrollTop: $("#formdata").offset().top
                }, 20);
    }
function loadform(page=0) 
    {
        $.post("{{route('roomie-save1')}}", {
            page: page,
            _token: "{{csrf_token()}}"
        }, function(data) {
            $("#formdata").html(data)
            scc()
        });
    }
</script>
<script>
//     var $j = jQuery.noConflict();
// $( function() {
//     $("#date-pickers" ).datepicker({
//             showOn: "button",
//             buttonImage: "<i class='fa fa-calendar-days'></i>",
//             buttonImageOnly: false,
//             buttonText: "Select date"
//             });
//         } );
</script>
@endpush