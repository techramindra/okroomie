@extends('layouts.frontendMaster')
@section('contents')
<!-- <style>
	@import url('http://fonts.cdnfonts.com/css/segoe-pro');
	* {
		font-family: 'Segoe Pro', sans-serif !important;
	}
</style> -->



<style type="text/css">
	div#initial_container_id {
		text-align: center;
		position: absolute;
		margin-left: 45%;
		top: 50%;
	}

	#unseen_dynamic_data {
		height: 25px;
		width: 25px;
		background-color: #bbb;
		border-radius: 50%;
		display: inline-block;
	}

	section.sms {
		margin-top: 80px;
	}

	.manu-main {
		display: flex;
		margin-top: 10px;
		padding-left: 20px;
	}

	.maion-sms {
		margin-top: 4px;
	}

	.s_logoimg img {
		background: #eee;
		border-radius: 50%;
		color: #828992;
		font-size: 1.5rem;
		float: left;
		height: 40px;
		line-height: 40px;
		margin-left: 0.25rem;
		text-align: center;
		width: 40px;
	}

	.col-bg {
		background: #FFFFFF;
		padding-bottom: 30px !important;
	}

	body.homepage-9.hp-6.homepage-1 {
		background: #EAEBEC;
	}

	.smslogo {
		display: flex;
		align-items: center;
		/*align-content: center;*/
	}

	.sms_div {
		display: flex;
		margin: 10px 0px;
	}

	.sms_div .s_logotet {
		margin-left: 10px;
	}

	.sms_div .s_logotet span.member {
		color: #2f3a4a;
		display: block;
		text-align: left;
		font-size: 1rem;
		text-overflow: ellipsis;
		white-space: nowrap;
		font-weight: 600;
	}

	.mmb_n p {
		margin: 0;
		padding: 0;
		line-height: 0;
		margin-top: 10px;
		font-weight: 300 !important;
		margin-right: 5px;
		font-weight: 600 !important;
	}

	h2 {
		/* font-family: 'Montserrat', sans-serif; */
		color: #222;
		font-size: 15px;
		font-weight: 600;
		text-transform: uppercase;
		font-family: 'Segoe Pro', sans-serif;
	}

	.immg4444 {
		position: absolute;
		right: 15px;
		top: 10px;
		font-weight: 400;
	}

	span.text-center {
		text-align: center;
		width: 100%;
		display: block;
		margin-top: 10px;
		padding: 10px 0px;
	}

	.col-12.smsf {
		display: flex;
		align-items: center;
		/*align-content: center;*/
		/*justify-content: space-between;*/
		background: #F2F3F3;
	}

	.sms_div2 span {
		color: #828992;
		font-size: 0.875rem;
		opacity: .5;
		text-align: right;
	}

	.row.manuf span.member p {
		color: #2f3a4a;
		display: inline-block;
		font-weight: 600;
		overflow: hidden;
		text-overflow: ellipsis;
		white-space: nowrap;
		margin: 0;
	}

	p.timeka-bap {
		text-transform: capitalize;
		font-size: 12px;
		display: block !important;
		color: gray !important;
		margin-top: -5px !important;
	}

	.manu-mai.manu-main {
		margin-left: 10px;
		display: flex;
		padding: 10px 0px;
	}

	.manu-main .aadimne {
		width: 50px;
		height: 50px;
		background: #EAEBEC;
		display: flex;
		align-items: center;
		justify-content: center;
		align-content: center;
		border-radius: 50%;
		overflow: hidden;
	}

	img {
		display: inline-block;
		max-width: 100%;
		height: 100%;
	}

	.manu-main span.member {
		display: block;
		margin-left: 10px;
		margin-top: 10px;
	}

	.msm_main-h h3 {
		color: #9CA1A9;
		text-align: center;
		display: block;
		margin: auto;
		padding: 10px 0px;
		font-family: 'Segoe Pro', sans-serif;
		font-weight: 400;
	}

	.msm_main-h {
		border-top: 1px solid #ECEDED;
		border-bottom: 1px solid 1px solid #A2A6AE;
		border-bottom: 1px solid #ECEDED;
		padding: 5px 0px;
		/* text-align: center; */
		display: flex;
		align-items: center;
		justify-content: space-between;
		align-content: center;
	}

	.allbutton {
		display: flex;
		justify-content: space-between;
		padding: 3px 20px 0px 10px;
	}

	.col-md-7.col-bg {
		padding: 0px;
	}

	.allbutton {
		display: flex;
		justify-content: space-between;
		padding: 0px 20px 0px 95px;
	}

	.allsms {
		padding-top: 20px;
		padding-left: 10px;
	}

	.allsms span {
		border: 1px solid #008FB4;
		padding: 3px 10px;
		color: #008FB4;
		font-weight: 400;
		text-transform: capitalize;
		font-size: 12px;
		border-radius: 20px;
		z-index: 999999999999;
		display: inline-block;
	}

	.allbutton .main-bty button {
		border: none;
		background: transparent;
		color: #1769AA;
		text-transform: capitalize;
		outline: none;
	}

	.msg_section {
		width: 100%;
		height: 95%;
		overflow: auto;
		padding: 0px 5px 0px 0px;
	}

	.msg_section .mainkartasms {
		display: flex;
		margin-top: 15px;
	}

	.msg_section .mainkartasms .type_sms {
		/*margin-left: 10px;*/
		width: 85%;
	}

	.msg_section .mainkartasms .s_logoimg {
		width: 40px !important;
		height: 40px !important;
		/* background: red; */
		/* display: block; */
	}

	.lala {
		display: flex;
		flex-direction: column;
		align-content: center;
		align-items: center;
		width: 15%;
	}

	.textariya_s {
		padding: 13px 0px 0px 0px;
	}

	.textariya_s textarea#rahhe {
		height: auto;
		overflow: auto;
		width: 100%;
		resize: none;
		outline: none;
		font-size: 16px;
		background: #FFFFFF !important;
		height: 45px !important;
	}

	.type_sms {
		background: #F8F8F9;
		padding: 5px;
		/* margin: 15px 0px; */
		border-radius: 10px;
		font-size: 16px;
		text-align: left;
	}

	.type_sms ul {
		margin: 15px 0px;
		padding: 0px 9px;
	}

	.msg_section .mainkartasms .type_sms span {
		font-size: 15px;
		line-height: 1.7;
		text-transform: capitalize;
		font-weight: 400;
		font-family: 'Segoe Pro', sans-serif !important;
	}

	.mainkartasms .s_logoimg img {
		padding: 0 !important;
		width: 100% !important;
		height: 100% !important;
		margin: 0 !important;
	}

	.type_sms span {
		display: block;
		margin: 10px 0px;
		/* line-height: 10px; */
	}

	.new_div_cap {
		width: 100%;
		height: 70vh;
		overflow: auto;
		/* padding: 0px 50px 20px 50px; */
	}

	.modal-body {
		text-align: center;
	}

	.umesh {
		z-index: 99999999999999999999 !important;
	}

	.umesh div#exampleModal {
		z-index: 99999;
	}

	.umesh textarea#message-text {
		resize: none;
	}

	.umesh button {
		background: #EAEBEC;
		padding: 10px 20px;
		border: none;
		color: gray;
	}

	.ukdrop {
		/* text-align: right; */
		/* margin-right: 50px; */
		display: flex;
		justify-content: flex-end;
		align-content: center;
		align-items: center;
	}

	.ukdrop button#rangok {
		border: none;
		background: transparent;
		font-size: 18px;
		height: auto;
		width: auto;
		outline: none;
		display: flex;
		align-items: center;
		justify-content: center;
		align-content: center;
		border: 1px solid gray;
		width: 25px;
		height: 25px;
		border-radius: 50%;
		color: gray;
		margin-top: 10px;
		font-weight: 600;
		margin-right: 20px;
		margin-left: 10px;
	}

	.main_manu_t svg {
		margin-right: 10px;
		margin-top: 10px;
	}

	textarea#rahhe:focus {
		border-bottom: 1px solid #008FB4;
	}

	.mmb_n p {
		margin: 0;
		padding: 0;
		line-height: 0;
		margin-top: 10px;
		margin-right: 5px;
		font-weight: 700;
		color: #008FB4;
		font-size: 12px;
	}

	.mmb_n p span {
		margin-right: 5px;
	}

	.mmb_n p {
		margin: 0;
		padding: 0;
		line-height: 0;
		margin-top: 10px;
		margin-right: 5px;
	}

	.ukdrop {
		text-align: right;
		/* margin-right: 50px; */
	}

	.ukdrop button#rangok {
		border: none;
		background: transparent;
		font-size: 18px;
		height: auto;
		width: auto;
		outline: none;
		display: flex;
		align-items: center;
		justify-content: center;
		align-content: center;
		border: 1px solid gray;
		width: 25px;
		height: 25px;
		border-radius: 50%;
		color: gray;
		margin-top: 10px;
		font-weight: 600;
		margin-right: 20px;
		margin-left: 10px;
	}

	.ukdrop button#rangok {
		border: none;
		background: transparent;
		font-size: 18px;
		height: auto;
		width: auto;
		outline: none;
		display: flex;
		align-items: center;
		justify-content: center;
		align-content: center;
		border: 1px solid gray;
		width: 25px;
		height: 25px;
		border-radius: 50%;
		color: gray;
		margin-top: 10px;
		font-weight: 600;
		margin-right: 20px;
		margin-left: 10px;
	}

	.mkl a {
		color: grey;
		padding: 10px;
		border: 1px solod #ddd;
		border: 1px solid #ddd;
		width: 100%;
		text-align: left;
		text-decoration: none;
	}

	.mkl {
		display: flex;
		flex-direction: column;
		align-items: flex-start;
		justify-content: center;
	}

	.main_manu_t {
		position: relative;
	}

	.main_manu_t .mkl {
		position: absolute;
		border: 1px solid #DDD;
		right: 25px;
		background: #FFFFFF;
		border-radius: 5px;
	}

	section.sms button {
		border: none;
		outline: none;
		background: transparent;
		width: 460px;
	}

	.masge_bhai {
		display: flex;
		justify-content: space-between;
		width: 100%;
		margin: auto;
		align-items: center;
		align-content: center;
		padding: 10px 0px;
		border-bottom: 1px solid #ddd;
	}

	.masge_bhai .mmb_n {
		margin: 0;
		padding: 0;
		padding-left: 20px;
	}

	.masge_bhai .mmb_n p {
		color: #005CE6;
		font-size: 14px;
		font-weight: 700;
		display: flex;
		align-items: center;
		justify-content: center;
		align-content: center;
		margin: 0;
		cursor: pointer;
	}

	.masge_bhai .mmb_n p span {
		margin-right: 5px;
		cursor: pointer;
	}

	.action_l {
		padding-right: 20px;
	}

	.action_l p {
		margin: 0;
		text-transform: capitalize;
		color: #828B95;
		font-size: 14px;
		cursor: pointer;
	}

	span.name_namebala {
		/* margin: auto; */
		display: block;
		text-align: center;
		/* margin-top: 10px; */
		text-transform: capitalize;
		font-size: 12px;
		font-weight: 400;
		padding-bottom: 10px;
	}
</style>
<style>
	section#ramsms .container {
		background: #FFFFFF;
	}

	section#ramsms {
		margin-top: 70px;
	}

	section#ramsms .container {
		background: #FFFFFF;
	}

	section#ramsms .container .bbabyt .ltegghg {
		padding: 15px;
		display: flex;
		align-items: center;
		align-content: center;
		position: relative;
		justify-content: flex-start;
		/* background: #F2F3F3; */
		margin-bottom: 10px;
	}

	.coverhhh {
		height: 77vh !important;
		/* overflow: auto; */
		overflow-y: scroll;
	}

	.immg44 {
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-content: center;
		margin: 0;
		padding: 0;
		margin-left: 10px;
	}

	#logo img {
		width: 199px;
		height: auto;
		transform: translate3d(0, 0, 0);
	}

	.immg4444 {
		position: absolute;
		right: 15px;
		top: 10px;
	}

	section#ramsms .container .bbabyt .ltegghg .immg {
		width: 63px !important;
		 height: 60px !important; 
		border-radius: 50%;
		overflow: hidden;
		margin: 0;
		padding: 0;
		background: #F2F3F3;
	}

	section#ramsms .container .bbabyt .ltegghg .immg img {
		width: 100%;
		height: 100%;
		object-fit: cover;
	}

	.mmdka {
		width: 100%;
		padding: 20px;
		margin: auto;
		text-align: center;
		padding-bottom: 5px !important;
		padding-right: 0 !important;
		padding-left: 0 !important;
	}

	section#ramsms .col-8 {
		padding-left: 0px !important;
		padding-right: 0 !important;
		position: relative;
	}

	section#ramsms .col-4 {
		padding-left: 0 !important;
		padding-right: 2px !important;
	}

	.immg44 h2.namert {
		font-size: 15px;
	}

	.immg44 p.smsk {
		font-size: 15px;
		font-weight: 400;
		margin: 0;
		padding: 0;
	}

	.mmdka .manu-main {
		margin: 0 !important;
		padding: 0 !important;
	}

	.mmdka .manu-main .aadimne {
		width: 40px;
		height: 40px;
		background: #EAEBEC;
		display: flex;
		align-items: center;
		justify-content: center;
		align-content: center;
		border-radius: 50%;
		overflow: hidden;
	}

	button.lodemoret {
		background: #008FB4;
		border: none;
		width: -webkit-fill-available;
		text-transform: capitalize;
		color: white;
		outline: none;
	}

	.mmdka .row.manuf span.member p {
		color: #2f3a4a;
		display: inline-block;
		font-weight: 400;
		overflow: hidden;
		text-overflow: ellipsis;
		white-space: nowrap;
		text-transform: capitalize;
		margin: 0 !important;
	}

	.mmdka .msm_main-h h3 {
		color: #9CA1A9;
		/* margin: auto; */
		display: block;
		text-align: center;
		/* margin-top: 10px; */
		text-transform: capitalize;
		font-size: 12px;
		font-weight: 400;
		padding-bottom: 0px !important;
		margin: 0;
	}

	.mmdka span.name_namebala {
		/* margin: auto; */
		display: block;
		text-align: center;
		/* margin-top: 10px; */
		text-transform: capitalize;
		font-size: 12px;
		font-weight: 400;
		padding-bottom: 0px !important;
		text-align: center;
		margin: auto;
	}

	.mmdka .action_l p {
		text-align: center;
		/* margin: auto; */
		display: block;
		text-align: center;
		/* margin-top: 10px; */
		text-transform: capitalize;
		font-size: 12px;
		font-weight: 400;
		padding-bottom: 0px !important;
	}

	.mmdka .masge_bhai {
		display: flex;
		justify-content: flex-start;
		width: 100%;
		margin: auto;
		align-items: center;
		align-content: center;
		padding: 5px 0px !important;
		border-bottom: 1px solid #ddd;
	}

	p.rasiya {
		font-size: 12px;
		font-weight: 600;
	}

	.jjhkshshsh {
		margin-left: 5px;
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		align-content: center;
	}

	.ssms_box .aadimne {
		width: 35px;
		height: 35px;
		border-radius: 50%;
		overflow: hidden;
		/* margin-bottom: 4px; */
	}

	.ssms_box .gfguihffhmmain {
		display: flex;
		margin-bottom: 10px;
	}

	c {
		padding: 10px;
		border-radius: 10px;
		background: #E8EBFA;
		margin-left: 10px;
	}

	.ssms_box {
		height: 55vh;
		overflow: auto;
		/* border: 1px solid; */
		padding-top: 15px;
	}

	.ssms_box .tytheghghhjhe {
		background: #E8EBFA;
		padding: 10px;
		border-radius: 10px;
		margin-left: 5px;
		text-align: left;
	}

	.textariya_s {
		align-items: center;
		justify-content: center;
		align-content: center;
		position: relative;
		background: #F0F6F9;
	}

	form#sendMessage {
		display: flex;
		align-items: center;
		justify-content: center;
		align-content: center;
	}

	form#sendMessage .main-bty {
		margin-bottom: 10px;
	}

	.ssms_box .tytheghghhjhe p {
		margin: 0;
		padding: 0;
		text-transform: capitalize;
		font-weight: 400;
		word-break: break-all;
		font-size: 14px;
	}

	.ssms_box .tytheghghhjhe small {
		text-align: left !important;
		text-transform: capitalize;
		font-weight: 400;
	}

	.aapaa__sms {
		display: flex;
		justify-content: flex-end;
		align-items: center;
		align-content: center;
		margin-bottom: 10px;
		margin-right: 10px;
	}

	.aapaa__sms .tytheghghhjhe {
		width: 70%;
	}

	.ssms_box .gfguihffhmmain .tytheghghhjhe {
		width: 70%;
	}

	.allbutton {
		display: flex;
		justify-content: space-between;
		padding: 0px 20px 0px 20px !important;
		position: absolute;
		right: 0px;
		bottom: 6px;
	}



	div#emojilog {
    display: flex;
    flex-wrap: wrap;
    margin: 0px 10px;
    margin-right: 20px;
}
</style>
<style>
	/* width */
	::-webkit-scrollbar {
		width: 10px;
	}

	/* Track */
	::-webkit-scrollbar-track {
		background: #f1f1f1;
	}

	/* Handle */
	::-webkit-scrollbar-thumb {
		background: #888;
		border-radius: 10px;
	}

	/* Handle on hover */
	::-webkit-scrollbar-thumb:hover {
		background: #555;
	}

	.roungtext {
		width: 100%;
		margin-right: 10px;
	}

	.content-data {
		text-align: left !important;
	}


	#target-1 {
		background: #0099cc;
		width: 300px;
		height: 300px;
		height: 160px;
		padding: 5px;
		display: none;
	}

	button.galat {
    position: sticky;
    left: 84px !important;
    top: 0px;
    border: none;
    /* width: 24px; */
    color: red;
    background: transparent;
    font-size: 15px;
    text-align: right;
}

	div#myDIVvv {
		position: absolute;
		bottom: 120px;
		background: white;
		width: 98%;
		height: 250px;
		overflow: auto;
		display: none;
		border-radius: 20px 0px 20px 0px;
		box-shadow: rgb(0 0 0 / 35%) 0px 5px 15px;
		text-align: right;
	}
</style>
<!-- Button trigger modal -->

<!-- Modal -->

<div id="test">

</div>
<div class="umesh">
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<h5>Message to request an inspection</h5>
					<p>Introduce yourself, describe why you are interested in the room and why you think you would be a great fit for the home.</p>
					<form>
						<div class="form-group">
							<textarea class="form-control" id="message-text" style="right: none;"></textarea>
						</div>
						<div class="form-group">
							<button>Send message to Richard</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@if($type=='admin')
<section class="sms">
	<div class="container">
		<div class="row ">
			<div class="col-md-5 col-bg">
				<span class="text-center"> you have 0 unread messages</span>
				<div class="maion-sms" id="leftsideuserpanel">
					@foreach($data as $key=>$val)
					<div class="row" id="33singleUserBlock{{$val->id}}">
						<button onclick="getChatData({{$val->id}})">
							<a href="javascript:;">
								<div class="col-12 smsf">
									<div class="sms_div">
										<div class="doty"><span>.</span></div>
										<div class="smslogo">
											<div class="s_logoimg">
												@if($val->image!=null)
												<img src="{{url('storage/app/'.$val->image)}}">
												@else
												<img src="{{url('https://cdn.pixabay.com/photo/2021/11/30/08/24/strawberries-6834750__480.jpg')}}">
												@endif
											</div>
											<div class="s_logotet">
												<span class="member">{{$val->your_first_name}}</span>
												<span class="member">{{$val->lastMessage}}</span>
											</div>
										</div>
									</div>
									@if($val->unseen!=0)
									<div class="sms_div2">
										<span class="text-danger">
										</span>
									</div>
									@else
									<div class="sms_div2">
										<span>
										</span>
									</div>
									@endif
								</div>
							</a>
						</button>
					</div>
					@endforeach
				</div>
			</div>
			<div class="col-md-7 col-bg" style="border-left: 1px solid #ECEDED">
				<div class="row manuf">
					<div class="col-6">
						<div class="manu-main">
							<div class="aadimne">
								<img id="changeImage" src="{{url('storage/app/'.$data[0]->image)}}" alt="">
								<!-- <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
									<path fill="#d6d8dc" d="M10 9.25c-2.27 0-2.73-3.44-2.73-3.44C7 4.02 7.82 2 9.97 2c2.16 0 2.98 2.02 2.71 3.81c0 0-.41 3.44-2.68 3.44zm0 2.57L12.72 10c2.39 0 4.52 2.33 4.52 4.53v2.49s-3.65 1.13-7.24 1.13c-3.65 0-7.24-1.13-7.24-1.13v-2.49c0-2.25 1.94-4.48 4.47-4.48z" />
								</svg> -->
							</div>
							<span class="member">
								<p id="chatUserName1">{{$data[0]->your_first_name}}</p>
								<p class="timeka-bap">
									{{date('h:i A',strtotime($data[0]->created_at))}}
								</p>
							</span>
						</div>
					</div>
					<div class="col-6">
						<div class="ukdrop">
							<!-- <div class="mmb_n">
								<p> <span><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDrjV921dqWyujwaeIkTfKmi-fNl8Ly0sahA&usqp=CAU" width="20px" alt=""></span> 635766...</p>
							</div> -->
							<div class="main_manu_t">
								<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="30" height="30" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024">
									<path fill="gray" d="M512 64a448 448 0 1 1 0 896.064A448 448 0 0 1 512 64zm67.2 275.072c33.28 0 60.288-23.104 60.288-57.344s-27.072-57.344-60.288-57.344c-33.28 0-60.16 23.104-60.16 57.344s26.88 57.344 60.16 57.344zM590.912 699.2c0-6.848 2.368-24.64 1.024-34.752l-52.608 60.544c-10.88 11.456-24.512 19.392-30.912 17.28a12.992 12.992 0 0 1-8.256-14.72l87.68-276.992c7.168-35.136-12.544-67.2-54.336-71.296c-44.096 0-108.992 44.736-148.48 101.504c0 6.784-1.28 23.68.064 33.792l52.544-60.608c10.88-11.328 23.552-19.328 29.952-17.152a12.8 12.8 0 0 1 7.808 16.128L388.48 728.576c-10.048 32.256 8.96 63.872 55.04 71.04c67.84 0 107.904-43.648 147.456-100.416z" />
								</svg>
								<div class="mkl" style="display: none;">
									<a href="javascript:;" onclick="deleteConversation()"> Delete Conversation</a>
									<a href="javascript:;" onclick="messageUserBlock()">Block this user</a>
									<a href="#">Report this user</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="msm_main-h">
					<h3>This is an automated reply</h3>
					<!-- <span class="name_namebala">liya sand a message re : <a href=""> clatyon melbouren</a> </span> -->
				</div>
				<div class="new_div_cap">
					<div class="msg_section" id="replaceSenderMessages">
						@foreach($data[0]->allMessages as $key=>$val)
						<div class="mainkartasms">
							<div class="lala">
								<div class="s_logoimg">
									<img src="{{url('storage/app/'.$val->image)}}">
								</div>
								<p class="rasiya">{{date('h:i A',strtotime($val->created_at))}}</p>
							</div>
							<div class="type_sms">
								<span>{{$val->message}}</span>
							</div>
						</div>
						@endforeach
					</div>
				</div>
</section>
@else
<section id="ramsms">
	<div class="container">
		<div class="row">
			<div class="col-4">
				<div class="mmdka">
					@php
					$tt=0;
					if(($data!=null) && (!empty($data)))
					{
					foreach($data as $key=>$val)
					{
					$tt+=$val->unseen;
					}
					}
					@endphp
					<span class="jioh"> you have <span id="dynamic_unread_message_counter">{{$tt}}</span> unread messages</span>
				</div>
				<div class="coverhhh">
					@foreach($data as $key=>$val)
					<div class="bbabyt" id="singleUserBlock{{$val->id}}" onclick="getChatData({{$val->id}})">
						<div class="ltegghg">
							<div class="immg">
								{!! profilepic($val->image,$val->your_first_name) !!}
							</div>
							<div class="immg44">
								<h2 class="namert">{{$val->your_first_name}}</h2>
								<p class="smsk{{$val->id}}"> {{$val->lastMessage}}</p>
							</div>
							<div class="immg4444">
								{{$val->online_status}}
								<br>
								@if($val->online_offline=='Online')
								<span class="text-success">
									{{$val->online_offline}}
								</span>
								@else
								<span class="text-danger">
									{{$val->online_offline}}
								</span>
								@endif
							</div>
							@if($val->unseen!=0)
							<div class="sms_div2">
								<span class="text-danger" id="unseen_dynamic_data{{$val->id}}">
									{{$val->unseen}}
								</span>
							</div>
							@else
							<div class="sms_div2">
								<span class="text-danger" id="unseen_dynamic_data{{$val->id}}">
								</span>
							</div>
							@endif
						</div>
					</div>
					@endforeach
				</div>
			</div>
			<div class="initial-container" id="initial_container_id">
				<h2>Welcome to your inbox</h2>
				<p>To get started click a conversation on the left.</p>
			</div>
			<div class="col-8" id="onBeforDivClick" style="display:none;">
				<div class="mmdka">
					<div class="row manuf">
						<div class="col-6">
							<div class="manu-main">
								<div class="aadimne">
									<img id="changeImage1">
								</div>
								<span class="member">
									<h2 id="chatUserName"></h2>
								</span>
							</div>
						</div>
						<div class="col-6">
							<div class="ukdrop">
								<div class="mmb_n">
									<p> <span></span> </p>
								</div>
								<div class="main_manu_t">
									<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="30" height="30" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024">
										<path fill="gray" d="M512 64a448 448 0 1 1 0 896.064A448 448 0 0 1 512 64zm67.2 275.072c33.28 0 60.288-23.104 60.288-57.344s-27.072-57.344-60.288-57.344c-33.28 0-60.16 23.104-60.16 57.344s26.88 57.344 60.16 57.344zM590.912 699.2c0-6.848 2.368-24.64 1.024-34.752l-52.608 60.544c-10.88 11.456-24.512 19.392-30.912 17.28a12.992 12.992 0 0 1-8.256-14.72l87.68-276.992c7.168-35.136-12.544-67.2-54.336-71.296c-44.096 0-108.992 44.736-148.48 101.504c0 6.784-1.28 23.68.064 33.792l52.544-60.608c10.88-11.328 23.552-19.328 29.952-17.152a12.8 12.8 0 0 1 7.808 16.128L388.48 728.576c-10.048 32.256 8.96 63.872 55.04 71.04c67.84 0 107.904-43.648 147.456-100.416z" />
									</svg>
									<div class="mkl" style="display: none;">
										<a href="javascript:;" onclick="deleteConversation()"> Delete Conversation</a>
										<a href="javascript:;" onclick="messageUserBlock()">Block this user</a>
										<a href="#">Report this user</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="msm_main-h">
						<!-- <h3>Automated message system</h3> -->
						<span class="name_namebala" id="room_roomie_id_dynamic_on_top"></span>
					</div>
					<div class="masge_bhai">
						<div class="action_l">
							<p id="active_listing_of_user_in_chat"> </p>
						</div>
					</div>
					<div class="ssms_box" id="replaceSenderMessages1">
					</div>
					<div class="allsms">
						<span>lorem</span>
						<span>lorem</span>
						<span>lorem</span>
						<span>lorem</span>
						<span>lorem</span>
					</div>
					<div class="textariya_s">
						<form id="sendMessage">
							@csrf
							<input type="hidden" name="ids" id="idsss">
							<input type="hidden" name="room_roomie_id" id="room_roomie_id_dynamic">
							<input type="hidden" name="room_roomie" id="room_roomie_type_dynamic">
							<div class="main-bty">
								<a href="javascript:;" onclick="myFunctionnn()"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="30" height="30" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
										<path fill="#fdc324" d="M12 1.998c5.524 0 10.002 4.478 10.002 10.002c0 5.523-4.478 10-10.002 10c-5.524.001-10.002-4.477-10.002-10C1.998 6.476 6.476 1.998 12 1.998Zm0 1.5a8.502 8.502 0 1 0 0 17.003a8.502 8.502 0 0 0 0-17.003ZM8.462 14.783A4.492 4.492 0 0 0 12 16.5a4.491 4.491 0 0 0 3.535-1.714a.75.75 0 1 1 1.177.93A5.991 5.991 0 0 1 12 18a5.991 5.991 0 0 1-4.716-2.29a.75.75 0 1 1 1.178-.928ZM9 8.75a1.25 1.25 0 1 1 0 2.499A1.25 1.25 0 0 1 9 8.75Zm6 0a1.25 1.25 0 1 1 0 2.499a1.25 1.25 0 0 1 0-2.499Z"></path>
									</svg></a>
							</div>
							<div class="roungtext">
								<textarea name="message" id="rahhe" placeholder="Send vijay a message" spellcheck="false"></textarea>
								<div class="allbutton">



									<div class="main-bty">
										<a href="javascript:;" id="send_message_btn" onclick="submitForm()" class="show-1-yes"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
												<path fill="#008fb4" d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576L6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76l7.494-7.493Z" />
											</svg></a>
									</div>
								</div>
							</div>
						</form>
					</div>




					<div id="myDIVvv">
						<button class="galat" onclick="myFunctionnn()"><i class="fa fa-times" aria-hidden="true"></i></button>
						<div id="emojilog">
							
							@foreach($emoji as $emojis)
							<p onclick="emojiget('&#{{$emojis}};')">&#{{$emojis}};</p>
							@endforeach
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>
</section>

@endif



<script src="https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/6/tinymce.min.js"></script>

<script>
	function myFunctionnn() {
		$("#myDIVvv").toggle();
	}
	function emojiget(value)
	{
		const id=$("#rahhe");
		var cursorPos = id.prop('selectionStart');
		cursorPoss=cursorPos;
		var v = id.val();
		var textBefore = v.substring(0,  cursorPos);
		var textAfter  = v.substring(cursorPos, v.length);
		id.val(textBefore + value+ textAfter);
		//cursorPoss=parseInt(cursorPoss)+1;
		id.prop('selectionStart',cursorPoss);
		
		
	}

</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
	$(document).ready(function() {
		$("#rangok").click(function() {
			$(".mkl").toggle();
		});
	});

	function getChatData(id) {

		$("#onBeforDivClick").show();
		$("#initial_container_id").hide();
		var url = window.location.origin;
		uurl = "{{url('getChat')}}/" + id;
		$("#replaceSenderMessages1").html('');
		// $("#singleUserBlock" + id).html('');
		$.get(uurl, function(data) {
			//$('#test').html(data);
			// alert(data);
			// return false;
			var listing_id = '';
			$("#chatUserName").html(data.res[0].headerData.your_first_name);
			var mess = 'Send ' + data.res[0].headerData.your_first_name + ' a message';
			$("#rahhe").attr('placeholder', mess);
			imageurl ='{{url('/storage/app')}}/' + data.res[0].headerData.image;
			//alert(data.res[0].headerData.image)
			if(data.res[0].headerData.image!=null)
		{
			$(".maininner").remove()
			$("#changeImage1").show().attr('src', imageurl);

		}
		else{
			name=data.res[0].headerData.your_first_name[0]
			$("#changeImage1").hide();
			$(".aadimne").append('<div class="innner_name maininner" style="margin-top:-5%">'+name+'</div>')
		}
			
			// encryptedid="{{encrypt("+data.res[0].id+")}}";
			
			$("#idsss").val(id);
			$("#room_roomie_id_dynamic").val(data.listing_info[0].room_roomie_id);
			listing_id = 'Message for listing ' + data.listing_info[0].room_roomie_id + ' In ' + data.listing_location;
			$("#room_roomie_id_dynamic_on_top").text(listing_id);
			$("#room_roomie_type_dynamic").val(data.listing_info[0].room_roomie);
			var listing_status = '';
			if (data.listing_status == 1) {
				listing_status = 'Active Listing';
			} else {
				listing_status = 'No Active Listing';
			}
			var dataaa = '';
			var headerName = '';
			$.each(data.res, function(key, value) {
				headerName = data.res[0].headerData.your_first_name + ' Has ' + listing_status;
				$("#active_listing_of_user_in_chat").text(headerName);
				if (value.senderID == '{{Auth::id()}}') {

					dataaa += '<div class="aapaa__sms"><div class="tytheghghhjhe"><p>' + value.message + '</p><small>' + value.onread + '</small></div><div class="jjhkshshsh"><div class="aadimne"><img src="' + "{{url('storage/app')}}" + '/' + data.res[0].senderUserData.image + '"></div><p class="rasiya">' + value.messageTimeHuman + '</p></div></div>';
					
				} else {
					dataaa += '<div class="gfguihffhmmain"><div class="jjhkshshsh"><div class="aadimne"><img src="' + "{{url('storage/app')}}" + '/' + data.res[0].headerData.image + '"></div><p class="rasiya">' + value.messageTimeHuman + '</p></div><div class="tytheghghhjhe"><small><b>' + data.res[0].headerData.your_first_name + '</b></small><p>' + value.message + '</p></div></div>';
				}
			});

			//rearrange left side users data for seen not seen status
			// $("#singleUserBlock" + data.data.id).replaceWith('<button onclick="getChatData(' + data.data.id + ')"><a href="javascript:;"><div class="col-12 smsf"><div class="sms_div"><div class="doty"><span>.</span></div><div class="smslogo"><div class="s_logoimg">@if(' + data.data.image != null + ')<img src="storage/app/' + data.data.image + '">@else<img src="storage/app/imgb151130023750cabc269560150ace604662058.jpg">@endif</div><div class="s_logotet"><span class="member">' + data.data.your_first_name + '</span></div></div></div>@if(' + data.data.unseen != 0 + ')<div class="sms_div2"><span class="text-danger">' + data.data.unseen + ' unread</span></div>@else<div class="sms_div2"><span>{{\Carbon\Carbon::parse(' + data.data.created_at + ')->diffForHumans() }}</span></div>@endif</div></a></button>');

			$("#replaceSenderMessages1").append(dataaa);
			var unreadmessage = $("#dynamic_unread_message_counter").text();
			messageOfSingleUser = $("#unseen_dynamic_data" + data.res[0].headerData.id).text();
			$("#dynamic_unread_message_counter").text(unreadmessage - messageOfSingleUser);
			if (data.data.unseen != 0) {
				$('.immg4444').after('<div class="sms_div2"><span class="text-danger" id="unseen_dynamic_data">' + data.data.unseen + '</span></div>');
			} else {
				$("#unseen_dynamic_data" + data.res[0].headerData.id).remove();
			}
			divObjScroll = document.getElementById("replaceSenderMessages1");
			divObjScroll.scrollTop = divObjScroll.scrollHeight;
			if (data.res[0].messageBlock == 1) {
				alert('You are Blocked By User');
				$("#send_message_btn").removeAttr('onclick');
				exit();
			}

		});
	}
</script>
<script>
	function getSingleChatData(id) {	
		//alert(id);	
		
		uurl = "{{url('getSingleChatData')}}/" + id;
		// console.log("URL: " + uurl);
		$.get(uurl, function(data) {
			//console.log(data);
			$("#idsss").val(id);
			var dataaa = '';
			$.each(data.singleData, function(key, value) {
				if (value.senderID == '{{Auth::id()}}') {
					dataaa += '<div class="aapaa__sms"><div class="tytheghghhjhe"><p>' + value.message + '</p><small> Read ' + value.readmessage + '</small></div><div class="jjhkshshsh"><div class="aadimne"><img src="storage/app/' + data.singleData[0].senderUserData.image + '"></div><p class="rasiya">' + value.messageTimeHuman + '</p></div></div>';
				} else {
					dataaa += '<div class="gfguihffhmmain"><div class="jjhkshshsh"><div class="aadimne"><img src="storage/app/' + data.singleData[0].headerData.image + '"></div><p class="rasiya">' + value.messageTimeHuman + '</p></div><div class="tytheghghhjhe"><small><b>' + data.singleData[0].headerData.your_first_name + '</b></small><p>' + value.message + '</p></div></div>';
				}
			});
			$("#replaceSenderMessages1").append(dataaa);
			// divObjScroll=document.getElementById("replaceSenderMessages1");
			// divObjScroll.scrollTop = divObjScroll.scrollHeight;
		});
	}

	function getInstantMessagesCount() {
		var url = window.location.origin;
		var totalUnseen = 0;
		uurl = "{{url('getInstantMessagesCount')}}";
		$.get(uurl, function(data) {
			$.each(data.user, function(key, item) {
				$("#unseen_dynamic_data" + item.id).text(item.unseen);
				totalUnseen += item.unseen;
				$("#dynamic_unread_message_counter").text(totalUnseen);
				$(".smsk" + item.id).text(item.last_message_data.message);
			});
		});
	}
	setInterval(() => {
		getInstantMessagesCount();
	}, 1000);
	setInterval(() => {
		getSingleChatData($("#idsss").val());
	}, 1000);
	//send message
	$(document).ready(function() {
		$('#sendMessage').on('submit', function(event) {
			event.preventDefault();
			$.ajax({
				url: "{{url('sendMessage')}}",
				method: "POST",
				data: new FormData(this),
				contentType: false,
				cache: false,
				processData: false,
				success: function(data) {
					var addChat = '';
					console.log(data);
					if (data.message.onread == null) {
						var read = 'Not Read';
					} else {
						var read = 'Read ' + data.message.onread;
					}
					if (data.status === 200) {
						$("#replaceSenderMessages").html('');
						$(".smsk" + data.id).text(data.message.message);
						$("#rahhe").val('');
						addChat = '<div class="aapaa__sms"><div class="tytheghghhjhe"><p>' + data.message.message + '</p><small>' + read + '</small></div><div class="jjhkshshsh"><div class="aadimne"><img src="storage/app/' + data.senderUserData.image + '"></div><p class="rasiya">' + data.message.messageTimeHuman + '</p></div></div>';
						$("#replaceSenderMessages1").append(addChat);
						divObjScroll = document.getElementById("replaceSenderMessages1");
						divObjScroll.scrollTop = divObjScroll.scrollHeight;
						// replaceSenderMessages.scrollTo({
						// top: 1000,//scroll to the bottom of the element
						// behavior: 'smooth' //auto, smooth, initial, inherit
					}
				},
				error: function(error) {}
			});
		});
	});

	function messageUserBlock() {
		var user_id = $("#idsss").val();
		if (user_id != '') {
			$.post("{{url('messageUserBlock')}}", {
				id: user_id,
				_token: "{{ csrf_token() }}"
			}, function(data) {
				if (data == 1) {
					alert("User Blocked Successfully");
				} else {
					alert("User Already Blocked!");
				}
			});
		}
	}

	function deleteConversation() {
		var user_id = $("#idsss").val();
		if (user_id != '') {
			$.post("{{url('deleteConversation')}}", {
				id: user_id,
				_token: "{{ csrf_token() }}"
			}, function(data) {
				console.log(data);
				if (data == 1) {
					alert("Deleted Successfully");
					location.reload();
				} else if (data = 400) {
					alert("You Are Blocked Cat't Delete Conversation!");
				} else {
					alert("Something went wrong!");
				}
			});
		}
	}

	function submitForm() {
		let message = $("#rahhe").val();
		if (message.length < 1) {
			alert('Type Something!');
			exit();
		}
		$("#sendMessage").submit();
	}
</script>

<script>




</script>



@endsection('contents')