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

            <input type="hidden" name="frm_php">

            <div class="mb-3">
                <label class="form-label" for="name">Name:</label>
                <input class="form-control" type="text" name="u_name" id="name">

                <label class="form-label" for="email">Email</label>
                <input class="form-control" type="email" name="u_email" id="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text mb-1">We'll never share your email with anyone else.</div>

                <label class="form-label" for="tel">Phone number:</label>
                <input class="form-control" type="tel" name="u_tel" id="tel">

                <label class="form-label" for="date">Birthday date:</label>
                <input class="form-control" type="date" name="u_tel" id="date">
            </div>

            <div class="mb-3">
                <label class="form-label" for="lang">Enter your main programming language:</label>
                <select class="form-select" aria-label="Default select example" name="languages[]" id="lang">
                    <option disabled selected>Open this select menu</option>
                    <option value="cpp">C++</option>
                    <option value="cs">C#</option>
                    <option value="php">PHP</option>
                    <option value="java">Java</option>
                    <option value="javascript">JS</option>
                </select>
            </div>

            <div class="mb-3">
                <p>Gender:</p>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="gender[]" id="g" value="m">
                    <label class="form-check-label" for="g">male</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="gender[]" id="g" value="f">
                    <label class="form-check-label" for="g">female</label>
                </div>
            </div>

            <button class="btn btn-primary mt-4" type="submit" name="submit">SUBMIT</button>
        </form>
    </div>

    <script src="./js/bootstrap.bundle.min.js"></script>

</body>
</html>