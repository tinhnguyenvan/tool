<div class="col s2">
    <ul class="section table-of-contents pinned table-of-contents">
        <li><a @if($slug == 'url') class="active" @endif href="{{ base_url('tool/generate-qrcode') }}">Website URL</a></li>
{{--        <li><a @if($slug == 'vcard') class="active" @endif href="{{ base_url('tool/generate-qrcode/vcard') }}">VCard</a></li>--}}
        <li><a @if($slug == 'email') class="active" @endif href="{{ base_url('tool/generate-qrcode/email') }}">Email</a></li>
{{--        <li><a @if($slug == 'text') class="active" @endif href="{{ base_url('tool/generate-qrcode/text') }}">Text</a></li>--}}
        <li><a @if($slug == 'sms') class="active" @endif href="{{ base_url('tool/generate-qrcode/sms') }}">SMS</a></li>
    </ul>
</div>

