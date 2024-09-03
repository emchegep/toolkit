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
            <x-primary-button>Publish</x-primary-button>
        </div>
    </form>
</div>