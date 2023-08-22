
<footer>
    <div class="footer">
        <div class="footele1">
            <img src="{{ asset('img/pkt.png') }}" class="footImg">
            <p class="footTxt1">
                PKT Education Center is now teaching Japanese language and technology
                for the future and achieving a successful life goal...
            </p>
        </div>

        <ul class="info">
            <p class="title6">Information For</p>
            <li class="footLink1">
                <a href="index-uk.html">Home</a>
                <a href="about-uk.html">About Us</a>
                <a href="local-uk.html">Local Course</a>
                <a href="online-uk.html">Online Course</a>
                <a href="faq-uk.html">Q&A</a>
            </li>

            <li class="footLink2">
                <a href="news-uk.html">News</a>
                <a href="contact-uk.html">Contact</a>
            </li>
        </ul>
        <ul class="address">
            <p class="title7">Address</p>
            <li class="footLink3">
                <img src="{{ asset('img/phone.png') }}" class="footicon">
                <a href="">+959 251801804, +959 251801805</a>

            </li>

            <li class="footLink3">
                <img src="{{ asset('img/location.png') }}" class="footicon">
                <a href="">No(71), Room A, Ground Floor, Upper Pazundaung Road Mingalar Taung Nyunt Township,Yangon.</a>
            </li>
        </ul>

    </div>
    <div id="jsScroll" class="scroll" onclick="scrollToTop();">
        <i><img src="{{ asset('img/arrow.png') }}" class="arrow"></i>
    </div>
    <div class="button">
        <a href="#" class="up"></a>

    </div>

    <div class="copyRight">
        <p>
            © 2020 PKT Education Center All Rights Reserved.
        </p>
    </div>
    <link href="css/slick.css" rel="stylesheet" />
    <link href="css/slick.min.css" rel="stylesheet" />
    <script src="js/jquery.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/common.js"></script>
    <script src="{{ asset('js/scrollup.js') }}"></script>
    <script src="{!! asset('js/custom.js') !!}"></script>
</footer>
<script>
    $(document).on('click', '#jp', function (e) {
        window.location='./local-jp.html';
});
$(document).on('click', '#mm', function (e) {
        window.location='./local.html';
});
</script>
</body>
 <style>
    @media only screen and (max-width: 768px) {
      .mypage {
        width: 90%;
        margin: 0 auto;
      }
      .mypage h3 {
    font-size: 18px;
    margin: 0px 0px 90px 0px;
    font-style:normal;
    font-weight: 700;
        }
      .user img {
        width: 133px;
        height: 133px;
      }
      .circle {
        width: 135px;
        height: 135px;
        padding: 5px;
      }
      .mypage_icon {
        left: 70px;
      }
      .mypage_icon {
        width: 27px;
        margin: 0 auto;
        position: absolute;
        top: -65px;
        left: 60px;
      }
      .mypage1_icon {
        width: 27px;
        margin: 0 auto;
        position: absolute;
        top: 60px;
        left: -65px;
      }
      .mypage2_icon {
        width: 27px;
        margin: 0 auto;
        position: absolute;
        top: 60px;
        right: -65px;
      }
      .arc:before,
      .arc1:before,
      .arc2:before {
        border: solid 0.6em #D9D9D9;
        width: 200%;
        height: 200%;
      }
      .logoutBtn {
        width: 71px;
        height: 28px;
        margin: 0 auto;
        display: block;
      }
      .head2 {
            -webkit-animation-name: fadeIn;
            animation-name: fadeIn;
            -webkit-animation-duration: 2.5s;
            animation-duration: 2.5s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }

        @-webkit-keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }
    }
  </style>
</html>
