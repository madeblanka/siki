<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href='//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.min.css' rel='stylesheet'/>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <script type='text/javascript'>
  <!-- Publish By Xkomo-->
  $("#menu a.tutup,#menu a.buka").click(function(e){
      e.preventDefault();
      if($(this).hasClass("buka"))
      {
      $(this).removeClass("buka");
      $(this).parent().children("ul").stop(true,true).slideUp("normal");
      } else {
      $("#menu a.tutup.buka").removeClass("buka");
      $(this).addClass("buka");
      $(".sub").filter(":visible").slideUp("normal");
      $(this).parent().children("ul").stop(true,true).slideDown("normal");
      }
  });
  </script>
  </body>
</html>
