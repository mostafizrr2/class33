<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
     
     <style>
        .ck-editor__editable_inline {
    min-height: 500px;
}
     </style> 
    <title>Hello, world!</title>
  </head>
  <body>
      <div class="container">
          <br><br>
      <form method="POST" action="check.php">
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" class="form-control" name="title">
        </div>

        <div class="form-group">
            <label for="">Description</label><br>
            <textarea height="500px" id="myEditor" name="desc" cols="10" rows="5" ></textarea>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
       
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/zmqujg9mlqnmw7fhnnfgype87q8y88hldvzrrjgjpeuqp3y6/tinymce/5/tinymce.min.js"></script>
    <!-- <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script> -->
   
   <script>
      tinymce.init({
          selector: "#myEditor",
      });
    // ClassicEditor.create( 

    //     document.querySelector( '#myEditor' ),

    //     {
    //         height: '500px',
    //     }

    //     ).then(function(tanvir){

    //         console.log("Editor successfully created.");

    //     }).catch( error => {

    //         console.log("Editor not created.");

    //     } ); 

    </script>

</body>
</html>