<div>
    <label for="designation" class="block mb-2  font-medium text-gray-900 dark:text-white">Designation</label>
    <input type="text" name="designation" id="designation" aria-describedby="designation-explanation" class="bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-gray-900 focus:border-gray-900 block w-96 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-900 dark:focus:border-gray-900" placeholder="Designation" value="{{old('designation',$experience->designation)}}" required>
</div>
<div class=" mt-4">
    <label for="company" class="block mb-2  font-medium text-gray-900 dark:text-white">Company</label>
    <input type="text" name="company" id="company" aria-describedby="company-explanation" class="bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-gray-900 focus:border-gray-900 block w-96 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-900 dark:focus:border-gray-900" placeholder="Company you have worked" value="{{old('company',$experience->company)}}" required>
</div>
<div class=" mt-4">
    <label for="from" class="block mb-2  font-medium text-gray-900 dark:text-white">From</label>
    <input type="date" name="from" id="from" aria-describedby="from-explanation" class="bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-gray-900 focus:border-gray-900 block w-96 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-900 dark:focus:border-gray-900" placeholder="Your starting date" value="{{old('from',$experience->from)}}" required>
</div>
<div class=" mt-4">
    <label for="to" class="block mb-2  font-medium text-gray-900 dark:text-white">To</label>
    <input type="date" name="to" id="to" aria-describedby="to-explanation" class="bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-gray-900 focus:border-gray-900 block w-96 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-900 dark:focus:border-gray-900" placeholder="Your ending date" value="{{old('to',$experience->to)}}">
</div>
<div class=" mt-4">
    <label for="present" class=" mb-2  font-medium text-gray-900 dark:text-white">Present</label>
    <input type="checkbox" class="rounded-lg ml-3" id="present" name="present" value="present"  
    {{ $experience->to ? 'checked' : '' }}>
</div>