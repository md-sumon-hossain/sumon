<div class=" m-10 p-10 flex">
    <div>
        <div>
            <label for="name" class="block mb-2  font-medium text-gray-900 dark:text-white">Name</label>
            <input type="text" name="name" id="name" aria-describedby="name-explanation" class="bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-gray-900 focus:border-gray-900 block w-96 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-900 dark:focus:border-gray-900" placeholder="Your name" value="{{old('name',$user->name)}}" required>
    
        </div>
        <div class=" mt-4">
            <label for="email" class="block mb-2  font-medium text-gray-900 dark:text-white">Email</label>
            <input type="email" name="email" id="email" aria-describedby="email-explanation" class="bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-gray-900 focus:border-gray-900 block w-96 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-900 dark:focus:border-gray-900" placeholder="Your email" value="{{old('email',$user->email)}}" required>
    
        </div>
        <div class=" mt-4">
            <label for="contact" class="block mb-2  font-medium text-gray-900 dark:text-white">Contact Number</label>
            <input type="text" name="contact" id="contact" aria-describedby="contact-explanation" class="bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-gray-900 focus:border-gray-900 block w-96 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-900 dark:focus:border-gray-900" placeholder="01XXXXXXXXX" value="{{old('contact',$user->contact)}}">
        </div>
        <div class=" mt-4">
            <label for="address" class="block mb-2  font-medium text-gray-900 dark:text-white">Address</label>
            <input type="email" name="address" id="address" aria-describedby="address-explanation" class="bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-gray-900 focus:border-gray-900 block w-96 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-900 dark:focus:border-gray-900" placeholder="Your address" value="{{old('address',$user->address)}}">
        </div>
    </div>
    <div class=" ml-5">
        <div>
            <label for="designation" class="block mb-2  font-medium text-gray-900 dark:text-white">Designation</label>
            <input type="text" name="designation" id="designation" aria-describedby="designation-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-gray-900 focus:border-gray-900 block w-96 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-900 dark:focus:border-gray-900" placeholder="Designation" value="{{old('designation',$user->designation)}}">
    
        </div>
        <div class=" mt-4">
            <label for="company" class="block mb-2  font-medium text-gray-900 dark:text-white">Company</label>
            <input type="text" name="company" id="company" aria-describedby="company-explanation" class="bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-gray-900 focus:border-gray-900 block w-96 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-900 dark:focus:border-gray-900" value="{{ $user->company }}" placeholder="Company you are servicing ow">
    
        </div>
        <div class=" mt-4">
            <label for="bio" class="block mb-2  font-medium text-gray-900 dark:text-white">Bio</label>
            <input type="text" name="bio" id="bio" aria-describedby="bio-explanation" class="bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-gray-900 focus:border-gray-900 block w-96 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-900 dark:focus:border-gray-900" placeholder="Bio" value="{{old('bio',$user->bio)}}">
        </div>
        <div class=" mt-4">
            <label for="image" class="block mb-2  font-medium text-gray-900 dark:text-white">Image</label>
            <input type="file" id="image" aria-describedby="image-explanation" value="{{old('image',$user->image)}}">
    
        </div>
    </div>
</div>

