<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>studentInfo</title>
<style>
  input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {

  background-color: #6CAF90;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border-radius: 4px;
  cursor: pointer;

}

</style>
<body>
    <div class="main">
    <h1 class="title">Student Information</h1>
<form action="/store" method="post">
   @csrf
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <label>name</label>
    <input type="text" name="name" placeholder="Your name.."><br><br>

    <label>email</label>
    <input type="text" name="email"><br><br>

    <label>birthdate</label>
    <input type="text" name="birthdate"><br><br>

    <label>collage</label>
    <input type="text" name="collage"><br><br>

    <label>department</label>
    <input type="text" name="department" ><br><br>

    <input type="submit" value="create">
</form>
</div>
</body>
</html>

