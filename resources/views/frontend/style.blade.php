<style>
    @import url(https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap);
    @import url(https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap);
    @import url(https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap);

    @media (min-width: 992px) {
        .col-md-1half {
            flex: 0 0 auto;
            width: 12%;
        }
    }

    :root {
        --main-primary: #F17800;
    }

    .bg-second {
        background: #f5f7f6 !important;
    }

    .image-container .after,
    .play img {
        opacity: 0;
        transition: .3s
    }

    .peel-btn:after,
    .peel-btn:before,
    .top-cards:hover:after {
        content: "";
        position: absolute
    }

    .mob .brand,
    .play,
    .view-detail-cta {
        text-align: center
    }

    .single_footer ul li a:hover,
    .subscribe__btn:hover i {
        opacity: .8
    }

    .drops button,
    .drops button:focus {
        box-shadow: none !important
    }

    .burger,
    .search input:focus,
    .search-input,
    a {
        outline: 0
    }

    body {
        font-family: Nunito, sans-serif;
        background-color: #fff
    }

    @media (min-width:992px) {
        .col-lg-2half {
            flex: 0 0 auto;
            width: 20% !important
        }
    }

    .MainHeading {
        /* font-family: Cormorant, serif */
    }

    .menu-link,
    .mob .brand,
    .search-input {
        font-family: inherit
    }

    .view-detail-cta {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 100%;
        left: 0;
        height: 70%;
        display: flex;
        align-items: center;
        justify-content: center
    }

    #toggle_filter,
    .close_btn,
    .navbar.mob .dropdown-toggle::after,
    .sidebar.show:first-of-type .togle.burger,
    .togle.click .burger-line:first-child {
        display: none
    }

    .btn-price {
        background-color: #1fc1c3;
        color: #fff;
        border: none;
        transition: .3s
    }

    .btn-price:hover {
        background-color: #1aa6a8;
        border: none;
        color: #fff
    }

    .coupon-cta,
    .coupon-cta:hover {
        background: #1fc1c3;
        color: #fff
    }

    .bd-soft {
        border: 1px solid #e8e8e8
    }

    .bd-soft-right {
        border-right: 1px solid #e8e8e8
    }

    .bd-soft-left {
        border-left: 1px solid #e8e8e8
    }

    .categ-dropd,
    nav.mob.sidebar ul {
        padding: 0
    }

    .categ-dropd li:hover {
        background-color: #1e90ff;
        color: #fff
    }

    a,
    nav.mob ul {
        background: 0 0
    }

    .coupon-cta {
        padding: 4px;
        text-transform: uppercase;
        font-size: 12px
    }

    .wishlist.like-container {
        height: 30px;
        width: 30px;
        display: flex;
        padding: 4px
    }

    .orange-gradient {
        background: linear-gradient(0deg, #ff9c19 40%, #ffdd2d 110%);
        border: none;
        color: #fff;
        transition: .3s;
        box-shadow: -3.828px -3.828px 6px 0 rgb(255 200 39 / 40%), 3px 5px 8px 0 rgb(255 82 1 / 20%)
    }

    .read-more-cta,
    .read-more-cta:hover {
        background-color: #F17800;
        color: #fff
    }

    .orange-gradient:hover {
        box-shadow: 11px 11px 32px rgb(255 82 1 / 20%), -11px -11px 32px rgb(255 200 39 / 40%);
        color: #fff
    }

    .read-more-cta {
        font-weight: 600;
        border-radius: 3rem
    }

    .read-more-cta:hover {
        border: 1px solid #fff
    }

    .header {
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000;
        background: #fff;
        transition: .2s;
        display: flex;
        flex-direction: column;
        width: 100%
    }

    .dropdown-toggle .feat-btn,
    .search input,
    .vd_controls {
        width: 100%
    }

    .play {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%)
    }

    .parentDiv .nav ul li a,
    .top-links a {
        font-style: normal;
        transition: color .2s ease-in-out;
        font-weight: 600;
        text-decoration: none;
        text-transform: uppercase
    }

    #heart.red,
    .btn.show,
    .menu.mobil.is-active a,
    .search-cancel::before,
    a:hover {
        color: #F17800
    }

    .image-container {
        position: relative;
        height: 250px !important
    }

    .image-container img {
        object-fit: cover;
        height: 100%;
        width: 100%
    }

    .image-container .after {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        color: #fff;
        align-items: end;
        display: flex;
        align-items: flex-end;
        padding: 5px
    }

    .card_pp .after {
        opacity: 1 !important;
        background: linear-gradient(0deg, #1c1b1b 6%, #181717 14%, rgba(21, 21, 21, .927608543417367) 21%, rgba(15, 15, 15, .7175245098039216) 36%, rgba(0, 0, 0, 0) 79%)
    }

    .card_pp:hover .play img {
        opacity: 1 !important;
        cursor: pointer
    }

    .w-16 {
        width: 16px
    }

    input:focus-visible {
        outline: 0
    }

    #main_filter,
    .desktop .right .search .fields,
    .mobile-nav .search .fields {
        display: flex
    }

    .copyright-tag h6,
    .product-grid .Heading {
        font-size: 14px
    }

    .parentDiv {
        color: #000
    }

    .desktop {
        height: 100%;
        width: 100%
    }

    .desktop .logo {
        width: 16%;
    }

    .desktop .country-dropdown .dropdown-menu {
        transform: translate(22px, 30px) !important
    }

    .sidebar.mob .country-dropdown .dropdown-menu {
        transform: translate(0) !important
    }

    .sidebar.mob .country-dropdown .dropdown-menu img.w-40 {
        width: 10% !important
    }

    .nav {
        display: flex;
        justify-content: space-between;
        align-items: center
    }

    .parentDiv .nav ul {
        list-style: none;
        align-items: center
    }

    .parentDiv .nav ul li a {
        margin-right: 21px;
        margin-left: 21px;
        font-size: 12px;
        color: #fff;
        letter-spacing: .2em
    }

    .top-links a {
        font-size: 16px;
        color: #ffffff;
        letter-spacing: 00em
    }

    .foot_sliderz .slick-next.slick-arrow,
    .foot_sliderz .slick-prev.slick-arrow,
    .mobile-nav {
        display: none !important
    }

    @media screen and (max-width:1000px) {

        .desktop .log,
        .desktop .sign {
            padding: 8px 14px !important
        }
    }


    .burger-line,
    .desktop .sign,
    .search,
    .search-btn {
        background-color: #fff
    }

    /*.search {*/
    /*    border-radius: 5px;*/
    /*    border: 1px solid #F17800 !important*/
    /*}*/

    .search input {
        font-weight: 600;
        border: none;
        /*border-left: 2px solid #ccc*/
    }

    .search input::placeholder {
        font-weight: 500;
        color: #bbb
    }

    .search select {
        font-weight: 600;
        color: #000;
        border: 0;
        width: 41%
    }

    /*.search-btn {*/
    /*    border-left: 2px solid #ccc !important*/
    /*}*/

    .desktop .log {
        color: #fff;
        font-weight: 500;
        border: 0
    }

    .desktop .sign {
        font-weight: 600;
        border-radius: 3rem;
        color: #F17800
    }

    .header.mobile,
    .menu.mobil {
        z-index: 10;
        background-color: var(--color-white);
        box-shadow: var(--shadow-medium);
        top: 0
    }

    .desktop .sign:hover {
        background-color: #e6edff;
        color: #F17800
    }



    @media (max-width:500px) {
        .bi-search {
            width: 10px
        }

        .search input {
            padding: 0 !important
        }

        .search {
            justify-content: space-between !important
        }
    }

    :root {
        --color-black: #1a1a1a;
        --color-darks: #404040;
        --color-greys: #999;
        --color-light: #f2f2f2;
        --color-white: #fff;
        --shadow-small: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
        --shadow-medium: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        --shadow-large: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)
    }

    a {
        cursor: pointer;
        border: none;
        text-transform: unset;
        text-decoration: none
    }

    .section {
        margin: 0 auto;
        padding: 6rem 0 1rem
    }

    .mob.container {
        max-width: 75rem;
        height: auto;
        margin: 0 auto;
        padding: 0 1.25rem
    }

    .mob .brand {
        font-size: 1.5rem;
        font-weight: 600;
        line-height: 1.5;
        letter-spacing: -1px;
        text-transform: uppercase;
        color: #bbb
    }

    .header.mobile {
        position: fixed;
        left: 0;
        width: 100%;
        height: auto;
        margin: 0 auto
    }

    .mob .brand img {
        width: 100%;
        /* filter: hue-rotate(170deg) brightness(136%); */
    }

    .navbar.mob {
        position: relative;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        margin: 0 auto
    }

    .menu.mobil {
        position: fixed;
        left: -100%;
        width: 50%;
        height: 100%;
        overflow-y: auto;
        transition: .5s ease-in-out
    }

    .alert-dismissible button.close {
        position: absolute;
        top: 1%;
        right: 1%;
        background: 0 0;
        border: 0;
        font-size: 30px
    }

    .custom-dropdown {
        top: 80%;
        left: unset
    }

    .User-area,
    .custom-dropdown-area {
        width: auto;
        height: 100%;
        position: relative;
        cursor: pointer
    }

    .custom-dropdown-area>.User-avtar>img {
        width: 45px;
        height: 45px
    }

    .UserProfile .custom-Dropdown {
        top: 60px;
        width: 100%
    }

    .custom-Dropdown {
        display: none;
        position: absolute;
        border-radius: 7px;
        background: #fff;
        box-shadow: 0 0 8px rgba(59, 88, 157, .3);
        list-style: none !important;
        padding: 0 20px;
        width: auto;
        margin: 0;
        left: 0;
        z-index: 999999999
    }

    .burger,
    .main.pd_cards {
        position: relative;
        cursor: pointer
    }

    .User-Dropdown>li,
    .custom-Dropdown>li {
        padding: 0;
        line-height: 47px;
        border-bottom: 1px solid rgba(215, 215, 215, .17)
    }

    .country-list.dropdown-toggle::after,
    .custom-dropdown-area .dropdown-toggle::after,
    .single_footer p,
    .single_footer_address ul li {
        color: #fff
    }

    .User-Dropdown>li a,
    .custom-Dropdown>li a {
        font-size: 13px !important;
        padding: unset !important;
        text-decoration: none !important;
        color: #000 !important;
        transition: .2s ease-out !important;
        margin-right: unset !important;
        margin-left: unset !important;
        font-weight: unset !important;
        font-style: normal !important;
        letter-spacing: unset !important;
        text-transform: unset !important
    }

    .User-Dropdown>li:before,
    .custom-Dropdown>li:before {
        content: '';
        width: 0;
        height: 40px;
        position: absolute;
        background: #F17800;
        margin-top: 4px;
        border-radius: 0 1px 1px 0;
        left: 0;
        transition: .2s
    }

    .User-Dropdown>li:hover:before,
    .custom-Dropdown>li:hover:before {
        width: 5px;
        border-radius: 30px
    }

    .User-Dropdown>li a:hover,
    .custom-Dropdown>li a:hover {
        margin-left: 5px
    }

    .sidebar.show~.close_btn,
    nav.mob ul .categ-show.show4,
    nav.mob ul .comm-show.show2,
    nav.mob ul .feat-show.show,
    nav.mob ul .serv-show.show1,
    nav.mob ul .user-show.show3 {
        display: block
    }

    .menu.mobil.is-active {
        top: 0;
        left: 0
    }

    .menu.mobil.is-active .menu-inner {
        padding: 20% 0
    }

    .menu-inner {
        display: flex;
        flex-direction: column;
        row-gap: 1.25rem;
        margin: 1.25rem;
        align-items: center
    }

    .menu-link {
        font-size: 12px;
        font-weight: 700;
        padding: 6px 12px;
        line-height: 1.5;
        transition: .3s;
        text-transform: uppercase
    }

    .burger-line,
    .overlay {
        transition: .3s ease-in-out
    }

    .menu-link:hover {
        color: #bbb
    }

    @media only screen and (min-width:48rem) {
        .menu.mobil {
            position: relative;
            top: 0;
            left: 0;
            width: auto;
            height: auto;
            margin-left: auto;
            background: 0 0;
            box-shadow: none
        }

        .menu-inner {
            display: flex;
            flex-direction: row;
            column-gap: 1.75rem;
            margin: 0 5rem 0 auto;
            align-items: center
        }

        .menu-block {
            margin-left: 2rem
        }
    }

    .burger {
        display: block;
        order: -1;
        width: 1.75rem;
        height: auto;
        border: none;
        visibility: visible
    }

    .burger-line {
        display: block;
        cursor: pointer;
        width: 100%;
        height: 2px;
        margin: 6px auto;
        transform: rotate(0)
    }

    .overlay,
    .search-block {
        position: fixed;
        height: 100%;
        width: 100%;
        top: 0
    }

    .menu.mobil a {
        color: #fff;
        font-size: 12px
    }

    .overlay {
        left: 0;
        z-index: 9;
        opacity: 0;
        visibility: hidden;
        background-color: rgba(0, 0, 0, .6)
    }

    .overlay.is-active {
        display: block;
        opacity: 1;
        visibility: visible
    }

    .search-cancel,
    .search-toggle {
        display: block;
        cursor: pointer;
        font-size: 1.35rem;
        line-height: inherit;
        color: #fff
    }

    .search-block {
        right: -100%;
        z-index: 10;
        overflow: hidden;
        background-color: #fff;
        transition: .45s ease-in-out
    }

    .search-block.is-active {
        top: 0;
        right: 0
    }

    .search-form {
        display: flex;
        align-items: center;
        column-gap: .75rem;
        padding: .75rem 1rem
    }

    .search-input {
        display: block;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        width: 100%;
        height: auto;
        padding: .65rem 1.25rem;
        border: none;
        border-radius: .25rem;
        color: #fff;
        background-color: #eee
    }

    .search-input::-webkit-search-cancel-button,
    .search-input::-webkit-search-decoration {
        display: none;
        visibility: hidden
    }

    .mobile-nav .log {
        color: #F17800;
        font-weight: 700
    }

    .menu.mobil.is-active .sign {
        background-color: #F17800;
        color: #fff !important;
        border-radius: 3rem;
        font-weight: 700
    }

    .mobile-nav .sign {
        font-weight: 700;
        background-color: #fff;
        color: #F17800 !important;
        border-radius: 3rem
    }

    @media (max-width:480px) {

        .top-links a,
        .top-links select {
            border: 0 !important;
            text-decoration: none;
            font-size: 14px;
            font-weight: 800;
            font-style: normal;
            color: #ffffffde;
            transition: color .2s ease-in-out;
            letter-spacing: 00em;
            text-transform: uppercase
        }

        .social_profile ul li a {
            width: 40px;
            height: 40px;
            line-height: 40px
        }
    }

    .carousel-control-next,
    .carousel-control-prev {
        width: 10%
    }

    .carousel-control-next-icon,
    .carousel-control-prev-icon {
        width: 3rem;
        height: 3rem;
        background-size: 100%;
        opacity: .7
    }

    .carousel-control-next-icon:hover,
    .carousel-control-prev-icon:hover,
    .like-button svg {
        opacity: 1
    }

    .carousel-control-prev-icon {
        background-image: url(https://eliteblue.net/Clients/viys/coupon/public/frontend/img/left-arrow.png)
    }

    .carousel-control-next-icon {
        background-image: url(https://eliteblue.net/Clients/viys/coupon/public/frontend/img/right-arrow.png)
    }

    .text-purp,
    .text-signature {
        color: #F17800
    }

    .bg-purp {
        background-color: #F17800
    }

    .bg-signature {
        background-color: #F17800 !important
    }


    .text-signature {
        color: #F17800 !important
    }

    .expiry,
    .mobile-nav .search .fields input[name=coupon],
    .old_price {
        font-size: 12px
    }

    .like-button svg path {
        fill: #333;
        transition: fill ease-out
    }

    .like-button.active svg path {
        fill: #2196f3
    }

    #heart {
        color: grey
    }

    .product-item {
        transition: .5s ease-in;
        cursor: pointer;
        overflow: hidden;
        background: #f3f3f3e6 !important;
    }

    .main.pd_cards {
        transition: .1s
    }

    .pd_card_overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%
    }

    .main.pd_cards:hover .pd_card_overlay {
        box-shadow: 0 0 15px 3px #bbb !important;
        border: .35rem solid #F17800
    }

    .main.pd_cards img {
        z-index: 0
    }

    .main.pd_cards:hover .pd_card_overlay:after {
        content: "";
        z-index: 5;
        position: absolute;
        top: -2px;
        left: -2px;
        border: 18px solid transparent;
        border-left: 18px solid #F17800 !important;
        border-bottom: 18px solid #F17800 !important;
        transform: rotate(90deg)
    }



    .shadow_dark {
        box-shadow: 0 0 15px #5e5e5e !important
    }

    .top-cards {
        cursor: pointer;
        position: relative;
        transition: .15s;
        display: flex;
        align-items: center;

        height: 95px;

    }

    .top-cards img {
        object-fit: contain;
        transition: .3s ease;
    }

    .top-cards:hover img {
        transform: scale(1.1);
        /* box-shadow: 0 0 15px 3px #bbb !important; */
        /*border: .2rem solid #F17800*/
    }

    /*.top-cards:hover:after {*/
    /*    top: -1px;*/
    /*    left: -1px;*/
    /*    border: 12px solid transparent;*/
    /*    border-left: 12px solid #F17800 !important;*/
    /*    border-bottom: 12px solid #F17800 !important;*/
    /*    transform: rotate(90deg)*/
    /*}*/

    .full-w .wishlist {
        top: 0;
        right: 15%
    }

    .mobile-nav .search .fields select,
    .side-text {
        font-size: 10px
    }

    .custom_btn {
        background-color: #F17800;
        padding: .75rem 2rem;
        font-size: 20px;
        border: none;
        border-radius: 3rem;
        font-weight: 500;
        color: #fff;
        transition: .3s
    }

    .peel-btn,
    .peel-btn:after,
    .peel-btn:before,
    .peel-btn:hover:after,
    .peel-btn:hover:before {
        transition: .3s linear
    }

    .custom_btn:hover {
        background-color: #6483cb;
        color: #fff
    }

    .footer ul,
    .single_footer ul {
        margin: 0;
        padding: 0;
        list-style: none
    }

    .footer img {
        max-width: 100%;
        height: auto
    }

    .footer section {
        padding: 60px 0
    }

    .footer {
        background: #F17800 !important
    }

    .footer .row.main_footer {
        padding-top: 14px
    }

    .code {
        display: block;
        width: 100%;
        text-align: right;
        background: #e6eeffe6;
        padding: 10px 10px 10px 60px;
        font-weight: 700;
        color: #000
    }

    .peel-btn {
        position: absolute;
        top: 50%;
        left: 0;
        width: calc(100% - 50px);
        cursor: pointer;
        background: #6483cb;
        color: #fff;
        padding: 8px;
        display: flex;
        justify-content: center;
        transform: translate(0, -50%)
    }

    .peel-btn:focus,
    .peel-btn:hover {
        background: #48629f;
        transition: .3s linear;
        color: #fff
    }

    .peel-btn:hover:after {
        border-bottom: 36px solid #1c2f5b;
        border-right: 30px solid transparent;
        right: -28px
    }

    .peel-btn:hover:before {
        width: 28px;
        height: 8px;
        background: #48629f
    }

    .peel-btn:before {
        bottom: 0;
        left: 100%;
        width: 28px;
        height: 15px;
        background: #6483cb
    }

    .peel-btn:after {
        top: 0;
        right: -28px;
        border-bottom: 28px solid #1c2f5b;
        border-right: 28px solid transparent
    }

    .coupons .coupon1 {
        margin: 35px auto;
        background: #fff;
        box-shadow: 0 2px 4px 2px rgba(0, 0, 0, .1);
        padding: 15px
    }

    .coupons .coupon1 .get-codebtn-holder {
        float: left;
        text-align: center;
        width: 30%
    }

    body,
    html {
        overflow-x: hidden
    }

    @media only screen and (max-width:1200px) {

        .peel-btn:after,
        .peel-btn:hover:after {
            border-right: 20px solid transparent;
            right: -20px
        }

        .peel-btn {
            font-size: 8px
        }

        .code {
            font-size: 10px
        }

        .peel-btn:after {
            border-bottom: 20px solid #1c2f5b
        }

        .peel-btn:before {
            width: 20px !important
        }

        .peel-btn:hover:after {
            border-bottom: 23px solid #1c2f5b;
            transition: .3s linear
        }
    }

    .single_footer h4 {
        color: #fff;
        margin-top: 0;
        margin-bottom: 10px;
        font-weight: 700;
        text-transform: uppercase;
        font-size: 18px
    }

    .single_footer ul li a {
        color: #fff;
        -webkit-transition: .3s;
        transition: .3s;
        line-height: 30px;
        font-size: 14px;
        font-weight: 400;
        text-transform: capitalize
    }

    .single_footer_address ul li span {
        font-weight: 400;
        color: #fff;
        line-height: 28px
    }

    .contact_social ul,
    .social_profile ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .subscribe {
        display: block;
        position: relative;
        margin-top: 15px
    }

    .subscribe__input {
        background-color: #fff;
        border: none;
        border-radius: 5rem;
        color: #333;
        display: block;
        font-size: 15px;
        font-weight: 500;
        height: 45px;
        letter-spacing: .4px;
        margin: 0;
        padding: 0 65px 0 15px;
        text-align: start;
        text-transform: capitalize;
        width: 100%
    }

    .copyright-tag,
    .drops button,
    .social_profile ul li a {
        text-transform: uppercase;
        background: #F17800;
    }

    .subscribe__input:focus {
        border: 0 !important
    }

    .subscribe__btn {
        background-color: transparent;
        border-radius: 0 25px 25px 0;
        color: #F17800;
        cursor: pointer;
        display: block;
        font-size: 20px;
        height: 45px;
        position: absolute;
        right: 0;
        top: 0;
        width: 60px
    }

    .subscribe__btn i {
        transition: .3s;
        /*color: #F17800*/
    }

    .footer button {
        padding: 0;
        border: none;
        background-color: transparent;
        -webkit-border-radius: 0;
        border-radius: 0
    }

    .social_profile {
        margin-top: 18px
    }

    .social_profile ul li {
        float: left
    }

    .social_profile ul li a {
        text-align: center;
        border: 1px solid rgba(255, 255, 255, .2);
        transition: .3s;
        margin: 0 5px;
        font-size: 18px;
        color: #fff;
        border-radius: 30px;
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        /*background: #F17800;*/
    }

    .social_profile ul li a:hover {
        border: 0;
        color: #fff;
        opacity: .9
    }

    .blog_sec_1 {
        background-color: #F17800;
        background-position: 0 100%;
        background-size: cover;
        background-repeat: no-repeat;
        height: 100%;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 2%
    }

    .blog_sec_1 button,
    .signup_btn {
        background-color: #F17800;
        color: #fff;
        border: 0;
        border-radius: 0
    }

    .blog_sec_1 button:hover,
    .login_btn:hover,
    .signup_btn:hover {
        background-color: #F17800;
        color: #fff
    }

    .blog_sec_1 .form {
        border: 1px solid #fff;
        overflow: hidden;
        border-radius: 3rem
    }

    @media (max-width:992px) {
        .blog_sec_1 .form {
            border: 0 solid #fff;
            overflow: visible;
            margin: 2rem 0
        }

        .blog_sec_1 input {
            border-radius: 3rem !important
        }

        .blog_sec_1 button {
            border-radius: 3rem;
            margin: 1rem 0;
            padding: 0;
            background-color: #fff;
            color: #F17800
        }
    }

    header .dropdown-menu a {
        display: inline
    }

    header .dropdown-menu li {
        margin: 1rem 0 !important
    }

    header .dropdown-menu li:hover a {
        background-color: #F1780018 !important;
        padding: 1rem
    }

    header .dropdown-menu li a {
        margin: 1rem 0 !important;
        text-decoration: unset !important;
        font-size: unset !important;
        font-weight: unset !important
    }

    header .dropdown-menu.show {
        min-width: 100% !important;
        border: none;
        text-align: center;
        background: #F178001f !important;
        height: 50vh;
        overflow-y: scroll
    }

    .w-40 {
        width: 40% !important
    }

    .card-btn1 {
        font-size: 16px;
        border: 2px dashed #F17800;
        font-weight: 600
    }

    .card-btn2 {
        border: 2px solid #F17800;
        font-weight: 400;
        font-size: 12px
    }

    .text-muted {
        color: #777 !important
    }

    @media only screen and (max-width:992px) {

        .card-btn1,
        .card-btn2 {
            font-size: 8px
        }

        .card-btn1 {
            border: 2px dashed #F17800
        }

        .truncate {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis
        }
    }



    .fs-12 {
        font-size: 12px !important
    }

    .truncate {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden
    }

    @media only screen and (max-width:530px) {

        .code,
        .peel-btn {
            font-size: 8px
        }

        .truncate {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis
        }

        .peel-btn {
            position: absolute;
            top: 50%;
            left: 5%;
            width: calc(100% - 46px);
            cursor: pointer;
            background: #6483cb;
            color: #fff;
            padding: 10px;
            display: flex;
            justify-content: center;
            transition: .3s linear;
            transform: translate(0, -50%)
        }
    }

    @media only screen and (max-width:500px) {

        .code,
        .peel-btn {
            font-size: 5px
        }

        .peel-btn,
        .peel-btn:before {
            position: absolute;
            background: #6483cb;
            transition: .3s linear
        }

        .truncate {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis
        }

        .peel-btn {
            top: 50%;
            left: 5%;
            width: calc(100% - 46px);
            cursor: pointer;
            color: #fff;
            padding: 10px;
            display: flex;
            justify-content: center;
            transform: translate(0, -50%)
        }

        .peel-btn:before {
            content: "";
            bottom: 0;
            left: 100%;
            width: 28px;
            height: 8px
        }
    }

    @media only screen and (max-width:400px) {

        .code,
        .peel-btn {
            font-size: 5px
        }

        .peel-btn,
        .peel-btn:before {
            position: absolute;
            background: #6483cb;
            transition: .3s linear
        }

        .peel-btn {
            top: 50%;
            left: -17%;
            width: calc(100% - 20px);
            cursor: pointer;
            color: #fff;
            padding: 10px;
            display: flex;
            justify-content: center;
            transform: translate(0, -50%)
        }

        .peel-btn:before {
            content: "";
            bottom: 0;
            left: 100%;
            width: 28px;
            height: 8px
        }
    }

    .styledSelect.active:after,
    .styledSelect:after {
        content: "";
        width: 0;
        height: 0;
        border: 5px solid transparent;
        right: 6px
    }

    .fw-sm-bold {
        font-weight: 600
    }

    .options {
        display: none !important;
        position: absolute;
        top: 100%;
        right: 0;
        left: 0;
        z-index: 999;
        margin: 0;
        padding: 0;
        list-style: none;
        border: 1px solid #ccc;
        background-color: #fff
    }

    .options li a,
    .options_active,
    .slick-slide img {
        display: block !important
    }

    .options li {
        width: 100%;
        padding: 14px 6px !important
    }

    .options li a {
        width: 100%;
        margin-right: unset !important;
        margin-left: unset !important;
        color: #F17800 !important;
        font-size: 16px !important;
        font-weight: 600 !important;
        letter-spacing: 0 !important;
        transition: .3s !important;
        text-transform: capitalize !important
    }

    .copyright-tag h6 a,
    .options li:hover,
    .options li:hover a {
        color: #fff !important
    }

    .styledSelect.active:after {
        border-color: #F17800 transparent transparent;
        position: absolute;
        top: 6px;
        transform: scaleY(-1)
    }

    .options li:hover {
        background-color: #F17800 !important
    }

    .drops button,
    .drops button:focus,
    .drops button:hover {
        background-color: transparent;
        border: 0 !important
    }

    .drops button,
    .drops button:focus,
    .drops button:hover,
    .select {
        color: #F17800;
        font-weight: 600
    }

    .select {
        cursor: pointer;
        position: relative;
        font-size: 18px;
        width: 135px
    }

    .styledSelect {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0
    }

    .styledSelect:after {
        border-color: #F17800 transparent transparent;
        position: absolute;
        top: 12px;
        transform: scaleY(1);
        transition: .2s
    }

    .s-hidden {
        visibility: hidden;
        padding-right: 10px
    }

    .drops button {
        font-size: 18px
    }

    .drops ul li a:focus {
        background-color: #F17800;
        color: #fff
    }

    .fw-sm,
    .list-links {
        font-weight: 500
    }

    .togle.click {
        left: 85%;
        z-index: 100;
        position: fixed;
        top: 32px
    }

    .list {
        overflow-y: auto
    }

    .togle.click .burger-line:nth-child(2) {
        transform: rotate(45deg)
    }

    .togle.click .burger-line:nth-child(3) {
        transform: rotate(-45deg) translate(5px, -5px)
    }

    .close_btn i {
        color: #fff;
        width: 45px;
        height: 45px
    }

    .togle span {
        color: #fff;
        font-size: 28px;
        line-height: 45px
    }

    .sidebar {
        position: fixed;
        width: 0%;
        height: 100%;
        left: -100%;
        background: #fff;
        transition: .4s;
        z-index: 99;
        top: 0
    }

    .sidebar.show {
        left: 0;
        width: 80%;
        transition: .4s
    }

    nav.mob ul {
        height: 100%;
        width: 100%;
        list-style: none
    }

    nav.mob ul li {
        line-height: 60px;
        border-top: 1px solid #3b9c9d34
    }

    nav.mob ul li a {
        position: relative;
        color: #212121;
        text-decoration: none;
        font-size: 16px;
        padding-left: 25px;
        font-weight: 400;
        display: block;
        width: 100%;
        border-left: 3px solid transparent
    }

    nav.mob ul li.active a {
        color: #212121;
        border-left-color: #212121
    }

    nav.mob ul li a:hover {
        background: #F1780018
    }

    nav.mob ul ul {
        position: static;
        display: none
    }

    .mobile-nav .sidebar .list li ul {
        height: unset !important
    }

    nav.mob ul ul li {
        line-height: 42px;
        border-top: none
    }

    nav.mob ul ul li a {
        font-size: 17px;
        color: #505050;
        padding-left: 55px;
        text-align: left !important
    }

    nav.mob ul li.active ul li a {
        color: #F17800ba;
        border-left-color: transparent
    }

    nav.mob ul li a span {
        position: absolute;
        top: 50%;
        right: 20px;
        transform: translateY(-50%);
        font-size: 22px;
        transition: transform .4s
    }

    nav.mob ul li a span.rotate {
        transform: translateY(-50%) rotate(-180deg)
    }

    .sidebar.show .main-flag {
        width: 60px
    }

    .sidebar.show .dropdown-menu.feat-show.show img {
        width: 10% !important;
        padding-top: 0 !important;
        padding-bottom: 0 !important
    }

    .sidebar.show .dropdown-menu.feat-show.show li:hover a {
        padding-left: 55px;
        padding-top: 0 !important;
        padding-bottom: 0 !important
    }

    .sidebar.show .dropdown-menu.feat-show.show li a {
        margin: 0 !important;
        padding-top: 0 !important;
        padding-bottom: 0 !important
    }

    .sidebar.show .dropdown-menu.feat-show.show li {
        text-align: start;
        margin: 0 !important
    }

    .w-80 {
        width: 80%
    }

    @media (max-width:1050px) {
        .searchmob {
            margin: 0 !important;
            width: 100% !important;
            border-radius: 3rem;
            border: 2px solid #F17800;
            padding: 12px 24px !important
        }

        .categ_links {
            margin: 12px 24px !important;
            border-radius: 3rem;
            border: 2px solid #3b579c;
            overflow: hidden
        }

        .searchmob input::placeholder {
            font-weight: 500;
            color: #F1780064
        }

        .searchmob .search-btn {
            padding: 0 0 0 1rem
        }

        .cate {
            line-height: 53px !important
        }

        .searchmob .bi-search {
            width: 18px
        }

        .lh {
            line-height: 23px !important;
            padding: 8px 0;
            background-color: #F17800
        }

        .searchmob input {
            color: #F17800;
            width: 100%;
            font-weight: 600;
            border: none;
            border-left: 0 solid #ccc
        }
    }

    .w-30px {
        width: 30px !important
    }

    .sliderpdMain .slick-arrow.slick-prev {
        left: 0;
        background: url(https://eliteblue.net/Clients/viys/coupon/public/frontend/img/angle-left.png) 0 0/100% no-repeat;
        border: none;
        transition: .3s
    }

    .sliderpdMain button::before {
        content: '' !important;
    }

    .cate .categ_links select {
        -webkit-appearance: none;
        -moz-appearance: none;
        background: url("data:image/svg+xml;utf8,<svg fill='black' height='35' viewBox='0 0 24 24' width='30' xmlns='http://www.w3.org/2000/svg'><path d='M7 10l5 5 5-5z'/><path d='M0 0h24v24H0z' fill='none'/></svg>") 95% center no-repeat;
        border-radius: 2px;
        outline: 0 !important;
        border: 0;
        color: #F17800;
        font-size: 18px;
        font-weight: 500
    }

    .cate .categ_links select:focus {
        border: 0
    }

    .sliderpdMain .slick-arrow.slick-next {
        right: 0;
        border: none;
        background: url(https://eliteblue.net/Clients/viys/coupon/public/frontend/img/angle-right.png) 0 0/100% no-repeat;
        transition: .3s
    }

    .sliderpdMain .slick-arrow.slick-next:hover {
        background: url(https://eliteblue.net/Clients/viys/coupon/public/frontend/img/angle-right-hovr.png) 0 0/100% no-repeat #F17800
    }

    .sliderpdMain .slick-arrow.slick-prev:hover {
        background: url(https://eliteblue.net/Clients/viys/coupon/public/frontend/img/angle-left-hovr.png) 0 0/100% no-repeat #F17800
    }

    .sliderpdMain .slick-arrow {
        position: absolute;
        top: 50%;
        margin: -20px 0 0;
        z-index: 10;
        font-size: 0;
        width: 35px;
        height: 35px;
        border-radius: 50%
    }

    .comment_box {
        width: 100%;
        height: 185px
    }

    .comment_box .comment input,
    .comment_box .file input,
    .file-upload-input,
    .image-upload-wrap {
        height: 100%;
        width: 100%
    }

    .file-upload-content {
        display: none;
        text-align: center
    }

    .file-upload-input {
        position: absolute;
        margin: 0;
        padding: 0;
        outline: 0;
        opacity: 0;
        cursor: pointer
    }

    .image-upload-wrap {
        background-color: #efefef;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: .3s
    }

    .drag-text i {
        font-size: 3rem;
        opacity: .75
    }

    .image-dropping,
    .image-upload-wrap:hover {
        background-color: #dfdfdf
    }

    .image-title-wrap {
        padding: 0 15px 15px;
        color: #222
    }

    .file-upload-image {
        margin: auto;
        padding: 20px 0;
        height: 170px;
        object-fit: contain
    }

    .fancybox-content {
        text-align: center !important
    }

    .sliderpdMain .slider-products .slick-slide {
        height: 350px;
        display: flex;
        align-items: center;
        justify-content: center
    }

    .sliderpdMain .slider-products .slick-slide div,
    .sliderpdMain .slider-products .slick-slide img {
        height: 100% !important
    }

    .foot_sliderz .slick-slide img {
        height: 125px;
        display: flex;
        align-items: center;
        object-fit: contain
    }

    .pd-img {
        height: 182px
    }

    .pd-img img {
        width: 100% !important;
        height: 100%;
        object-fit: contain
    }

    .blog-list-view {
        position: relative
    }

    .blog-list-view .content {
        position: absolute;
        top: 50%;
        width: 60%;
        transform: translate(0, -50%);
        right: 0
    }

    .blog-grid-view .para,
    .blog-list-view .para {
        word-break: break-word
    }

    .blog-grid-view img {
        object-fit: cover
    }

    .scroll-active {
        position: fixed
    }

    .overlay-pd,
    .time {
        position: absolute
    }

    @media (min-width:1200px) {

        .container,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl {
            max-width: 95% !important
        }
    }

    .dropdown.drops:hover .dropdown-menu {
        border-radius: 0;
        border-color: #ccc
    }

    .dropdown.drops .dropdown-menu {
        padding: 0;
        border-radius: 0
    }

    .dropdown.drops .dropdown-item {
        color: #F17800;
        padding: 11px 8px;
        font-size: 16px;
        font-weight: 600;
        transition: .3s
    }

    .dropdown.drops .dropdown-item:hover {
        color: #fff;
        background: #F17800
    }

    .copyright-tag h6 a {
        text-decoration: none;
        font-size: unset;
        font-weight: unset;
        font-style: normal;
        letter-spacing: unset
    }

    .copyright-tag h6 a:hover {
        color: #bbb !important
    }

    .side-nav-buttons .sign {
        background: #F17800;
        color: #fff !important;
        transition: .3s
    }

    .side-nav-buttons .sign:hover {
        background: rgba(59, 88, 157, .79)
    }

    .side-nav-buttons .log {
        transition: .3s
    }

    .overlay-pd {
        height: 100%;
        width: 100%;
        background: #F17800ab !important;
        top: 0;
        left: 0 !important;
        transition: .3s;
        opacity: 0
    }

    .ball div,
    .under {
        background-color: #ffffff
    }

    .product-item:hover .overlay-pd {
        opacity: 1;
        transition: .5s ease-in;
        box-shadow: 11px 11px 32px rgb(59 88 157 / 34%), -11px -11px 32px rgb(69 94 151 / 22%)
    }

    .list-links {
        color: #111
    }

    .list-links:hover {
        color: #555
    }

    .list-links.active {
        color: var(--primary)
    }

    .sm-shadow {
        box-shadow: 0 0 10px #0000002f
    }

    .md-shadow {
        box-shadow: 0 0 10px #00000044
    }

    .ico {
        width: 22px
    }

    .coin-ico {
        width: 25px
    }

    .payment {
        padding: 3.5% 0
    }

    .buttons button {
        padding: 10px 30px;
        transition: .3s
    }

    .select button:hover {
        background-color: #eee !important
    }

    .delete button:hover {
        background-color: #1b4897cf !important
    }

    .time {
        bottom: 15px;
        right: 15px
    }

    .profile-image-outer-container {
        margin-top: auto;
        margin-bottom: auto;
        border-radius: 50%;
        position: relative;
        cursor: pointer
    }

    .profile-image-outer-container .profile-image-input {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        z-index: 3;
        cursor: pointer
    }

    .profile-image-outer-container .profile-image-inner-container {
        border-radius: 50%;
        padding: 5px
    }

    .profile-image-outer-container .profile-image-inner-container img {
        height: 200px;
        width: 200px;
        border-radius: 50%;
        object-fit: contain;
        border: 5px solid #fff
    }

    .profile-image-outer-container .profile-image-inner-container .profile-image-button {
        position: absolute;
        z-index: 2;
        bottom: 15px;
        right: 15px;
        width: 40px;
        height: 40px;
        text-align: center;
        border-radius: 50%;
        line-height: 38px;
        transition: .1s
    }

    .profile-image-outer-container:hover .profile-image-button {
        transform: scale(1.1)
    }

    .counter-box .icon img {
        object-fit: cover !important
    }

    .desktop .custom-Dropdown {
        top: 50px !important
    }

    .custom-Dropdown>li:before,
    .desktop .User-Dropdown>li:before {
        margin-top: -6px
    }

    .desktop .custom-Dropdown li {
        margin: .5rem 0
    }

    .custom-Dropdown>li:before,
    .mobile-nav .User-Dropdown>li:before {
        margin-top: 11px
    }

    #style-1::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
        background-color: #f5f5f5
    }

    #style-1::-webkit-scrollbar {
        width: 5px;
        background-color: #f5f5f5
    }

    #style-1::-webkit-scrollbar-thumb {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
        background-color: #F17800 !important
    }

    ::-webkit-scrollbar {
        width: 5px;
        background-color: #dadada
    }

    ::-webkit-scrollbar-thumb {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
        background-color: #F17800 !important
    }

    .decoration {
        display: flex;
        justify-content: center;
        margin-top: 5px;
        overflow: hidden;
        height: 3px
    }

    .line {
        display: inline-block;
        width: 132px;
        height: 3px;
        border-bottom: 2px dashed #f3f3f3;
        position: absolute;
        top: 12px !important
    }

    .ball {
        width: 126%;
        display: flex;
        justify-content: space-between;
        position: absolute;
        top: 0;
        left: -13%;
        z-index: 20
    }

    .ball div {
        width: 30px;
        height: 30px;
        border-radius: 30px
    }
</style>



<style>
    .main-header-search {
        background-color: var(--main-primary);
    }

    .brdMain {
        border: 2px solid #d7d9d9;
    }


    :root {
        --main: #F17800;
    }

    .listViewBanner .bannerImgTop .bannerTxt,
    .getCodeCouponTopLayerTxt {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .main-list-card {
        border-radius: 1.5rem;
    }

    .para {
        font-size: 14px;
        font-weight: 500;
    }

    .card-txt {}

    .main-btn,
    .main-btn-outlined {
        background-color: var(--main);
        color: white;
        font-size: 8px;
        padding: 4px 8px;
        border: 2px solid transparent;
        transition: .3s all ease;
    }

    .main-btn-outlined {
        background-color: transparent;
        border-color: black;
        color: black;
    }

    .priz {
        color: var(--main);
    }

    .main-btn-outlined:hover {
        background-color: black;
        color: white;
    }

    .main-btn:hover {
        background-color: transparent;
        border-color: var(--main);
        color: var(--main);
    }

    .getCodeCouponTopLayer img,
    .getCodeCouponTopLayerTxt {
        transition: .3s ease;
    }

    .getCodeCouponTopLayer {
        cursor: pointer;
    }

    .getCodeCouponTopLayer:hover img {
        transform: translateX(-26px);
    }

    .getCodeCouponTopLayer:hover .getCodeCouponTopLayerTxt {
        transform: translate(-74px, -12px);
    }

    .getCodeCouponTopLayer:before {
        content: attr(data-coupon-code);
        color: black;
        background-image: repeating-linear-gradient(-45deg, rgba(244, 125, 46, 0.2), rgba(244, 125, 46, 0.2) 1px, transparent 1px, transparent 6px);
        background-size: 8px 8px;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: end;
        padding: 0 1rem;
        align-items: center;
        z-index: 8;
    }

    .tag {
        background-color: var(--main);
        padding: 2px 12px;
        font-size: 12px;
        font-weight: 400;
    }

    .listViewBanner img {
        object-fit: contain;
    }

    .getCode :is(a, img) {
        height: unset;
    }

    .card-txt .heading {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        overflow: hidden;
    }

    @media (max-width: 992px) {
        .navSec .items {
            flex-wrap: wrap;
        }

        .bannerTxt :is(p) {
            font-size: 65% !important;
        }

        .card-txt .heading {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            overflow: hidden;
            font-size: 16px;
        }

        .para {
            font-size: 12px;
            margin-bottom: 0px;
        }

        .cpnDcImg {
            padding: 0 4px;
        }


        .getCodeCouponTopLayerTxt,
        .getCodeCouponTopLayer:before {
            font-size: 10px;
        }

        .bannerTxt :is(h3) {
            font-size: 16px;
        }

        .card-txt .para :is(strike, span),
        .para {
            font-size: 12px !important;
        }

    }

    .listViewBanner {
        height: 180px;
    }

    @media (min-width: 768px) {
        .shadow {
            box-shadow: 0 0 15px #ccc !important
        }

        .searchbar {
            width: 35%;
        }

        .sliderpdMain img.w-100 {
            height: 60vh !important;
            object-fit: contain;
        }

        .sliderpdMain .slick-track {
            height: 60vh !important;
        }
    }

    .sliderpdMain img.w-100 {
        height: 300px;
        object-fit: contain;
    }

    .sliderpdMain .slick-track {
        height: 300px;
    }

    .sliderpdBot img.w-100 {
        height: 108px;
        object-fit: contain;
    }

    .sliderpdBot .slick-track {
        height: 108px;
    }

    .sliderpdBot :is(.slick-slide.slick-active, .slick-slide) {
        opacity: .5;
    }

    .slick-slide.slick-current.slick-active {
        opacity: 1;
    }

    .mobile-nav .navbar>.row {
        width: 100vw;
    }

    @media only screen and (max-width:768px) {

        .share {
            box-shadow: unset;
            background-color: transparent;
        }

        .share a {
            width: 30px;
        }

        .share a {
            line-height: 30px;
            width: 35px;
            text-align: center;
            display: inline-block;
            color: #fff;
            overflow: hidden;
            opacity: 1;
            transition: all 0.3s ease-in-out;
            margin: 0 -14px;
        }

        .share a,
        .share.hover a {
            border-radius: 50%;
            margin: 0 4px;
            color: #f47c2e;
            font-size: 13px;
        }

        .sec_product .getCode {
            height: 62px;
        }

        .newsLetterImg {
            width: 76px !important;
            margin-bottom: 1.2rem;
        }

        #main_filter,
        .desktop {
            display: none
        }

        #toggle_filter {
            display: block
        }

        .bd-soft-right {
            border-right: 0px solid #e8e8e8
        }

        .bd-soft-left {
            border-left: 0 solid #e8e8e8
        }

        .second-row .bg-purp {
            font-size: 10px !important
        }

        .logo img {
            width: 100%
        }

        .top-links {
            display: none !important
        }

        .mobile-nav {
            display: flex !important;
            background-color: #F17800;
        }

        .logo {
            filter: invert(1)
        }

        .mobile-nav .country-list.dropdown-toggle {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%
        }

        .mobile-nav .custom-Dropdown {
            line-height: 45px !important
        }

        nav.mob ul.custom-Dropdown {
            width: unset !important;
            height: unset !important
        }

        .top-links a,
        .top-links select {
            text-decoration: none;
            font-size: 14px;
            font-weight: 800;
            font-style: normal;
            color: #ffffff;
            transition: color .2s ease-in-out;
            letter-spacing: 00em;
            text-transform: uppercase
        }

        .contact-img {
            display: none
        }

        .comment_box {
            flex-direction: column-reverse;
            height: 100% !important
        }

        .comment_box .image-upload-wrap {
            height: 100px
        }

        .comment_box .file {
            padding-right: .75rem !important
        }

        .ball {
            width: 120%;
            left: -10%
        }

        .navbar.mob>div.row {
            justify-content: center !important;
        }

        .single_footer {
            margin-bottom: 30px
        }

        .peel-btn {
            padding: 8px;
            display: flex;
            justify-content: center;
            position: absolute;
            top: 50%;
            left: 5%;
            width: calc(100% - 46px);
            cursor: pointer;
            background: #6483cb;
            color: #fff;
            display: flex;
            justify-content: center;
            transition: .3s linear;
            transform: translate(0, -50%)
        }

        .subscribe__input {
            padding: 0 50px 0 20px
        }

        .subscribe__btn {
            right: 0
        }

        .social_profile ul li a {
            margin-right: 10px;
            margin-bottom: 10px
        }

        .truncate {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis
        }

        .com_card {
            padding: 7px !important
        }

        .fs-10 {
            font-size: 10px
        }

        .fs-8 {
            font-size: 8px
        }

        .getCode :is(a, img) {
            height: 100%;
        }

        .bannerTxt :is(p) {
            font-size: 65% !important;
        }

        .card-txt .heading {

            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            overflow: hidden;
            font-size: 16px;
        }

        .para {
            font-size: 8px;
            margin-bottom: 0px;
        }

        .cpnDcImg {
            padding: 0 4px;
        }


        .getCodeCouponTopLayer:hover img {
            transform: translateX(-16px);
        }

        .getCodeCouponTopLayer:hover .getCodeCouponTopLayerTxt {
            transform: translate(-44px, -7px);
        }

        .getCodeCouponTopLayer:before {
            font-size: 12px;
        }

        .getCode {
            height: 36px;
        }

        .listViewBanner {
            height: 120px;
        }
    }

    @media (max-width: 480px) {

        .bannerTxt :is(h3),
        .card-txt .para :is(strike, span) {
            font-size: 10px !important;
        }

        .getCodeCouponTopLayer:before {
            padding: 0;
        }

        .getCodeCouponTopLayerTxt {
            font-size: 9px;
        }

        .para {
            font-size: 12px !important;
        }
    }

    @media (max-width: 420px) {
        .getCode {
            height: 26px;
        }

        .getCodeCouponTopLayerTxt {
            font-size: 8px;
        }

        .cpnDcImg {
            padding: 0;
        }

        .main-list-card {
            font-size: 75% !important;
        }


        .card-txt .heading {
            -webkit-line-clamp: 1;
        }

        .main-list-card {
            border-radius: .5rem;
        }

        .getCodeCouponTopLayer:hover img {
            transform: translateX(-16px);
        }

        .getCodeCouponTopLayer:hover .getCodeCouponTopLayerTxt {
            transform: translate(-44px, -7px);
        }
    }

    .sec .para svg {
        width: 26px;
        height: 26px;
    }

    .navSec .items {
        display: flex;
        gap: 6px;
    }


    .navSec .items .itm,
    .navSecLink {
        text-transform: uppercase;
        min-width: 36px;
        max-width: 36px;
        height: 36px;
        font-size: 16px;
        background: #e8e8e8;
        transition: .3s all ease;
        cursor: pointer;
    }

    .navSec .items .itm a {
        display: flex;
        justify-content: center;
        align-items: center;
        color: black;
        width: 100%;
        height: 100%;
    }

    .navSec .items .itm:hover {
        background: var(--main);
    }

    .navSec .items .itm:hover a {
        color: white;
    }

    .filteredItem img {
        object-fit: contain;
    }

    .top-cards.filteredItem:hover img {
        transform: scale(1);
        /* box-shadow: 0 0 15px 3px #bbb !important; */
        /* border: 0.2rem solid #F17800; */
    }

    .top-cards.filteredItem {

        transition: .3s all ease;
    }



    .top-cards.filteredItem:hover {
        transform: translateY(-6px) scale(1.05);
        box-shadow: 0px 6px 26px 6px #d6d6d6ab !important;

    }

    .top-cards.filteredItem:active {
        transform: translateY(-6px) scale(0.99);
        box-shadow: 0px 0px 20px 0px #d6d6d6f5 !important;
    }

    .topCateg {
        background-color: white;
        box-shadow: 0 0 6px #30303085;
        transition: .3s all ease;
        color: black;
        text-transform: uppercase;
    }

    .topCateg.active {
        background-color: var(--main);
        box-shadow: unset;
        transition: .3s all ease;
        color: white;
    }

    .topCateg:hover {
        background-color: #F17800b5;
        color: white;
    }

    .newsLetterImg {
        width: 132px;
    }

    .long-description {
        display: -webkit-box;
        /* max-width: 200px; */
        -webkit-line-clamp: 8;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .long-description.show {
        display: block;
    }

    .long-description a {
        color: #777 !important;
    }
</style>