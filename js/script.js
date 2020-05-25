$(function() {
    var forms = document.getElementsByClassName('needs-validation');

    // Loop over them and prevent submission
    Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });

   $('form').on('submit', function(event){
      var isOK = true;
      Array.prototype.filter.call(forms, function(form) {
          if (form.checkValidity() === false) {
            isOK = false;
          }
      });
      if (!isOK) {
        return;
      }
      event.preventDefault();
      var frm = $('form')[0];
      var formData = new window.FormData(frm);  
      //formData.append('vorname',''+$('#vorname').val());
      console.log("submit..."+formData);
      $.ajax({
        xhr: function() {
          var xhr;
          // damit es überall funktioniert...
          if (window.XMLHttpRequest) {
               xhr = new window.XMLHttpRequest();
          }
          else {
               xhr = new ActiveXObject("Microsoft.XMLHTTP");
          }
          console.log("..."+xhr.upload);
          xhr.upload.addEventListener('progress', function(e) {
            console.log("up...");
         
            if (e.lengthComputable) {
              var perc = Math.round(e.loaded / e.total * 100.0);
              $('#myprogress').attr('aria-valuenow', perc).css('width', perc + '%').text(perc + '%');
            }
            
          });
          return xhr;
        },
        type : 'POST',
        data: formData,
        url : 'upload.php', 
        processData : false,
        contentType : false,
        success: function(data) {
          $('#container').html(data);
        }
      });
    });
});