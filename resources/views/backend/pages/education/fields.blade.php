<div>
    <label for="degree" class="block mb-2  font-medium text-gray-900 dark:text-white">Degree</label>
    <input type="text" name="degree" id="degree" aria-describedby="degree-explanation" class="bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-gray-900 focus:border-gray-900 block w-96 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-900 dark:focus:border-gray-900" placeholder="Degree name" value="{{old('degree',$education->degree)}}" required>
</div>
<div class=" mt-4">
    <label for="institution" class="block mb-2  font-medium text-gray-900 dark:text-white">Institution</label>
    <input type="text" name="institution" id="institution" aria-describedby="institution-explanation" class="bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-gray-900 focus:border-gray-900 block w-96 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-900 dark:focus:border-gray-900" placeholder="institution name" value="{{old('institution',$education->institution)}}" required>
</div>
<div class=" mt-4">
    <label for="from" class="block mb-2  font-medium text-gray-900 dark:text-white">From</label>
    <input type="date" name="from" id="from" aria-describedby="from-explanation" class="bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-gray-900 focus:border-gray-900 block w-96 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-900 dark:focus:border-gray-900" placeholder="Your starting date" value="{{old('from',$education->from)}}" required>
</div>
<div class=" mt-4">
    <label for="to" class="block mb-2  font-medium text-gray-900 dark:text-white">To</label>
    <input type="date" name="to" id="to" aria-describedby="to-explanation" class="bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-gray-900 focus:border-gray-900 block w-96 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-900 dark:focus:border-gray-900" placeholder="Your ending date" value="{{old('to',$education->to)}}">
</div>