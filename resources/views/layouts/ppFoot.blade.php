<footer>
    <div class="footer">
        <div class="footele1">
            <img src="img/pkt.png" class="footImg">
            <p class="footTxt1">
                အနာဂတ်အတွက် ဂျပန်စာနှင့် နည်းပညာကိုလေ့လာပြီး အောင်မြင်တဲ့ဘဝပန်းတိုင်ကိုတက်လှမ်းနိုင်ရန်အတွက် PKT
                Education Center မှသင်ကြားပေးနေပါပြီ...
            </p>
        </div>

        <ul class="info">
            <p class="title6">သတင်းအချက်အလက်</p>
            <li class="footLink1">
                <a href="index.html">မူလစာမျက်နှာ</a>
                <a href="about.html">ကျွန်ုပ်တို့အကြောင်း</a>
                <a href="local.html">အပြင်တန်း</a>
                <a href="online.html">အွန်လိုင်းတန်း</a>
                <a href="faq.html">မေးခွန်းများ</a>
            </li>

            <li class="footLink2">
                <a href="news.html">သတင်း</a>
                <a href="contact.html">ဆက်သွယ်ရန်</a>
            </li>
        </ul>
        <ul class="address">
            <p class="title7">လိပ်စာ</p>
            <li class="footLink3">
                <img src="img/phone.png" class="footicon">
                <a href="">+၉၅၉ ၂၅၁၈၀၁၈၀၄ +၉၅၉ ၂၅၁၈၀၁၈၀၄</a>

            </li>

            <li class="footLink3">
                <img src="img/location.png" class="footicon">
                <a href="">အမှတ်(၇၁)၊ အခန်း A ၊ မြေညီထပ်၊ အထက်ပုစွန်တောင်လမ်း ၊ မင်္ဂလာတောင်ညွန့်မြို့နယ်၊
                    ရန်ကုန်မြို့</a>
            </li>
        </ul>

    </div>
    <div id="jsScroll" class="scroll" onclick="scrollToTop();">
        <i><img src="img/arrow.png" class="arrow" /></i>
    </div>
    <div class="button">
        <a href="#" class="up"></a>
    </div>

    <div class="copyRight">
        <p>© 2020 PKT Education Center All Rights Reserved.</p>
    </div>
    <link href="css/slick.css" rel="stylesheet" />
    <link href="css/slick.min.css" rel="stylesheet" />
    <script src="js/jquery.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/common.js"></script>
    <!-- <script src="js/animate.js"></script> -->
    <!-- <script src="js/scrollup.js"></script> -->
</footer>
</body>

</html>
<style>
.circle {
    position: relative;
    margin: auto;
    width: 200px;
    height: 200px;
    padding: 15px;
    border-radius: 50%;
}

.arc {
    overflow: hidden;
    position: absolute;
    top: -1em;
    right: 50%;
    bottom: 50%;
    left: -1em;
    transform-origin: 100% 100%;
    transform: rotate(60deg) skewX(30deg);
}

.mypage_icon {
    width: 40px;
    margin: 0 auto;
    position: absolute;
    top: -77px;
    left: 94px;
}

.mypage1_icon {
    width: 40px;
    margin: 0 auto;
    position: absolute;
    top: 82px;
    left: -77px;
}

.mypage2_icon {
    width: 40px;
    margin: 0 auto;
    position: absolute;
    top: 81px;
    right: -80px;
}

.arc1 {
    overflow: hidden;
    position: absolute;
    top: -1em;
    right: 50%;
    bottom: 50%;
    left: -1em;
    transform-origin: 100% 100%;
    transform: rotate(145deg) skewX(30deg);
}

.arc1 {
    overflow: hidden;
    position: absolute;
    /* make sure top & left values are - the width of the border */
    /* the bottom right corner is the centre of the parent circle */
    top: -1em;
    right: 50%;
    bottom: 50%;
    left: -1em;
    /* the transform origin is the bottom right corner */
    transform-origin: 100% 100%;
    /* rotate by any angle */
    /* the skew angle is 90deg - the angle you want for the arc */
    transform: rotate(335deg) skewX(30deg);
}

.arc2 {
    overflow: hidden;
    position: absolute;
    /* make sure top & left values are - the width of the border */
    /* the bottom right corner is the centre of the parent circle */
    top: -1em;
    right: 50%;
    bottom: 50%;
    left: -1em;
    /* the transform origin is the bottom right corner */
    transform-origin: 100% 100%;
    /* rotate by any angle */
    /* the skew angle is 90deg - the angle you want for the arc */
    transform: rotate(145deg) skewX(30deg);
}

.arc:before {
    border: solid 1em #ED1C24;
    box-sizing: border-box;
    display: block;
    width: 200%;
    height: 200%;
    border-radius: 50%;
    transform: skewX(-30deg);
    content: '';
}

.arc1:before,
.arc2:before {
    box-sizing: border-box;
    display: block;
    border: solid 1em #D9D9D9;
    width: 200%;
    height: 200%;
    border-radius: 50%;
    transform: skewX(-30deg);
    content: '';
}


.mypage-details {
    width: 634px;
    margin: 0 auto;
    border-radius: 26px;
    padding: 35px 0px 50px;
    background: rgba(225, 225, 225, 0.4);
    box-shadow: 5px 5px 4px #ccd5df, inset 5px 5px 4px #c9d4de;
}

.mypage-details h3 {
    font-family: Arial;
    font-style: normal;
    font-weight: 700;
    font-size: 36px;
    line-height: 44px;
    color: #ed1c24;
    margin: 0px 0px 100px 0px
        /* background-image: url(./img/back.png);
    background-repeat: no-repeat; */
}

a.backimg {
    padding-left: 15px;
    position: absolute;
}

.user img {
    width: 200px;
    height: 200px;
    margin: 0 auto;
    display: block;
    /* padding: 50px 0px 50px; */
    transition: box-shadow 0.7s;
    /* margin: 15px 84px; */
    position: relative;
    border-radius: 50%;
    list-style: none;
}

.user_signup h3 {
    font-style: italic;
    font-weight: 700;
    font-size: 36px;
    line-height: 44px;
    color: #ed1c24;
}

.signupElements {
    width: 70%;
    margin: 0 auto;
    padding-top: 50px;
}

.form_field {
    width: 100%;
    border: none;
    border-bottom: 3.5px solid #c9d4de;
    outline: 0;
    padding: 7px 0;
    background: transparent;
    font-family: Arial;
    font-style: normal;
    font-weight: 600;
    font-size: 15px;
    color: #000000;
    margin-bottom: 47px;
}

.details-contents {
    width: 75%;
    margin: 0 auto;
}

.details-contents dt h5 {
    font-family: Arial;
    font-style: italic;
    font-weight: 700;
    font-size: 16px;
    line-height: 19px;
    color: #ed1c24;
    margin-bottom: 20px;
}

.details-contents dl {
    display: flex;
}

.details-contents dt {
    width: 50%;
    border-right: 3px solid #bfbfbf;
}

.details-contents dd {
    width: 35%;
    margin-left: 50px;
    font-size: 15px;
    color: #818181;
}

.details-contents dd p {
    margin-bottom: 20px;
}

@media only screen and (max-width: 768px) {
    .mypage-details {
        width: 90%;
        margin: 0 auto;
    }

    .mypage-details h3 {
        font-size: 18px;
        padding-bottom: 50px;
        margin: 0px 0px 11px 0px;
        font-weight: 700;
        font-family: Arial;
        font-style: normal;
    }

    .circle {
        width: 135px;
        height: auto;
        margin: 0 auto;
        position: relative;
        padding: 5px;
    }

    .user img {
        width: 133px;
        height: 133px;
    }

    .mypage_icon {
        width: 27px;
        margin: 0 auto;
        position: absolute;
        top: -50px;
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

    .arc:before {
        border: solid 0.6em #ed1c24;
        width: 200%;
        height: 200%;
    }

    .arc1:before,
    .arc2:before {
        border: solid 0.6em #D9D9D9;
        width: 200%;
        height: 200%;
    }

    .details-contents dd p,
    .details-contents dt h5 {
        font-size: 14px;
    }

    img.userElements {
        width: 100%;
    }

    .details-contents dl {
        display: flex;
        padding-left: 30px;
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
