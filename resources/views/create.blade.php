<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
<div class="p-10 container">
        <h1 class="font-bold text-2xl my-10">Add Data Tiket</h1>
        <form action="tikets" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-6">
                <label for="desc" class="block mb-2 text-sm font-medium text-gray-900">Nama Tiket</label>
                <input type="text" name="nama_tiket" id="nama_tiket" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-96 block p-2.5">
            </div>
            <div class="mb-6">
                <label for="contact" class="block mb-2 text-sm font-medium text-gray-900">Stock</label>
                <input type="text" name="stock" id="stock" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-96 block p-2.5">
            </div>
            <div class="mb-6">
                <label for="contact" class="block mb-2 text-sm font-medium text-gray-900">Harga</label>
                <input type="text" name="harga" id="harga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-96 block p-2.5">
            </div>
            <div class="mb-6">
                <label for="contact" class="block mb-2 text-sm font-medium text-gray-900">Keterangan</label>
                <input type="text" name="keterangan" id="keterangan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-96 block p-2.5">
            </div>
            <div class="mb-6">
                <label for="contact" class="block mb-2 text-sm font-medium text-gray-900">Image</label>
                <input type="text" name="image" id="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-96 block p-2.5">
            </div>
            <button type="submit" class="text-white bg-teal-500 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none">Add</button>
        </form>
    </div>
</div>
</body>
</html>