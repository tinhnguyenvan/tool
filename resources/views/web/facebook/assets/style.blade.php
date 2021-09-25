<style>
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
        font-size: 30px;
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


</style>
