<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <!-- google map api link -->
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5GXkHKunbMYE85WJI_Vgv6IXZ-xz_so8&sensor=false&libraries=places"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>OKROOMIE</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="https://github.com/CTU-IIG/macan.git">
    <link rel="stylesheet" href="{{url('public/assets/frontend/css/jquery-ui.css')}}">


    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{url('public/assets/frontend/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{url('public/assets/frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{url('public/assets/frontend/css/search.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/frontend/css/aos.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/frontend/css/aos2.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/frontend/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/frontend/css/menu.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/frontend/css/slick.css')}}">

    <link rel="stylesheet" href="{{url('public/assets/frontend/css/maps.css')}}">
    <link rel="stylesheet" id="color" href="{{url('public/assets/frontend/css/colors/pink.css')}}">
    <!-- toastr css -->
    <link rel="stylesheet" href="{{url('public/assets/toastr/css/toastr.min.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/frontend/list-my-place/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{url('public/assets/frontend/list-my-place/css/owl.theme.default.css')}}" />
    <link rel="stylesheet" href="{{url('public/assets/frontend/css/styles.css')}}">
    <link rel="stylesheet" href="{{url('public/css/okroomie.css')}}">
    <!-- toastr css -->
</head>

<body class="homepage-9 hp-6 homepage-1">
    <div class="ggggggg payment_h">
        <div class="modal fade" id="exampleModalyy34" tabindex="-1" aria-labelledby="exampleModalLabelyy34"
            aria-hidden="true">
            <div class="modal-dialog  modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="hhhhsggshssd">
                            <div>
                                <h2 class="p-hestoy">transaction history</h2>
                            </div>
                            <div class="Ptablle">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">plan</th>
                                            <th scope="col">amount</th>
                                            <th scope="col">days</th>
                                            <th scope="col">starts</th>
                                            <th scope="col">ends</th>
                                            <th scope="col">paid</th>
                                            <th scope="col">invoice</th>
                                        </tr>
                                    </thead>
                                    <tbody id="payment-history-append">
                                    </tbody>
                                </table>
                            </div>
                            <div>
                                <a href="{{route('showplan')}}" class="upgrade">upgrade options</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ggggggg">
        <!-- Button trigger modal -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModalyy" tabindex="-1" aria-labelledby="exampleModalLabelyy"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="newfform">
                            <div id="showmessagehere"></div>
                            <div class="form_uswer">
                                <h2>Edit my account</h2>
                                <div class="fformm_img">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPAAAADSCAMAAABD772dAAAAS1BMVEX39/eampr7+/uUlJSXl5f8/Pz09PTT09OSkpKnp6fl5eWdnZ3v7++8vLzy8vLBwcHZ2dnHx8ff39+3t7epqamwsLDNzc3W1tbj4+OXfCaUAAAJ40lEQVR4nO1daZOqOhCVJIiAqIgy9///0sfiwkgCyeluZF5xPs2tWxX70EmvWXa7DRs2bNiwYcOGDf8PqBG+LZEQGmZxvNsds0uSJGXR4dz8mWRZ85/x/4l5S/WUXerqlh50D/PA45+HPC3KJDu1vL8tLREN2f21rnLTkYzcaMmb/F5eTn9X1Y1ij8m50eok00/ah7xKsj9IutVskTda8+U6YK11VCTHv8S5WbP13SBkB6TTMov/BOeW7Q1S7Yh0Xmar17NSV5puPzjf6t2K9dxYqTJiY9tTNodqrWpulcvL9sFZp8lufZSVSlIJuj1lU+7XRVntklzLsH1wNsVxPZQb7crS7Sjr4rQOyuLafVNexcSOr+kidDvKpv62xY6z+2J0W+j8Gn+RrlJnKcvsplx9z3rF13xputEX57XaV4vO5jd0+g0lx5foC+rtYXS9NGO1K76k3h5LKznOvrF6hzAmWdBcq/qr6u2hq6VSCrVf1ve6YPJsEcbq+O3p/ITRlwWmdfyzCvX2OJzFGcflivg2C/kmHYR8K9hwwYj6J7W70fm+uyzdH+ThBE2XOqY0+Vqa+a2o6iT5ybJrndRFlXZtGMqo+p8QY5p5bnjlRZLtx/3S47W8k4qdQozVCefbsK3a7oldMKXi/fWc45y1RNSljnCyYPT9R83U05uPcS3gqX2o2Rnj89no89Gre6DUqTagUWTXMcy3SdcDKm9qV4Pz6MCbMKJ8G+0G1lbVDqwasVoulK9Os/CZFh+xMigr4xvGt4Q6f0ph4atmi7liiK/J/6GGJP4HreSciXEMVXP0jdAZUSfkG5uUhy9U3tAV8WeRqN3cGJyTuh4QvgX1p6F5pen5sTpC+iXzRRn/kJcx4pA4+O4w30A11XGFGI87T5ynkI+d034yQSZ0zuQP1RH52hXha2ML2LAFAOqCLOOE4A6RCgeD3XghPiOMj4v+HGlKjaBSQIIU/OIqg0LaPSPfnfqHqLjEGKscoEtZQTZAbgLzTdCEjtDp5MQeWVaIFNiE5i8gqjOiYqD+AVlorpBjiBOUmwZbaqwFLFEhhlQMfHnIQrOv4BbIKo4O1zBR4gKZSNwm+iELYqijsGIA6IKNAN02I4dWV9DHj++QpeDJCseMkYAgMgEREPZNIx24brzFQcxWZALiLcglNRChCy8w/yAXVLCppDrTCuLrv8JiTMGceeEHYchOe+eJUNodMD5AGCq8RObspwGs0cBX2bEAqrz4GmrURJhCjjC2iD0NNeaDm9EFt/SiMnlNOqRU2EIL7nxUJSaUjx3FvHwkabMaodD9jqmHZ4K3rkjuiAPtise0g7+l18eEga6zeUuK+iTBOKvFHp53c54JnTveXh4DUp/uMJclwiZL1A230S4q1kyPHEs9u5FFT9bAhGecB1Tofwwsljp0gkElpxbT0RY+o1dLeLqwiM/o9RLW2cSw+IxeL+Ep44KGrOsmfJsgDNvCFROO9Mk5LJhnr52wUzKwkrJ2wu6gF+tpPAmLtFleooEVgJ6xU8OU0zQrDS1bOB0TnDh0hEWTBxJh45h8pCUsrOEdHhG5FzFY7n6OyrF11wk4H+7gqOVRvLB7VB6QVpsrYzrRDlLKNId7gN2uF+GLTRmUQLobdSJIJxNOSFPaniKqmnZ01P4ZmQiTzItjiwtx0KAGdDBhmnmx2xeSq4tky5bQRp6hbNbaJW1MSTNNtFmOejwlVepHlesPE82LNdCHuxnvUcWsFil1aGGzL7TAshtVLpqmXo1gi3vJ00Zo4+GOYQlbyzyUFPsBqUVMKB4/YdGFQrtoA8JCNQBC8fglmmVUohuOZHZLtyD7Dzth+meU2lxKKB6/CFsCfYZLdmQcEzUE7AmPJWMgLFIEoAcIkVUVHMNGxl3zxgnTbbTNnrJ8R5kmMYNcYoQFYg905+dviBHm3yNOjqM7jMNeJsLmzk2YwQlHtmCaiTB7eIkdrxlBjjDvaVrwXJpFLDHCzCpm8UmRKGFeFe95hJIkzKpijjC6gyRhThUTmyEDoUY1Hj7CnNc8Ma1gwcCjBV8KgW4aHsNSm+Bx8P3oTFkiT5DVi2QpxjBeOku7HuYJfK/6GLaT3IyXRhuWW5C5XFILSwGAoaY1GJ/Bbim+CW31layE4ctS3sAuanPBVsQjdks/foDaO2X0Gp08ll/gSUtev0Cc1HuGIuoAtkI8bVfBJwytecrokTppLL1rnlLK4DcoFwJw30RvbabxLhpS+EHvnn3AWlyk7f2y/Qq8jNlFsX78mNdMEHwTaVevFdaUldlORHCiSG/NjyWx/g5bLvYC1j/lDCkfsB4E5YzVn0C8MXNA0MKx05fbTEfYMmbMU19iODpA7D+EnIQQULDr2DTDpocxwgMuASG0/RCxgNUKvwqBO+Br4TqqxR7fdD8W2ECV+OrODWTULZzWHwvccsofDUwEuRybKT4RTJg73mtwcN0DIDKdAg+7SBB23j8hsYhDcyaBWTaxB1QgqHN4BCcE3PDEZZv8FiO4tiXhliZ+jTtP0eHHAtjDn0mzydat6wHwbdYV8WG2kRBTVgS+mMb6S9EPlA8zvxQ6uQGUcU7rqEQfU40TxqeNZwIBpjltDmlCeDtW7fneJp/xixx22mhTZNBLSwPKpzP9DchempkfIpc9jL4le4YHRdWpJjwM+BZnNtKj0q2oyn1TVtc7Wc2zV3yTIh0Teb7450s5PtUpTc3zNSa8smVMGfDiny9nlRWEdz490nE0ejeRAN2esrrcUMoed5diZktEuwPOWQVR9msFhGekRheCdDvK8bGMwjXhtSsw+MEDo++Srzy/5No3fipQMr+DVIGlLej5SghKJWGUPffnB1V6dH6VfrZ8KFoYZd++h7+KjUkWpNsihLJ3eclXxcacCRkCioayZzLl39jyy5kaW7XQ4v1Ak0wdPCgH1A99VKzzy3fodgKeqnmdhHQuZ1ex0XB6z4P4OvcoYtARqjlfrG9fms0DEdV58lHV0F3bU+GW0fXCttmKOJtScuDRi6nysE6XCKw8oFThVHLwfWbu+qU+r0G9PeKLq0Jg2U06A0debKLrt1fvEK7n3IFX4uxHhnRKeChbAmpnq2JPXc/qHspit3TBLzIVtoeZD8ibE5bmqS7XNJ2fUKOtt6Cco5OsOlkj37ZT8cEYPoDwe1IfVsp3tL0amtAtfl8LuFb9tlDDdUxYeMMvt871+8Sgq0w6UfN+LY775Dc33odCwp8tHeJ1Il3qriwuvHwK8Z6JZ0wN24HF8PApmnoKsF/GZtULuEe3BQkKsX6jPwLIIZEwuhw+Z3jBfJ8b2fvfudDEwizPmKnjn1Bwq+IDz0ltdRW8dZYTRy4515Pwz+CvyLlhw4YNGzZs2LBhw4Y/gP8ARIqLgY69A70AAAAASUVORK5CYII="
                                        alt="">
                                </div>
                            </div>
                            <div class="sserinput">
                                <form id="updatePersonalData">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Your name</label>
                                        <input type="text" name="your_first_name" class="form-control"
                                            id="your_first_name_input" aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Email address</label>
                                        <input type="email" name="email" class="form-control" id="email_input">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Verify mobile phone</label>
                                        <input type="text" name="mobile" class="form-control">
                                    </div>
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="allowed_verified_members_to_contact"
                                            class="form-check-input" id="allowed_verified_members_to_contact">
                                        <label class="form-check-label" for="exampleCheck1">Allow verified members to
                                            contact me on my mobile (recommended)</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save my changes</button>
                                    <!-- <button type="submit" class="btn ">Save my changes</button> -->
                                    <div class="slpoi">
                                        <a href="" class="hahu" href="#" type="button" data-toggle="modal"
                                            data-target="#exampleModalyyyy"> Change password</a>
                                        <a href="javascript:;" onclick="deactivateAccount()">
                                            <smal>Deactivate or delete my account</smal>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ggggggg">
        <!-- Button trigger modal -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModalyyy" tabindex="-1" aria-labelledby="exampleModalLabelyyy"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="myform3">
                            <div class="newfform">
                                <form id="verifymobilenumber">
                                    @csrf
                                    <h2>Verify your mobile number</h2>
                                    <p class="tyyt">For the security of our community, all members are required to
                                        verify a mobile number when creating a listing.</p>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Country code</label>
                                        <select class="form-control" name="countrycode" id="exampleFormControlSelect1">
                                            <option value="" disabled=""></option>
                                            <option value="AU-61">Australia (+61)</option>
                                            <option value="AF-93">Afghanistan (+93)</option>
                                            <option value="AL-355">Albania (+355)</option>
                                            <option value="DZ-213">Algeria (+213)</option>
                                            <option value="AD-376">Andorra (+376)</option>
                                            <option value="AO-244">Angola (+244)</option>
                                            <option value="AI-1264">Anguilla (+1264)</option>
                                            <option value="AG-1268">Antigua and Barbuda (+1268)</option>
                                            <option value="AR-54">Argentina (+54)</option>
                                            <option value="AM-374">Armenia (+374)</option>
                                            <option value="AW-297">Aruba (+297)</option>
                                            <option value="AT-43">Austria (+43)</option>
                                            <option value="AZ-994">Azerbaijan (+994)</option>
                                            <option value="BS-1242">Bahamas (+1242)</option>
                                            <option value="BH-973">Bahrain (+973)</option>
                                            <option value="BD-880">Bangladesh (+880)</option>
                                            <option value="BB-1246">Barbados (+1246)</option>
                                            <option value="BY-375">Belarus (+375)</option>
                                            <option value="BE-32">Belgium (+32)</option>
                                            <option value="BZ-501">Belize (+501)</option>
                                            <option value="BJ-229">Benin (+229)</option>
                                            <option value="BM-1441">Bermuda (+1441)</option>
                                            <option value="BT-975">Bhutan (+975)</option>
                                            <option value="BO-591">Bolivia (+591)</option>
                                            <option value="BA-387">Bosnia and Herzegovina (+387)</option>
                                            <option value="BW-267">Botswana (+267)</option>
                                            <option value="BR-55">Brazil (+55)</option>
                                            <option value="BN-673">Brunei (+673)</option>
                                            <option value="BG-359">Bulgaria (+359)</option>
                                            <option value="BF-226">Burkina Faso (+226)</option>
                                            <option value="BI-257">Burundi (+257)</option>
                                            <option value="KH-855">Cambodia (+855)</option>
                                            <option value="CM-237">Cameroon (+237)</option>
                                            <option value="CA-1">Canada (+1)</option>
                                            <option value="CV-238">Cape Verde (+238)</option>
                                            <option value="KY-1345">Cayman Islands (+1345)</option>
                                            <option value="CF-236">Central African Republic (+236)</option>
                                            <option value="TD-235">Chad (+235)</option>
                                            <option value="CL-56">Chile (+56)</option>
                                            <option value="CN-86">China (+86)</option>
                                            <option value="CO-57">Colombia (+57)</option>
                                            <option value="KM-269">Comoros (+269)</option>
                                            <option value="CK-682">Cook Islands (+682)</option>
                                            <option value="CR-506">Costa Rica (+506)</option>
                                            <option value="HR-385">Croatia (+385)</option>
                                            <option value="CU-53">Cuba (+53)</option>
                                            <option value="CY-357">Cyprus (+357)</option>
                                            <option value="CZ-420">Czech Republic (+420)</option>
                                            <option value="CD-243">Democratic Republic of the Congo (+243)</option>
                                            <option value="DK-45">Denmark (+45)</option>
                                            <option value="DJ-253">Djibouti (+253)</option>
                                            <option value="DM-1767">Dominica (+1767)</option>
                                            <option value="DO-1809">Dominican Republic (+1809)</option>
                                            <option value="TL-670">East Timor (+670)</option>
                                            <option value="EC-593">Ecuador (+593)</option>
                                            <option value="EG-20">Egypt (+20)</option>
                                            <option value="SV-503">El Salvador (+503)</option>
                                            <option value="GQ-240">Equatorial Guinea (+240)</option>
                                            <option value="EE-372">Estonia (+372)</option>
                                            <option value="ET-251">Ethiopia (+251)</option>
                                            <option value="FO-298">Faroe Islands (+298)</option>
                                            <option value="FJ-679">Fiji (+679)</option>
                                            <option value="FI-358">Finland (+358)</option>
                                            <option value="FR-33">France (+33)</option>
                                            <option value="GF-594">French Guiana (+594)</option>
                                            <option value="PF-689">French Polynesia (+689)</option>
                                            <option value="GA-241">Gabon (+241)</option>
                                            <option value="GM-220">Gambia (+220)</option>
                                            <option value="GE-995">Georgia (+995)</option>
                                            <option value="DE-49">Germany (+49)</option>
                                            <option value="GH-233">Ghana (+233)</option>
                                            <option value="GI-350">Gibraltar (+350)</option>
                                            <option value="GR-30">Greece (+30)</option>
                                            <option value="GL-299">Greenland (+299)</option>
                                            <option value="GD-1473">Grenada (+1473)</option>
                                            <option value="GP-590">Guadeloupe (+590)</option>
                                            <option value="GU-1671">Guam (+1671)</option>
                                            <option value="GT-502">Guatemala (+502)</option>
                                            <option value="GN-224">Guinea (+224)</option>
                                            <option value="GW-245">Guinea-Bissau (+245)</option>
                                            <option value="GY-592">Guyana (+592)</option>
                                            <option value="HT-509">Haiti (+509)</option>
                                            <option value="HN-504">Honduras (+504)</option>
                                            <option value="HK-852">Hong Kong (+852)</option>
                                            <option value="HU-36">Hungary (+36)</option>
                                            <option value="IS-354">Iceland (+354)</option>
                                            <option value="IN-91">India (+91)</option>
                                            <option value="ID-62">Indonesia (+62)</option>
                                            <option value="IR-98">Iran (+98)</option>
                                            <option value="IQ-964">Iraq (+964)</option>
                                            <option value="IE-353">Ireland (+353)</option>
                                            <option value="IL-972">Israel (+972)</option>
                                            <option value="IT-39">Italy (+39)</option>
                                            <option value="CI-225">Ivory Coast (+225)</option>
                                            <option value="JM-1876">Jamaica (+1876)</option>
                                            <option value="JP-81">Japan (+81)</option>
                                            <option value="JO-962">Jordan (+962)</option>
                                            <option value="KZ-7">Kazakhstan (+7)</option>
                                            <option value="KE-254">Kenya (+254)</option>
                                            <option value="KI-686">Kiribati (+686)</option>
                                            <option value="KW-965">Kuwait (+965)</option>
                                            <option value="KG-996">Kyrgyzstan (+996)</option>
                                            <option value="LA-856">Laos (+856)</option>
                                            <option value="LV-371">Latvia (+371)</option>
                                            <option value="LB-961">Lebanon (+961)</option>
                                            <option value="LS-266">Lesotho (+266)</option>
                                            <option value="LR-231">Liberia (+231)</option>
                                            <option value="LY-218">Libya (+218)</option>
                                            <option value="LI-423">Liechtenstein (+423)</option>
                                            <option value="LT-370">Lithuania (+370)</option>
                                            <option value="LU-352">Luxembourg (+352)</option>
                                            <option value="MO-853">Macau (+853)</option>
                                            <option value="MK-389">Macedonia (+389)</option>
                                            <option value="MG-261">Madagascar (+261)</option>
                                            <option value="MW-265">Malawi (+265)</option>
                                            <option value="MY-60">Malaysia (+60)</option>
                                            <option value="MV-960">Maldives (+960)</option>
                                            <option value="ML-223">Mali (+223)</option>
                                            <option value="MT-356">Malta (+356)</option>
                                            <option value="MQ-596">Martinique (+596)</option>
                                            <option value="MR-222">Mauritania (+222)</option>
                                            <option value="MU-230">Mauritius (+230)</option>
                                            <option value="MX-52">Mexico (+52)</option>
                                            <option value="FM-691">Micronesia (+691)</option>
                                            <option value="MD-373">Moldova (+373)</option>
                                            <option value="MC-377">Monaco (+377)</option>
                                            <option value="MN-976">Mongolia (+976)</option>
                                            <option value="ME-382">Montenegro (+382)</option>
                                            <option value="MS-1664">Montserrat (+1664)</option>
                                            <option value="MA-212">Morocco (+212)</option>
                                            <option value="MZ-258">Mozambique (+258)</option>
                                            <option value="MM-95">Myanmar (+95)</option>
                                            <option value="NA-264">Namibia (+264)</option>
                                            <option value="NP-977">Nepal (+977)</option>
                                            <option value="NL-31">Netherlands (+31)</option>
                                            <option value="AN-599">Netherlands Antilles (+599)</option>
                                            <option value="NC-687">New Caledonia (+687)</option>
                                            <option value="NZ-64">New Zealand (+64)</option>
                                            <option value="NI-505">Nicaragua (+505)</option>
                                            <option value="NE-227">Niger (+227)</option>
                                            <option value="NG-234">Nigeria (+234)</option>
                                            <option value="KP-850">North Korea (+850)</option>
                                            <option value="NO-47">Norway (+47)</option>
                                            <option value="OM-968">Oman (+968)</option>
                                            <option value="PK-92">Pakistan (+92)</option>
                                            <option value="PW-680">Palau (+680)</option>
                                            <option value="PS-970">Palestinian Territory (+970)</option>
                                            <option value="PA-507">Panama (+507)</option>
                                            <option value="PG-675">Papua New Guinea (+675)</option>
                                            <option value="PY-595">Paraguay (+595)</option>
                                            <option value="PE-51">Peru (+51)</option>
                                            <option value="PH-63">Philippines (+63)</option>
                                            <option value="PL-48">Poland (+48)</option>
                                            <option value="PT-351">Portugal (+351)</option>
                                            <option value="PR-1787">Puerto Rico (+1787)</option>
                                            <option value="QA-974">Qatar (+974)</option>
                                            <option value="CG-242">Republic Of The Congo (+242)</option>
                                            <option value="RO-40">Romania (+40)</option>
                                            <option value="RU-7">Russia (+7)</option>
                                            <option value="RW-250">Rwanda (+250)</option>
                                            <option value="RE-262">Reunion Island (+262)</option>
                                            <option value="KN-1869">Saint Kitts and Nevis (+1869)</option>
                                            <option value="LC-1758">Saint Lucia (+1758)</option>
                                            <option value="PM-508">Saint Pierre and Miquelon (+508)</option>
                                            <option value="VC-1784">Saint Vincent and The Grenadines (+1784)</option>
                                            <option value="WS-685">Samoa (+685)</option>
                                            <option value="SM-378">San Marino (+378)</option>
                                            <option value="ST-239">Sao Tome and Principe (+239)</option>
                                            <option value="SA-966">Saudi Arabia (+966)</option>
                                            <option value="SN-221">Senegal (+221)</option>
                                            <option value="RS-381">Serbia (+381)</option>
                                            <option value="SC-248">Seychelles (+248)</option>
                                            <option value="SL-232">Sierra Leone (+232)</option>
                                            <option value="SG-65">Singapore (+65)</option>
                                            <option value="SK-421">Slovakia (+421)</option>
                                            <option value="SI-386">Slovenia (+386)</option>
                                            <option value="SB-677">Solomon Islands (+677)</option>
                                            <option value="SO-252">Somalia (+252)</option>
                                            <option value="ZA-27">South Africa (+27)</option>
                                            <option value="KR-82">South Korea (+82)</option>
                                            <option value="SS-211">South Sudan (+211)</option>
                                            <option value="ES-34">Spain (+34)</option>
                                            <option value="LK-94">Sri Lanka (+94)</option>
                                            <option value="SD-249">Sudan (+249)</option>
                                            <option value="SR-597">Suriname (+597)</option>
                                            <option value="SZ-268">Swaziland (+268)</option>
                                            <option value="SE-46">Sweden (+46)</option>
                                            <option value="CH-41">Switzerland (+41)</option>
                                            <option value="SY-963">Syria (+963)</option>
                                            <option value="TW-886">Taiwan (+886)</option>
                                            <option value="TJ-992">Tajikistan (+992)</option>
                                            <option value="TZ-255">Tanzania (+255)</option>
                                            <option value="TH-66">Thailand (+66)</option>
                                            <option value="TG-228">Togo (+228)</option>
                                            <option value="TO-676">Tonga (+676)</option>
                                            <option value="TT-1868">Trinidad and Tobago (+1868)</option>
                                            <option value="TN-216">Tunisia (+216)</option>
                                            <option value="TR-90">Turkey (+90)</option>
                                            <option value="TM-993">Turkmenistan (+993)</option>
                                            <option value="TC-1649">Turks and Caicos Islands (+1649)</option>
                                            <option value="UG-256">Uganda (+256)</option>
                                            <option value="UA-380">Ukraine (+380)</option>
                                            <option value="AE-971">United Arab Emirates (+971)</option>
                                            <option value="GB-44">United Kingdom (+44)</option>
                                            <option value="US-1">United States (+1)</option>
                                            <option value="UY-598">Uruguay (+598)</option>
                                            <option value="UZ-998">Uzbekistan (+998)</option>
                                            <option value="VU-678">Vanuatu (+678)</option>
                                            <option value="VE-58">Venezuela (+58)</option>
                                            <option value="VN-84">Vietnam (+84)</option>
                                            <option value="VG-1340">Virgin Islands, British (+1340)</option>
                                            <option value="VI-1284">Virgin Islands, US (+1284)</option>
                                            <option value="YE-967">Yemen (+967)</option>
                                            <option value="ZM-260">Zambia (+260)</option>
                                            <option value="ZW-263">Zimbabwe (+263)</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Mobile number</label> <a href="javascript:;"
                                            onclick="resendotp()">Resend OTP</a>
                                        <input type="text" name="mobile" class="form-control" id="exampleInputPassword1"
                                            required>
                                    </div>
                                    <div class="form-group" id="containerforotp" style="display:none">
                                        <label for="otp">OTP</label>
                                        <input type="text" name="otp" class="form-control" id="otp">
                                    </div>
                                    <div id="verfifymobilenumbermessage"></div>
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="allowed_verified_members_to_contact"
                                            class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Allow verified members to
                                            contact me on my mobile</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Send SMS code</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ggggggg chang passwword">
        <!-- Button trigger modal -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModalyyyy" tabindex="-1" aria-labelledby="exampleModalLabelyyyy"
            aria-hidden="true">
            <div class="modal-dialog  modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="myform3">
                            <div class="newfform">
                                <form id="userChangePassword">
                                    @csrf
                                    <h2>change password</h2>
                                    <div id="changePasswordMessage"></div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="current_password"
                                            placeholder="Current password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="new_password"
                                            placeholder="New password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="confirm_password"
                                            placeholder=" Confirm new password">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Change password</button>
                                    <!-- <a href="{{url('forgot-password')}}" type="button" data-toggle="modal" data-target="#exampleModalyyyyy">forgot your current password</a> -->
                                    <!-- <a href="{{url('forgot-password')}}" >forgot your current password</a> -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ggggggg forgat passwword">
        <!-- Button trigger modal -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModalyyyyy" tabindex="-1" aria-labelledby="exampleModalLabelyyyyy"
            aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="myform3">
                            <div class="newfform">
                                <form id="resetPassword">
                                    @csrf
                                    <h2>reset your password </h2>
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control" id="exampleInputPassword1"
                                            placeholder="Email">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Reset password</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="ujsm">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                <div class="modal-content" id="ffdfafdgtgdgagffgyyj">
                    <div class="modal-body">
                        <div id="wrapper">
                            <section class="nkmagicform UserDashboardmain">
                                <div class="">
                                    <div class="main-overlay"></div>
                                    <div class="user-dashboard_inner">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="right-dashboard">
                                                    <div class="rightcommon">
                                                        <div class="top-head-middle">
                                                            <h1> My dashboard</h1>
                                                        </div>
                                                        <div class="content-data">
                                                            <ul>
                                                                <li class="liext">
                                                                    <a href="#" class="verify-phone" data-toggle="modal"
                                                                        data-target="#exampleModalyyy">
                                                                        <span class="icon">
                                                                            <i class="fa fa-bell-o"
                                                                                aria-hidden="true"></i>
                                                                        </span>
                                                                        Verify mobile phone
                                                                    </a>
                                                                </li>
                                                                <li class="liext">
                                                                    <a href="javascript:;" onclick="myAccountSetting()"
                                                                        data-toggle="modal"
                                                                        data-target="#exampleModalyy">
                                                                        <span class="icon">
                                                                            <i class="fa fa-cog" aria-hidden="true"></i>
                                                                        </span>
                                                                        My account settings
                                                                    </a>
                                                                </li>
                                                                <li class="liext">
                                                                    <a href="{{route('emailAlertSetting')}}">
                                                                        <span class="icon">
                                                                            <i class="fa fa-envelope-o"
                                                                                aria-hidden="true"></i>
                                                                        </span>
                                                                        My Email settings
                                                                    </a>
                                                                </li>
                                                                <li class="liext">
                                                                    <a href="#">
                                                                        <span class="icon">
                                                                            <i class="fa fa-question-circle"
                                                                                aria-hidden="true"></i>
                                                                        </span>
                                                                        FAQ and Support
                                                                    </a>
                                                                </li>
                                                                <li class="liext">
                                                                    <a href="javascript:;" onclick="getPaymentData()"
                                                                        data-toggle="modal"
                                                                        data-target="#exampleModalyy34">
                                                                        <span class="icon">
                                                                            <i class="fa fa-history"
                                                                                aria-hidden="true"></i>
                                                                        </span>
                                                                        Payment history
                                                                    </a>
                                                                </li>
                                                                <li class="liext">
                                                                    <a id="logout" href="{{url('logout')}}">
                                                                        <span class="icon">
                                                                            <i class="fa fa-power-off"
                                                                                aria-hidden="true"></i>
                                                                        </span>
                                                                        Log me out
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="rightcommon">
                                                        <div class="top-head-middle">
                                                            <h1> helpful material</h1>
                                                        </div>
                                                        <ul class="list-info">
                                                            <li><a href="#">Should I move out with friends or
                                                                    strangers?</a></li>
                                                            <li><a href="#">How to be a good housemate</a></li>
                                                            <li><a href="#">Australia’s cheapest share house suburbs
                                                                    2022</a></li>
                                                            <li><a href="#">Draft listings FAQ</a></li>
                                                            <li><a class="all-articles" href="/info">+ View all
                                                                    articles</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">

                                                <div class="tiranga-hmara">


                                                    <div class="middle-dashboard">
                                                        <div class="may-N">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <h1>My listings</h1>
                                                                </div>
                                                                <div class="col-6 extttt">
                                                                    <a href="{{url('find-me-a-roomie/index')}}"><button>+
                                                                            List Your Space</button></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="top-head-middle top-one">
                                                            @if(isset(auth()->user()->id))
                                                            @php
                                                            $find_me_a_roomie = App\Models\Find_me_a_roomie::where('user_id', auth()->user()->id)->get();
                                                            $find_me_a_room = App\Models\Find_me_a_room::where('user_id', auth()->user()->id)->get();
                                                            @endphp
                                                            <h1 class="fir_choya"> <i class="fa fa-user-circle-o"
                                                                    aria-hidden="true"></i> Find me a roomie </h1>
                                                        </div>
                                                        @if($find_me_a_roomie != '')
                                                        <div class="Findmearoomie">
                                                            @foreach($find_me_a_roomie as $val)
                                                            <div class="yharakl">
                                                                @php
                                                                $roomie_image = App\Models\Room_image::where('find_me_a_roomies_users_id', auth()->user()->id)->where('find_me_a_roomies_id', $val->id)->first();
                                                                @endphp
                                                                @if(isset($roomie_image->image))
                                                                @if($val->roomie_listing_status == 0)
                                                                <span>Active</span>
                                                                @else
                                                                <span class="inactive">Inactive</span>
                                                                @endif
                                                                @else
                                                                <span class="una">Draft</span>
                                                                @endif
                                                                <p>{{$val->property_address}}</p>
                                                                @if(isset($roomie_image->image))
                                                                <div class="lookoi">
                                                                    <a
                                                                        href="{{url('/find-me-a-roomie/EditListing/' . encrypt($val->id))}}"><button><i
                                                                                class="fa fa-pencil-square-o"
                                                                                aria-hidden="true"></i>Edit</button></a>
                                                                </div>
                                                                @else
                                                                <div class="lookoi">
                                                                    <a
                                                                        href="{{url('/find-me-a-roomie/index/' . $val->id)}}"><button><i
                                                                                class="fa fa-pencil-square-o"
                                                                                aria-hidden="true"></i>Resume</button></a>
                                                                </div>
                                                                @endif
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                        @else
                                                        <a href="https://www.okroomie.com/find-me-a-roomie/index">
                                                            <h4 class="full_tack">You don’t have any property listings
                                                                <span>+ Create</span>
                                                            </h4>
                                                        </a>
                                                        @endif
                                                    </div>
                                                    <div class="middle-dashboard">
                                                        <div class="top-head-middle">
                                                            <h1 class="fir_choya"><i class="fa fa-home"
                                                                    aria-hidden="true"></i> Find me a Room</h1>
                                                        </div>
                                                        @if($find_me_a_room != '')
                                                        <div class="FindmeaRoom">
                                                            @foreach($find_me_a_room as $val)
                                                            <div class="yharakl">
                                                                @if($val->room_listing_status == 0)
                                                                <span>Active</span>
                                                                @else
                                                                <span class="inactive">Inactive</span>
                                                                @endif
                                                                <p>{{$val->suburb}}</p>
                                                                <a
                                                                    href="{{url('/find-me-a-room/EditListing/' . encrypt($val->id))}}"><button><i
                                                                            class="fa fa-pencil-square-o"
                                                                            aria-hidden="true"></i>Edit</button></a>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                        @else
                                                        <a href="https://www.okroomie.com/find-me-a-room/index">
                                                            <h4 class="full_tack">You don’t have a person listing
                                                                <span>+ Create</span>
                                                            </h4>
                                                        </a>
                                                        @endif
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="left_dashBoard">
                                                    <div class="image-dashboard">
                                                        @auth
                                                        <form id="imageUploadForm">
                                                            <input type="hidden" id="tokencsrf" name="_token"
                                                                value="<?php echo csrf_token(); ?>">
                                                            <div class="iupload">
                                                                @if(Auth::user()->image)
                                                                <img src="{{url('storage/app')}}/{{Auth::user()->image}}"
                                                                    id="blah" alt="your image" />
                                                                @else
                                                                <img id="blah"
                                                                    src="https://cdn.pixabay.com/photo/2017/03/27/13/28/man-2178721_960_720.jpg"
                                                                    alt="your image" />
                                                                @endif
                                                                <div class="iconUpload">
                                                                    <span> upload</span>
                                                                    <input accept="image/*" name="image" type='file'
                                                                        id="imgInp" />
                                                                </div>
                                                            </div>
                                                            <form>
                                                                @endauth
                                                    </div>
                                                    <h2></h2>
                                                    @if(!empty(Auth::user()->your_first_name))
                                                    <span class="free-account">{{Auth::user()->your_first_name}}</span>
                                                    @endif
                                                    <div id="dynamicMessageContainer">
                                                        <p id="dynamicMessage" class="text-warning"></p>
                                                    </div>
                                                    <span class="free-account" id="_plan_name">Free plan</span>
                                                    <a href="#" class="btn upgrade">Why upgrade?</a>
                                                    <a href="{{route('documentType')}}" class="btn upgrade">Verify your
                                                        ID</a>
                                                    <a href="javascript:;" id="pauseplan" onclick="PausePlan()"
                                                        class="btn upgrade">Pause Plan</a>
                                                    <a href="javascript:;" id="resumeplan" onclick="resumePlan()"
                                                        class="btn upgrade">Resume Plan <small id="remaining_days">
                                                        </small></a>
                                                    <!-- <a href="{{url('find-me-a-roomie/index')}}" class="btn upgrade">Create a new listings </small></a> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
            ================================================== -->
        <header id="header-container" class="header head-tr padding-fit">
            <!-- Header -->
            <div id="header" class="head-tr bottom">
                <div class="nk-container" id="headerBar">
                    <div class="header-logo">
                        <!-- Left Side Content -->
                        <!--  <div class="left-side"> -->
                        <!-- Logo -->
                        <div id="logo">
                            <a href="{{url('/')}}"><img src="{{url('public/assets/frontend/images/logonk.png')}}"
                                    data-sticky-logo="https://okroomie.com/public/assets/frontend/images/logonk.png"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="header-search">
                        <div id="search" class="search1">
                            <div class="findSearch-block">
                                <form>
                                    @csrf
                                    <div class="searchInner" data-toggle="modal" data-target="#exampleModalumesh">
                                        <i class="fa fa-search"></i>
                                        <input type="text" name="" placeholder="Search room & housemates"
                                            id="search-click" />
                                        <input type="hidden" name="latitute" id="cityLat">
                                        <input type="hidden" name="longitute" id="cityLng">
                                    </div>
                                </form>
                            </div>

                            <div class="popoinng_rock">

                                <div class="modal fade" id="exampleModalumesh" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <div class="modal-body">

                                                <div class="serachbar-popup" id="serachbar-popup">
                                                    <div class="inner-popup">
                                                        <div class="1st">
                                                            <form id="" action="{{route('searchOnHomePage')}}"
                                                                method="post">
                                                                @csrf
                                                                <ul>
                                                                    <li>
                                                                        <label class="contain">
                                                                            <input type="radio" value="Roomie"
                                                                                checked="checked" name="search_type" />
                                                                            <span class="checkmark">Roomie</span>
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label class="contain">
                                                                            <input type="radio" value="Room"
                                                                                checked="checked" name="search_type" />
                                                                            <span class="checkmark">Room </span>
                                                                        </label>
                                                                    </li>
                                                                    <li>
                                                                        <label class="contain">
                                                                            <input type="radio" value="Group"
                                                                                checked="checked" name="search_type" />
                                                                            <span class="checkmark">Group</span>
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                                <div class="searchinput">
                                                                    <input type="text" name="search_query"
                                                                        class="form-control"
                                                                        placeholder="Where Will You Go"
                                                                        id="search_query" required>
                                                                </div>
                                                                <div class="searchbutton">
                                                                    <button><i class="fa fa-search"></i> Search
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="secondnd">
                                                            <div class="Exploreacity">
                                                                <h3>Explore a city</h3>
                                                            </div>
                                                            <div class="city_list">
                                                                <a href="#"><i class="Search fa fa-map-pin"></i>
                                                                    <span>Sydeny</span></a>
                                                                <a href="#"><i class="Search fa fa-map-pin"></i>
                                                                    <span>Sydeny</span></a>
                                                                <a href="#"><i class="Search fa fa-map-pin"></i>
                                                                    <span>Sydeny</span></a>
                                                                <a href="#"><i class="Search fa fa-map-pin"></i>
                                                                    <span>Sydeny</span></a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div id="search" class="search2">
                            <div class="findSearch-block">
                                <form>
                                    @csrf
                                    <div class="searchInner" id="hhfhhfhfhh">
                                        <input type="text" name="" id="search-click2" />
                                        <div class="dnnnnd">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                            <span>search</span>
                                        </div>
                                    </div>
                                </form>

                                <div class="serachbar-popup" id="serachbar-popup2" style="display: none;">
                                    <div class="inner-popup">
                                        <form id="" action="{{route('searchOnHomePage')}}" method="post">
                                            @csrf
                                            <ul>
                                                <li>
                                                    <label class="contain">
                                                        <input type="radio" value="Roomie" checked="checked"
                                                            name="search_type" />
                                                        <span class="checkmark">Roomie</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="contain">
                                                        <input type="radio" value="Room" checked="checked"
                                                            name="search_type" />
                                                        <span class="checkmark">Room </span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="contain">
                                                        <input type="radio" value="Group" checked="checked"
                                                            name="search_type" />
                                                        <span class="checkmark">Group</span>
                                                    </label>
                                                </li>
                                            </ul>
                                            <div class="searchinput">
                                                <input type="text" name="search_query" class="form-control"
                                                    placeholder="Where Will You Go" id="search_query" required>
                                            </div>
                                            <div class="searchbutton">
                                                <button><i class="fa fa-search"></i> Search </button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-links">
                        <nav id="navigation" class="style-1 head-tr">
                            <ul id="responsive" class="nav">
                                <li class="resp-visible d-none" id="exampleModalumesh2" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-search" viewBox="0 0 16 16">
                                        <path
                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg><a href="javascript:;">Search</a>
                                </li>

                                <li>
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-star" viewBox="0 0 16 16">
                                        <path
                                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                    </svg> -->
                                    <a href="{{route('favourite')}}">Favorite</a>
                                </li>
                                @auth
                                @endauth

                                <li>
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-chat-dots" viewBox="0 0 16 16">
                                        <path
                                            d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                        <path
                                            d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z" />
                                    </svg> -->
                                    <a href="{{url('message')}}">Messages</a>
                                </li>

                                <li>
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-info-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path
                                            d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                    </svg> -->
                                    <a href="{{route('helpCenter')}}">Help Centre</a>
                                </li>
                                @guest

                                <li class="bor_uk resp-hide" id="gangaj"><a href="{{url('login')}}">Sign-up / Login</a>
                                </li>
                                <li class="bor_uk resp-visible"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
                                        <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z" />
                                        <path
                                            d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z" />
                                    </svg><a href="{{url('login')}}">Login</a></li>
                                @endguest
                                <li>
                                    <!-- Main Navigation -->
                                    @auth
                                    <div class="faly">
                                        <div class="header-user-menu user-menu add nkprofilelogin">
                                            @if(isset(Auth::user()->image))
                                            <div class="header-user-name dashmenu">
                                                <a data-toggle="modal" onclick='return check()'
                                                    data-target="#exampleModal" href="#">
                                                    <span class="position-relative img">
                                                        <img src="{{url('storage/app/') . '/' . Auth::user()->image}}"
                                                            alt="">
                                                    </span>
                                                    <span class="username">Hi,{{ Auth::user()->your_first_name}}!</span>
                                                </a>
                                            </div>
                                            @else
                                            <div class="header-user-name dashmenu">
                                                <a data-toggle="modal" onclick='return check()'
                                                    data-target="#exampleModal" href="#">
                                                    <span class="position-relative img">
                                                        <img src="{{url('storage/app/dummy.jpg')}}" alt="">
                                                    </span>
                                                    <span class="username">Hi,{{ Auth::user()->your_first_name}}!</span>
                                                </a>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    @endauth
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

        </header>

        <div class="clearfix"></div>
        <!-- Header Container / End -->
        @yield('contents')
        <!-- START FOOTER -->
        <section>
            <div class="row cookies" id="cookiesss" style="display: none;">
                <div class="col-md-10">
                    <p>We use cookies to perform analytics and to provide you with personalised content and ads that are
                        tailored to your interests. Our iOS Apps have been tailored to meet Apple’s App Tracking
                        Transparency requirements, meaning that these apps do not track our iOS App users for the
                        purposes
                        of personalised or targeted advertising. By clicking "Continue", you accept our use of cookies
                        as
                        outlined in our <a href="{{url('cookie_policy')}}">Cookie Policy</a>.</p>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary" onclick="acceptCookies();">Continue</button>
                </div>
            </div>
        </section>
        <footer class="first-footer rec-pro">
            <div class="top-footer">
                <div class="padding-fit">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 mb-3">
                            <div class="netabout mb-3">
                                <a href="{{url('/')}}" class="logo footerlogo">
                                    <img src="{{url('public/assets/frontend/images/logonk.png')}}" alt="netcom">
                                </a>
                            </div>
                            <div class="contactus mb-3">
                                <ul>

                                    <li>
                                        <div class="info">
                                            <a href="mailto:Support@Okroomie.com"
                                                class="text-white text-decoration-none">
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                                <span class="in-p ti">Support@Okroomie.com</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <p class="text-white mb-0">Okroomie.com is a rapidly growing peer-to-peer platform
                                    where users can list and find shared homes or roommates
                                    all around the world. With over 10,000 active listings an
                                    instant connection times, it’s never been easier to find
                                    your perfect match. Create your listing, explore options,
                                    and start connecting today!</p>
                            </div>
                            <div class="contactus mb-3" st>
                                <p>{{date('Y')}} © Copyright Okroomie.com </p>
                            </div>

                        </div>
                        <div class="col-lg-6 col-md-6 mt-2">
                            <div class="navigation mt-5">
                                <!--  <h3>Menu</h3> -->
                                <div class="nav-footer">
                                    <ul>
                                        <li><a href="{{url('about_us')}}">About us</a></li>
                                        <li><a href="{{url('ContactUs')}}">Contact us</a></li>
                                        <li><a href="{{url('howItWorks')}}">How it works</a></li>
                                        <li><a href="{{url('termsAndConditions')}}">Terms and conditions</a></li>
                                        <li><a href="{{url('privacyPolicy')}}">Privacy Policy</a></li>
                                        <li><a href="{{url('helpcenter')}}">FAQ</a></li>
                                        <li><a href="{{url('info')}}">Info</a></li>
                                        <li><a href="{{url('helpcenter')}}">Help Center</a></li>
                                        <li class="no-mgb"><a href="{{url('humanitarianContributions')}}">Humanitarian
                                                Contributions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </footer>
        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
        <!-- END FOOTER -->
        <!--register form -->
        <div class="login-and-register-form modal">
            <div class="main-overlay"></div>
            <div class="main-register-holder">
                <div class="main-register fl-wrap">
                    <div class="close-reg"><i class="fa fa-times"></i></div>
                    <h3>Welcome to <span>Ok<strong>Roomie</strong></span></h3>
                    <div class="soc-log fl-wrap">
                        <p>Login</p>
                        <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with Facebook</a>
                        <a href="{{route('login.google')}}" class="google-log">
                            <!-- <i class="fa fa-google"></i> --><img
                                src="https://okroomie.com/public/assets/frontend/images/g-png.png" width="25"
                                class="mr-2">
                            Log in with Google
                        </a>
                    </div>
                    <div class="log-separator fl-wrap"><span>Or</span></div>
                    <div id="tabs-container">
                        <ul class="tabs-menu">
                            <li class="current"><a href="#tab-1">Login</a></li>
                            <li><a href="#tab-2">Register</a></li>
                        </ul>
                        <div class="tab">
                            <div id="tab-1" class="tab-contents">
                                <div class="custom-form">
                                    <form method="post" id="form-login" name="form-login">
                                        @csrf
                                        <label>Username or Email Address * </label>
                                        <input name="email" type="text" onClick="this.select()" value="">
                                        <div class="errror">
                                            <p id="error_email_login"></p>
                                        </div>
                                        <label>Password * </label>
                                        <input name="password" type="password" onClick="this.select()" value="">
                                        <div class="errror">
                                            <p id="error_password_login"></p>
                                        </div>
                                        <button type="submit" class="log-submit-btn"><span>Log In</span></button>
                                        <div class="clearfix"></div>
                                        <div class="filter-tags">
                                            <input id="check-a" type="checkbox" name="check">
                                            <label for="check-a">Remember me</label>
                                        </div>
                                    </form>
                                    <div class="lost_password">
                                        <a href="#">Lost Your Password?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab">
                                <div id="tab-2" class="tab-contents">
                                    <div class="custom-form">
                                        <!-- Validation Errors -->
                                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                        <form method="post" name="registerform" id="form-register"
                                            class="main-register-form" id="main-register-form2">
                                            @csrf
                                            <label>First Name * </label>
                                            <input name="name" type="text" value="">
                                            <div class="errror">
                                                <p id="error_name"></p>
                                            </div>
                                            <label>Email Address *</label>
                                            <input name="email" type="text" value="">
                                            <div class="errror">
                                                <p id="error_email"></p>
                                            </div>
                                            <label>Password *</label>
                                            <input name="password" type="password" value="">
                                            <div class="errror">
                                                <p id="error_password"></p>
                                            </div>
                                            <label>Confirm Password *</label>
                                            <input name="password_confirmation" type="password" value="">
                                            <button type="submit" class="log-submit-btn"><span>Register</span></button>
                                        </form>
                                    </div>
                                    <div id="msz"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--register form end -->
        <!-- START PRELOADER -->
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>
        <!-- END PRELOADER -->
        <!-- ARCHIVES JS -->
        <script src="{{url('public/assets/frontend/js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{url('public/assets/frontend/js/rangeSlider.js')}}"></script>
        <script src="{{url('public/assets/frontend/js/tether.min.js')}}"></script>
        <script src="{{url('public/assets/frontend/js/moment.js')}}"></script>
        <script src="{{url('public/assets/frontend/js/bootstrap.min.js')}}"></script>
        <script src="{{url('public/assets/frontend/js/mmenu.min.js')}}"></script>
        <script src="{{url('public/assets/frontend/js/mmenu.js')}}"></script>
        <script src="{{url('public/assets/frontend/js/aos.js')}}"></script>
        <script src="{{url('public/assets/frontend/js/aos2.js')}}"></script>
        <script src="{{url('public/assets/frontend/js/animate.js')}}"></script>
        <script src="{{url('public/assets/frontend/js/slick.min.js')}}"></script>
        <script src="{{url('public/assets/frontend/js/fitvids.js')}}"></script>
        <script src="{{url('public/assets/frontend/js/jquery.waypoints.min.js')}}"></script>
        <script src="{{url('public/assets/frontend/js/typed.min.js')}}"></script>
        <script src="{{url('public/assets/frontend/js/jquery.counterup.min.js')}}"></script>
        <script src="{{url('public/assets/frontend/js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{url('public/assets/frontend/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{url('public/assets/frontend/js/smooth-scroll.min.js')}}"></script>
        <script src="{{url('public/assets/frontend/js/lightcase.js')}}"></script>
        <script src="{{url('public/assets/frontend/js/search.js')}}"></script>
        <!-- <script src="{{url('public/assets/frontend/js/owl.carousel.js')}}"></script> -->
        <script src="{{url('public/assets/frontend/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{url('public/assets/frontend/js/ajaxchimp.min.js')}}"></script>
        <script src="{{url('public/assets/frontend/js/newsletter.js')}}"></script>
        <script src="{{url('public/assets/frontend/js/jquery.form.js')}}"></script>
        <script src="{{url('public/assets/frontend/js/jquery.validate.min.js')}}"></script>
        <script src="{{url('public/assets/frontend/js/searched.js')}}"></script>
        <script src="{{url('public/assets/frontend/js/forms-2.js')}}"></script>
        <script src="{{url('public/assets/frontend/js/map-style2.js')}}"></script>
        <script src="{{url('public/assets/frontend/js/range.js')}}"></script>
        <script src="{{url('public/assets/frontend/js/color-switcher.js')}}"></script>
        <script type="text/javascript"
            src="{{url('public/assets/frontend/list-my-place/js/owl.carousel.min.js')}}"></script>
        <script>
            $(window).on('scroll load', function() {

                $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));

            });
        </script>


        <script>
            function acceptCookies() {

                document.cookie = "cookiesAccepted=true; expires=Thu, 01 Jan 2099 00:00:00 UTC; path=/";


                document.getElementById("cookiesss").style.display = "none";
            }

            if (document.cookie.indexOf("cookiesAccepted=true") !== -1) {

                document.getElementById("cookiesss").style.display = "none";
            } else {

                document.getElementById("cookiesss").style.display = "flex";
            }
        </script>
        <!-- Cookies end -->
        <!-- Slider Revolution scripts -->
        <script src="{{url('public/assets/frontend/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
        <script src="{{url('public/assets/frontend/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
        <script>
            var typed = new Typed('.typed', {

                strings: ["House ^2000", "Apartment ^2000", "Plaza ^4000"],

                smartBackspace: false,

                loop: true,

                showCursor: true,

                cursorChar: "|",

                typeSpeed: 50,

                backSpeed: 30,

                startDelay: 800

            });
        </script>
        <script>
            $('.slick-lancers').slick({

                infinite: false,

                slidesToShow: 4,

                slidesToScroll: 1,

                dots: true,

                arrows: false,

                adaptiveHeight: true,

                responsive: [{

                    breakpoint: 1292,

                    settings: {

                        slidesToShow: 2,

                        slidesToScroll: 2,

                        dots: true,

                        arrows: false

                    }

                }, {

                    breakpoint: 993,

                    settings: {

                        slidesToShow: 2,

                        slidesToScroll: 2,

                        dots: true,

                        arrows: false

                    }

                }, {

                    breakpoint: 769,

                    settings: {

                        slidesToShow: 1,

                        slidesToScroll: 1,

                        dots: true,

                        arrows: false

                    }

                }]

            });
        </script>
        <!--         <script>
            $('.job_clientSlide').owlCarousel({
            
                items: 2,
            
                loop: true,
            
                margin: 30,
            
                autoplay: false,
            
                nav: true,
            
                smartSpeed: 1000,
            
                slideSpeed: 1000,
            
                navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
            
                dots: false,
            
                responsive: {
            
                    0: {
            
                        items: 1
            
                    },
            
                    991: {
            
                        items: 3
            
                    }
            
                }
            
            });
            
            
            
            </script> -->
        <!-- 
            <script>
            
                $('.style2').owlCarousel({
            
                    loop: true,
            
                    margin: 0,
            
                    dots: false,
            
                    autoWidth: false,
            
                    autoplay: true,
            
                    autoplayTimeout: 5000,
            
                    responsive: {
            
                        0: {
            
                            items: 2,
            
                            margin: 20
            
                        },
            
                        400: {
            
                            items: 2,
            
                            margin: 20
            
                        },
            
                        500: {
            
                            items: 3,
            
                            margin: 20
            
                        },
            
                        768: {
            
                            items: 4,
            
                            margin: 20
            
                        },
            
                        992: {
            
                            items: 5,
            
                            margin: 20
            
                        },
            
                        1000: {
            
                            items: 7,
            
                            margin: 20
            
                        }
            
                    }
            
                });
            
            
            
            </script> -->

        <!-- MAIN JS -->
        <script src="{{url('public/assets/frontend/js/script.js')}}"></script>
        <!-- toastr js -->
        <script src="{{url('public/assets/toastr/js/toastr.min.js')}}"></script>
        <!-- end toastr js -->
    </div>
    <!-- Wrapper / End -->
</body>
<!-- Mirrored from code-theme.com/html/findhouses/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Feb 2022 11:22:39 GMT -->

</html>
<script>
    $('#block-user-message').delay(3000).slideUp(300);
</script>
<!-- <script type="text/javascript">
    // When the user scrolls the page, execute myFunction
    window.onscroll = function() {
        myFunction()
    };
    
    // Get the header
    var search = document.getElementById("search");
    var randomStuff = document.getElementById("randomStuff");
    var headerBar = document.getElementById("headerBar");
    
    // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
        if (window.pageYOffset > 150) {
            search.classList.add("stickynk");
            randomStuff.classList.add("shiftDown");
            headerBar.classList.add("downShadow");
        } else {
            search.classList.remove("stickynk");
            randomStuff.classList.remove("shiftDown");
            headerBar.classList.remove("downShadow");
        }
    }
    </script> -->
<script>
    //personal data send
    $(document).ready(function(e) {
        $('#updatePersonalData').on('submit', (function(e) {

            e.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                type: 'POST',
                url: "{{route('myAccountSettingUpdate')}}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    if (data.success != false) {

                        $("#showmessagehere").text(data.message);
                        $("#showmessagehere").addClass("text-success");
                    } else {
                        $("#showmessagehere").text(data.message);
                        $("#showmessagehere").addClass("text-danger");
                    }


                },
                error: function(data) {

                }
            });
        }));


    });

    //personal data send end

    $(document).ready(function(e) {
        $('#imageUploadForm').on('submit', (function(e) {

            e.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                type: 'POST',
                url: "upload_image_dashboard",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    // console.log("success");
                    // console.log(data);
                },
                error: function(data) {
                    // console.log("error");
                    // console.log(data);
                }
            });
        }));

        $("#imgInp").on("change", function() {
            $("#imageUploadForm").submit();
        });
    });


    function check() {
        $.get("{{route('dashboardData')}}", function(data, status) {
            $.get("{{route('getCurrentPlan2')}}", function(plan, status2) {
                console.log(plan.roomie_active_plan_id);

                // alert(status2);

            });



            token = $("input[name='_token']").val();
            $("#roomDataSet").html("");
            $("#roomieDataSet").html("");
            remaining_days = '(' + data.remaining_days + ' days remaining )';
            $("#remaining_days").html(remaining_days);
            if (data.pause_resume_status == 1) {
                $("#pauseplan").html('Paused!');
            }
            if (data.pause_resume_status == 2) {
                $("#pauseplan").html('Pause Plan');
            }


            str = data.free_plan_name.toLowerCase().replace(/\b[a-z]/g, function(letter) {
                return letter.toUpperCase();
            });


            $("#_plan_name").html(str);






            $.each(data.room, function(key, item) {
                $.post("{{route('convertEncryption')}}", {
                    id: item.id,
                    _token: token
                }, function(ress) {
                    let encryptedIDRoom = ress;


                    let edit_resume2 = '';
                    let pending2 = '';
                    let urlr = '';
                    let urlroom = '';
                    if (item.completed_step != 'yes') {
                        urlr = window.location.origin + '/find-me-a-room/index';
                        pending2 = 'Pending'
                        edit_resume2 = 'Resume';
                    } else {
                        urlroom = '{{route("editListingRoom", '
                        ')}}';
                        urlr = urlroom + encryptedIDRoom;
                        pending2 = '&#10004';
                        edit_resume2 = 'Edit';
                    }

                    $("#roomDataSet").append('  <div class="listing">\
                                        <div class="labels">\
                                            <div class="status-label pending">\
                                                <span>' + pending2 + '</span>\
                                            </div>\
                                        </div>\
                                        <a class="listing-link" href="#">\
                                            <div class="icons"></div>\
                                            <span class="link-title">' + item.suburb + '</span><a href="' + urlr + '">\
                                            <span class="link-edit"><i class="fa fa-pencil" aria-hidden="true"></i><span>' + edit_resume2 + '</span></span></a>\
                                        </a>\
                                    </div>');
                });
            });

            $.each(data.data, function(key1, item1) {
                $.post("{{route('convertEncryption')}}", {
                    id: item1.id,
                    _token: token
                }, function(res) {
                    var encryptedID = res;


                    let edit_resume = '';
                    let pending = '';
                    let url = '';
                    property_address = '';
                    if (item1.property_address == null) {
                        property_address = item1.listing_title;
                    } else {
                        property_address = item1.property_address;
                    }
                    if (item1.completed_step != 'yes') {
                        _rowid = item1.id;
                        url = window.location.origin + '/find-me-a-roomie/index/' + _rowid;
                        pending = 'Pending'
                        edit_resume = 'Resume';
                    } else {
                        url = '{{route("editListingRoomie", '
                        ')}}';
                        url = url + encryptedID;

                        pending = '&#10004';
                        edit_resume = 'Edit';
                    }




                    $("#roomieDataSet").append('  <div class="listing">\
                                       <div class="labels">\
                                           <div class="status-label pending">\
                                               <span>' + pending + '</span>\
                                           </div>\
                                       </div>\
                                       <a class="listing-link" href="#">\
                                           <div class="icons"></div>\
                                           <span class="link-title">' + property_address + '</span><a href="' + url + '">\
                                           <span class="link-edit"><i class="fa fa-pencil" aria-hidden="true"></i><span>' + edit_resume + '</span></span></a>\
                                       </a>\
                                   </div>');
                });

            });


        });
    }

    function getIncriptedID(id) {

        token = $("input[name='_token']").val();
        $.post("{{route('convertEncryption')}}", {
            id: id,
            _token: token
        }, function(res) {
            return res;
        });


    }

    imgInp.onchange = evt => {
        const [file] = imgInp.files
        if (file) {
            blah.src = URL.createObjectURL(file)



            // let token=$("#tokencsrf").val();
            // let image1=$("#imgInp").val();

            // $.post("/upload_image_dashboard",{image:image1,_token:token},function(data){
            //     alert(data);

            // });
        }
    }

    function myAccountSetting() {
        $.get("{{route('myAccountSetting')}}", function(data) {
            $("#your_first_name_input").val(data.your_first_name);
            $("#email_input").val(data.email);
            if (data.allowed_verified_members_to_contact != 0) {
                $('#allowed_verified_members_to_contact').prop('checked', true);
            } else {
                $('#allowed_verified_members_to_contact').prop('checked', false);
            }
            $("#showmessagehere").html('');
        });
    }

    function deactivateAccount() {
        res = confirm("Are You Sure want to Deactivate!");
        if (res) {
            $.get("{{route('deactivateAccount')}}", function(data) {
                if (data.status != 400) {

                    $("#showmessagehere").text(data.message);
                    $("#showmessagehere").addClass("text-success");
                    window.location.href = window.location.origin;
                } else {
                    $("#showmessagehere").text(data.message);
                    $("#showmessagehere").addClass("text-danger");
                    window.location.href = window.location.origin;
                }
            });

        }

    }


    $(document).ready(function(e) {
        $('#userChangePassword').on('submit', (function(e) {

            e.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                type: 'POST',
                url: "{{route('changePassword')}}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    // console.log("success");

                    if (data.status === 200) {
                        $("#changePasswordMessage").html(data.message);
                        $("#changePasswordMessage").addClass('text-primary');
                    } else {
                        $("#changePasswordMessage").html(data.message);
                        $("#changePasswordMessage").addClass('text-danger');
                    }
                },
                error: function(data) {
                    // console.log("error");

                }
            });
        }));


    });

    //reset password
    $(document).ready(function(e) {
        $('#resetPassword').on('submit', (function(e) {

            e.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                type: 'POST',
                url: "{{route('password.email')}}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    console.log(data);

                    if (data.status === 200) {
                        $("#changePasswordMessage").html(data.message);
                        $("#changePasswordMessage").addClass('text-primary');
                    } else {
                        $("#changePasswordMessage").html(data.message);
                        $("#changePasswordMessage").addClass('text-danger');
                    }
                },
                error: function(data) {
                    // console.log("error");

                }
            });
        }));


    });

    //verify mobile number
    $(document).ready(function(e) {
        $('#verifymobilenumber').on('submit', (function(e) {
            e.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                type: 'POST',
                url: "{{route('verifyMobileNumber')}}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    if (data.status === 200) {
                        $("#containerforotp").css("display", "block");
                        $("#verfifymobilenumbermessage").removeClass('text-danger');
                        $("#verfifymobilenumbermessage").html(data.message);
                        $("#verfifymobilenumbermessage").addClass('text-primary');
                        setTimeout(function() {
                            $("#verfifymobilenumbermessage").html('');

                        }, 10000)

                    } else {
                        $("#verfifymobilenumbermessage").removeClass('text-primary');
                        $("#verfifymobilenumbermessage").html(data.message);
                        $("#verfifymobilenumbermessage").addClass('text-danger');
                    }
                },
                error: function(data) {
                    // console.log("error");

                }
            });
        }));


    });



    function resendotp() {
        $("#verifymobilenumber").submit();

    }

    //search On Home Page
    $(document).ready(function(e) {
        $('#searchOnHomePage').on('submit', (function(e) {
            alert();
            e.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                type: 'POST',
                url: "{{route('searchOnHomePage')}}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    console.log(data);

                },
                error: function(data) {
                    console.log("error");

                }
            });
        }));


    });



    function getPaymentData() {
        $("#payment-history-append").html('');
        $.get("{{route('paymentHistory')}}", function(data) {

            if (data.status == 200) {
                $.each(data.payment, function(key, item) {

                    $("#payment-history-append").append('<tr><td><button class="used">' + item.used + '</button></td><td>' + item.plan + '</td><td>' + item.amount + '</td><td>' + item.day + '</td><td>' + item.starts + '</td><td>' + item.ends + '</td><td>' + item.starts + '</td><td>email invoice</td></tr>');

                });
            }


        });
    }

    function PausePlan() {
        $("#dynamicMessage").html('');

        $.get("{{route('pauseplan')}}", function(data) {
            if (data.status == 200) {
                $.get("{{route('dashboardData')}}", function(data2, status) {
                    var remaining_days = '(' + data2.remaining_days + ' days remaining )';

                    $("#resumeplan").html('Resume Plan');
                    $("#resumeplan").append('<small id="remaining_days"> </small>');
                    $("#remaining_days").html(remaining_days);


                });
                $("#pauseplan").html(data.message);
            } else {
                $("#dynamicMessage").html(data.message);
            }





        });
    }

    function resumePlan() {
        $("#dynamicMessage").html('');
        $.get("{{route('resumeplan')}}", function(data) {
            if (data.status == 200) {
                $("#pauseplan").html('Pause Plan');
                $("#resumeplan").html(data.message);
            } else {
                $("#dynamicMessage").html(data.message);
            }

        });
    }
</script>
<script>
    function initialize() {
        var options = {
            types: ["(cities)"],
            componentRestrictions: {
                country: "AUS"
            },
        };
        var input = document.getElementById("search_query");
        var autocomplete = new google.maps.places.Autocomplete(input, options);
        google.maps.event.addListener(autocomplete, "place_changed", function() {
            var place = autocomplete.getPlace();
            document.getElementById("search_query").value = place.name;
            document.getElementById("cityLat").value = place.geometry.location.lat();
            document.getElementById("cityLng").value = place.geometry.location.lng();
            change_map();
        });
    }
    google.maps.event.addEventListener()(window, "load", initialize);
</script>
<script>
    $(document).ready(function() {
        if (!$.browser.webkit) {
            $('.wrapper').html('<p>Sorry! Non webkit users. :(</p>');
        }
    });
</script>
@stack('user-register')
@stack('user-login')
@stack('carousel_script')
@stack('send_message')