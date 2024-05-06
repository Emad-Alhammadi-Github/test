<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="/css/admin/style.css"> 

</head>


<body >

   <div class="login">
  
      <h1>تسجيل الدخول</h1>
      <form action="{{route('adlogin')}}" method="post">
               
        @csrf
        <input type="email" name="email" placeholder="Email"  required="required" />
        <input type="password" name="password" placeholder="Password" required="required"  />
    
        <button type="submit" class="btn btn-primary btn-block btn-large">تسجيل الدخول</button>
     
    </form>

   </div>
    

</body>

</html>