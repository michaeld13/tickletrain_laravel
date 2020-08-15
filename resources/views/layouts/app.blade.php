<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') {{ config('app.name', '-Tickletrain') }}</title>
    <!-- fonts CSS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,900&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/vendor/bootstrap/bootstrap.min.css')}}">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <!-- Mega Menu CSS -->
    <link id="effect" rel="stylesheet" type="text/css" media="all" href="{{ asset('public/webslidemenu/dropdown-effects/fade-down.css')}}" />
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('public/webslidemenu/webslidemenu.css')}}" />
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('public/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('public/css/footer.css')}}" />
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('public/webslidemenu/color-skins/white-orange.css')}}" />

    @yield('style')

</head>
<body>

    <section>
        @include('includes.header')

            @yield('content')

            @include('includes.login')

        @include('includes.footer')

    </section>   
</body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="{{asset('public/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="{{asset('public/vendor/bootstrap//bootstrap.min.js')}}">
    </script>
    <script type="text/javascript" src="{{asset('public/webslidemenu/webslidemenu.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/js/script.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/js/guest.js')}}"></script>
    <script type="text/javascript">
        
        $(document).ready(function(){
          
            $.get("https://tickletrain.com/webservices.php?method=getPosts", function(data, status){
                var List = JSON.parse(data);
                var List_1_html = '';
                var List_2_html = '';
                var List_3_html = '';
                $i=0;
                $.each(List.blog_list,function(ind,val) {

                    if(ind == 'hello-world' || ind ==  'hii'){
                        return;
                    }
                      console.log($i,val);
                    if($i <= 11){
                        List_1_html+='<li><a href="#'+ind+'"><i class="fas fa-arrow-circle-right"></i>'+val+'</a></li>';
                    }else if($i<= 22 && $i > 11 ){
                        List_2_html+='<li><a href="#'+ind+'"><i class="fas fa-arrow-circle-right"></i>'+val+'</a></li>';
                    }
                    else if($i<= 33 && $i > 22 ){
                        List_3_html+='<li><a href="#'+ind+'"><i class="fas fa-arrow-circle-right"></i>'+val+'</a></li>';
                    }
                $i++;
                });
                if(List_3_html !== ""){
                    $('#blog-list-1').html(List_1_html);
                }

                if(List_3_html !== ""){
                    $('#blog-list-2').html(List_2_html);
                }

                if(List_3_html !== ""){
                    $('#blog-list-3').html(List_3_html);
                }
            });
         
        });
    </script>
    @yield('script')

</html>
