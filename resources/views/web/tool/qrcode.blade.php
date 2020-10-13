@extends('resources.views.site.layout.tool')

@section('content')
    <div class="row list-icon-emoji">
        <div class="col s3">
            <div class="collection-fixed">
                <div class="collection">
                    <a href="{{ base_url('tool/generate-qrcode?type=url') }}" class="collection-item @if(request()->input('type') == 'url') active @endif">
                        ↪ Url
                    </a>
                    <a href="{{ base_url('tool/generate-qrcode?type=email') }}" class="collection-item @if(request()->input('type') == 'email') active @endif">
                        ↪ Email
                    </a>
                </div>
            </div>
        </div>
        <div class="col s9">
        </div>
    </div>
@endsection
