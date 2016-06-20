<!-- JavaScript -->

{!! Html::script('public/assets/scripts/jquery-1.8.2.min.js') !!}
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
{!! Html::script('https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js') !!}
{!! Html::script('public/assets/scripts/tag-it.js') !!}

<script>
        $(function(){
            var sampleTags = ['c++', 'java', 'php', 'coldfusion', 'javascript', 'asp', 'ruby', 'python', 'c', 'scala', 'groovy', 'haskell', 'perl', 'erlang', 'apl', 'cobol', 'go', 'lua'];

            //-------------------------------
            // Minimal
            //-------------------------------
            $('#myTags').tagit();

            //-------------------------------
            // Single field
            //-------------------------------
            $('#singleFieldTags').tagit({
                availableTags: sampleTags,
                // This will make Tag-it submit a single form value, as a comma-delimited field.
                singleField: true,
                singleFieldNode: $('#mySingleField')
            });

            // singleFieldTags2 is an INPUT element, rather than a UL as in the other 
            // examples, so it automatically defaults to singleField.
            $('#singleFieldTags2').tagit({
                availableTags: sampleTags
            });

            //-------------------------------
            // Preloading data in markup
            //-------------------------------
            $('#myULTags').tagit({
                availableTags: sampleTags, // this param is of course optional. it's for autocomplete.
                // configure the name of the input field (will be submitted with form), default: item[tags]
                itemName: 'item',
                fieldName: 'tags'
            });

            //-------------------------------
            // Tag events
            //-------------------------------
            var eventTags = $('#eventTags');

            var addEvent = function(text) {
                $('#events_container').append(text + '<br>');
            };

            eventTags.tagit({
                availableTags: sampleTags,
                beforeTagAdded: function(evt, ui) {
                    if (!ui.duringInitialization) {
                        addEvent('beforeTagAdded: ' + eventTags.tagit('tagLabel', ui.tag));
                    }
                },
                afterTagAdded: function(evt, ui) {
                    if (!ui.duringInitialization) {
                        addEvent('afterTagAdded: ' + eventTags.tagit('tagLabel', ui.tag));
                    }
                },
                beforeTagRemoved: function(evt, ui) {
                    addEvent('beforeTagRemoved: ' + eventTags.tagit('tagLabel', ui.tag));
                },
                afterTagRemoved: function(evt, ui) {
                    addEvent('afterTagRemoved: ' + eventTags.tagit('tagLabel', ui.tag));
                },
                onTagClicked: function(evt, ui) {
                    addEvent('onTagClicked: ' + eventTags.tagit('tagLabel', ui.tag));
                },
                onTagExists: function(evt, ui) {
                    addEvent('onTagExists: ' + eventTags.tagit('tagLabel', ui.existingTag));
                }
            });

            //-------------------------------
            // Read-only
            //-------------------------------
            $('#readOnlyTags').tagit({
                readOnly: true
            });

            //-------------------------------
            // Tag-it methods
            //-------------------------------
            $('#methodTags').tagit({
                availableTags: sampleTags
            });

            //-------------------------------
            // Allow spaces without quotes.
            //-------------------------------
            $('#allowSpacesTags').tagit({
                availableTags: sampleTags,
                allowSpaces: true
            });

            //-------------------------------
            // Remove confirmation
            //-------------------------------
            $('#removeConfirmationTags').tagit({
                availableTags: sampleTags,
                removeConfirmation: true
            });
            
        });
    </script>