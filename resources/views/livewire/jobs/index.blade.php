<div class="flex flex-col max-w-4xl mx-auto mt-10 space-y-8">
      <div class="flex flex-col space-y-8">
            <h1 class="text-5xl font-bold text-center text-gray-800">The official ToolKit job board</h1>

            <p class="text-center text-gray-600 text-lg">
                  “ToolKit is our first stop whenever we're hiring a Laravel role.
                  We've hired 10 Laravel developers in the last few years, all thanks to TookKit.” — Matthew Hall, ArborXR
            </p>
      </div>

    @foreach($jobs as $job)
        <x-panel href="{{ $job->url }}" target="_blank">
            <div>
                <img src="http://picsum.photos/seed/{{$job->id}}/100/100" alt="" class="rounded-md w-20 h-20">
            </div>
            <div class="flex flex-col flex-1 ml-5">
                <p class="text-sm text-gray-500 truncate">{{ $job->employer->name }}</p>
                <p class="text-gray-800 text-lg font-bold my-1 group-hover:text-blue-800">{{ $job->title }}</p>
                <p class="text-sm text-gray-500 truncate">{{ $job->type }} - {{ $job->salary }}</p>
            </div>

            <div class="flex flex-col justify-end">
                <div class="flex justify-end mb-4 space-x-4 text-sm text-gray-500 px-2">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4.083 9h1.946c.089-1.546.383-2.97.837-4.118A6.004 6.004 0 004.083 9zM10 2a8 8 0 100 16 8 8 0 000-16zm0 2c-.076 0-.232.032-.465.262-.238.234-.497.623-.737 1.182-.389.907-.673 2.142-.766 3.556h3.936c-.093-1.414-.377-2.649-.766-3.556-.24-.56-.5-.948-.737-1.182C10.232 4.032 10.076 4 10 4zm3.971 5c-.089-1.546-.383-2.97-.837-4.118A6.004 6.004 0 0115.917 9h-1.946zm-2.003 2H8.032c.093 1.414.377 2.649.766 3.556.24.56.5.948.737 1.182.233.23.389.262.465.262.076 0 .232-.032.465-.262.238-.234.498-.623.737-1.182.389-.907.673-2.142.766-3.556zm1.166 4.118c.454-1.147.748-2.572.837-4.118h1.946a6.004 6.004 0 01-2.783 4.118zm-6.268 0C6.412 13.97 6.118 12.546 6.03 11H4.083a6.004 6.004 0 002.783 4.118z" clip-rule="evenodd"></path>
                        </svg>
                        <p>{{ $job->location }}</p>
                    </div>

                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <p>{{ $job->created_at->diffForHumans(now(), \Carbon\CarbonInterface::DIFF_ABSOLUTE, true) }}</p>
                    </div>

                </div>
                <div class="flex justify-end space-x-2 mt-auto">
                    @foreach($job->tags as $tag)
                        <x-tag :$tag :key="$tag->id"/>
                    @endforeach
                </div>
            </div>
        </x-panel>
    @endforeach
</div>