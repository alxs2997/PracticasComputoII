Name:
<input type="text" name="name" id="name" value="{{ isset($pet->name)?$pet->name:'' }}" />
Age:
<input type="number" name="age" id="age" value="{{ isset($pet->age)?$pet->age:'' }}" />
<button type="submit">Save</button>
