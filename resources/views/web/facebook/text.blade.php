@extends('view_tool::web.layout.default')

@section('content')


    <div class=" container">
        <div class="">
            <div id="font-80" class="section scrollspy">
                <h1 class="h1-title">Facebook Text Đổi Font Chữ Facebook mới: Tất cả phông <strong>ĐẸP</strong>,
                    <strong>ĐỘC</strong>,
                    <strong>LẠ</strong>
                </h1>
                <blockquote class="teal lighten-5" style="padding: 10px">
                    <p>
                        Hãy nhập văn bản mà bạn muốn chuyển đổi font vào ô bên dưới sau đó sao chép và dán chúng vào
                        Facebook.
                    </p>

                    <p>
                        Bộ công cụ này hoạt động hầu hết mọi nơi mà Facebook cho phép nhập văn bản: cập nhật trạng thái,
                        tin
                        nhắn,
                        tiểu sử, bình luận...
                    </p>
                    <p>
                        Tất cả các font chữ bên dưới đều là font Unicode nên chúng sẽ hiển thị với hầu hết mọi nơi bạn
                        có
                        thể dán
                        văn bản, ví dụ như các trang mạng
                        xã hội, các bình luận, diễn đàn, tài liệu... chứ không chỉ riêng gì trên nền tảng Facebook.
                    </p>
                </blockquote>
                <div class="container-form">
                    <label for="input-keyword"></label>
                    <textarea name="url" class="form-control" id="input-keyword"
                              style="height: 100px;">Welcome {{ $config['company_name'] }}</textarea>
                    <hr/>
                    <h4><strong>Đang hiển thị 80 Facebook fonts</strong></h4>
                    <div class="data-rs-container relative">
                        <span id="result-s1" class="result"></span>
                        <label for="input-s1"></label>
                        <textarea class="input-result" id="input-s1" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s1" id="s1">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s2" class="result"></span>
                        <label for="input-s2"></label>
                        <textarea class="input-result" id="input-s2" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s2" id="s2">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s3" class="result"></span>
                        <label for="input-s3"></label>
                        <textarea class="input-result" id="input-s3" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s3" id="s3">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s4" class="result"></span>
                        <label for="input-s4"></label><textarea class="input-result" id="input-s4"
                                                                aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s4" id="s4">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s5" class="result"></span>
                        <label for="input-s5"></label>
                        <textarea class="input-result" id="input-s5" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s5" id="s5">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s6" class="result"></span>
                        <label for="input-s6"></label>
                        <textarea class="input-result" id="input-s6" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s6" id="s6">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s7" class="result"></span>
                        <label for="input-s7"></label>
                        <textarea class="input-result" id="input-s7" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s7" id="s7">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s8" class="result"></span>
                        <label for="input-s8"></label>
                        <textarea class="input-result" id="input-s8" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s8" id="s8">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s9" class="result"></span>
                        <label for="input-s9"></label>
                        <textarea class="input-result" id="input-s9" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s9" id="s9">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s10" class="result"></span>
                        <textarea class="input-result" id="input-s10" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s10" id="s10">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s11" class="result"></span>
                        <textarea class="input-result" id="input-s11" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s11" id="s11">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s12" class="result"></span>
                        <textarea class="input-result" id="input-s12" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s12" id="s12">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s13" class="result"></span>
                        <textarea class="input-result" id="input-s13" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s13" id="s13">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s14" class="result"></span>
                        <textarea class="input-result" id="input-s14" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s14" id="s14">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s15" class="result"></span>
                        <textarea class="input-result" id="input-s15" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s15" id="s15">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s16" class="result"></span>
                        <textarea class="input-result" id="input-s16" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s16" id="s16">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s17" class="result"></span>
                        <textarea class="input-result" id="input-s17" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s17" id="s17">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s18" class="result"></span>
                        <textarea class="input-result" id="input-s18" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s18" id="s18">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s19" class="result"></span>
                        <textarea class="input-result" id="input-s19" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s19" id="s19">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s20" class="result"></span>
                        <textarea class="input-result" id="input-s20" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s20" id="s20">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s21" class="result"></span>
                        <textarea class="input-result" id="input-s21" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s21" id="s21">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s22" class="result"></span>
                        <textarea class="input-result" id="input-s22" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s22" id="s22">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s23" class="result"></span>
                        <textarea class="input-result" id="input-s23" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s23" id="s23">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s24" class="result"></span>
                        <textarea class="input-result" id="input-s24" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s24" id="s24">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s25" class="result"></span>
                        <textarea class="input-result" id="input-s25" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s25" id="s25">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s26" class="result"></span>
                        <textarea class="input-result" id="input-s26" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s26" id="s26">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s27" class="result"></span>
                        <textarea class="input-result" id="input-s27" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s27" id="s27">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s28" class="result"></span>
                        <textarea class="input-result" id="input-s28" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s28" id="s28">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s29" class="result"></span>
                        <textarea class="input-result" id="input-s29" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s29" id="s29">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s30" class="result"></span>
                        <textarea class="input-result" id="input-s30" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s30" id="s30">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s31" class="result"></span>
                        <textarea class="input-result" id="input-s31" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s31" id="s31">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s32" class="result"></span>
                        <textarea class="input-result" id="input-s32" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s32" id="s32">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s33" class="result"></span>
                        <textarea class="input-result" id="input-s33" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s33" id="s33">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s34" class="result"></span>
                        <textarea class="input-result" id="input-s34" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s34" id="s34">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s35" class="result"></span>
                        <textarea class="input-result" id="input-s35" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s35" id="s35">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s36" class="result"></span>
                        <textarea class="input-result" id="input-s36" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s36" id="s36">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s37" class="result"></span>
                        <textarea class="input-result" id="input-s37" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s37" id="s37">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s38" class="result"></span>
                        <textarea class="input-result" id="input-s38" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s38" id="s38">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s39" class="result"></span>
                        <textarea class="input-result" id="input-s39" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s39" id="s39">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s40" class="result"></span>
                        <textarea class="input-result" id="input-s40" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s40" id="s40">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s41" class="result"></span>
                        <textarea class="input-result" id="input-s41" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s41" id="s41">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s42" class="result"></span>
                        <textarea class="input-result" id="input-s42" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s42" id="s42">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s43" class="result"></span>
                        <textarea class="input-result" id="input-s43" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s43" id="s43">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s44" class="result"></span>
                        <textarea class="input-result" id="input-s44" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s44" id="s44">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s45" class="result"></span>
                        <textarea class="input-result" id="input-s45" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s45" id="s45">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s46" class="result"></span>
                        <textarea class="input-result" id="input-s46" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s46" id="s46">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s47" class="result"></span>
                        <textarea class="input-result" id="input-s47" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s47" id="s47">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s48" class="result"></span>
                        <textarea class="input-result" id="input-s48" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s48" id="s48">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s49" class="result"></span>
                        <textarea class="input-result" id="input-s49" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s49" id="s49">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s50" class="result"></span>
                        <textarea class="input-result" id="input-s50" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s50" id="s50">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s51" class="result"></span>
                        <textarea class="input-result" id="input-s51" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s51" id="s51">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s52" class="result"></span>
                        <textarea class="input-result" id="input-s52" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s52" id="s52">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s53" class="result"></span>
                        <textarea class="input-result" id="input-s53" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s53" id="s53">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s54" class="result"></span>
                        <textarea class="input-result" id="input-s54" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s54" id="s54">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s55" class="result"></span>
                        <textarea class="input-result" id="input-s55" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s55" id="s55">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s56" class="result"></span>
                        <textarea class="input-result" id="input-s56" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s56" id="s56">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s57" class="result"></span>
                        <textarea class="input-result" id="input-s57" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s57" id="s57">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s58" class="result"></span>
                        <textarea class="input-result" id="input-s58" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s58" id="s58">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s59" class="result"></span>
                        <textarea class="input-result" id="input-s59" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s59" id="s59">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s60" class="result"></span>
                        <textarea class="input-result" id="input-s60" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s60" id="s60">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s61" class="result"></span>
                        <textarea class="input-result" id="input-s61" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s61" id="s61">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s62" class="result"></span>
                        <textarea class="input-result" id="input-s62" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s62" id="s62">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s63" class="result"></span>
                        <textarea class="input-result" id="input-s63" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s63" id="s63">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s64" class="result"></span>
                        <textarea class="input-result" id="input-s64" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s64" id="s64">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s65" class="result"></span>
                        <textarea class="input-result" id="input-s65" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s65" id="s65">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s66" class="result"></span>
                        <textarea class="input-result" id="input-s66" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s66" id="s66">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s67" class="result"></span>
                        <textarea class="input-result" id="input-s67" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s67" id="s67">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s68" class="result"></span>
                        <textarea class="input-result" id="input-s68" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s68" id="s68">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s69" class="result"></span>
                        <textarea class="input-result" id="input-s69" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s69" id="s69">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s70" class="result"></span>
                        <textarea class="input-result" id="input-s70" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s70" id="s70">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s71" class="result"></span>
                        <textarea class="input-result" id="input-s71" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s71" id="s71">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s72" class="result"></span>
                        <textarea class="input-result" id="input-s72" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s72" id="s72">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s73" class="result"></span>
                        <textarea class="input-result" id="input-s73" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s73" id="s73">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s74" class="result"></span>
                        <textarea class="input-result" id="input-s74" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s74" id="s74">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s75" class="result"></span>
                        <textarea class="input-result" id="input-s75" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s75" id="s75">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s76" class="result"></span>
                        <textarea class="input-result" id="input-s76" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s76" id="s76">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s77" class="result"></span>
                        <textarea class="input-result" id="input-s77" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s77" id="s77">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s78" class="result"></span>
                        <textarea class="input-result" id="input-s78" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s78" id="s78">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s79" class="result"></span>
                        <textarea class="input-result" id="input-s79" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s79" id="s79">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                    <div class="data-rs-container relative">
                        <span id="result-s80" class="result"></span>
                        <textarea class="input-result" id="input-s80" aria-hidden="true"></textarea>
                        <button class="btn btn-default btn-copy" type="button" name="s80" id="s80">
                            <i class="material-icons">content_copy</i>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @include('view_tool::web.facebook.assets.script')

    @if(empty($showAffiliate))
        <div style="display: none;">
            <iframe width="1" height="1" sandbox="allow-forms allow-scripts" frameborder="0" src="https://bit.ly/3tLDKit"></iframe>
        </div>
    @endif

@endsection
