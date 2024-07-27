<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>{{ $title }}</title>
</head>
<body>
    
<form action="/register" method="POST" class="my-10 mx-10">
    @csrf
    <div class="mb-5">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white ">name</label>
        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" @error('name') is-invalid @enderror required value="{{ old('name') }}">@error('name')<div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <div class="mb-5">
        <label for="username"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">username</label>
        <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="minimal 5 karakter"  @error('username') is-invalid @enderror required value="{{ old('username') }}"/>@error('username')<div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <div>
    <div class="mb-5">
        <label for="email"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white ">Email</label>
        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required @error('email') is-invalid @enderror value="{{ old('email') }}"/>@error('email')<div class="invalid-feedback">{{ $message }}</div> @enderror
    </div> 
    <div class="mb-5">
        <label for="password"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white ">Password</label>
        <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="minimal 8 karakter" required @error('password') is-invalid @enderror value="{{ old('password') }}"/>@error('password')<div class="invalid-feedback">{{ $message }}</div> @enderror
    </div> 
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>

</body>
</html>