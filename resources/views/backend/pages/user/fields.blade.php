<div class="form-group w-50">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{ $user->name }}" class="form-control rounded-left" required>
</div>
<div class="form-group w-50">
    <label for="image">Image</label>
    <input type="file" name="image" id="image" value="{{ $user->image}}" class="form-control rounded-left">
</div>
<div class="form-group w-50">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="{{ $user->email }}" class="form-control rounded-left" required>
</div>
<div class="form-group w-50">
    <label for="contact">Contact</label>
    <input type="text" name="contact" id="contact" value="{{ $user->contact }}" class="form-control rounded-left" required>
</div>
<div class="form-group w-50">
    <label for="address">Address</label>
    <input type="text" name="address" id="address" value="{{ $user->address }}" class="form-control rounded-left" required>
</div>
<div class="form-group w-50">
    <label for="batch">Batch</label>
    <input type="text" name="batch" id="batch" value="{{ $user->batch }}" class="form-control rounded-left" required>
</div>

<div class="form-group w-50">
    <label for="p_id">University ID</label>
    <input type="number" name="p_id" id="batch" value="{{ $user->p_id }}" class="form-control rounded-left" required>
</div>
<div class="form-group w-50">
    <label for="designation">Designation</label>
    <input type="text" name="designation" id="designation" value="{{ $user->designation }}" class="form-control rounded-left" required>
</div>
<div class="form-group w-50">
    <label for="company">Company</label>
    <input type="text" name="company" id="company" value="{{ $user->company }}" class="form-control rounded-left" required>
</div>
