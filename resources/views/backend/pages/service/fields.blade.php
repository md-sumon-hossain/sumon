<div>
    <label for="title" class="block mb-2  font-medium text-gray-900 dark:text-white">Title</label>
    <input type="text" name="title" id="title" aria-describedby="title-explanation" class="bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-gray-900 focus:border-gray-900 block w-96 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-900 dark:focus:border-gray-900" placeholder="Title of service" value="{{old('title',$service->title)}}" required>
</div>
<div class=" mt-4">
    <label for="description" class="block mb-2  font-medium text-gray-900 dark:text-white">Description</label>
    <input type="description" name="description" id="description" aria-describedby="description-explanation" class="bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-gray-900 focus:border-gray-900 block w-96 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-900 dark:focus:border-gray-900" placeholder="Description of service" value="{{old('description',$service->description)}}" required>
</div>
<div class=" mt-4">
    <label for="icon" class="inline-block mb-2  font-medium text-gray-900 dark:text-white">Icon </label> 
    <span class=" ml-4">{!!$service->icon !!}</span>
    <input type="icon" name="icon" id="icon" aria-describedby="icon-explanation" class="bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-gray-900 focus:border-gray-900 block w-96 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-900 dark:focus:border-gray-900" placeholder="Enter service icon" value="{{old('icon',$service->icon) }}">
</div>