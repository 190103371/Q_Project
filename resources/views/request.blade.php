@extends('menu')

@section('head')
    <style>
        body{
            background-color: #ffffff;
            color: #333333;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif;
            font-size: 15px;
            font-weight: 400;
            line-height: 1.5;
            -webkit-font-smoothing: antialiased;
        }
        .sub-nav {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            margin-bottom: 30px;
            min-height: 50px;
            padding-bottom: 15px;
        }
        .breadcrumbs {
            margin: 0 0 15px 0;
            padding: 0;
        }
        .breadcrumbs li {
            color: #666;
            display: inline;
            font-weight: 300;
            font-size: 13px;
            max-width: 450px;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        h1 {
            font-size: 2em;
            margin: 0.67em 0;
        }
        form {
            display: block;
            margin-top: 0em;
        }
        input, textarea {
            color: #000;
            font-size: 14px;
        }
        .form-field label {
            display: block;
            font-size: 13px;
            margin-bottom: 5px;
        }
        .form-field input[type="text"] {
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .form-field input {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 10px;
            width: 100%;
        }
        .form-field ~ .form-field {
            margin-top: 25px;
        }
        label {
            cursor: default;
        }
        button, input {
            overflow: visible;
        }
        .form .suggestion-list {
            font-size: 13px;
            margin-top: 30px;
        }
        .request-form textarea {
            min-height: 120px;
        }
        .form-field textarea {
            vertical-align: middle;
        }
        textarea {
            border: 1px solid #ddd;
            border-radius: 2px;
            resize: vertical;
            width: 100%;
            outline: none;
            padding: 10px;
        }
        textarea {
            overflow: auto;
        }
        button, input, optgroup, select, textarea {
            font-family: inherit;
            font-size: 100%;
            line-height: 1.15;
            margin: 0;
        }
        textarea {
            -webkit-writing-mode: horizontal-tb !important;
            text-rendering: auto;
            color: -internal-light-dark(black, white);
            letter-spacing: normal;
            word-spacing: normal;
            text-transform: none;
            text-indent: 0px;
            text-shadow: none;
            display: inline-block;
            text-align: start;
            appearance: auto;
            background-color: -internal-light-dark(rgb(255, 255, 255), rgb(59, 59, 59));
            -webkit-rtl-ordering: logical;
            flex-direction: column;
            resize: auto;
            cursor: text;
            white-space: pre-wrap;
            overflow-wrap: break-word;
            column-count: initial !important;
            margin: 0em;
            font: 400 13.3333px Arial;
            border-width: 1px;
            border-style: solid;
            border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
            border-image: initial;
            padding: 2px;
        }
        #hc-wysiwyg {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
            overflow: hidden;
            position: relative;
            resize: vertical;
            height: 250px;
            min-height: 100px;
        }
        input:not([type="checkbox"]) {
            outline: none;
        }
        input {
            font-weight: 300;
            max-width: 100%;
            box-sizing: border-box;
            transition: border .12s ease-in-out;
        }
        input[type="hidden" i] {
            display: none;
            appearance: initial;
            background-color: initial;
            cursor: default;
            padding: initial;
            border: initial;
        }
        input {
            -webkit-writing-mode: horizontal-tb !important;
            text-rendering: auto;
            color: -internal-light-dark(black, white);
            letter-spacing: normal;
            word-spacing: normal;
            text-transform: none;
            text-indent: 0px;
            text-shadow: none;
            display: inline-block;
            text-align: start;
            appearance: auto;
            background-color: -internal-light-dark(rgb(255, 255, 255), rgb(59, 59, 59));
            -webkit-rtl-ordering: logical;
            cursor: text;
            margin: 0em;
            font: 400 13.3333px Arial;
            padding: 1px 2px;
            border-width: 2px;
            border-style: inset;
            border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
            border-image: initial;
        }
        .form-field p {
            color: #666;
            font-size: 12px;
            margin: 5px 0;
        }
        p {
            display: block;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
        }
        .form-field .optional {
            color: #666;
            margin-left: 4px;
        }
        .upload-dropzone {
            border: 1px solid #ddd;
            font-size: 12px;
            overflow: hidden;
            position: relative;
            text-align: center;
        }
        .upload-dropzone input[type=file] {
            filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
            opacity: 0;
            position: absolute;
            top: 0;
            right: 0;
            cursor: pointer;
            height: 100%;
            width: 100%;
        }
        .upload-dropzone span {
            color: #666;
            display: inline-block;
            line-height: 24px;
            padding: 10px;
        }
        a {
            color: #2ca4ab;
            text-decoration: none;
            background-color: transparent;
        }
        #upload-error {
            display: none;
            margin-top: 10px;
        }
        .notification-inline.notification-error {
            background-color: #fff0f1;
            border: 1px solid #e35b66;
            color: #cc3340;
        }
        .notification-inline {
            border-radius: 4px;
            line-height: 14px;
            margin-top: 5px;
            padding: 5px;
            position: relative;
            text-align: left;
            vertical-align: middle;
        }
        .notification-error {
            background: #ffeded;
            border-color: #f7cbcb;
        }
        .notification {
            border: 1px solid;
            display: table;
            font-family: sans-serif;
            font-size: 12px;
            padding: 13px 15px;
            transition: height .2s;
            width: 100%;
            color: #555;
        }
        script {
            display: none;
        }
        .form footer {
            margin-top: 40px;
            padding-top: 30px;
        }
        footer {
            display: block;
        }
        .button-large, input[type="submit"] {
            cursor: pointer;
            background-color: #2ca4ab;
            border: 0;
            border-radius: 4px;
            color: #ffffff;
            font-size: 14px;
            font-weight: 400;
            line-height: 2.72;
            min-width: 190px;
            padding: 0 1.9286em;
            width: 100%;
        }
        button, [type="button"], [type="reset"], [type="submit"] {
            -webkit-appearance: button;
        }
        input[type="submit" i] {
            appearance: auto;
            user-select: none;
            white-space: pre;
            align-items: flex-start;
            text-align: center;
            cursor: default;
            color: -internal-light-dark(black, white);
            background-color: -internal-light-dark(rgb(239, 239, 239), rgb(59, 59, 59));
            box-sizing: border-box;
            padding: 1px 6px;
            border-width: 2px;
            border-style: outset;
            border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
            border-image: initial;
            }
        .g-recaptcha[ui=invisible] {
            margin-top: 20px;
        }
        .footer {
            border-top: 1px solid #ddd;
            margin-top: 60px;
        padding: 30px 0;
        }
        .footer-inner {
            max-width: 1160px;
            margin: 0 auto;
            padding: 0 5%;
            display: flex;
            justify-content: space-between;
        }
    </style>
@endsection

@section('title')
{{ __('lang.request')}}
@endsection

@section('main_content')
<div class="container">
    <nav class="sub-nav">
      <ol class="breadcrumbs">
      <li title="Quran">
          <a href="/home">{{ __('lang.Quran')}} -></a>
      </li>
      <li title="Submit a request">
        {{ __('lang.request')}}
      </li>
  </ol>
    </nav>
    <h1>
        {{ __('lang.request_submit')}}
      <span class="follow-up-hint">
      </span>
    </h1>
    <div id="main-content" class="form">
        <form id="new_request" class="request-form" data-form="" data-form-type="request" action="/hc/en-us/requests" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓">
        <div class="form-field string required request_anonymous_requester_email"><label for="request_anonymous_requester_email">{{ __('lang.your_email_adress')}}</label>
            <input type="text" name="request[anonymous_requester_email]" id="request_anonymous_requester_email" aria-required="true">
        </div>
        <div class="form-field string  required  request_subject">
            <label id="request_subject_label" for="request_subject">{{ __('lang.subject')}}</label>
            <input type="text" name="request[subject]" id="request_subject" maxlength="150" size="150" aria-required="true" aria-labelledby="request_subject_label">
        </div>
        <div class="suggestion-list" data-hc-class="searchbox" data-hc-suggestion-list="true"></div>
        <div class="form-field text  required  request_description">
            <label id="request_description_label" for="request_description">{{ __('lang.description')}}</label>
            <textarea name="request[description]" id="request_description" aria-required="true"
            aria-describedby="request_description_hint" aria-labelledby="request_description_label"
            data-helper="wysiwyg" ></textarea>
         <!--<div role="application" id="hc-wysiwyg"><div role="toolbar"><span aria-haspopup="true" aria-expanded="false">
            <span role="button" title="Paragraph styles" tabindex="0" class="wysiwyg-icon-formats"></span>
            <span role="menu" aria-hidden="true" tabindex="-1"><span role="button" title="" tabindex="0" data-block="p">
                Normal text</span><span role="button" title="" tabindex="0" data-block="h2">Header 2</span>
                <span role="button" title="" tabindex="0" data-block="h3">Header 3</span><span role="button" title=""
                tabindex="0" data-block="h4">Header 4</span></span></span><span role="button" title="Bold" tabindex="0"
                class="wysiwyg-icon-bold"></span><span role="button" title="Italic" tabindex="0" class="wysiwyg-icon-italic">
                    </span><span role="separator"></span><span role="button" title="Bulleted list" tabindex="0"
                    class="wysiwyg-icon-bullist"></span><span role="button" title="Numbered list" tabindex="0"
                    class="wysiwyg-icon-numlist"></span><span role="separator"></span><span role="button" title="Code block"
                     tabindex="0" class="wysiwyg-icon-code-block"></span><span role="button" title="Insert/Edit link"
                     tabindex="0" class="wysiwyg-icon-link"></span><span role="button" title="Quote" tabindex="0"
                     class="wysiwyg-icon-quote"></span></div><div role="form" aria-expanded="false"></div><div role="group">
                         <iframe id="request_description_ifr" frameborder="0" allowtransparency="true"
                         style="width: 100%; height: 100%; display: block;"></iframe></div><div role="alert"
                          aria-hidden="true"></div><div><input name="content_type" type="hidden" value="text/html"></div>
                       </div><input type="hidden" name="request[description_mimetype]" id="request_description_mimetype"
                        value="text/html" style="display: none;">-->

            <p id="request_description_hint">{{ __('lang.support_asap')}}</p>
        </div>






    <!--<div class="form-field">
    <label for="request-attachments">
      Attachments<span class="optional">(optional)</span>
    </label>
    <div id="upload-dropzone" class="upload-dropzone">
    <input type="file" multiple="true" id="request-attachments" data-fileupload="true" data-dropzone="upload-dropzone" data-error="upload-error" data-create-url="/hc/en-us/request_uploads" data-name="request[attachments][]" data-pool="request-attachments-pool" data-delete-confirm-msg="" aria-describedby="upload-error">
    <span>
      <a>Add file</a> or drop files here
    </span>
  </div>

  <div id="upload-error" class="notification notification-error notification-inline" style="display: none;">
    <span data-upload-error-message=""></span>
  </div>


    <ul id="request-attachments-pool" class="upload-pool" data-template="upload-template"></ul>

  <script type="text/html" id="upload-template">
  <li class="upload-item" data-upload-item>
      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" focusable="false" viewBox="0 0 12 12" aria-hidden="true" class="upload-item-icon">
        <path fill="none" stroke="currentColor" stroke-linecap="round" d="M2.5 4v4.5c0 1.7 1.3 3 3 3s3-1.3 3-3v-6c0-1.1-.9-2-2-2s-2 .9-2 2v6c0 .6.4 1 1 1s1-.4 1-1V4"/>
      </svg>
      <div aria-hidden="true" class="upload-item-icon-spacer"></div>
    <a class="upload-link" target="_blank" data-upload-link></a>
    <p class="upload-path" data-upload-path></p>
    <p class="upload-path" data-upload-size></p>
    <p data-upload-issue class="notification notification-alert notification-inline" aria-hidden="true"></p>
    <span class="upload-remove" role="button" tabindex="0" data-upload-remove>
      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" focusable="false" viewBox="0 0 12 12" aria-hidden="true" class="upload-item-icon">
        <path stroke="currentColor" stroke-linecap="round" d="M3 9l6-6m0 6L3 3"/>
      </svg>
    </span>
    <div class="upload-progress" data-upload-progress></div>
    <input type="hidden">
  </li>
  </script>
  </div>-->
            <footer><input type="submit" name="commit" value="{{ __('lang.submit')}}"><script src="https://www.recaptcha.net/recaptcha/enterprise.js" async="" defer=""></script>
                <!--<script>
                    var invisibleRecaptchaSubmit = function () {
                    var closestForm = function (ele) {
                        var curEle = ele.parentNode;
                        while (curEle.nodeName !== 'FORM' && curEle.nodeName !== 'BODY'){
                        curEle = curEle.parentNode;
                        }
                        return curEle.nodeName === 'FORM' ? curEle : null
                    };
                    var eles = document.getElementsByClassName('g-recaptcha');
                    if (eles.length > 0) {
                        var form = closestForm(eles[0]);
                        if (form) {
                        form.submit();
                            }
                        }
                    };
                </script>-->
            </footer>
        </form>
    </div>
</div>
<footer class="footer">
    <div class="footer-inner">
        <a title="Home" href="/home">{{ __('lang.Quran')}}</a>
        <div class="footer-language-selector">
        </div>
    </div>
</footer>
@endsection
