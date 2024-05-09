<style>
    input[type="text"],
    input[type="text"]:not(.browser-default),
    input[type="password"],
    input[type="password"]:not(.browser-default) {
        outline: 0;
        margin-bottom: 0
    }

    input[type="text"]:focus:not([readonly]),
    input[type="text"]:not(.browser-default):focus:not([readonly]),
    input[type="password"]:focus:not([readonly]),
    input[type="password"]:not(.browser-default):focus:not([readonly]) {
        box-shadow: none
    }

    textarea {
        outline: 0;
        border: 0
    }

    input:focus::-webkit-input-placeholder {
        color: transparent
    }

    input:focus:-moz-placeholder {
        color: transparent
    }

    input:focus::-moz-placeholder {
        color: transparent
    }

    input:focus:-ms-input-placeholder {
        color: transparent
    }

    textarea:focus::-webkit-input-placeholder {
        color: transparent
    }

    textarea:focus:-moz-placeholder {
        color: transparent
    }

    textarea:focus::-moz-placeholder {
        color: transparent
    }

    textarea:focus:-ms-input-placeholder {
        color: transparent
    }

    input::-webkit-input-placeholder {
        color: #fff
    }

    input:-moz-placeholder {
        color: #fff
    }

    input::-moz-placeholder {
        color: #fff
    }

    input:-ms-input-placeholder {
        color: #fff
    }

    textarea {
        outline: 0;
        border: 0
    }

    textarea:focus::-webkit-input-placeholder {
        color: transparent
    }

    textarea:focus:-moz-placeholder {
        color: transparent
    }

    textarea:focus:-ms-input-placeholder {
        color: transparent
    }

    textarea:focus::-moz-placeholder {
        color: transparent
    }

    textarea:-moz-placeholder {
        color: #fff
    }

    textarea:-ms-input-placeholder {
        color: #fff
    }

    input:focus::-webkit-input-placeholder {
        color: transparent
    }

    input:focus:-moz-placeholder {
        color: transparent
    }

    input:focus:-ms-input-placeholder {
        color: transparent
    }

    input:focus::-moz-placeholder {
        color: transparent
    }

    input:-moz-placeholder {
        color: #fff
    }

    input:-ms-input-placeholder {
        color: #fff
    }

    input::-webkit-input-placeholder {
        color: #fff
    }

    input::-moz-placeholder {
        color: #fff
    }

    textarea::-webkit-input-placeholder {
        color: #fff
    }

    textarea::-moz-placeholder {
        color: #fff
    }

    label {
        margin: 0;
        display: block
    }

    button {
        outline: none !important;
        border: 0;
        background: transparent
    }

    button:hover {
        cursor: pointer
    }

    iframe {
        border: none !important
    }

    .txt1 {
        font-size: 13px;
        color: #e5e5e5;
        line-height: 1.5;
        text-align: center
    }

    .limiter {
        width: 100%;
        margin: 0 auto
    }

    .container-login100 {
        width: 100%;
        min-height: 100vh;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        padding: 15px;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        position: relative;
        z-index: 1
    }

    .container-login100::before {
        content: "";
        display: block;
        position: absolute;
        z-index: -1;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background-color: rgba(255, 255, 255, 0.7)
    }

    .wrap-login100 {
        width: 500px;
        border-radius: 30px;
        overflow: hidden;
        padding: 55px 55px 37px 55px;
        /* background: -webkit-linear-gradient(top,#79a739,#79a739b0) */
        background: linear-gradient(-45deg, #4d7435, #79a739, #79a739b0, #cbe2aa);
        background-size: 400% 400%;
        animation: gradient 15s ease infinite;
    }

    @keyframes gradient {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    .login100-form {
        width: 100%
    }

    .login100-form-logo {
        font-size: 60px;
        color: #333;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 120px;
        height: 120px;
        border-radius: 50%;
        background-color: transparent;
        margin: 0 auto
    }

    .login100-form-logo img {
        width: 100px;
        border-radius: 50%
    }

    .login100-form-title {
        font-size: 30px;
        color: #fff;
        line-height: 1.2;
        text-align: center;
        display: block
    }

    .wrap-input100 {
        width: 100%;
        position: relative;
        margin-bottom: 30px
    }

    input[type="text"].input100,
    input[type="text"]:not(.browser-default).input100,
    input[type="password"].input100,
    input[type="password"]:not(.browser-default).input100,
    input[type="email"].input100,
    input[type="email"]:not(.browser-default).input100 {
        font-size: 16px;
        color: #fff;
        line-height: 1.2;
        display: block;
        width: calc(100% - 43px);
        height: 45px;
        background: transparent;
        padding: 0 5px 0 38px;
        border-bottom: 2px solid rgba(255, 255, 255, 0.24);
        -webkit-transition: all .4s;
        -o-transition: all .4s;
        -moz-transition: all .4s;
        transition: all .4s
    }

    input[type="text"].input100:focus,
    input[type="text"]:not(.browser-default).input100:focus,
    input[type="password"].input100:focus,
    input[type="password"]:not(.browser-default).input100:focus,
    input[type="email"].input100:focus,
    input[type="email"]:not(.browser-default).input100:focus {
        width: calc(100% - 10px);
        padding-left: 5px;
        border-bottom: 2px solid white
    }

    .focus-input1001 {
        position: absolute;
        display: block;
        width: 100%;
        height: 100%;
        top: 8px;
        left: 0;
        color: #fff;
        pointer-events: none;
        transition: all .4s
    }

    .contact100-form-checkbox {
        padding-left: 5px;
        padding-top: 5px;
        padding-bottom: 35px
    }

    .contact100-form-checkbox .form-check .form-check-sign .check {
        border: 1px solid #fff
    }

    .contact100-form-checkbox .form-check .form-check-label {
        color: #fff
    }

    .input-checkbox100 {
        display: none
    }

    .input-checkbox100:checked+.label-checkbox100::before {
        color: #555
    }

    .label-checkbox100 {
        font-size: 13px;
        color: #fff;
        line-height: 1.2;
        display: block;
        position: relative;
        padding-left: 26px;
        cursor: pointer
    }

    [type="checkbox"]+label:before {
        top: 8px;
        border: 2px solid #fff
    }

    [type="checkbox"]:not(.filled-in)+label:after {
        top: 8px;
        border: 2px solid #fff
    }

    .label-checkbox100::before {
        content: "\f26b";
        font-family: Material-Design-Iconic-Font;
        font-size: 13px;
        color: transparent;
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        width: 16px;
        height: 16px;
        border-radius: 2px;
        left: 0;
        top: 50%;
        transform: translateY(-50%)
    }

    .container-login100-form-btn {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: center
    }

    .login100-form-btn {
        font-size: 16px;
        color: #555;
        line-height: 1.2;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0 20px;
        min-width: 120px;
        height: 50px;
        border-radius: 25px;
        background: #8e57f9;
        background: -webkit-linear-gradient(top, #79a739, #79a739b0);
        position: relative;
        z-index: 1;
        transition: all .4s
    }

    .ps-0 {
        padding-left: 0px !important
    }

    .login100-form-btn:hover {
        color: #fff;
        background-color: #2ab7a9
    }

    .login100-form-btn:hover:before {
        opacity: 0
    }

    .login100-form-btn::before {
        content: "";
        display: block;
        position: absolute;
        z-index: -1;
        width: 100%;
        height: 100%;
        border-radius: 25px;
        background-color: #fff;
        top: 0;
        left: 0;
        opacity: 1;
        transition: all .4s
    }

    @media(max-width:576px) {
        .wrap-login100 {
            padding: 55px 15px 37px 15px
        }
    }

    .validate-input {
        position: relative
    }

    .alert-validate::before {
        content: attr(data-validate);
        position: absolute;
        max-width: 70%;
        background-color: #fff;
        border: 1px solid #c80000;
        border-radius: 2px;
        padding: 4px 25px 4px 10px;
        top: 50%;
        transform: translateY(-50%);
        right: 0;
        pointer-events: none;
        color: #c80000;
        font-size: 13px;
        line-height: 1.4;
        text-align: left;
        visibility: hidden;
        opacity: 0;
        transition: opacity .4s
    }

    .alert-validate:hover:before {
        visibility: visible;
        opacity: 1
    }

    .alert-validate .material-icons.erroe_dis {
        position: absolute;
        right: 0;
        top: 11px;
        color: #ca0a0a
    }

    .p-b-34 {
        padding-bottom: 34px
    }

    .p-t-27 {
        padding-top: 27px
    }

    .p-t-90 {
        padding-top: 90px
    }

    .form-404 {
        text-align: center
    }

    .content-404 {
        color: #fff;
        font-size: 14px;
        padding: 30px
    }

    .form404-title {
        font-size: 50px;
        color: #fff;
        line-height: 1.2;
        text-align: center;
        display: block
    }

    .txt-locked {
        color: #fff;
        font-size: 18px;
        padding: 10px 0
    }

    .page-background {
        background-image: url("../../images/bg-01.jpg")
    }

    @media(max-width:992px) {
        .alert-validate::before {
            visibility: visible;
            opacity: 1
        }
    }

    .input100:focus+.focus-input1001 {
        top: -22px;
        font-size: 18px
    }

    .has-val.input100 {
        padding-left: 5px
    }

    .loginmain {
        background: #ffffff
    }

    .site-link {
        padding: 5px 15px;
        position: fixed;
        z-index: 99999;
        background: #fff;
        box-shadow: 0 0 4px rgba(0, 0, 0, 0.14), 0 4px 8px rgba(0, 0, 0, 0.28);
        right: 30px;
        bottom: 30px;
        border-radius: 10px
    }

    .site-link img {
        width: 30px;
        height: 30px
    }

    .loginCard {
        width: 70%;
        margin: 10% auto; 
        min-height: 400px;
        display: block;
        position: relative;
        box-shadow: 0 0 4px rgba(0, 0, 0, 0.14), 0 4px 8px rgba(0, 0, 0, 0.28);
        background: linear-gradient(-45deg, #4d7435, #79a739, #79a739b0, #cbe2aa);
        background-size: 400% 400%;
        animation: gradient 15s ease infinite;
    }
    .register{
        background: linear-gradient(-45deg, #4d7435, #79a739, #79a739b0, #cbe2aa);
        background-size: 400% 400%;
        animation: gradient 15s ease infinite;

    }

    .loginCard>div {
        vertical-align: middle;
        text-align: center;
        color: #fff;
        width: 50%;
        float: left
    }

    .loginCard .login-btn {
        position: absolute;
        top: 40%
    }

    .loginCard .rgstr-btn {
        right: 0;
        position: absolute;
        top: 40%
    }

    .loginCard button {
        background: transparent;
        display: inline-block;
        padding: 10px 30px;
        border: 3px solid #fff;
        border-radius: 50px;
        background-clip: padding-box;
        position: relative;
        color: #fff;
        transition: all .25s
    }

    .loginCard button.dark {
        border-color: #bd59d4;
        background: #bd59d4;
        box-shadow: 0 10px 30px 0 rgba(189, 89, 212, 0.5);
        -moz-box-shadow: 0 10px 30px 0 rgba(189, 89, 212, 0.5);
        -webkit-box-shadow: 0 10px 30px 0 rgba(189, 89, 212, 0.5);
        -o-box-shadow: 0 10px 30px 0 rgba(189, 89, 212, 0.5);
        -ms-box-shadow: 0 10px 30px 0 rgba(189, 89, 212, 0.5)
    }

    .loginCard button:active {
        box-shadow: none
    }

    .loginCard button:focus {
        outline: 0
    }

    .loginCard .wrapper>form {
        padding: 15px 30px 30px;
        transition: all .5s;
        background: #fff;
        width: 100%;
        border-radius: 20px
    }

    .loginCard .wrapper>form:focus {
        outline: 0
    }

    .loginCard .wrapper>form>div {
        position: relative;
        margin-bottom: 15px
    }

    .loginCard .wrapper #login {
        padding-top: 20%;
        visibility: visible
    }

    .loginCard .wrapper #register {
        transform: translateY(-80%) translateX(100%);
        visibility: hidden
    }

    .loginCard .wrapper.move #register {
        transform: translateY(-100%) translateX(0);
        visibility: visible
    }

    .loginCard .wrapper.move #login {
        transform: translateX(-100%);
        visibility: hidden
    }

    .loginCard .wrapper label {
        position: absolute;
        top: -7px;
        font-size: 12px;
        white-space: nowrap;
        background: #fff;
        text-align: left;
        left: 15px;
        padding: 0 5px;
        color: #999;
        pointer-events: none
    }

    .loginCard .wrapper h3 {
        margin-bottom: 25px
    }

    .loginCard .wrapper input {
        height: 40px;
        width: 100%;
        border: solid 1px #999;
        border-radius: 20px;
        padding-left: 10px
    }

    .loginCard .wrapper input:focus {
        outline: 0;
        border-color: #ff4931;
        box-shadow: none !important;
        border-bottom: 1px solid #ff4931 !important
    }

    .loginCard .move button.dark {
        border-color: #bd59d4;
        background: #bd59d4;
        box-shadow: 0 10px 30px 0 rgba(189, 89, 212, 0.5);
        -moz-box-shadow: 0 10px 30px 0 rgba(189, 89, 212, 0.5);
        -webkit-box-shadow: 0 10px 30px 0 rgba(189, 89, 212, 0.5);
        -o-box-shadow: 0 10px 30px 0 rgba(189, 89, 212, 0.5);
        -ms-box-shadow: 0 10px 30px 0 rgba(189, 89, 212, 0.5)
    }

    .loginCard .splits p {
        font-size: 18px
    }

    .loginCard>.wrapper {
        position: absolute;
        width: 40%;
        height: 120%;
        top: -10%;
        left: 5%;
        border-radius: 20px;
        background: #fff;
        box-shadow: 0 0 4px rgba(0, 0, 0, 0.14), 0 4px 8px rgba(0, 0, 0, 0.28);
        transition: all .5s;
        color: #303030;
        overflow: hidden
    }

    .loginCard>.wrapper.move {
        left: 45%
    }

    @media(max-width:767px) {
        .loginCard {
            padding: 5px;
            margin: 0;
            width: 100%;
            display: block
        }

        .loginCard>div {
            display: inline-block
        }

        .loginCard>.wrapper {
            position: relative;
            height: auto;
            top: 0;
            left: 0;
            width: 100%
        }

        .loginCard>.wrapper.move {
            left: 0
        }

        .splits {
            width: 50%;
            background: #fff;
            float: left
        }

        .splits button {
            width: 100%;
            border-radius: 0;
            background: #505050;
            border: 0;
            opacity: .7
        }

        .splits button.active {
            opacity: 1;
            background: #ff4931
        }

        .splits p {
            display: none
        }

        .splits.rgstr-btn button.active {
            background: #e0b722
        }
    }

    input:-webkit-autofill {
        box-shadow: inset 0 0 0 50px #fff
    }

    textarea:-webkit-autofill {
        box-shadow: inset 0 0 0 50px #fff
    }

    select:-webkit-autofill {
        box-shadow: inset 0 0 0 50px #fff
    }

    .flex-c {
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: center
    }

    .login100-social-item {
        font-size: 25px;
        color: #fff;
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: #fff;
        margin: 5px;
        box-shadow: 0 5px 20px 0 rgba(0, 0, 0, 0.1);
        -moz-box-shadow: 0 5px 20px 0 rgba(0, 0, 0, 0.1);
        -webkit-box-shadow: 0 5px 20px 0 rgba(0, 0, 0, 0.1);
        -o-box-shadow: 0 5px 20px 0 rgba(0, 0, 0, 0.1);
        -ms-box-shadow: 0 5px 20px 0 rgba(0, 0, 0, 0.1)
    }

    .bg-fb {
        background-color: #3b5998
    }

    .bg-twitter {
        background-color: #1da1f2
    }

    .bg-google {
        background-color: #ea4335
    }

</style>


<style>
    .register {
    margin-top: 3% !important;
    padding: 3% !important; 
    background: linear-gradient(-45deg, #4d7435, #79a739, #79a739b0, #cbe2aa);
    background-size: 400% 400%;
    animation: gradient 15s ease infinite;
}

@keyframes gradient {
    0% {
        background-position: 0% 50%;
    }

    50% {
        background-position: 100% 50%;
    }

    100% {
        background-position: 0% 50%;
    }
}

.register-left {
    text-align: center !important;
    color: #fff !important;
    margin-top: 4% !important;
}

.register-left input {
    border: none !important;
    border-radius: 1.5rem !important;
    padding: 2% !important;
    width: 60% !important;
    background: #f8f9fa !important;
    font-weight: bold !important;
    color: #383d41 !important;
    margin-top: 30% !important;
    margin-bottom: 3% !important;
    cursor: pointer !important;
}


.tab-content>.tab-pane.active {
    display: block !important;
}

.tab-content>.tab-pane {
    display: none !important;
}


.register-right {
    background: #f8f9fa !important;
    border-top-left-radius: 10% 50% !important;
    border-bottom-left-radius: 10% 50% !important;
}

.register-left img {
    margin-top: 15% !important;
    margin-bottom: 5% !important;
    width: 25% !important;
    -webkit-animation: mover 2s infinite alternate !important;
    animation: mover 1s infinite alternate !important;
}

@-webkit-keyframes mover {
    0% {
        transform: translateY(0) !important;
    }

    100% {
        transform: translateY(-20px) !important;
    }
}

@keyframes mover {
    0% {
        transform: translateY(0) !important;
    }

    100% {
        transform: translateY(-20px) !important;
    }
}

.register-left p {
    font-weight: lighter !important;
    padding: 12% !important;
    margin-top: -9% !important;
}

.register .register-form {
    padding: 10% !important;
    margin-top: 10% !important;
}

.btnRegister {
    float: right !important;
    margin-top: 10% !important;
    border: none !important;
    border-radius: 1.5rem !important;
    padding: 2% !important;
    background: #79a739 !important;
    color: #fff !important;
    font-weight: 600 !important;
    width: 50% !important;
    cursor: pointer !important;
}

.register .nav-tabs {
    margin-top: 3% !important;
    border: none !important;
    background: #79a739 !important;
    border-radius: 1.5rem !important;
    width: 28% !important;
    float: right !important;
}

.register .nav-tabs .nav-link {
    padding: 2% !important;
    height: 34px !important;
    font-weight: 600 !important;
    color: #fff !important;
    border-top-right-radius: 1.5rem !important;
    border-bottom-right-radius: 1.5rem !important;
}

.register .nav-tabs .nav-link:hover {
    border: none !important;
}

.register .nav-tabs .nav-link.active {
    width: 100px !important;
    color: #79a739 !important;
    border: 2px solid #79a739 !important;
    border-top-left-radius: 1.5rem !important;
    border-bottom-left-radius: 1.5rem !important;
}

.register-heading {
    text-align: center !important;
    margin-top: 8% !important;
    margin-bottom: -15% !important;
    color: #495057 !important;
}
</style>