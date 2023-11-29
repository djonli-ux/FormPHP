<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <h1 style="text-align: center">Form</h1>
    <form action="handler.php">
        <p>Name:<input type="text" name="u_name"></p>
        <p>Email:<input type="email" name="u_email"></p>
        <select name="languages[]">
            <option value="cpp">C++</option>
            <option value="cs">C#</option>
            <option value="php">PHP</option>
            <option value="java">Java</option>
            <option value="javascript">JS</option>
        </select>
        <button type="submit" name="submit">SUBMIT</button>
    </form>

</body>
</html>