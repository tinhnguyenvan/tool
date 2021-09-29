<div class="col s12 l2 hide-on-small-only">
    <ul class="section table-of-contents pinned table-of-contents">
        <li><a @if($sub_active_menu == 'url') class="active" @endif href="{{ base_url('tool/generate-qrcode') }}">Website URL</a></li>
        <li><a @if($sub_active_menu == 'vcard') class="active" @endif href="{{ base_url('tool/generate-qrcode/vcard') }}">VCard</a></li>
        <li><a @if($sub_active_menu == 'email') class="active" @endif href="{{ base_url('tool/generate-qrcode/email') }}">Email</a></li>
        <li><a @if($sub_active_menu == 'text') class="active" @endif href="{{ base_url('tool/generate-qrcode/text') }}">Text</a></li>
        <li><a @if($sub_active_menu == 'sms') class="active" @endif href="{{ base_url('tool/generate-qrcode/sms') }}">SMS</a></li>
    </ul>
</div>

