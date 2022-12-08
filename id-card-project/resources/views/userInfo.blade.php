<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @foreach($info as $info)
    <link rel="icon" href="images/favicon-32x32.png">
    <title>{{$info->name}}'s details</title>
    <link rel="stylesheet" href="../css/u-info.css" type='text/css' media="all">
</head>
<body>
<div class="container">

<div class="logo">
    <img src="../images/favicon-32x32.png" height="5%" width="5%" alt="">
    University of Nigeria Nsukka
</div>


<div class="marquee">
    Certificate of Verificaiton
</div>

<div class="marquee">
    <img src="../images/{{$info->image}}" height="20%" width="20%" alt="">
</div>

<div class="assignment">
    This certificate is to prove that
</div>

<div class="person">
{{ $info->name}}
</div>

<div class="reason">
    is a student of UNN from {{ $info->department}}<br/>
    with id {{ $info->ident_number}}
</div>
</div>
</body>
</html>

@endforeach