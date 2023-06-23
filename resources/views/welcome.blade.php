@extends('layouts.master')
@section('header')
    @include('snippets.carousel')
@endsection
@section('contents')
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
        <div class="rounded-md shadow-sm bg-white">
            <a href="#">
                <img class="" src="https://images.unsplash.com/photo-1530490125459-847a6d437825?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1185&q=80" alt="testing">
                <div class="p-4">
                    <div class="">
                        <div class="font-bold">Thupui</div>
                        <div class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro nam maxime quaerat quae qui debitis rem cum eligendi sint perferendis praesentium, molestias quis, velit esse excepturi ad, aperiam natus labore!</div>
                    </div>
                    <div class="text-sm p-2 rounded bg-green-100">
                        <div class="flex flex-row justify-between">
                            <div class="">Mamawh Zat:</div>
                            <div class="">₹{{number_format(200000, 2)}}</div>
                        </div>
                        <div class="flex flex-row justify-between">
                            <div class="">Hmuh Tawh Zat:</div>
                            <div class="">₹{{number_format(20000, 2)}}</div>
                        </div>
                        <div class="flex flex-row justify-between">
                            <div class="">Petu:</div>
                            <div class="">10</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="rounded-md shadow-sm bg-white">
            <a href="#">
                <img class="" src="https://images.unsplash.com/photo-1530490125459-847a6d437825?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1185&q=80" alt="testing">
                <div class="p-4">
                    <div class="">
                        <div class="font-bold">Thupui</div>
                        <div class="">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore voluptas voluptate explicabo, quasi facilis iure rem magni molestias maiores laudantium veritatis. Cum dignissimos repellat explicabo, sequi illum soluta eligendi aspernatur?</div>
                    </div>
                    <div class="text-sm p-2 rounded bg-green-100">
                        <div class="flex flex-row justify-between">
                            <div class="">Mamawh Zat:</div>
                            <div class="">₹{{number_format(200000, 2)}}</div>
                        </div>
                        <div class="flex flex-row justify-between">
                            <div class="">Hmuh Tawh Zat:</div>
                            <div class="">₹{{number_format(20000, 2)}}</div>
                        </div>
                        <div class="flex flex-row justify-between">
                            <div class="">Petu:</div>
                            <div class="">10</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="rounded-md shadow-sm bg-white">
            <a href="#">
                <img class="" src="https://images.unsplash.com/photo-1530490125459-847a6d437825?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1185&q=80" alt="testing">
                <div class="p-4">
                    <div class="">
                        <div class="font-bold">Thupui</div>
                        <div class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, veritatis! Ad officia mollitia perferendis saepe quibusdam commodi vel temporibus adipisci porro, dicta sapiente debitis incidunt. Sed fuga quos voluptates et!</div>
                    </div>
                    <div class="text-sm p-2 rounded bg-green-100">
                        <div class="flex flex-row justify-between">
                            <div class="">Mamawh Zat:</div>
                            <div class="">₹{{number_format(200000, 2)}}</div>
                        </div>
                        <div class="flex flex-row justify-between">
                            <div class="">Hmuh Tawh Zat:</div>
                            <div class="">₹{{number_format(20000, 2)}}</div>
                        </div>
                        <div class="flex flex-row justify-between">
                            <div class="">Petu:</div>
                            <div class="">10</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="rounded-md shadow-sm bg-white">
            <a href="#">
                <img class="" src="https://images.unsplash.com/photo-1530490125459-847a6d437825?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1185&q=80" alt="testing">
                <div class="p-4">
                    <div class="">
                        <div class="font-bold">Thupui</div>
                        <div class="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus quibusdam mollitia sunt, ipsam autem veritatis, debitis rem nihil consectetur quasi, aspernatur harum? Deserunt quis, totam laboriosam a sit quibusdam iusto.</div>
                    </div>
                    <div class="text-sm p-2 rounded bg-green-100">
                        <div class="flex flex-row justify-between">
                            <div class="">Mamawh Zat:</div>
                            <div class="">₹{{number_format(200000, 2)}}</div>
                        </div>
                        <div class="flex flex-row justify-between">
                            <div class="">Hmuh Tawh Zat:</div>
                            <div class="">₹{{number_format(20000, 2)}}</div>
                        </div>
                        <div class="flex flex-row justify-between">
                            <div class="">Petu:</div>
                            <div class="">10</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
