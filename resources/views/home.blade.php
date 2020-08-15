@extends('layouts.app')

@section('title','Dashboard')

@section('style')
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('public/css/dashboard.css')}}" />
@endsection

@section('content')

       
        <div class="container">
            <div class="row pt-3 pb-3 d-flex">
                <div class="col-md-4">
                    <div class="card w-100 card-item">
                        <a href="" class="card-header bg-white d-flex align-items-center">
                            <i class="fa fa-2x fa-briefcase text-db" aria-hidden="true"></i>
                            <h4 class="ml-2 pt-2">Featured</h4>
                            <div class="ml-auto rounded-circle link-icon">
                                <i class="fa fa-chevron-right text-db" aria-hidden="true"></i>
                            </div>
                        </a>
                        <div class="pb-3">
                            <div class="car-menu">
                                <div class="card-menu-title pt-2 pb-2 pl-3 pr-3">
                                    Start From
                                </div>

                                <a class="card-menu-item pt-2 pb-2 pl-3 pr-3 text-db cursor-pointer d-block">
                                    <span class="card-menu-item-icon"><i class="fa fa-plus"
                                            aria-hidden="true"></i></span>
                                    <span class="ml-2">Menu Item</span>
                                </a>

                                <a class="card-menu-item pt-2 pb-2 pl-3 pr-3 text-db cursor-pointer d-block">
                                    <span class="card-menu-item-icon"><i class="fa fa-plus"
                                            aria-hidden="true"></i></span>
                                    <span class="ml-2">Menu Item</span>
                                </a>

                                <a class="card-menu-item pt-2 pb-2 pl-3 pr-3 text-db cursor-pointer d-block">
                                    <span class="card-menu-item-icon"><i class="fa fa-plus"
                                            aria-hidden="true"></i></span>
                                    <span class="ml-2">Menu Item</span>
                                </a>

                                <a class="card-menu-item pt-2 pb-2 pl-3 pr-3 text-db cursor-pointer d-block">
                                    <span class="card-menu-item-icon"><i class="fa fa-plus"
                                            aria-hidden="true"></i></span>
                                    <span class="ml-2">Menu Item</span>
                                </a>

                                <a class="card-menu-item pt-2 pb-2 pl-3 pr-3 text-db cursor-pointer d-block">
                                    <span class="card-menu-item-icon"><i class="fa fa-plus"
                                            aria-hidden="true"></i></span>
                                    <span class="ml-2">Menu Item</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card w-100 card-item">
                                <a href="" class="card-header bg-white d-flex align-items-center">
                                    <i class="fa fa-2x fa-briefcase text-db" aria-hidden="true"></i>
                                    <h4 class="ml-2 pt-2">Featured</h4>
                                    <div class="ml-auto rounded-circle link-icon">
                                        <i class="fa fa-chevron-right text-db" aria-hidden="true"></i>
                                    </div>
                                </a>
                                <div class="pb-3">
                                    <div class="car-menu">
                                        <p class="pt-2 pb-2 pl-3 pr-3">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card w-100 card-item">
                                <a href="" class="card-header bg-white d-flex align-items-center">
                                    <i class="fa fa-2x fa-briefcase text-db" aria-hidden="true"></i>
                                    <h4 class="ml-2 pt-2">Featured</h4>

                                </a>
                                <div class="pb-3">
                                    <div class="car-menu">
                                        <a
                                            class="card-menu-item pt-2 pb-2 pl-3 d-flex pr-3 text-db cursor-pointer d-block">

                                            <span class="ml-2">Menu Item</span>
                                            <span class="card-menu-item-icon ml-auto">
                                                <i class="fa fa-chevron-right text-db" aria-hidden="true"></i>
                                            </span>
                                        </a>

                                        <a
                                            class="card-menu-item pt-2 pb-2 pl-3 d-flex pr-3 text-db cursor-pointer d-block">

                                            <span class="ml-2">Menu Item</span>
                                            <span class="card-menu-item-icon ml-auto">
                                                <i class="fa fa-chevron-right text-db" aria-hidden="true"></i>
                                            </span>
                                        </a>

                                        <a
                                            class="card-menu-item pt-2 pb-2 pl-3 d-flex pr-3 text-db cursor-pointer d-block">

                                            <span class="ml-2">Menu Item</span>
                                            <span class="card-menu-item-icon ml-auto">
                                                <i class="fa fa-chevron-right text-db" aria-hidden="true"></i>
                                            </span>
                                        </a>

                                        <a
                                            class="card-menu-item pt-2 pb-2 pl-3 d-flex pr-3 text-db cursor-pointer d-block">

                                            <span class="ml-2">Menu Item</span>
                                            <span class="card-menu-item-icon ml-auto">
                                                <i class="fa fa-chevron-right text-db" aria-hidden="true"></i>
                                            </span>
                                        </a>

                                        <a
                                            class="card-menu-item pt-2 pb-2 pl-3 d-flex pr-3 text-db cursor-pointer d-block">

                                            <span class="ml-2">Menu Item</span>
                                            <span class="card-menu-item-icon ml-auto">
                                                <i class="fa fa-chevron-right text-db" aria-hidden="true"></i>
                                            </span>
                                        </a>

                                        <a
                                            class="card-menu-item pt-2 pb-2 pl-3 d-flex pr-3 text-db cursor-pointer d-block">

                                            <span class="ml-2">Menu Item</span>
                                            <span class="card-menu-item-icon ml-auto">
                                                <i class="fa fa-chevron-right text-db" aria-hidden="true"></i>
                                            </span>
                                        </a>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="card w-100 card-item">
                                <a href="" class="card-header bg-white d-flex align-items-center">
                                    <i class="fa fa-2x fa-briefcase text-db" aria-hidden="true"></i>
                                    <h4 class="ml-2 pt-2">Featured</h4>

                                </a>
                                <div class="pb-3">
                                    <div class="car-menu">
                                        <div class="card-menu-title pt-2 pb-2 pl-3 pr-3">
                                            Lorem ipsum dolor sit, amet
                                        </div>

                                        <div class="card-menu-title pt-2 pb-2 pl-3 pr-3">
                                            Lorem ipsum dolor sit, amet
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card w-100 card-item">
                                <a href="" class="card-header bg-white d-flex align-items-center">
                                    <i class="fa fa-2x fa-briefcase text-db" aria-hidden="true"></i>
                                    <h4 class="ml-2 pt-2">Featured</h4>

                                </a>
                                <div class="pb-3">
                                    <div class="car-menu">
                                        <p class="pt-2 pb-2 pl-3 pr-3">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
    
@endsection


@section('script')
 <script type="text/javascript" src="{{asset('public/js/dashboard.js')}}"></script>
@endsection