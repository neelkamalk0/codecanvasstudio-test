{{-- <form method="GET" action="{{route('jobs.search')}}" class="block mx-5 space-y-2 md:mx-auto md:space-x-2">
    <input type="text" name="keywords" placeholder="Keywords" class="w-full md:w-72 px-4 py-3 focus:outline-none"
        value="{{request('keywords')}}" />
    <input type="text" name="location" placeholder="Location" class="w-full md:w-72 px-4 py-3 focus:outline-none"
        value="{{request('location')}}" />
    <button class="w-full md:w-auto bg-blue-700 hover:bg-blue-600 text-white px-4 py-3 focus:outline-none">
        <i class="fa fa-search mr-1"></i> Search
    </button>
</form> --}}

<form method="GET" action="{{route('jobs.search')}}" class="block max-w-4xl mx-5 md:mx-auto space-y-3 md:space-y-0 md:flex md:space-x-3">
    <div class="flex-1">
        <input 
            type="text" 
            name="keywords" 
            placeholder="Job title, keywords, or company" 
            class="w-full px-4 py-3 text-gray-100 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
            value="{{request('keywords')}}" 
        />
    </div>
    
    <div class="flex-1">
        <input 
            type="text" 
            name="location" 
            placeholder="City, state, or remote" 
            class="w-full px-4 py-3 text-gray-100 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
            value="{{request('location')}}" 
        />
    </div>
    
    <button class="w-full md:w-auto bg-blue-700 hover:bg-blue-600 text-white px-6 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition transform hover:-translate-y-0.5">
        <i class="fa fa-search mr-2"></i> Search Jobs
    </button>
</form>