<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('contacts.update', $contact) }}">
            @csrf
<<<<<<< HEAD
            <input type="text"
                name="name"
                value="{{old("name")}}"
                placeholder="{{ __('Edit your name') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <x-input-error :messages="$errors->get('name')" class="mt-2" />

            <input type="text"
                name="ContactType"
                value="{{old("ContactType")}}"
                placeholder="{{ __('Edit your contact type') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <x-input-error :messages="$errors->get('ContactType')" class="mt-2" />

            <input type="text"
                name="ContactValue"
                value="{{old("ContactValue")}}"
                placeholder="{{ __('Add your contact value') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <x-input-error :messages="$errors->get('ContactValue')" class="mt-2" />

            <textarea name="description"
                placeholder="{{ __('Add a description for your Contact.') }}"
                class="mt-2 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('description') }}</textarea>
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
=======
            @method('patch')
            <label class="text-gray-400 text-sm">Name
            <input type="text"
                    name="name"
                    value="{{old("name")}}"
                    placeholder="{{ __('Edit your name') }}"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </label>

            <label class="text-gray-400 text-sm">Phone number
                <input type="text"
                        name="phonenumber"
                        value="{{old("phonenumber")}}"
                        placeholder="{{ __('Edit your contact´s phone number') }}"
                        class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <x-input-error :messages="$errors->get('phonenumber')" class="mt-2" />
                </label>

            <label class="text-gray-400 text-sm">ContactType
                <input type="text"
                    name="ContactType"
                    value="{{old("ContactType")}}"
                    placeholder="{{ __('Edit your contact type (Discord, Facebook etc)') }}"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <x-input-error :messages="$errors->get('ContactType')" class="mt-2" />
            </label>

            <label class="text-gray-400 text-sm">ContactValue
                <input type="text"
                    name="ContactValue"
                    value="{{old("ContactValue")}}"
                    placeholder="{{ __('Add your contact value') }}"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <x-input-error :messages="$errors->get('ContactValue')" class="mt-2" />
            </label>

                <label class="text-gray-400 text-sm">Description
                <textarea name="description"
                    placeholder="{{ __('Add a description for your Contact.') }}"
                    class="mt-2 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('description') }}</textarea>
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </label>
>>>>>>> d86b4bfa57663e9aa4f2a4093295a22011d29c6a
            <div class="mt-4 space-x-2">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
                <a href="{{ route('contacts.index') }}">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div>
</x-app-layout>
