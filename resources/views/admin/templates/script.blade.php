<!-- JavaScript -->

{!! Html::script('http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js') !!}
{!! Html::script('public/assets/scripts/bootstrap.min.js') !!}
{!! Html::script('public/assets/scripts/owl.carousel.min.js') !!}
{!! Html::script('public/assets/scripts/jquery.validate.min.js') !!}
{!! Html::script('public/assets/scripts/wow.min.js') !!}
{!! Html::script('public/assets/scripts/smoothscroll.js') !!}
{!! Html::script('public/assets/scripts/jquery.smooth-scroll.min.js') !!}
{!! Html::script('public/assets/scripts/jquery.superslides.min.js') !!}
{!! Html::script('public/assets/scripts/placeholders.jquery.min.js') !!}
{!! Html::script('public/assets/scripts/jquery.magnific-popup.min.js') !!}
{!! Html::script('public/assets/scripts/jquery.stellar.min.js') !!}
{!! Html::script('public/assets/scripts/retina.min.js') !!}
{!! Html::script('public/assets/scripts/custom.js') !!}

 <!--  -->
{!! Html::script('https://use.fontawesome.com/473269ba77.js') !!}
{!! Html::script('https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js') !!}
{!! Html::script('public/assets/scripts/tag-it.js') !!}

<script>
    @if(isset($tags))   
        $(document).ready(function(){
                var tags = [ @foreach ($tags as $tag) '{{ $tag->name }}', @endforeach ''];
                $('#myTags').tagit({
                    availableTags: tags
                });
        }); 
    @endif        
        
</script>
