@extends('layouts.frontendMaster')
@section('contents')
<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>


<style>
    * {
        font-family: 'Open Sans';
    }


    section.duble_sms {
        font-family: 'Open Sans';

    }

    div#lick {
        display: flex;
    }



    .sms_don .hh_sms {
        margin-bottom: 33px;
        /* display: block; */
    }

    .sms_don .hh_sms .nice_img {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        overflow: hidden;
        display: block;
    }

    .hh_sms {
        display: flex;
        justify-content: flex-start;
        align-content: center;
    }

    .text_jaka {
        background: #59616E;
        width: fit-content;
        text-align: center;
        margin: auto;
        margin-bottom: 20px;
        color: white;
        padding: 5px 30px;
        border-radius: 30px;
        font-size: 12px;
        font-weight: 500;
    }


    .text_jakagggggggg p {
    text-align: center;
    font-size: 0.75rem;
}



.text_jakagggggggg p a {
    text-decoration: none;
}

    .sms_don .hh_sms .left_rrt {
        width: 80%;
        background: #F8F8F9;
        padding: 20px;
        border-radius: 10px;
        margin-left: 10px;
        padding-bottom: 0px;
    }



    .date h6 {
        font-size: 12px;
        color: gray;
    }

    .sms_don {
        padding: 30px 15px;
        height: 60vh;
        overflow: auto;
    }

    .sms_don .hh_sms .nice_img {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        overflow: hidden;

    }

    div#lick span {
        width: 5px !important;
        height: 5px !important;
        display: block;
        background: #444548;
        border-radius: 50%;
        margin: 0px 2px;
    }

    .up_right .dropdown {
        margin-top: 30px;
    }

    .up_left {
        margin-top: 5px;
    }

    .right_con {
        display: flex;
        justify-content: space-between;
        width: 100%;
    }

    .right_con p {
        padding: 0;
        margin: 0;
    }

    .right_con h4.name {
        /* font-size: 14px; */
        text-transform: capitalize;
        font-weight: 700;
        color: #2f3a4a;
        display: inline-block;
        font-size: 1rem;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .IMg_con .nice_img {
        width: 80px !important;
        height: 65px !important;
        border-radius: 50%;
        overflow: hidden;
        position: relative;
        /* display: flex; */
    }

    .IMg_con .fffgghhyytttg {
        margin-left: 15px;
        width: 100%;
    }

    .nice_img img {
        object-fit: contain;
        width: 100%;
        height: 100%;
    }

    .IMg_con {
        display: flex;
        align-items: center;
        align-content: center;
        width: 100% !important;
    }

    .IMg_con .fffgghhyytttg {
        margin-left: 15px;
    }

    .sms_under_man_flex {
        display: flex;
    }

    .sms_under_man {
        margin-bottom: 30px;
    }

    section.duble_sms {
        background: #F7F8F8;
    }

    span.dote {
        position: absolute;
        left: 0;
        top: 0;
        width: 10px;
        height: 10px;
        display: block;
        background: #0DC142;
        z-index: 9999;
    }

    p.name_sms {
        margin: 0;
    }

    .right_con {
        display: flex;
        justify-content: space-between;
        width: 100%;
    }

    .IMg_con {
        display: flex;
        align-items: center;
        align-content: center;
        justify-content: space-between;
    }


    button.sms_button_new {
        background: #292B32;
        color: white;
        padding: 10px 10px;
        width: 100%;
        margin-bottom: 20px;
        cursor: pointer;
    }

    .right_con h4.name {
        font-size: 14px;
        text-transform: capitalize;
        font-weight: 700;
    }

    .IMg_con .fffgghhyytttg p.name_sms {
        font-size: 14px;
    }

    .IMg_con .fffgghhyytttg p {
        font-size: 14px;
    }

    .dote {
        background: #0DC143;
        width: 5px;
        height: 5px;
        border-radius: 50%;
        position: absolute;
        top: 30px;
        left: 1px;
        z-index: 99999 !important;
    }

    .sms_under_man_flex {
        display: flex;
        position: relative;
    }

    .sms_under_man_pppppppp {
        height: 90vh;
        overflow: auto;
        /* margin: 70px 0px; */
        margin-top: 0;
        background: #FFFFFF;
    }

    .sms_under_man {
        padding: 0px 20px;
    }

    .sms_under_man {
        padding: 0px 20px;
    }

    .sms_Top_gg {
        padding: 10px;
    }

    .sms_Top_gg a {

        color: #0EC143;
        text-align: center;
        font-size: 14px;
        font-weight: 600;
    }

    h5.top_contant_uuu {
        text-align: center;
        font-size: 16px;
        text-transform: capitalize;
    }

    .right_con p {
        color: #120e0e85;
    }

    .img_tt_yy {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        overflow: hidden;
    }

    .left_right {
        display: flex;
        justify-content: space-between;
    }

    .smsm_karrna {
        background: #FFFFFF;
    }

    section.duble_sms .col-md-7 {
        background: #FFFFFF;
        margin: 0 !important;
        padding: 0 !important;
        padding: 0px 0px !important;
    }

    section.duble_sms .col-md-5 {
        background: #FFFFFF;
        margin: 0 !important;
        padding: 0 !important;
        padding: 0px 0px !important;
    }


    .smsm_karrna .left_right .up_left {
        margin-bottom: 5px;
    }


    div#myDIVttt a {
        display: block;
        font-size: 14px;
        color: black;
        padding: 5px 12px;
        border-bottom: 1px solid #ddd;
    }

    div#myDIVttt {
        display: flex;
        flex-direction: column;
        background: white;
        position: absolute;
        top: 19px;
        width: 130px;
        right: 0;
        /* padding: 10px; */
        border: 2px solid #ddd;
    }

    div#myDIVttt {
        display: flex;
        flex-direction: column;
        background: white;
        position: absolute;
        top: 19px;
        width: 140px;
        right: -15px;
        /* padding: 10px; */
        border: 1px solid #ddd;
        border-right: none;
        z-index: 9;
    }

    .left_right {
        padding: 0px 15px;
        border-bottom: 1px solid #ddd;
    }

    ul li {
        padding: 10px 0px;
    }

    .up_left {
        display: flex;
    }

    .up_left p {
        margin-bottom: 0px;
        margin-top: 10px;
        margin-left: 10px;
        font-size: 14px;
        text-transform: capitalize;
        font-weight: 700;
        color: #333339;
    }

    div#hhhhhbhnnnhhj {
        margin-top: 10px;
    }

    div#hhhhhbhnnnhhj p {
        margin-bottom: 0 !important;
        font-size: 14px;
    }



    div#cctan p {
        color: #6A6666;
        font-weight: 500;
    }


    div#client {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        /* width: 80%; */
        /* background: #008FB4; */
    }



    div#client .left_rrt {
        width: 65% ;
        background: #008FB4;
        color: white;
    }



    div#client .left_rrt .date h6 {
        color: white;
    }

    .qwsdklo_ppllkk {
        background: white;
        display: flex;
        position: relative;
    }



    .qwsdklo_ppllkk textarea {
        width: 100%;
    }

    .qwsdklo_ppllkk textarea {
        background: white;
        resize: none;
        border-radius: 0px !important;
        font-size: 14px;
    }

    button.send-button {
        position: absolute;
        right: 20px;
        top: 15px;
    }

    button.send-button {
        background: transparent;
    }

    button.send-button i.fa.fa-paper-plane {
        color: #979BA3;
        font-size: 20px;
    }

    section.duble_sms {
        background: #F7F8F8;
        margin-top: 20px;
    }

    div#ut {
        padding: 20px;
        width: fit-content;
        padding-bottom: 0px;
    }

    div#ut p.client_sms {
        margin: 0px;

    }

    div#jagodhar {
    width: fit-content !important;
}
</style>


<section class="duble_sms">

    <div class="container">
        <div class="row">
            <div class="col-md-5">

                <div class="sms_under_man_pppppppp">
                    <div class="sms_Top_gg">
                        <h5 class="top_contant_uuu"><a href="#">9 unread messages </a></h5>
                    </div>

                    <div class="sms_under_man">
                        <div class="sms_under_man_flex">

                            <div class="IMg_con">
                                <div class="nice_img">

                                    <img src="https://okroomie.com/public/assets/frontend/images/logonk.png">
                                </div>
                                <div class="fffgghhyytttg">
                                    <div class="right_con">
                                        <h4 class="name">Sophie</h4>
                                        <p>Automated message system</p>
                                    </div>

                                    <p class="name_sms">Okay thanks for your return!</p>
                                </div>
                            </div>




                        </div>


                    </div>


                    <div class="sms_under_man">
                        <div class="sms_under_man_flex">

                            <div class="IMg_con">
                                <div class="dote"></div>
                                <div class="nice_img">


                                    <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80">
                                </div>
                                <div class="fffgghhyytttg">
                                    <div class="right_con">
                                        <h4 class="name">Sophie</h4>
                                        <p>Online</p>
                                    </div>

                                    <p class="name_sms">Okay thanks for your return!</p>
                                </div>
                            </div>




                        </div>


                    </div>



                    <div class="sms_under_man">
                        <div class="sms_under_man_flex">

                            <div class="IMg_con">
                                <div class="nice_img">

                                    <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=580&amp;q=80">
                                </div>
                                <div class="fffgghhyytttg">
                                    <div class="right_con">
                                        <h4 class="name">Sophie</h4>
                                        <p>Online Yesterday</p>
                                    </div>

                                    <p class="name_sms">Okay thanks for your return!</p>
                                </div>
                            </div>




                        </div>


                    </div>

                    <div class="sms_under_man">
                        <div class="sms_under_man_flex">

                            <div class="IMg_con">
                                <div class="nice_img">

                                    <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=580&amp;q=80">
                                </div>
                                <div class="fffgghhyytttg">
                                    <div class="right_con">
                                        <h4 class="name">Sophie</h4>
                                        <p>Online 3 days ago</p>
                                    </div>

                                    <p class="name_sms">Okay thanks for your return!</p>
                                </div>
                            </div>




                        </div>


                    </div>

                    <div class="sms_under_man">
                        <div class="sms_under_man_flex">

                            <div class="IMg_con">
                                <div class="nice_img">

                                    <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=580&amp;q=80">
                                </div>
                                <div class="fffgghhyytttg">
                                    <div class="right_con">
                                        <h4 class="name">Sophie</h4>
                                        <p>Online Yesterday</p>
                                    </div>

                                    <p class="name_sms">Okay thanks for your return!</p>
                                </div>
                            </div>




                        </div>


                    </div>

                    <div class="sms_under_man">
                        <div class="sms_under_man_flex">

                            <div class="IMg_con">
                                <div class="nice_img">

                                    <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=580&amp;q=80">
                                </div>
                                <div class="fffgghhyytttg">
                                    <div class="right_con">
                                        <h4 class="name">Sophie</h4>
                                        <p>Online 3 days ago</p>
                                    </div>

                                    <p class="name_sms">Okay thanks for your return!</p>
                                </div>
                            </div>




                        </div>


                    </div>

                    <div class="sms_under_man">
                        <div class="sms_under_man_flex">

                            <div class="IMg_con">
                                <div class="nice_img">

                                    <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=580&amp;q=80">
                                </div>
                                <div class="fffgghhyytttg">
                                    <div class="right_con">
                                        <h4 class="name">Sophie</h4>
                                        <p>Online Yesterday</p>
                                    </div>

                                    <p class="name_sms">Okay thanks for your return!</p>
                                </div>
                            </div>




                        </div>


                    </div>

                    <div class="sms_under_man">
                        <div class="sms_under_man_flex">

                            <div class="IMg_con">
                                <div class="nice_img">

                                    <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=580&amp;q=80">
                                </div>
                                <div class="fffgghhyytttg">
                                    <div class="right_con">
                                        <h4 class="name">Sophie</h4>
                                        <p>Online 3 days ago</p>
                                    </div>

                                    <p class="name_sms">Okay thanks for your return!</p>
                                </div>
                            </div>




                        </div>


                    </div>

                    <div class="sms_under_man">
                        <div class="sms_under_man_flex">

                            <div class="IMg_con">
                                <div class="nice_img">

                                    <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=580&amp;q=80">
                                </div>
                                <div class="fffgghhyytttg">
                                    <div class="right_con">
                                        <h4 class="name">Sophie</h4>
                                        <p>Online Yesterday</p>
                                    </div>

                                    <p class="name_sms">Okay thanks for your return!</p>
                                </div>
                            </div>




                        </div>


                    </div>

                    <div class="sms_under_man">
                        <div class="sms_under_man_flex">

                            <div class="IMg_con">
                                <div class="nice_img">

                                    <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=580&amp;q=80">
                                </div>
                                <div class="fffgghhyytttg">
                                    <div class="right_con">
                                        <h4 class="name">Sophie</h4>
                                        <p>Online Yesterday</p>
                                    </div>

                                    <p class="name_sms">Okay thanks for your return!</p>
                                </div>
                            </div>




                        </div>


                    </div>

                    <div class="sms_under_man">
                        <div class="sms_under_man_flex">

                            <div class="IMg_con">
                                <div class="nice_img">

                                    <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=580&amp;q=80">
                                </div>
                                <div class="fffgghhyytttg">
                                    <div class="right_con">
                                        <h4 class="name">Sophie</h4>
                                        <p>Online Yesterday</p>
                                    </div>

                                    <p class="name_sms">Okay thanks for your return!</p>
                                </div>
                            </div>




                        </div>


                    </div>

                    <div class="sms_under_man">
                        <div class="sms_under_man_flex">

                            <div class="IMg_con">
                                <div class="nice_img">

                                    <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=580&amp;q=80">
                                </div>
                                <div class="fffgghhyytttg">
                                    <div class="right_con">
                                        <h4 class="name">Sophie</h4>
                                        <p>Online Yesterday</p>
                                    </div>

                                    <p class="name_sms">Okay thanks for your return!</p>
                                </div>
                            </div>




                        </div>


                    </div>

                    <div class="sms_under_man">
                        <div class="sms_under_man_flex">

                            <div class="IMg_con">
                                <div class="nice_img">

                                    <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=580&amp;q=80">
                                </div>
                                <div class="fffgghhyytttg">
                                    <div class="right_con">
                                        <h4 class="name">Sophie</h4>
                                        <p>Online Yesterday</p>
                                    </div>

                                    <p class="name_sms">Okay thanks for your return!</p>
                                </div>
                            </div>




                        </div>


                    </div>

                    <div class="sms_under_man">
                        <div class="sms_under_man_flex">

                            <div class="IMg_con">
                                <div class="nice_img">

                                    <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=580&amp;q=80">
                                </div>
                                <div class="fffgghhyytttg">
                                    <div class="right_con">
                                        <h4 class="name">Sophie</h4>
                                        <p>Online Yesterday</p>
                                    </div>

                                    <p class="name_sms">Okay thanks for your return!</p>
                                </div>
                            </div>




                        </div>


                    </div>

                    <div class="sms_under_man">
                        <div class="sms_under_man_flex">

                            <div class="IMg_con">
                                <div class="nice_img">

                                    <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=580&amp;q=80">
                                </div>
                                <div class="fffgghhyytttg">
                                    <div class="right_con">
                                        <h4 class="name">Sophie</h4>
                                        <p>Online Yesterday</p>
                                    </div>

                                    <p class="name_sms">Okay thanks for your return!</p>
                                </div>
                            </div>




                        </div>


                    </div>

                </div>

            </div>
            <div class="col-md-7">
                <div class="smsm_karrna">
                    <div class="left_right">
                        <div class="up_left">
                            <div class="img_tt_yy">
                                <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80">
                            </div>
                            <p>Sophie</p>
                        </div>
                        <div class="up_right">
                            <div class="dropdown">

                                <div class="godiya" id="lick" onclick="myFunctionss()">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>

                                <div class="" id="myDIVttt" style="display: none;">
                                    <a class="" href="#">Action</a>
                                    <a class="" href="#">Another action</a>
                                    <a class="" href="#">Something else here</a>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="smsm_karrna">
                    <div class="left_right">
                        <div class="up_left" id="cctan">

                            

                            <a href="javascript:;">Sophie has no active listings</a>
                        </div>
                        <div class="up_right">
                            <div class="dropdown" id="hhhhhbhnnnhhj">

                            <a href="javascript:;">006 24 ••• ••• •••</a>


                            </div>
                        </div>
                    </div>

                </div>


                <div class="sms_don">

                    <div class="text_jaka">Your response rate is currently
                        67%
                    </div>
                    <div class="text_jakagggggggg"><p>Sophie sent a message re: <a href> Clayton, Melbourne </a> </p>
                    </div>
                    <div class="hh_sms">
                        <div class="nice_img">

                            <img src="https://okroomie.com/public/assets/frontend/images/logonk.png">
                        </div>
                        <div class="left_rrt">
                            <p>This is a friendly reminder from the .au team that your upgraded plan is going to expire within the next 2 days! So make the most of it and message as many Early Bird listings while you can.
                                <br>
                                If you would like to continue to have access to all the features of an upgraded account then you can go ahead and upgrade your account again and we will start your new plan as soon as your current plan expires. This will prevent any interruption to your upgraded features.
                            </p>

                            <button class="sms_button_new">Extend your upgraded account now</button>
                            <p>
                            <ul>
                                <li>You can contact anyone on .au including the latest Early Bird listings.</li>
                                <li>You can contact anyone on .au including the latest Early Bird listings.</li>
                                <li>You can contact anyone on .au including the latest Early Bird listings.</li>
                                <li>You can contact anyone on .au including the latest Early Bird listings.</li>
                            </ul>

                            </p>

                            <div class="date">
                                <h6>23 February 8:57 pm</h6>
                            </div>

                        </div>







                    </div>

                    <div class="hh_sms">
                        <div class="nice_img">

                            <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=580&amp;q=80">
                        </div>
                        <div class="left_rrt">
                            <p>Hi Naaya!
                                Does the is still available?
                                We are a French couple who looking for a place to stay near our workplace
                                We are quiet, love cooking and exercising</p>
                            <div class="date">
                                <h6>23 February 8:57 pm</h6>
                            </div>
                        </div>







                    </div>

                    <div class="hh_sms" id="client">

                        <div class="left_rrt">
                            <p>Hi Naaya!
                                Does the is still available?
                                We are a French couple who looking for a place to stay near our workplace
                                We are quiet, love cooking and exercising</p>
                            <div class="date">
                                <h6>23 February 8:57 pm</h6>
                            </div>
                        </div>

                    </div>



                    <div class="hh_sms">
                        <div class="nice_img">

                            <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=580&amp;q=80">
                        </div>
                        <div class="left_rrt" id="ut">
                            <p class="client_sms"> <i class="fa fa-unlock-alt" aria-hidden="true"></i> You have messages waiting, please upgrade to talk to your future roommates</p>
                            <button class="sms_button_new" id="henabr">upgraded account now</button>
                            <div class="date">
                                <h6>23 February 8:57 pm</h6>
                            </div>
                        </div>







                    </div>


                    <div class="hh_sms" id="client">

                        <div class="left_rrt" id="jagodhar">
                        <p class="client_sms"> <i class="fa fa-unlock-alt" aria-hidden="true"></i> Please upgrade so your message is sent to you future roommates</p>
                            <button class="sms_button_new" id="henabr">upgraded account now</button>
                            <div class="date">
                                <h6>23 February 8:57 pm</h6>
                            </div>
                        </div>

                    </div>


                </div>



                <div class="qwsdklo_ppllkk">
                    <textarea placeholder="Write to Sophie…"></textarea>
                    <button class="send-button" type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>

                </div>





            </div>

</section>








<script>
    function myFunctionss() {
        var x = document.getElementById("myDIVttt");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>



@endsection('contents')