<section id="table">
  <h1>Table</h1>
  <hr>
<h5>Basic</h5>
<?php
$code = '
<table>
    <thead>
        <tr>
            <th>Table Head 1</th>
            <th>Table Head 2</th>
            <th>Table Head 3</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Table Body 1-1</td>
            <td>Table Body 1-2</td>
            <td>Table Body 1-3</td>
        </tr>
        <tr>
            <td>Table Body 2-1</td>
            <td>Table Body 2-2</td>
            <td>Table Body 2-3</td>
        </tr>
        <tr>
            <td>Table Body 3-1</td>
            <td>Table Body 3-2</td>
            <td>Table Body 3-3</td>
        </tr>   
    </tbody>
</table>
';
echo codeBlock($code);
echo codePreview($code);
?>
<h5>No Border</h5>
<?php
$code = '
<table class="border-0">
    <thead>
        <tr>
            <th>Table Head 1</th>
            <th>Table Head 2</th>
            <th>Table Head 3</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Table Body 1-1</td>
            <td>Table Body 1-2</td>
            <td>Table Body 1-3</td>
        </tr>
        <tr>
            <td>Table Body 2-1</td>
            <td>Table Body 2-2</td>
            <td>Table Body 2-3</td>
        </tr>
        <tr>
            <td>Table Body 3-1</td>
            <td>Table Body 3-2</td>
            <td>Table Body 3-3</td>
        </tr>   
    </tbody>
</table>
';
echo codeBlock($code);
echo codePreview($code);
?>
<h5>Striped</h5>
<?php
$code = '
<table class="table-striped">
    <thead>
        <tr>
            <th>Table Head 1</th>
            <th>Table Head 2</th>
            <th>Table Head 3</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Table Body 1-1</td>
            <td>Table Body 1-2</td>
            <td>Table Body 1-3</td>
        </tr>
        <tr>
            <td>Table Body 2-1</td>
            <td>Table Body 2-2</td>
            <td>Table Body 2-3</td>
        </tr>
        <tr>
            <td>Table Body 3-1</td>
            <td>Table Body 3-2</td>
            <td>Table Body 3-3</td>
        </tr>   
    </tbody>
</table>
';
echo codeBlock($code);
echo codePreview($code);
?>
<h5>Hover</h5>
<?php
$code = '
<table class="table-hover">
    <thead>
        <tr>
            <th>Table Head 1</th>
            <th>Table Head 2</th>
            <th>Table Head 3</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Table Body 1-1</td>
            <td>Table Body 1-2</td>
            <td>Table Body 1-3</td>
        </tr>
        <tr>
            <td>Table Body 2-1</td>
            <td>Table Body 2-2</td>
            <td>Table Body 2-3</td>
        </tr>
        <tr>
            <td>Table Body 3-1</td>
            <td>Table Body 3-2</td>
            <td>Table Body 3-3</td>
        </tr>   
    </tbody>
</table>
';
echo codeBlock($code);
echo codePreview($code);
?>
</section>
