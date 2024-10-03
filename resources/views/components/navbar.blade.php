<div class="bg-white px-4 py-6 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-7xl">

      <div>
        <div class="sm:hidden">
          <label for="tabs" class="sr-only">Select a tab</label>
          <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
          <select id="tabs" name="tabs" class="block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">

            <option>Home</option>

            <option></option>


        </select>
        </div>
        <div class="hidden sm:block">
          <nav class="flex space-x-4" aria-label="Tabs">

            <a href="#" class="text-gray-500 hover:bg-gray-100 text-gray-700 px-3 py-2 font-medium text-sm rounded-md"
              x-state:on="Current" x-state:off="Default"
              x-state-description="Current: &quot;bg-gray-100 text-gray-700&quot;, Default: &quot;text-gray-500 hover:text-gray-700&quot;">Home</a>

            <a href="#" class="text-gray-500 hover:bg-gray-100 text-gray-700 px-3 py-2 font-medium text-sm rounded-md"
              x-state-description="undefined: &quot;bg-gray-100 text-gray-700&quot;, undefined: &quot;text-gray-500 hover:text-gray-700&quot;">Posts</a>



          </nav>
        </div>
      </div>

    </div>
  </div>
