<div>
    <label for="title" class="block mb-2  font-medium text-gray-900 dark:text-white">Title</label>
    <input type="text" name="title" id="title" aria-describedby="title-explanation" class="bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-gray-900 focus:border-gray-900 block w-96 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-900 dark:focus:border-gray-900" placeholder="Title of skill" value="{{old('title',$skill->title)}}" required>

</div>
<div class=" mt-4">
    <label for="details" class="block mb-2  font-medium text-gray-900 dark:text-white">Details</label>
    <input type="details" name="details" id="details" aria-describedby="details-explanation" class="bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-gray-900 focus:border-gray-900 block w-96 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-900 dark:focus:border-gray-900" placeholder="Details of your skill" value="{{old('details',$skill->details)}}" required>

</div>