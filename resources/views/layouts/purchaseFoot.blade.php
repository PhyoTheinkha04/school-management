<footer>
    <div class="footer">
        <div class="footele1">
            <img src="img/pkt.png" class="footImg">
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
                <img src="img/phone.png" class="footicon">
                <a href="">+959 251801804, +959 251801805</a>

            </li>

            <li class="footLink3">
                <img src="img/location.png" class="footicon">
                <a href="">No(71), Room A, Ground Floor, Upper Pazundaung Road Mingalar Taung Nyunt
                    Township,Yangon.</a>
            </li>
        </ul>

    </div>
    <div id="jsScroll" class="scroll" onclick="scrollToTop();">
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
    <script src="js/jquery.min.js"></script>
    <link href="css/slick.css" rel="stylesheet" />
    <link href="css/slick.min.css" rel="stylesheet" />

    <script src="js/slick.min.js"></script>
    <script src="js/common.js"></script>
    <script src="js/scrollup.js"></script>
</footer>


</html>
<style>
.circle {
    position: relative;
    margin: 7em auto 1em;
    width: 200px;
    height: 200px;
    padding: 15px;
    border-radius: 50%;
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


.arc1:before {
    box-sizing: border-box;
    display: block;
    border: solid 1em #ED1C24;
    width: 200%;
    height: 200%;
    border-radius: 50%;
    transform: skewX(-30deg);
    content: '';
}

.purchase-details {
    width: 800px;
    margin: 0 auto;
    border-radius: 26px;
    background: rgba(225, 225, 225, 0.4);
    box-shadow: 5px 5px 4px #CCD5DF, inset 3px 3px 4px #C9D4DE;
    padding: 35px 0px 0px;
}

.purchase-details h3 {
    font-style: normal;
    font-weight: 700;
    font-size: 36px;
    line-height: 44px;
    color: #ED1C24;
    margin-top: 0px;
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
    font-style: normal;
    font-weight: 700;
    font-size: 36px;
    line-height: 44px;
    color: #ED1C24;
}

.signupElements {
    width: 70%;
    margin: 0 auto;
    padding-top: 50px;
}

.form_field {
    width: 100%;
    border: none;
    border-bottom: 3.5px solid #C9D4DE;
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

.purchase-contents {
    width: 100%;
    margin: 0 auto;
}

table,
th {
    /* border: 1px solid #D9D9D9; */
    border-collapse: collapse;
}

tr td:last-child {
    border-right: none;
}

tr td:first-child {
    border-left: none;
}

tr td:last-child {
    border-bottom: none;
}

tr:last-child {
    border-bottom: none;
}

.purchase-contents th {
    padding: 30px 0px;
    text-align: center;
    font-style: normal;
    font-weight: 600;
    font-size: 14px;
    font-family: Arial;
    border-top: 1px solid #D9D9D9;
    border-left: 1px solid #D9D9D9;
    border-right: 3px solid #D9D9D9;
    border-bottom: 3px solid #D9D9D9;
    background: #D9D9D9;
}

td {
    padding: 5px;
    text-align: left;
    border-top: 3px solid #C5C5C5;
    border-left: 3px solid #C5C5C5;
    border-right: 3px solid #C5C5C5;
    /* border-bottom: 3px solid #C5C5C5; */
    height: 30px;
    ;
}

@media only screen and (max-width: 768px) {
    .mypage {
        width: 90%;
        margin: 0 auto;
    }

    .mypage h3 {
        font-size: 16px;
        margin: 0px 0px 90px 0px;
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

    .arc1:before {
        border: solid 0.6em #ED1C24;
        width: 200%;
        height: 200%;
    }

    .logoutBtn {
        width: 71px;
        height: 28px;
        margin: 0 auto;
        display: block;
    }

    .purchase-details h3 {
        font-style: normal;
        font-weight: 700;
        font-size: 18px;
        line-height: 44px;
        color: #ED1C24;
        margin-top: 0px;
    }

    .arc:before,
    .arc2:before {
        box-sizing: border-box;
        display: block;
        border: solid 0.6em #D9D9D9;
        width: 200%;
        height: 200%;
        border-radius: 50%;
        transform: skewX(-30deg);
        content: '';
    }



    .purchase-details {
        width: 100%;
        margin: 0 auto;
        border-radius: 26px;
        background: rgba(225, 225, 225, 0.4);
        box-shadow: 5px 5px 4px #CCD5DF, inset 3px 3px 4px #C9D4DE;
        padding: 35px 0px 0px;
    }

    td {
        padding: 5px;
        text-align: left;
        border-top: 3px solid #C5C5C5;
        border-left: 3px solid #C5C5C5;
        border-right: 3px solid #C5C5C5;
        /* border-bottom: 3px solid #C5C5C5; */
        height: 38px;
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
</body>
