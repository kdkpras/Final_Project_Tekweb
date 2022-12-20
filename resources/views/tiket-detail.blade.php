@extends('mainlayout');

@section('detail')
<div class="p-10 md:flex font-sans pt-8">
<div class="md:shrink-0">
    <img src="{{url('images')}}/{{$tiket->image}}.png" alt="product image"/>
</div>
<div class="p-6">
    <div class="flex flex-wrap">
    <h2 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white pb-5">{{$tiket->nama_tiket}}</h2>
        <div class="w-full flex-none mt-2 order-1 text-3xl fontbold text-violet-600">
             harga : Rp.{{$tiket->harga}}
        </div>
        
    </div>
    <div class="flex items-baseline mt-4 mb-6 pb-6 border-b borderslate-200">
    {{$tiket->keterangan}}
    </div>
    <table>
        <form action="" method="post">
            <tr>
                <td>Jumlah pesan</td>
                <td>: </td>
                <td><input type="text" name="jumlah_pesan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></td>
            </tr>
            
        </form>
    </table>
    <br>
    <div class="flex space-x-4 mb-5 text-sm font-medium">
        <div class="flex-auto flex space-x-4">
        <a href="/"  
        class="focus:outline-none text-white bg-purple-700 
        hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 
        font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
        Back</a>
            
        <button type="button" 
        class="focus:outline-none text-white bg-purple-700 
        hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 
        font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
        Checkout</button>
       
</div>
</div>
@endsection