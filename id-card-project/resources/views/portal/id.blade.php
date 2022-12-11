<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../idCard.css">
    <title>ID Card</title>
<!--     
    So lets start -->
</head>


<body>
        <div class="container">
            @if($details->isEmpty()) 
                <b>Id card not applied for yet... </b> <br>
                <a href="{{route('id-request')}}">Click here to apply</a>

            @else
                <div class="padding">
                    <div class="font">
                        <div class="top">
                            <img src="../../images/{{Auth::user()->image}}">
                        </div>
                        @foreach ($details as $detail)
                        <div class="bottom">
                            <p>{{Auth::user()->name}}</p>
                            @php $Stype = 'student-type'; 
                                $id_no = urlencode(urlencode(Auth::user()->ident_number));
                            @endphp
                            <p class="desi">{{$detail->$Stype}}</p>
                            <div class="barcode">
                              {!! QrCode::size(80)->generate( URL('userinfo/'.$id_no)) !!}
                            </div>
                            
                            <br>
                            <p class="no">{{Auth::user()->ident_number}}</p>
                            <p class="no">{{Auth::user()->department}}</p>
                        </div>
                    </div>
                </div>
                <div class="back">
                    <h1 class="Details">Information</h1>
                    <hr class="hr">
                    <div class="details-info">
                        <p><b>University of Nigeria Nsukka </b></p>
                        <p>{{Auth::user()->faculty}}</p>
                        <p><b>Mobile No:</b></p>
                        @php $phone = 'phone-no'; @endphp
                        <p>{{Auth::user()->$phone}}</p>
                        <p><b>Residence Address:</b></p>
                        <p>{{$detail->address}}</p>
                        @endforeach
                        <h6> if found return to ID card office, UNN</h6>
                        </div>
                        <div class="logo">
                            <img src="../barcode.PNG">
                        </div>
                        <hr>
                    </div>
                </div>
            @endif
        </div>
        <a href="../index">Back to portal</a>
</body>
        
</html>