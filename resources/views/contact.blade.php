@extends('layouts.master2')
@section('content')



    <main>
        <section class="contactUs">
            <!-- <div class="midline"></div> -->
            <div class="contact_elements">
        <div class="contact_left">
            <h4>
                Sent ​a Message
            </h4>
            <p class="contactTxt">
                You can fill in the information below and inquire about what you want to know. You can also inquire through the phone number
            </p>
            <form action="">
                <ul class="input_elements1 pc">
                    <li class="input">
                            <input type="input" name="name" placeholder="Name" class="form_field" >

                    </li>
                    <li class="input">
                        <select id="" name="" class="form_field" placeholder="">
                            <option value="" disabled selected class="opt">Interested in</option>
                            <option value="">Japanese</option>
                            <option value="">IT</option>
                            <option value="">Web coding</option>
                            <option value="">Classes</option>
                        </select>
                    </li>

                </ul>
                <ul class="input_elements2 pc">
                    <li class="input">
                            <input type="text" class="form_field" placeholder="Email address">

                    </li>
                    <li class="input">
                        <input type="text" class="form_field" placeholder="Phone Number">
                    </li>
                </ul>
                <ul class="input_elements1 sp">
                    <li class="input">
                            <input type="input" name="name" placeholder="Name" class="form_field" >
                    </li>
                    <li class="input">
                        <input type="text" class="form_field" placeholder="Email address">
                </li>
                <li class="input">
                    <input type="text" class="form_field" placeholder="Phone Number">
                </li>
                    <li class="input">
                        <select id="" name="" class="form_field" placeholder="Interested in">
                            <option value="" disabled selected class="opt">Interested in</option>
                            <option value="">Japanese</option>
                            <option value="">IT</option>
                            <option value="">Web coding</option>
                            <option value="">Classes</option>
                        </select>
                    </li>

                </ul>
                <textarea rows="10" cols="600" name="" form="" placeholder="Message" class="form_field2"></textarea>
                <button type="submit" class="contactbtn"><span>Submit</span> </button>
            </form>
        </div>

                <div class="contacts">
                    <p class="contactTitle">
                        Call us
                    </p>
                    <p class="contactTxt2">
                        Those who want to inquire can contact the following phone numbers during office hours (9:00-5:00).
                    </p>

                    <p class="addr">
                        <img src="img/phone.png" class="footicon">
                        +959 251801804, +959 251801805
                    </p>

                    <p class="contactTitle">
                        Visit us
                    </p>
                    <p class="contactTxt2">
                        Leverage PKT to further your future. For those who want to inquire,
                        you can come and inquire without any holidays
                    </p>

                    <p class="addr">
                        <img src="img/location.png" class="footicon">
                        No(71), Room A, Ground Floor, Upper Pazundaung Road Mingalar Taung Nyunt
                        Township,Yangon.
                    </p>

                </div>
            </div>
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.8889960348874!2d96.17195701481742!3d16.782197388443876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ed6232ed2ac1%3A0x5817e6d2d92f0b44!2sPKT%20IT%20%26%20Japanese%20Language%20Center!5e0!3m2!1sen!2smm!4v1679023282286!5m2!1sen!2smm"
                    width="1058" height="404" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </main>
@endsection
