@extends('view_tool::web.layout.default')

@section('content')
    <div class="row">
        @include('view_tool::web.qrcode.nav')
        <div class="col s12 l10">
            <div id="url" class="section">
                <div class="row">
                    <form class="col l8 s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                <label for="textarea1">Textarea</label>
                            </div>
                        </div>

                        <button class="waves-effect waves-light btn btn-small">
                            🪄 Generate
                        </button>
                    </form>
                </div>
            </div>

            @include('view_tool::web.ads.gg_horizontal')
        </div>
    </div>

@endsection
