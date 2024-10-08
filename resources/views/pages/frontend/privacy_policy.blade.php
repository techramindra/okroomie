@extends('layouts.frontendMaster')
@section('contents')


<style>
    /*section.new_about {
        margin-top: 65px;
        margin-left: 40px;
        margin-right: 40px;
    }*/

    section.new_about .main_about {
       /* width: 100%;*/

    }

    section.new_about .main_about {
        /*width: 100%;

        background-repeat: no-repeat;
        background-size: cover;
        background-position: center top;*/
        background: #C1BEAA;
        border-radius: 10px;
    }

    .about_banner {
        /*width: 100%;
        color: white;
        padding: 20px 30px;*/
    }

    section.new_about .main_burron {
        /* background: bisque; */
        margin-top: 20px;
    }

    section.new_about .main_burron button {
        background: #444444;
        color: white;
        padding: 10px 20px;
        font-weight: 500;
        font-size: 20px;
        text-transform: capitalize;
        border-radius: 5px;
        border: none;
        outline: none;
    }

    li {
    margin-bottom: 10px;
}

    /*.about_banner h2 {
        color: white;
        line-height: 1.5;
        font-weight: 600;
    }*/

    .about_banner {
        /*display: flex;
        justify-content: space-between;*/
        align-items: center;
       /* align-content: center;*/
    }

    .jhhh {
        /*width: 50%;
        padding-bottom: 50px;*/
    }

    section.second {
        padding: 30px 70px;
    }

    .displayh {
        margin: 10px 0px;
    }

    .mainjk {
        width: 100%;
    }

    .containt {
        text-align: justify;
        padding-right: 5%;
    }

    .maint_b {
        /*background-size: contain;
        background-size: cover;
        background-repeat: no-repeat;
        width: 50%;
        height: auto;
        text-align: right;*/
    }
    @media (min-width: 768px) and (max-width: 1023px) {
        .main_about {padding: 16px !important;}
        .about_banner h2 {
            font-size: 1.8rem;
        }
        section.new_about .main_burron button {
            font-size: 1rem;
        }
    }
    @media (max-width: 767px) {
        .main_about {padding: 16px !important;}
        .maint_b {margin-top: 20px;}
        .about_banner h2 {
            font-size: 1.5rem;
        }
        section.new_about .main_burron button {
            font-size: 0.8rem;
        }
    }
@media(min-width: 992px){
    

}
@media(min-width: 768px) and (max-width: 991px){
    
}

@media(min-width: 575px) and (max-width:767px){

   
}
@media(min-width:480px) and (max-width:574px){
   
    

}

@media(min-width:401px) and (max-width: 479px){
    
    
}
@media screen and (max-width: 400px) {

}
</style>
<main>
<section class="container-fluid new_about">

    <div class="row justify-content-center">
    <div class="col-md-11 col-sm-12">
    <div class="main_about p-5">
        <div class="about_banner row">
            <div class="jhhh col-md-6 col-sm-12">
                <h2>Finding you modern ways to move !</h2>

                <div class="main_burron">
                    <button>
                        Lorem, ipsum dolor.
                    </button>

                </div>
            </div>
            <div class="maint_b col-md-6 col-sm-12">
                <img src="https://okroomie.com/public/assets/frontend/images/Two friends talking, sitting and using laptop.png" alt="">
            </div>
        </div>


    </div>
</div>
</div>
</section>


<section class="container-fluid py-5 text-justify">

    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-12">
            <h2> Privacy Policy</h2>

            <p><a href="">OkRoomie.com </a>Privacy Policy</p>
            <p>This Privacy Policy describes how Ok Roomie (referred to in this Privacy Policy as “Ok Roomie,” “we,” “us,” or “our”), as the operator of the website <a href=""> www.OkRoomie.com</a> (the “Site”), the associated web and mobile application, and the services provided through the Site and the mobile application that provide apartment renters, seekers, roommates, and room renters an opportunity to connect with each other (the Site, mobile application and these services constituting the “Service”), collects information when you access, visit or use the Service. It also explains how we use and disclose the information we collect from you, and your rights in relation to that information. By accessing, visiting or using the Service, you expressly consent to our collection, storage, use and disclosure of your information as described in this Privacy Policy. Please note that if you disagree with anything in this Privacy Policy, you must not use the Service. This Privacy Policy is part of, and is governed by, the terms and conditions set forth in our Terms of Use located at <a href="">https://www.Ok Roomie.com/terms.</a></p>


            <ol>
                <li><b> Information Collected through the Service.</b>

                    <ol start="0">
                        <li> <b>Information You Directly and Voluntarily Provide to Us.</b> If you are a visitor to the Service, we may collect information that you provide to us when you communicate with any of our departments such as customer service or technical services. You may also choose to provide your email address to us if you would like to receive additional information about the Service and the products and services that Ok Roomie offers. If you sign up to become a registered member of the Service, you will be required to provide certain information as part of the registration process including the information included as part of your Facebook public profile, your email address, your date of birth, and information about the room, house, apartment, or condominium (each room, and house, apartment or condominium constituting the “Accommodation”) that you are listing or seeking through the Service. As a registered member of the Service, you may also create a user profile and provide additional information about yourself; this information may include your gender, state of residence, occupation and interests. Providing additional information beyond what is required at registration is entirely optional, but enables our members to better identify each other and more effectively connect and interact with the member network.</li>
                        <li> <b>Information Automatically Collected Through the Service.</b> We may automatically collect information about you when you use the Service. For example, if you access the Service through a computer, we will automatically collect information such as your browser type and version, computer and connection information, IP address and standard web log information. If you access the Service through a mobile device, we may also be able to identify the location of your mobile device. You may choose not to share your location details with us by adjusting your mobile device’s location services settings. For instructions on changing the relevant settings, please contact your service provider or device manufacturer.</li>

                    </ol>
                </li>
            </ol>
            <p>We may automatically collect information from you when you use the Service using “cookies”. Cookies are small amounts of data that are stored within your computer’s Internet browser and that are accessed and recorded by the websites that you visit so that they can recognize the same browser navigating online at a later time.
                <br>
                Information that may be collected by cookies when you use the Service may include, without limitation:
            </p>


            <ol>
                <li> the pages you visit within the Service;</li>
                <li> the date and time of your visit to the Service;</li>
                <li> the amount of time you spend using the Service;</li>
                <li> the Internet Protocol (IP) address used to connect your computer to the Internet; and/or</li>
                <li> your computer and connection information such as your browser type and version, operating system and platform.</li>
            </ol>
            <p>We do not use cookies to track users over time and across third party websites to provide targeted advertising. You can set your browser to reject cookies or to notify you when you are sent a cookie. However, if you disable cookies you may not be able to log in to the Service or to use certain features of the Service.</p>


            <ol>
                <li> <b>Third Parties’ Use of Cookies and Web Beacons.</b> The Service may include third-party advertising, links to other websites, and other content from third-party businesses. These third-parties may use cookies and web beacons to track the actions of users online over time and across different web sites or platforms to deliver targeted electronic advertisements to an individual user. For information about how tracking works for online advertising purposes you can visit <a href=""> http://www.aboutads.info/choices.</a>
                    Ok Roomie does not have access to or control over web beacons or cookies that third party websites may use. We are not responsible for the privacy practices or the content of these third-party websites. You are encouraged to review the privacy policies of the different websites you visit. In addition, some third-party advertising companies may provide a mechanism to opt-out of their technology. For more information about the opt-out process, you may visit the Network Advertising Initiative website, available at: <a href=""> http://www.networkadvertising.org/managing/opt_out.asp</a> .
                    We also may use Google Analytics to gather and analyze anonymous user information. Google Analytics is a web analytics service provided by Google, Inc. (“Google”), to collect information about your use of the Service. Google may use cookies to collect information about the content you view, what websites you visit immediately prior to and after visiting the Site, and your system information and geographic information. The information generated by the Google cookies about your use of the Site will be transmitted to and stored by Google. The information collected by Google allows us to analyze your use of the Service. For more information about how Google collects and processes your data you can visit <a href="">http://www.google.com/policies/privacy/partners/ .</a>
                </li>
            </ol>


            <ol>
                <li>
                    <b> Do Not Track.</b> Your browser may allow you to adjust your browser settings so that “do not track” requests are sent to the websites that you visit. However, Ok Roomie will not disable tracking technology that may be active on the Service in response to any “do not track” requests that we receive from your browser.
                </li>

                <li>
                    <b> Information You Share on Third Party Websites or through Social Media Services.</b> The Service may include links to third party websites and social media services where you will be able to post comments, reviews or other information. Your use of these third party websites and social media services may result in the collection or sharing of information about you by these third party websites and social media services. We encourage you to review the privacy policies and settings on the third party websites and social media services with which you interact to make sure you understand the information that may be collected, used, and shared by those third party websites and social media services.
                </li>


                <li>
                    <b> Information You Provide to Ok Roomie about Other People.</b> You may provide us with information about your friends and contacts when you use the Service. For example, you may provide us with a friend or contact’s email if you want to invite that friend or contact to use or visit the Service, or when you request that we send your friend or contact an email link to the Service. In this circumstance, we will collect the recipient’s email address from you. However, we will only use the email address you provide for you friend or contact for the limited purpose of sending the applicable invitation, link or other communication to your friend or contact.
                </li>


                <li>
                    <b> Information You Post on the Service. </b> If you post information on public areas of the Service, or post listings for Accommodations on the Service, that information may be collected and used by Ok Roomie, other users of the Service, and the public generally. We strongly recommend that you do not post any information through the Service that you do not want to share publicly or that allows strangers to identify or locate you. Ok Roomie reserves the right to remove any information you post on the Service that Ok Roomie suspects or determines violates applicable law.
                </li>


                <li>
                    <b>Payment Processors.</b> All payments made through the Service are processed by our third party providers. All information collected by these third party providers for purposes of processing your payments is not available to us, unless you have otherwise provided this information to us in connection with your use of the Service. We will require our third party payment processors to use the payment information you submit through the Service solely for purposes of processing payments on our behalf.
                </li>


                <li>
                    <b> How We Use the Information We Collect.</b> We use the information we gather through the Service to help us better understand how the Service and our products and services are being used. By identifying patterns and trends in usage, we are able to better design the Service and our products and services to improve your experience. We may also use this information to contact and communicate with you and to respond to your communications and requests. If you are a registered member, we may email you about products and services that we believe may be of interest to you. If you wish to opt-out of receiving these marketing emails from us, please follow the instructions contained in each email you receive from us which will allow you to opt-out of receiving further email marketing communications from us.
                </li>


                <li>
                    <b> How We Share Your Information with Third Parties.</b> We do not provide user information we collect through the Service to any third parties for their own marketing purposes. In the event Ok Roomie wants to provide your information to third parties for their own marketing purposes in the future, we will notify you and you will have an opportunity to affirmatively opt-in to receiving these third party marketing communications. Ok Roomie does share your information with third parties in some circumstances as follows:

                    <ol start="0">
                        <li> <b>Employees, Third-Party Processors and Third-Party Service Providers.</b> We will disclose your information to our employees, contractors, affiliates, distributors, dealers, vendors and suppliers (“Service Providers”) who provide certain services to us or on our behalf, such as operating and supporting the Service, analyzing data, or performing marketing or consulting services. These Service Providers will only have access to the information needed to perform these limited functions on our behalf.</li>
                        <li> <b>Other Members of the Service.</b> If you are a registered member of the Service, the information you provide as part of your member profile, including your first name, photo, age, gender, city, state and occupation, will be accessible to and viewable by both unregistered users of the Service and registered members of the Service. All other information you provide as part of your profile will only be accessible to and viewable by registered members of the Service. We note that, if you have a paid subscription to use the Service, your payment information, subscription information and private mailbox will never be accessible or viewable by any other users or members of the Service.</li>
                        <li><b> Third Party Networks.</b> If you post a listing for an Accommodation through the Service, this listing information may be shared through third party websites that we have relationships with. For example, if you post a listing for an Accommodation on the Service, the listing for that Accommodation may also appear on third party websites in future that feature rental or leasing opportunities. By listing an Accommodation on the Service, you are consenting to have the listing for that Accommodation appear on these third party websites.</li>
                        <li><b> Response to Subpoenas or Court Orders or to Protect Rights and to Comply with Our Policies.</b> To the extent permitted by law, we will disclose your information to government authorities or third parties if: (i) required to do so by law, or in response to a subpoena or court order; (ii) we believe in our sole discretion that disclosure is reasonably necessary to protect against fraud, to protect the property or other rights of us or other users, third parties or the public at large; or (iii) we believe that you have abused the Service by using it to attack other systems or to gain unauthorized access to any other system, to engage in spamming or otherwise to violate applicable laws. You should be aware that, following disclosure to any third party, your information may be accessible by others to the extent permitted or required by applicable law.</li>
                        <li> <b>Business Transfers; Bankruptcy.</b> In the event of a merger, acquisition, bankruptcy or other sale of all or a portion of our assets, any user information owned or controlled by us may be one of the assets transferred to third parties. We reserve the right, as part of this type of transaction, to transfer or assign your information and other information we have collected from users of the Service to third parties. Other than to the extent ordered by a bankruptcy or other court, the use and disclosure of all transferred user information will be subject to this Privacy Policy. However, any information you submit or that is collected after this type of transfer may be subject to a new privacy policy adopted by the successor entity.</li>
                        <li> <b>Aggregate Information.</b> We may share information relating to users of the Service with affiliated or unaffiliated third parties on an anonymous, aggregate basis. While this information will not identify you personally, in some instances these third parties may be able to combine this aggregate information with other data they have about you, or that they receive from third parties, in a manner that allows them to identify you personally.</li>
                        <li> <b>Our Affiliates.</b> We may share some or all of your information with our subsidiaries and corporate affiliates, joint ventures, or other companies under common control with us. We will require these entities to comply with the terms of this Privacy Policy with regard to their use of your information.</li>
                        <li> <b>Children Under Age 13.</b> The Service is not intended for children under age 13, or for anyone under age 18 or the applicable age of majority without involvement of a parent or guardian. We do not knowingly collect or distribute personal information from or about children under the age of 13.</li>
                        <li> <b>Security.</b> We implement reasonable security measures intended to protect against the loss, misuse and alteration of the information under our control. Please be aware that no data transmission over the Internet can be guaranteed to be 100% secure. As a result, Ok Roomie cannot guarantee or warrant the security of any information you transmit on or through the Service and you do so at your own risk. If you wish to report a security vulnerability please send an email to <a href=""> support@OkRoomie.com.</a></li>
                        <li> <b>Amendments to this Privacy Policy.</b> We will notify you of changes to this Privacy Policy by posting the amended terms on the Service at least thirty (30) days before the effective date of the changes. If you do not agree to the changes, you should discontinue your use of the Service prior to the time the modified privacy policy takes effect. If you continue using the Service after the modified privacy policy takes effect, you will be bound by the modified privacy policy.</li>
                        <li> <b>Use of Information Outside Your Country of Residence.</b> The Service is directed to users located in the Australia If you are located outside of the Australia and you choose to use the Service or provide your information to us, your information may be transferred to, processed and maintained on servers or databases located in the Australia. Your agreement to this Privacy Policy followed by your submission of information through the Service represents your consent and agreement to these practices. If you do not want your information transferred to or processed or maintained in the Australia, you should not use the Service.</li>
                        <li> <b>Accessing, Changing and Managing Your Information.</b> If you are a registered member of the Service, you may make changes to the information you have provided in connection with your account by logging in to your account and changing the applicable information through the “Edit Profile” option. If you are a registered member of the Service and you want to terminate your member account, you can log in to your account, select the “Account Settings” option and then select the “Delete Account” option. You may also request to have your information deleted by contacting us at <a href="">support@OkRoomie.com.</a> Following a receipt of a request from you, we will take steps to delete your information as requested.</li>
                        <li> <b>How to Contact Us.</b> Please also feel free to contact us at <a href="">support@OkRoomie.com</a> if you have any questions about this Privacy Policy.</li>


                    </ol>



                </li>



            </ol>




            <p style="text-align: center;"><b>OkRoomie © 2022</b></p>

        </div>
    </div>

</section>
</main>

@endsection('contents')