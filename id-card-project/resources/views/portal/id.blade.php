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

@empty($details)
    Id card not applied for yet
    <a href="{{route('id-request')}}"> Click here to apply</a>

@else
<body>
        <div class="container">
            <div class="padding">
                <div class="font">
                    <div class="top">
                        <img src="../../images/{{Auth::user()->image}}">
                    </div>
                    <div class="bottom">
                        <p>{{Auth::user()->name}}</p>
                        <p class="desi">underg</p>
                        <div class="barcode">
                            <img src="../qr sample.png">
                        </div>
                        <br>
                        <p class="no">{{Auth::user()->ident_number}}</p>
                        <p class="no">{{Auth::user()->department}}</p>
                    </div>
                </div>
            </div>
            <div class="back">
                <h1 class="Details">information</h1>
                <hr class="hr">
                <div class="details-info">
                      <p><b>University of Nigeria Nsukka </b></p>
                    <p>{{Auth::user()->faculty}}</p>
                    <p><b>Mobile No:</b></p>
                    @php $phone = 'phone-no'; @endphp
                    <p>{{Auth::user()->$phone}}</p>
                    <p><b>Residence Address:</b></p>
                    <p>{{$details}}</p>
                    <h6> if found return to ID card office, UNN</h6>
                    </div>
                    <div class="logo">
                        <img src="../barcode.PNG">
                    </div>
                    <hr>

                </div>
            </div>
        </div>
</body>
@endempty
</html>