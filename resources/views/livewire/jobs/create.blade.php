<div class="max-w-xl mx-auto mt-10">
    <h1 class="mb-10 text-xl font-bold truncate text-gray-800">Feel in the Details we help you get intouch with your preferred employee</h1>
    <form wire:submit.prevent="save" class="flex flex-col space-y-4" enctype="multipart/form-data">
        <div class="flex flex-col">
           <x-input-label :value="__('Job Title')" for="title" />
            <x-text-input class="w-full text-gray-700" type="text" name="title" wire:model.blur="form.title"/>
            <small class="text-gray-700">Example:"Senior Laravel Developer", "Software Engineer"</small>
            @error('form.title')<small class="text-red-500 font-semibold">{{ $message }}</small>@enderror
        </div>
        <div class="flex flex-col">
            <x-input-label :value="__('Job Location')" for="location" />
            <x-text-input class="w-full text-gray-700" type="text" name="location" wire:model.blur="form.location"/>
            <small class="text-gray-700">Example: "Remote", "Remote / USA", "New York City", "Remote GMT-5", etc.</small>
            @error('form.location')<small class="text-red-500 font-semibold">{{ $message }}</small>@enderror
        </div>
        <div class="flex flex-col">
            <x-input-label :value="__('Employment Type')" for="type"/>
            <x-select name="type" class="w-full text-gray-700"  wire:model.blur="form.type">
                <option value="">Select type........</option>
                <option value="Full Time" selected>Full Time</option>
                <option value="Part Time">Part Time</option>
                <option value="Contract">Contract</option>
                <option value="Intern">Intern</option>
            </x-select>
            @error('form.type')<small class="text-red-500 font-semibold">{{ $message }}</small>@enderror
        </div>
        <div class="flex flex-col">
            <x-input-label :value="__('URL to Job Application')" for="url" />
            <x-text-input class="w-full text-gray-700" type="text" name="url" wire:model.blur="form.url"/>
            <small class="text-gray-700">https://yourcompany.com/careers</small>
            @error('form.url')<small class="text-red-500 font-semibold">{{ $message }}</small>@enderror
        </div>
        <div>
            <x-input-label :value="__('Salary (optional)')" for="employer" />
            <x-text-input class="w-full text-gray-700" type="text" name="employer" wire:model="form.salary"/>
            <small class="text-gray-700">Examples: $120,000 – $145,000 USD, €80,000 — €102,000</small>
        </div>
        <div class="flex flex-col">
            <x-input-label :value="__('Company Name')" for="employer" />
            <x-text-input class="w-full text-gray-700" type="text" name="employer" wire:model.blur="form.employer"/>
            @error('form.employer')<small class="text-red-500 font-semibold">{{ $message }}</small>@enderror
        </div>
        <div class="flex flex-col">
            <x-input-label :value="__('Company Logo')" for="employer" />
            <div class="flex space-x-3 items-center bg-white">
                @if ($form->logo)
                    <img src="{{ $form->logo->temporaryUrl() }}" class="w-16 h-16 rounded-md">
                @endif
                <x-text-input class="w-full text-gray-700 px-3 py-2 rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500" type="file" name="employer" wire:model.blur="form.logo"/>
            </div>
            @error('form.logo')<small class="text-red-500 font-semibold">{{ $message }}</small>@enderror
        </div>
        <div>
            <x-input-label :value="__('Tags')" for="tags" />
            <x-select name="tags" class="w-full text-gray-700" multiple="" wire:model="form.tag">
                @foreach($tags as $tag)
                    <option value="{{ $tag->name }}">{{ $tag->name }}</option>
                @endforeach
            </x-select>
        </div>
        <div>
            <x-primary-button class="flex items-center">
                <span wire:loading>
                    <div role="status" class="mr-2">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                        </svg>
                        <span class="sr-only">Loading...</span>
                    </div>
                </span>
                Publish
            </x-primary-button>
        </div>
    </form>
</div>
