<x-guest-layout>
    <x-auth-card>
    <x-slot name="logo">
       
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{('financesregistration')}}" enctype="multipart/form-data">
            @csrf

           

            <!--Finaces Upload-->
            <center>
            <h3 style="font-weight:bold;">FINANCES UPLOAD</h3>
</center>
            <!-- name -->
            <div class="mt-4">
                <x-label for="name" :value="__('name')" />

                <input id="password" class="block mt-1 w-full"
                                type="text"
                                name="name"
                                required />
            </div>

             <!-- amount -->
             <div class="mt-4">
                <x-label for="amount" :value="__('amount')" />

                <input id="password" class="block mt-1 w-full"
                                type="number"
                                name="amount"
                                required />
            </div>

             <!-- email -->
             <div class="mt-4">
                <x-label for="email" :value="__('email')" />

                <input id="password" class="block mt-1 w-full"
                                type="email"
                                name="email"
                                required />
            </div>


             <!-- Due -->
             <div class="mt-4">
                <x-label for="date" :value="__('due date')" />

                <input id="password" class="block mt-1 w-full"
                                type="date"
                                name="due"
                                required />
            </div>

           




            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Not a superAdmin?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Update') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
