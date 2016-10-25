<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <link href="src/css/bootstrap.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="src/js/bootstrap.js"></script>

    <script>
        function closeModalWindow(modal) {
            $('.modal').on("shown.bs.modal", function() {
                $('.modal').modal("hide");
            });
        }

        function sendData()
        {
            var title = document.getElementById("post_title").value;
            var text  = document.getElementById("post_text").value;

            if (title != "" && text != "")
            {
                $(document).ready(function() {
                $.ajax({
                    type: "POST",
                    url : "posts.php",
                    dataType: "html",
                    data:
                        {
                            submit     : "ok",
                            post_title : title,
                            post_text  : text
                        }
                }).done(function() {
                    $('.modal').modal("show");
                })});

            }

        }

        setInterval(closeModalWindow, 2000);

    </script>

</head>
    <body>
        <!--------------------------------------------------------------------------------------->

        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div style="padding: 20px;">
                        <div class="text-success">
                            <h4 class="text-center"><span class="glyphicon glyphicon-ok"></span> SUCCESS</h4></div>
                    </div>
                </div>
            </div>
        </div>

        <!--------------------------------------------------------------------------------------->
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3" style="border: 1px solid #d2d2d2;">
                    <h3 class="text-center">Post</h3>
                    <form action="posts.php" method="POST">
                    <input type="text" name="title" id="post_title" class="form-control" placeholder="Enter title"/>
                    <br>
                    <label>&nbsp;Enter your text here</label>
                    <textarea name="text" id="post_text" class="form-control"></textarea>
                    <br>
                    <p class="text-right">
                        <input type="submit" name="post" onClick="sendData()" id="post_btn" class="btn btn-primary"  value="Post"/>
                    </p>
                    </form>
                </div>
            </div>
            <div style="padding: 20px;"> </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3" style="border: 1px solid #d2d2d2;">
                    <h3 class="text-center">List&lt;Post&gt;</h3>
                    <hr></hr>
                    <div>
                            TEXT
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
