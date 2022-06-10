<section id="form">
  <h1>Form</h1>
  <hr>
<h5>Button</h5>
<?php
$code = '
<button type="button">Button</button>
<button type="reset">Reset</button>
<button type="submit">Submit</button>
<input type="button" value="Input Button">
<input type="reset" value="Reset Button">
<input type="submit" value="Submit Button">
<a href="#" class="button">Link Button</a>
<a href="#" class="button bg-primary color-white">Link Button Background Primary Color White</a>
';
echo codeBlock($code);
echo codePreview($code);
?>
<h5>Textbox</h5>
<?php
$code = '
<label>Input:</label>
<input type="text" value="Text...">
<input type="text" placeholder="Text..." value="">
<input type="email" value="Email...">
<input type="password" value="Password...">
<input type="number" value="0">
<input type="search" value="Search...">
<input type="url" value="URL...">
<input type="tel" value="TEL...">
<input type="color" value="">
<input type="date" value="">
<input type="file" value="">
<input type="range" value="">
<input type="time" value="">
<textarea>Textarea</textarea>
<input type="text" value="Text..." disabled="">
<input type="text" value="Text..." readonly="">
';
echo codeBlock($code);
echo codePreview($code);
?>
<h5>Select</h5>
<?php
$code = '
<select>
  <option value="option_1">Option 1</option>
  <option value="option_2">Option 2</option>
  <option value="option_3">Option 3</option>
  <option value="option_4">Option 4</option>
  <option value="option_5">Option 5</option>
</select>
<select multiple="">
  <option value="option_1">Option 1</option>
  <option value="option_2">Option 2</option>
  <option value="option_3">Option 3</option>
  <option value="option_4">Option 4</option>
  <option value="option_5">Option 5</option>
</select>
';
echo codeBlock($code);
echo codePreview($code);
?>
<h5>Radio</h5>
<?php
$code = '
<label class="me-2"><input type="radio" name="radio" value="option_1"> Option 1</label>
<label class="me-2"><input type="radio" name="radio" value="option_2"> Option 2</label>
';
echo codeBlock($code);
echo codePreview($code);
?>

<h5>Checkbox</h5>
<?php
$code = '
<label class="me-2"><input type="checkbox" value="option_1"> Option 1</label>
<label class="me-2"><input type="checkbox" value="option_2"> Option 2</label>
';
echo codeBlock($code);
echo codePreview($code);
?>
</section>
