<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     <h1 style="text-align: center; color:blue;">Welcome</h1>
     <h3 style="text-align: center; color:black;">Name: {{$appointment->name}}</h3>
     <h3 style="text-align: center; color:black;">Email: {{$appointment->email}}</h3>
     <h3 style="text-align: center; color:black;">Phone: {{$appointment->phone}}</h3>
     <h3 style="text-align: center; color:black;">Doctor_Name: {{$appointment->doctor->name}}</h3>

     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero voluptate beatae perspiciatis,
         at debitis reiciendis praesentium, quisquam fugit veritatis ab consectetur quos minima,
         delectus molestiae labore architecto eos. Eius, dolores.</p>


</body>
</html>
