<div class="flex flex-col space-y-8">
    <div class="flex justify-between space-x-8 items-center">
        <div class="flex flex-col rounded-md bg-[#34c4d4] px-5 py-3 w-full h-32 shadow-md space-y-2">
            <h2 class="font-bold text-lg text-white/90">Jobs</h2>
            <p class="font-bold text-5xl text-white">10</p>
        </div>
        <div class="flex flex-col rounded-md bg-[#1484f4] px-3 py-2 w-full h-32 shadow-md space-y-2">
            <h2 class="font-bold text-lg text-white/90">Tags</h2>
            <p class="font-bold text-5xl text-white">10</p>
        </div>
        <div class="flex flex-col rounded-md bg-[#74b4fc] px-3 py-2 w-full h-32 shadow-md space-y-2">
            <h2 class="font-bold text-lg text-white/90">Employers</h2>
            <p class="font-bold text-5xl text-white">10</p>
        </div>
        <div class="flex flex-col rounded-md bg-[#044c9c] px-3 py-2 w-full h-32 shadow-md space-y-2">
            <h2 class="font-bold text-lg text-white/90">Messages</h2>
            <p class="font-bold text-5xl text-white">10</p>
        </div>
    </div>

    <div class="grid grid-cols-2 gap-x-8">
        <div class="w-full border border-gray-200 py-2 divide-y">
           <div class="font-semibold text-lg py-2 px-3">
               <h3>Activities Logs</h3>
           </div>
            @foreach($activities as $activity)
               <div class="flex items-center px-3 py-2">
                   <div class="w-10 h-10 rounded-full bg-purple-500 mr-2">
                   </div>
                   <div class="flex flex-col">
                       <p><span class="font-bold text-blue-600">{{ $activity->user->name }}</span> {{ $activity->description }}</p>
                       <p>{{ $activity->created_at->diffForHumans() }} <span class="text-blue-500 font-semibold">({{ $activity->ip }})</span></p>
                   </div>

               </div>
            @endforeach
            <div class="px-3 py-2 mt-auto">
                {{ $activities->links() }}
            </div>
        </div>
        <div class="w-full border border-gray-200 py-2 divide-y">
            <div class="font-semibold text-lg py-2 px-3">
                <h3>Recent Jobs</h3>
            </div>
            @foreach($jobs as $job)
                <div class="flex items-center px-3 py-2">
                    <img src="http://picsum.photos/seed/{{$job->id}}/100/100" alt="" class="w-10 h-10 rounded-full">
                    <div class="flex flex-col ml-5 flex-1">
                        <div class="flex justify-between">
                            <p>{{ $job->employer->name }}</p>
                            <p>{{ $job->created_at->diffForHumans(now(), \Carbon\CarbonInterface::DIFF_ABSOLUTE, true) }}</span></p>
                        </div>
                        <p><span class="font-bold text-blue-600">{{ $job->title }}</span></p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
</div>