@extends('view_tool::web.layout.tool')

@section('content')
    <div class="row">
        <div class="col s12">
        </div>
    </div>
@endsection

{{--https://ahachat.com/facebook-text--}}
<script>

    $(document).ready(function (){

        var base_url = 'https://fancyfonts.co/';

        $('#sidebar-nav').find('a').on('click', function(e){
            if( !$(this).hasClass('selected')){
                $('.text-tool').removeClass('selected').find('span').removeClass('checked');
                $(this).find('span').addClass('checked');
                $(this).addClass('selected');

                $url = $(this).attr('data-href');
                if( $url) { $url = $url + '/'}
                NProgress.configure({ showSpinner: false });
                NProgress.configure({ easing: 'ease', speed: 500 });
                NProgress.start();

                $.ajax({
                    type: "POST",
                    url: "https://fancyfonts.co/" + $url,
                    data: {
                        "request": "ajax"
                    },
                    dataType: "json",
                    success: function(b) {
                        //console.log(ajaxresult);

                        setTimeout(function(){
                            NProgress.done();
                            window.history.pushState("string", "",  base_url + $url);
                            $("#results").empty().append(b.html).hide().fadeIn(800);

                            $('.input-result').each(function(index){
                                var inputID = this.id;
                                var id = inputID.replace( 'input-', '');
                                var response = Change('some preview text', id);
                                this.setAttribute('value', this.value);
                                $('#result-' + id).html(response);
                                this.value = $('#result-' + id).html();
                                this.setAttribute('value', this.value);
                                this.setAttribute('value', this.value);
                            });

                        }, 1500);
                    }
                });


            }
            e.preventDefault();
        });

        $(document).on('click', '#tools-toggle', function(e){
            $('.font-generators-list').toggle();
        });

        $(document).on('click', '.question', function(e){
            $(this).toggleClass('active');
        });

        $(document).on('click', '.input-clear', function(e){
            $('#input-primary').val('');
            $('#input-primary').focus();
            $(".input-clear").addClass('hidden');
        });

        $(document).on('input', '#input-primary', function(e){

            val = this.value;
            if( val.length > 0){
                $('.input-clear').removeClass('hidden');
            }else{
                $('.input-clear').addClass('hidden');
            }

            $('.input-result').each(function(index){

                var inputID = this.id;
                var id = inputID.replace( 'input-', '');
                var response = Change(val, id);

                this.setAttribute('value', this.value);
                $('#result-' + id).html(response);
                this.value = $('#result-' + id).html();
                this.setAttribute('value', this.value);

            });
        });


        $('.input-result').each(function(index){

            var inputID = this.id;
            var id = inputID.replace( 'input-', '');
            var response = Change('some preview text', id);
            this.setAttribute('value', this.value);
            $('#result-' + id).html(response);
            this.value = $('#result-' + id).html();
            this.setAttribute('value', this.value);

        });


        $(window).scroll(function() {
            if ($(this).scrollTop() >= 500) {        // If page is scrolled more than 800px
                $('#return-to-top').fadeIn(300);    // Fade in the arrow
            } else {
                $('#return-to-top').fadeOut(200);   // Else fade out the arrow
            }
        });

        // Return to top
        $('#return-to-top').click(function() {      // When arrow is clicked
            $('body,html').animate({
                scrollTop : 0                       // Scroll to top of body
            }, 500);
        });


        // Tooltip
        $('[data-toggle="tooltip"]').tooltip();
        $(document).on('click', '.btn-copy', function(e){
            e.preventDefault();
            var id = this.id;
            console.log(id);
            var copyText = document.getElementById("input-" + id);
            console.log(copyText);
            copyText.select();
            document.execCommand("copy");

            $('[data-toggle="tooltip"]').attr('data-original-title', 'Copy').tooltip('fixTitle');

            $(this).prop('title', 'Copied').tooltip('fixTitle').tooltip('show');
        });

    });
</script>