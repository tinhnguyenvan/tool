<style>
    .navbar-fixed {
    }

    nav ul a,
    nav .brand-logo {
        color: #444;
    }

    .nav-wrapper li {
        display: inline-block;
        float: none;
    }

    .nav-wrapper li ul li {
        display: block !important;
    }

    .nav-wrapper li:hover {

    }

    .nav-wrapper li a.active {
        color: #0a76b7 !important;
    }

    .navbar-fixed nav {
        box-shadow: none;
        border-bottom: 1px solid #ccc;
    }

    .hide-on-med-and-down {
        text-align: center;
    }

    .hide-on-med-and-down .dropdown-content {
        top: 60px !important;
    }

    p {
        line-height: 2rem;
    }

    .sidenav-trigger {
        color: #26a69a;
    }

    footer.page-footer {
        margin: 0;
    }

    .sidenav-overlay {
        display: none !important;
    }

    nav, nav .nav-wrapper i, nav a.sidenav-trigger, nav a.sidenav-trigger i {
    }

    /* label color */
    .input-field label {
        color: #000;
    }

    /* label focus color */
    .input-field input[type=text]:focus + label {
        color: #000;
    }

    /* label underline focus color */
    .input-field input[type=text]:focus {
        border-bottom: 1px solid #000;
        box-shadow: 0 1px 0 0 #000;
    }

    /* valid color */
    .input-field input[type=text].valid {
        border-bottom: 1px solid #000;
        box-shadow: 0 1px 0 0 #000;
    }

    /* invalid color */
    .input-field input[type=text].invalid {
        border-bottom: 1px solid #000;
        box-shadow: 0 1px 0 0 #000;
    }

    /* icon prefix focus color */
    .input-field .prefix.active {
        color: #000;
    }

    /*icon*/
    .label-emoji {
        font-size: 30px;
        padding: 10px;
    }

    .label-emoji:hover {
        cursor: pointer;
    }

    .form-select-icon {
        position: fixed;
    }

    .item-emoji {
        display: inline-block;
    }

    .collection-fixed {
        position: fixed;
    }


    /*text*/
    .h1-title {
        font-size: 27px;
        text-align: center;
        color: #0a53be;
        margin-top: 10px;
    }

    .container-form {
        max-width: 960px;
        margin: 50px auto 0 auto;
    }


    .relative {
        position: relative;
    }

    .result {
        position: relative;
        width: 100%;
        padding: 0 80px 0 20px;
        background-color: white;
        font-size: 16px;
        border: 1px dashed #e0e0e0;
        margin-top: 15px;
        overflow: hidden;
        min-height: 60px;
        white-space: pre-line;
        display: grid;
        align-items: center;
    }

    .data-rs-container textarea {
        position: absolute;
        left: -999em;
    }

    .btn-copy {
        position: absolute;
        z-index: 1;
        top: 0;
        right: 0;
        height: 100%;
        margin-top: 0;
        padding: 0 24px;
        line-height: 60px;
        border: none;
        background-color: #2ea0de;
        color: white;
        border-left: 1px solid #ddd;
        border-radius: 0;
    }

    .btn-copy:hover, .btn-copy:focus, .btn-copy:visited {
        background-color: #ff5a5e !important;
        color: white !important;
        border-color: inherit;
    }

    .btn-copy:focus, .btn-copy:visited {
        box-shadow: 0 0 5px 0 #2196f3;
    }

    textarea {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    .font-line-input-text, .font-line-result-text {
        display: block;
        margin-top: 25px;
        color: #000;
        margin-bottom: 5px;
        font-weight: 700;
    }

    .btn-trial {
        display: block;
        font-weight: 400;
        line-height: 1;
        text-align: center;
        vertical-align: middle;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        padding: 0.875rem 1.125rem;
        font-size: 0.875rem;
        border-radius: 0.35rem;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        color: #fff;
        background-color: #0061f2;
        border-color: #0061f2;
    }

    .text-primary {
        font-size: 1.2rem;
        font-weight: bold;
        --bs-text-opacity: 1;
        color: #004ec2 !important;
    }

</style>
