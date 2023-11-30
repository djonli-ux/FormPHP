<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>

    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <h1 style="text-align: center">Form</h1>

        <form action="handler.php" method="post">
            <div class="mb-3">
                <label class="form-label" for="name">Name:</label>
                <input class="form-control" type="text" name="u_name" id="name">

                <label class="form-label" for="email">Email</label>
                <input class="form-control" type="email" name="u_email" id="email">

                <label class="form-label" for="tel">Phone number:</label>
                <input class="form-control" type="tel" name="u_tel" id="tel">

                <label class="form-label" for="date">Birthday date:</label>
                <input class="form-control" type="date" name="u_tel" id="date">
            </div>

            <div class="select">
                <p>Main programming language:</p>
                <select class="form-select" aria-label="Default select example" name="languages[]">
                    <option selected>Open this select menu</option>
                    <option value="cpp">C++</option>
                    <option value="cs">C#</option>
                    <option value="php">PHP</option>
                    <option value="java">Java</option>
                    <option value="javascript">JS</option>
                </select>
            </div>

                <button class="btn btn-primary mt-4" type="submit" name="submit">SUBMIT</button>

        </form>
    </div>

    <script src="./js/bootstrap.bundle.min.js"></script>

</body>
</html>