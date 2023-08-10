<footer>
    <div class="footer">
        <div class="footele1">
            <img src="img/pkt.png" class="footImg">
            <p class="footTxt1">
                {{ __('message.fp') }}
            </p>
        </div>

        <ul class="info">
            <p class="title6">{{ __('message.ft1') }}</p>
            <li class="footLink1">
                <a href="index-uk.html">{{ __('message.home') }}</a>
                <a href="about-uk.html">{{ __('message.aboutus') }}</a>
                <a href="local-uk.html">{{ __('message.local') }}</a>
                <a href="online-uk.html">{{ __('message.online') }}</a>
                <a href="faq-uk.html">{{ __('message.faq') }}</a>
            </li>

            <li class="footLink2">
                <a href="news-uk.html">{{ __('message.news') }}</a>
                <a href="contact-uk.html">{{ __('message.contact') }}</a>
            </li>
        </ul>
        <ul class="address">
            <p class="title7">{{ __('message.ft2') }}</p>
            <li class="footLink3">
                <img src="img/phone.png" class="footicon">
                <a href="">{{ __('message.ph') }}</a>

            </li>

            <li class="footLink3">
                <img src="img/location.png" class="footicon">
                <a href="">{{ __('message.add') }}</a>
            </li>
        </ul>

    </div>
    <div id="jsScroll" class="scroll visible" onclick="scrollToTop();">
        <i><img src="img/arrow.png" class="arrow"></i>
    </div>
    <div class="button">
        <a href="#" class="up"></a>

    </div>

    <div class="copyRight">
        <p>
            © 2020 PKT Education Center All Rights Reserved.
        </p>
    </div>

    <script src="{!! asset('js/jquery.min.js') !!}"></script>
    <script src="{!! asset('js/slick.min.js') !!}"></script>
    <script src="{!! asset('js/animate.js') !!}"></script>
    <script src="{!! asset('js/common.js') !!}"></script>
    <script src="js/scrollup.js"></script>
</footer>
</body>

</html>
