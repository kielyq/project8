<x-guest-layout>
    <p class=" text-center text-xl text-blue-600"> Регистрация </p>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Введите имя')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
         <!-- middle Name -->
         <div>
            <x-input-label for="middlename" :value="__('Введите фамилию')" />
            <x-text-input id="middlename" class="block mt-1 w-full" type="text" name="middlename" :value="old('middlename')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('middlename')" class="mt-2" />
        </div>
         <!--sur Name -->
         <div>
            <x-input-label for="surname" :value="__('Введите отчество')" />
            <x-text-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="old('surname')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('surname')" class="mt-2" />
        </div>
         <!-- Address
         <div>
            <x-input-label for="address" :value="__('Введите адрес')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div> 
         -->
        <!-- логин -->
        <div>
            <x-input-label for="login" :value="__('Введите логин')" />
            <x-text-input id="login" class="block mt-1 w-full" type="text" name="login" :value="old('login')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('login')" class="mt-2" />
        </div>
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Введите email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
<!-- phone -->
        <div class="mt-4">
            <x-input-label for="tel" :value="__('Введите номер телефона')" />
            <x-text-input id="tel" class="block mt-1 w-full" type="tel" name="tel" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('tel')" class="mt-2" />
        </div>
        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Введите пароль')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>


        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Авторизоваться') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Создать аккаунт') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
