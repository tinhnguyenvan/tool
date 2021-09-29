<div class="center">
    <form method="post" action="{{ base_url('tool/generate-qrcode/download/'.$sub_active_menu) }}">
        @csrf
        @foreach(request()->except('_token') as $name => $value)
            <input type="hidden" value="{{ $value }}" name="{{ $name }}">
        @endforeach

        <button type="submit" class="waves-effect waves-light btn blue-grey btn-small" name="download">
            <i class="material-icons left">file_download</i>Download
        </button>
    </form>
</div>

