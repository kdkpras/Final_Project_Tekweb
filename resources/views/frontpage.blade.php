
  @extends('mainlayout');

@section('frontpage')
  <div class="mt-20 mx-10 h-[200px] bg-green-200">
    
<h1 class="p-5 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">First, one of the mostvisited tourist place in Bali is Bali Zoo </h1>


  </div>
  
  <div class="flex flex-wrap justify-center item-center p-10">

    <!--card1-->
    @foreach($tiket as $t)
<div class="w-full max-w-sm m-2 bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <img class="p-8 rounded-t-lg" src="images/{{$t->image}}.png" alt="product image" />
    </a>
    <div class="px-5 pb-5">
        <a href="#">
            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white pb-5">{{$t->nama_tiket}}</h5>
        </a>
        
        <div class="flex items-center ">
            <span class="text-xl font-bold text-gray-900 dark:text-white">stock  : {{$t->stock}}</span>
        </div>
        <div class="flex items-center justify-between">
            <span class="text-xl font-bold text-gray-900 dark:text-white">harga : Rp.{{$t->harga}}</span>
            <a href="detail/{{$t->id}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Order</a>
        </div>
       
    </div>
</div>
@endforeach
@endsection

  </div>

 

  

