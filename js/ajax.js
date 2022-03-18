$( document ).ready(function() {
   
    $('form').submit(function(event) {

        event.preventDefault();
        

        $.ajax({
            type: "POST",
            url: "../config/insert_task.php",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(){
                // alert('Новая запись добалена')
              }
            });
      });
});

$( document ).ready(function() {
   
    $('.new-task').click(function(event) {

        event.preventDefault();
        alert('reeee')
    
      });
});