<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{('adminregister/'.Auth::user()->id)}}" enctype="multipart/form-data">
            @csrf

           

            

            <!-- Profile Picture -->
            <div class="mt-4">
                <x-label for="profile_picture" :value="__('Upload Profile Picture')" />

                <input id="password" class="block mt-1 w-full"
                                type="file"
                                name="profilePicture"
                                required />
            </div>

            <!-- Write Something about yourself -->
            <div class="mt-4">
              <textarea name="comments"  style="width:100%; height:100px; border-style: outset;border:4px solid #ccc; background-color: transparent;" required>Write something about your profession in less than 500 words</textarea>
            </div>




            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered as an admin?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Update') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
