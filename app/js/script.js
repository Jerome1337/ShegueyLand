// SOUNDS
$(document).ready(function() {
    $( ".giveMeMore" ).click(function() {

        <?php 
        if (isset($next)){
            echo('var next:' $next);
        } else {
            
        }
        ?>

        if (typeof next !== 'undefined'){
            console.log(next);
            
            $.ajax({
                type: "POST",
                url: '../commons/function.php',
                dataType: 'json',
                data: {functionname: 'getInsta', arguments: ['image', 'sheguey', '<?php echo($next);?>']},

                success: function (obj, textstatus) {
                  if( !('error' in obj) ) {
                      console.log('looks good');
                  }
                  else {
                      console.log(obj.error);
                  }
                }
            });
            // getInsta('image', 'sheguey', next);
        } else {

            $.ajax({
                type: "POST",
                url: 'commons/function.php',
                dataType: 'json',
                data: {functionname: 'getInsta', arguments: ['image', 'sheguey', '']},

                success: function (obj, textstatus) {
                  if( !('error' in obj) ) {
                      console.log('looks good ' + obj);
                  }
                  else {
                      console.log(obj.error);
                  }
                }
            });
            console.log('set NEXT');
            getInsta('image', 'sheguey', '');
        }
    });
});
