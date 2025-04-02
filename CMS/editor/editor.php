
<!DOCTYPE html>
<?php 
$pageName = $_POST["pageName"];
$fileName = $_POST["fileName"];
$html = "";
if (file_exists($pageName)) {
    $html = file_get_contents($pageName);
}

?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Summernote</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>
<body>
  <?php echo "Editing $fileName" ?>
  <div id="summernote"><p>Hello Summernote</p></div>
  <button data-save>save</button>
  <script>

    const save = document.querySelector('[data-save]')

    save.addEventListener("click",()=>{
       
      $.post("save.php",{pageName:'<?php echo $pageName ?>',content: $('#summernote').summernote("code")}).then(()=>{
        location.href = "index.php"
      })
           
        
        
    })


    $(document).ready(function() {
        $('#summernote').summernote("code",`<?php echo $html ?>`);
    });
  </script>
</body>
</html>