<x-layout>
    <h1 class="text-5xl font-bold leading-tight tracking-tight text-gray-900 md:text-3xl dark:text-white">
        Create an account
    </h1>

    <div class="px-5 py-5 bg-slate-800 rounded-md m-2">
            <form class=" flex-col bg-zinc-500 rounded-sm px-5 py-5 md:mt-2" action="{{route('register.store')}}" method="POST">
                @csrf
                <div class="m-2">
                    <label for="name" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Your
                        Name</label>
                    <input type="text" name="name" id="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Full Name" required="">
                        @error('name')
                        <span class="text-red-600">{{$message}}</span>                   
                        @enderror
                </div>
                <div class="m-2">
                    <label for="email" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Your
                        Email</label>
                    <input type="email" name="email" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="name@company.com" required="">
                        @error('email')
                        <span class="text-red-600">{{$message}}</span>                   
                        @enderror
                </div>                
                <div class="m-2">
                    <label for="password"
                        class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="password" name="password" id="password" placeholder="••••••••"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required="">

                        @error('password')
                        <span class="text-red-600">{{$message}}</span>
                        @enderror
                </div>
                <div class="m-2">
                    <label for="confirm-password"
                        class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Confirm password</label>
                    <input type="password" name="password_confirmation" id="confirm-password" placeholder="••••••••"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required="">
                        @error('password_confirmation')
                        <span class="text-red-600">{{$message}}</span>
                        @enderror
                </div>
                <button type="submit"
                    class=" mt-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Register</button>
            </form>
</div>

</x-layout>
