<!DOCTYPE html>
<html lang="fr">
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import Bootstrap-->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?=ROOT_URL?>static/css/materialize.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="<?=ROOT_URL?>static/css/style.css"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="utf-8" />
      <title><?=\BlogPhp\Engine\Config::SITE_NAME?></title>
      <meta name="author" content="Atohoun Marvin" />

    </head>
    <body>
      <!--Import JS for Bootstrap-->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="<?=ROOT_URL?>static/js/materialize.js"></script>
      <script type="text/javascript" src="<?=ROOT_URL?>static/js/script.js"></script>

      <script src="<?=ROOT_URL?>static/js/tinymce/tinymce.min.js"></script>
      <script>
        tinymce.init({
          selector:'#editable',
          branding: false,
          height: 500,
          menubar: false,
          plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
            "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
          ],
          toolbar1: "formatselect | undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent ",
          toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code | caption | styleselect",

          image_caption: true,
          image_advtab: true ,

          external_filemanager_path:"<?=ROOT_URL?>static/filemanager/",
          filemanager_title:"Responsive Filemanager" ,
          external_plugins: { "filemanager" : "<?=ROOT_URL?>static/filemanager/plugin.min.js"},
          visualblocks_default_state: true ,

          style_formats_autohide: true,
          style_formats_merge: true,
        });

      </script>
