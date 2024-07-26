@extends('layouts.frontendMaster')
@section('contents')


<style>
    .switch-field {
        display: flex;
        margin-bottom: 20px;
        overflow: hidden;
    }

    .switch-field input {
        position: absolute !important;
        clip: rect(0, 0, 0, 0);
        height: 1px;
        width: 1px;
        border: 0;
        overflow: hidden;
    }

    .switch-field label {
        background-color: #e4e4e4;
        color: rgba(0, 0, 0, 0.6);
        font-size: 14px;
        line-height: 1;
        text-align: center;
        padding: 8px 16px;
        margin-right: -1px;
        border: 1px solid rgba(0, 0, 0, 0.2);
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);
        transition: all 0.1s ease-in-out;
    }

    .switch-field label:hover {
        cursor: pointer;
    }

    .switch-field input:checked+label {
        background-color: #2E3036;
        box-shadow: none;
        color: white;
    }


    label {
        /* padding: 26px 0px; */
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        align-content: center;
    }

    .switch-field label:first-of-type {
        border-radius: 4px 0 0 4px;
    }

    .switch-field label:last-of-type {
        border-radius: 0 4px 4px 0;
    }

    /* This is just for CodePen. */

    .form {
        max-width: 600px;
        font-family: "Lucida Grande", Tahoma, Verdana, sans-serif;
        font-weight: normal;
        line-height: 1.625;
        margin: 8px auto;
        padding: 16px;
    }

    section.lehsun {
        margin-top: 90px;
    }

    .jjhgffd {
        width: 330px;
        margin: auto;

    }

    .jjhgffd .switch-field {
        width: 100% !important;
    }

    .jjhgffd .switch-field label {
        width: inherit;
    }

    .jjhgffd p {
    margin: 0;
    font-size: 12px;
    line-height: 20px;
}

.switch-field {
    margin-top: 10px;
}

button#omg {
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    flex-shrink: 0;
    position: relative;
    outline: none;
    width: inherit;
    font-family: inherit;
    font-size: 1rem;
    font-weight: 600;
    line-height: 1.5rem;
    border: #008FB4;
    background-color: #008FB4;
    color: rgb(255, 255, 255);
    border-radius: 8px;
    padding: calc(0.6875rem) 1.5rem;
    cursor: pointer;
}
</style>





<section class="lehsun">
    <div class="container">


        <form class="form">
            <div class="jjhgffd">
                <p><b>Messages</b></p>
                <p>Be notified when you have a new message</p>
                <div class="switch-field">
                    <input type="radio" id="radio-one" name="switch-one" value="yes" checked />
                    <label for="radio-one">Email</label>
                    <input type="radio" id="radio-two" name="switch-one" value="no" />
                    <label for="radio-two">No thanks</label>
                </div>
            </div>


            <div class="jjhgffd">
                <p><b>Listings</b></p>
                <p>Be notified when you have a matching listing.</p>
                <div class="switch-field">
                    <input type="radio" id="radio-three" name="switch-two" value="yes" checked />
                    <label for="radio-three">Instant</label>
                    <input type="radio" id="radio-four" name="switch-two" value="maybe" />
                    <label for="radio-four">Daily</label>
                    <input type="radio" id="radio-five" name="switch-two" value="no" />
                    <label for="radio-five">none</label>
                </div>

            </div>



            <div class="jjhgffd">
                <p><b>New device alert</b></p>
                <p>Be notified when a new device or browser has accessed your account.</p>
                <div class="switch-field">
                    <input type="radio" id="c2" name="c" value="yes" checked />
                    <label for="c2">Email</label>
                    <input type="radio" id="c1" name="c" value="no" />
                    <label for="c1">No thanks</label>
                </div>
            </div>


            <div class="jjhgffd">
                <p><b>Community notices</b></p>
                <p>Okroomie.com news, events and competitions.</p>
                <div class="switch-field">
                    <input type="radio" id="radio-one33" name="switch-11" value="yes" checked />
                    <label for="radio-one33">Email</label>
                    <input type="radio" id="radio-two22" name="switch-11" value="no" />
                    <label for="radio-two22">No thanks</label>
                </div>
            </div>


            <div class="jjhgffd">
                <p><b>Special offers</b></p>
                <p>Exclusive offers from our partners.</p>
                <div class="switch-field">
                    <input type="radio" id="radio-one77" name="switch-2" value="yes" checked />
                    <label for="radio-one77">Email</label>
                    <input type="radio" id="radio-two88" name="switch-2" value="no" />
                    <label for="radio-two88">No thanks</label>
                </div>

                <br>
                <button id="omg">Update</button>
            </div>

          



        </form>

    </div>
</section>





























@endsection('contents')