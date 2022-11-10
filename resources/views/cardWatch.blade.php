<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VBC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- FontAwesome 6.1.1 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <style>
    body{
        font-family: 'Roboto', sans-serif;
    }

    a{
        text-decoration: none;
        color: black;
    }

    .fixed_button {
        position: fixed;
        background: #050505;
        width: 201px;
        height: 45px;
        line-height: 45px;
        bottom: 10%;
        border-radius: 2rem;
        text-align: center;
        box-shadow: 4px 4px 4px #4a4a4a;
        cursor: pointer;
    }

    .fixed_button {
        text-transform: uppercase;
        font-family: Arial;font-weight: 600;
        color: #fff;
        transition-duration: 500ms;

    }

    .fixed_button:hover {
        transition-duration: 500ms;
        transform: scale(1.1);
        color: #fff
    }

    .fixed_button:active{
        box-shadow: 0 0;
    }
    </style>
</head>
<body style="background-color: #f2f2f2">
    <div class="row justify-content-center mx-0">
    {{-- column of the pricipal buisness card --}}
        <div class="col-12 col-sm-8 col-lg-6 col-xl-4 m-3">
            <div class="card shadow mb-5 bg-body" style="border-radius: 10px;border: outset;">
            <img src="@if($customer_data[0]->photo != null) {{url('images/'.$customer_data[0]->photo)}} @else {{asset('assets/img/undraw_Image_viewer_re_7ejc.png')}} @endif" alt="photo" style="border-radius: 10px 10px 0px 0px ;"/>
            <div class="card-body">
                <img src="@if($customer_data[0]->logo != null) {{url('images/'.$customer_data[0]->logo)}} @else {{asset('assets/img/logo-placeholder-image.png')}} @endif" alt="logo" srcset="" class="rounded float-end m-3" style="height: 75px;width:75px; ">
                <h3 class="card-title m-3"><b>{{$customer_data[0]->name}}</b></h3>
                <p class="card-text m-3"><b>{{$customer_data[0]->poste}}</b></p>
                <br>
                <br>
                <a href="mailto:{{$customer_data[0]->email}}">
                    <div class="row mb-3 mx-1">
                        <div class="col-md-2 col-3">
                            <i class="fa fa-envelope fa-1x rounded-circle p-3" aria-hidden="true" style="background-color: #4a4a4a ; color:white;"></i>
                        </div>
                        <div class="col">
                            <p class="align-middle text-break" style="font-size: 1rem;margin: 12px 0px;">{{$customer_data[0]->email}}</p>
                        </div>
                    </div>
                </a>
                <a href="tel:{{$customer_data[0]->phone}}">
                    <div class="row mb-3 mx-1">
                        <div class="col-md-2 col-3">
                            <i class="fa fa-phone fa-1x rounded-circle p-3" aria-hidden="true" style="background-color: #4a4a4a ; color:white;"></i>
                        </div>
                        <div class="col">
                            <p class="align-middle text-break" style="font-size: 1rem;margin: 12px 0px;">{{$customer_data[0]->phone}}</p>
                        </div>
                    </div>
                </a>
                @if ($customer_data[0]->fix != null)
                <a href="tel:{{$customer_data[0]->fix}}">
                    <div class="row mb-3 mx-1">
                        <div class="col-md-2 col-3">
                            <i class="fa fa-fax fa-1x rounded-circle p-3" aria-hidden="true" style="background-color: #4a4a4a ; color:white;"></i>
                        </div>
                        <div class="col">
                            <p class="align-middle text-break" style="font-size: 1rem;margin: 12px 0px;">{{$customer_data[0]->fix}}</p>
                        </div>
                    </div>
                </a>
                @endif
                @if ($customer_data[0]->website != null)
                <a href="{{$customer_data[0]->website}}">
                    <div class="row mb-3 mx-1">
                        <div class="col-md-2 col-3">
                            <i class="fa fa-up-right-from-square fa-1x rounded-circle p-3" aria-hidden="true" style="background-color: #4a4a4a ; color:white;"></i>
                        </div>
                        <div class="col">
                            <p class="align-middle text-break" style="font-size: 1rem;margin: 12px 0px;">{{$customer_data[0]->website}}</p>
                        </div>
                    </div>
                </a>
                @endif
                @if ($customer_data[0]->address != null)
                <a href="{{$customer_data[0]->address}}">
                    <div class="row mb-3 mx-1">
                        <div class="col-md-2 col-3">
                            <i class="fa fa-map-location-dot fa-1x rounded-circle p-3" aria-hidden="true" style="background-color: #4a4a4a ; color:white;"></i>
                        </div>
                        <div class="col">
                            <p class="align-middle text-break" style="font-size: 1rem;margin: 12px 0px;">Google map</p>
                        </div>
                    </div>
                </a>
                @endif
                @if ($customer_data[0]->description != null)
                <a href="#!">
                    <div class="row mb-3 mx-1">
                        <div class="col-md-2 col-3">
                            <i class="fa fa-circle-info fa-1x rounded-circle p-3" aria-hidden="true" style="background-color: #4a4a4a ; color:white;"></i>
                        </div>
                        <div class="col">
                            <p class="align-middle text-break" style="font-size: 1rem;margin: 12px 0px;">{{$customer_data[0]->description}}</p>
                        </div>
                    </div>
                </a>
                @endif
                @if ($customer_data[0]->facbook != null)
                <a href="{{$customer_data[0]->facbook}}">
                    <div class="row mb-3 mx-1">
                        <div class="col-md-2 col-3">
                            <i class="fa-brands fa-facebook fa-1x rounded-circle p-3" aria-hidden="true" style="background-color: #4a4a4a ; color:white;"></i>
                        </div>
                        <div class="col">
                            <p class="align-middle text-break" style="font-size: 1rem;margin: 12px 0px;">Facbook</p>
                        </div>
                    </div>
                </a>
                @endif
                @if ($customer_data[0]->instagram != null)
                <a href="{{$customer_data[0]->instagram}}">
                    <div class="row mb-3 mx-1">
                        <div class="col-md-2 col-3">
                            <i class="fa-brands fa-instagram fa-1x rounded-circle p-3" aria-hidden="true" style="background-color: #4a4a4a ; color:white;"></i>
                        </div>
                        <div class="col">
                            <p class="align-middle text-break" style="font-size: 1rem;margin: 12px 0px;">Instagram</p>
                        </div>
                    </div>
                </a>
                @endif
                @if ($customer_data[0]->linkedin != null)
                <a href="{{$customer_data[0]->linkedin}}">
                    <div class="row mb-3 mx-1">
                        <div class="col-md-2 col-3">
                            <i class="fa-brands fa-linkedin fa-1x rounded-circle p-3" aria-hidden="true" style="background-color: #4a4a4a ; color:white;"></i>
                        </div>
                        <div class="col">
                            <p class="align-middle text-break" style="font-size: 1rem;margin: 12px 0px;">Linkedin</p>
                        </div>
                    </div>
                </a>
                @endif
                @if ($customer_data[0]->youtube != null)
                <a href="{{$customer_data[0]->youtube}}">
                    <div class="row mb-3 mx-1">
                        <div class="col-md-2 col-3">
                            <i class="fa-brands fa-youtube fa-1x rounded-circle p-3" aria-hidden="true" style="background-color: #4a4a4a ; color:white;"></i>
                        </div>
                        <div class="col">
                            <p class="align-middle text-break" style="font-size: 1rem;margin: 12px 0px;">Youtube</p>
                        </div>
                    </div>
                </a>
                @endif
                @if ($customer_data[0]->tiktok != null)
                <a href="{{$customer_data[0]->tiktok}}">
                    <div class="row mb-3 mx-1">
                        <div class="col-md-2 col-3">
                            <i class="fa-brands fa-tiktok fa-1x rounded-circle p-3" aria-hidden="true" style="background-color: #4a4a4a ; color:white;"></i>
                        </div>
                        <div class="col">
                            <p class="align-middle text-break" style="font-size: 1rem;margin: 12px 0px;">Tiktok</p>
                        </div>
                    </div>
                </a>
                @endif
                @if ($customer_data[0]->twitter != null)
                <a href="{{$customer_data[0]->twitter}}">
                    <div class="row mb-3 mx-1">
                        <div class="col-md-2 col-3">
                            <i class="fa-brands fa-twitter fa-1x rounded-circle p-3" aria-hidden="true" style="background-color: #4a4a4a ; color:white;"></i>
                        </div>
                        <div class="col">
                            <p class="align-middle text-break" style="font-size: 1rem;margin: 12px 0px;">Twitter</p>
                        </div>
                    </div>
                </a>
                @endif
                @if ($customer_data[0]->line != null)
                <a href="{{$customer_data[0]->line}}">
                    <div class="row mb-3 mx-1">
                        <div class="col-md-2 col-3">
                            <i class="fa-brands fa-line fa-1x rounded-circle p-3" aria-hidden="true" style="background-color: #4a4a4a ; color:white;"></i>
                        </div>
                        <div class="col">
                            <p class="align-middle text-break" style="font-size: 1rem;margin: 12px 0px;">Line</p>
                        </div>
                    </div>
                </a>
                @endif
                @if ($customer_data[0]->pinterest != null)
                <a href="{{$customer_data[0]->pinterest}}">
                    <div class="row mb-3 mx-1">
                        <div class="col-md-2 col-3">
                            <i class="fa-brands fa-pinterest fa-1x rounded-circle p-3" aria-hidden="true" style="background-color: #4a4a4a ; color:white;"></i>
                        </div>
                        <div class="col">
                            <p class="align-middle text-break" style="font-size: 1rem;margin: 12px 0px;">Pinterest</p>
                        </div>
                    </div>
                </a>
                @endif
                @if ($customer_data[0]->renren != null)
                <a href="{{$customer_data[0]->renren}}">
                    <div class="row mb-3 mx-1">
                        <div class="col-md-2 col-3">
                            <i class="fa-brands fa-renren fa-1x rounded-circle p-3" aria-hidden="true" style="background-color: #4a4a4a ; color:white;"></i>
                        </div>
                        <div class="col">
                            <p class="align-middle text-break" style="font-size: 1rem;margin: 12px 0px;">Renren</p>
                        </div>
                    </div>
                </a>
                @endif
                @if ($customer_data[0]->vk != null)
                <a href="{{$customer_data[0]->vk}}">
                    <div class="row mb-3 mx-1">
                        <div class="col-md-2 col-3">
                            <i class="fa-brands fa-tencent-weibo fa-1x rounded-circle p-3" aria-hidden="true" style="background-color: #4a4a4a ; color:white;"></i>
                        </div>
                        <div class="col">
                            <p class="align-middle text-break" style="font-size: 1rem;margin: 12px 0px;">VK</p>
                        </div>
                    </div>
                </a>
                @endif
                @if ($customer_data[0]->wechat != null)
                <a href="{{$customer_data[0]->wechat}}">
                    <div class="row mb-3 mx-1">
                        <div class="col-md-2 col-3">
                            <i class="fa-brands fa-vk fa-1x rounded-circle p-3" aria-hidden="true" style="background-color: #4a4a4a ; color:white;"></i>
                        </div>
                        <div class="col">
                            <p class="align-middle text-break" style="font-size: 1rem;margin: 12px 0px;">Wechat</p>
                        </div>
                    </div>
                </a>
                @endif
                @if ($customer_data[0]->weibo != null)
                <a href="{{$customer_data[0]->weibo}}">
                    <div class="row mb-3 mx-1">
                        <div class="col-md-2 col-3">
                            <i class="fa-brands fa-weixin fa-1x rounded-circle p-3" aria-hidden="true" style="background-color: #4a4a4a ; color:white;"></i>
                        </div>
                        <div class="col">
                            <p class="align-middle text-break" style="font-size: 1rem;margin: 12px 0px;">Weibo</p>
                        </div>
                    </div>
                </a>
                @endif
                @if ($customer_data[0]->tencent_weibo != null)
                <a href="{{$customer_data[0]->tencent_weibo}}">
                    <div class="row mb-3 mx-1">
                        <div class="col-md-2 col-3">
                            <i class="fa-brands fa-weibo fa-1x rounded-circle p-3" aria-hidden="true" style="background-color: #4a4a4a ; color:white;"></i>
                        </div>
                        <div class="col">
                            <p class="align-middle text-break" style="font-size: 1rem;margin: 12px 0px;">Tencent Weibo</p>
                        </div>
                    </div>
                </a>
                @endif
                <div class="row mb-3 mx-1">
                    <div class="col-12 col-3 text-center">
                            @php
                                $test = "47";
                            @endphp
                        <div id="fullsized_image_holder">
                            <img src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data={{url('')}}/cardWatch{{$customer_data[0]->id}}" alt="qr-code" download>
                        </div>

                        <p>My Qr Code</p>
                        {{--<img src="data:image/png;base64,
                        {!! base64_encode(QrCode::format('png')
                            ->size(200)
                            ->margin(3)
                            ->gradient(73, 126, 176, 14, 126, 128, 'vertical')
                            ->eyeColor(2, 154, 205, 50, 1, 1, 1)
                            ->eyeColor(1, 154, 205, 50, 1, 1, 1)
                            ->eyeColor(0, 1, 1, 1, 154, 205, 50)
                            ->style('round')
                            ->generate('http://10.0.1.200/DBC-V7-QrCode/public/cardWatch'.$customer_data[0]->id)) !!} "><br>
                        <a class="btn btn-primary" href="data:image/png;base64,
                        {!! base64_encode(QrCode::format('png')
                            ->size(200)
                            ->margin(3)
                            ->gradient(73, 126, 176, 14, 126, 128, 'vertical')
                            ->eyeColor(2, 154, 205, 50, 1, 1, 1)
                            ->eyeColor(1, 154, 205, 50, 1, 1, 1)
                            ->eyeColor(0, 1, 1, 1, 154, 205, 50)
                            ->style('round')
                            ->generate('http://10.0.1.200/DBC-V7-QrCode/public/cardWatch'.$customer_data[0]->id)) !!} " download>Downloads</a><br>
                        <p>My Qr Code</p>
                        --}}
                    </div>
                </div>
            </div>
            </div>
        </div>

      {{-- controlle the way to show the button --}}
      @auth
        @if (auth()->user()->id == $customer_data[0]->id_comstme_login)
            <a name="" id="" class="fixed_button" href="#!" role="button">
                <p><i class="fa fa-user-check m-2" aria-hidden="true"></i>Its your card</p>
            </a>
        @else
            @if ($contctExist)
                <a class="fixed_button" href="#!" role="button">
                    <p><i class="fa fa-check m-2" aria-hidden="true"></i>Alredy Contact</p>
                </a>
            @else
                <a class="fixed_button" href="{{ url('/addContact'.$customer_data[0]->id) }}" role="button">
                    <p><i class="fa fa-address-book m-2" aria-hidden="true"></i>Add contact</p>
                </a>
            @endif
        @endif
      @else
        <a class="fixed_button" href="{{ url('/register') }}" role="button">
            <p><i class="fa fa-address-book m-2" aria-hidden="true"></i>Add contact</p>
        </a>
      @endauth
    </div>
    <br><br>

    <footer class="footer fixed-bottom bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
           2022 Copyright ©
          <a class="text-dark" href="#"> <b>Index Communication</b></a>
        </div>
        <!-- Copyright -->
      </footer>
</body>
</html>
