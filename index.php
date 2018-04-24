<form method="post" action="src/handler.php" enctype="multipart/form-data">
    <label for="file">File</label>
    <input type="file" id="file" name="file" required />
    <br />

    <label for="rate">Hrz</label>
    <input type="number" min="0" step="1" required name="rate" id="rate">
    <br />

    <button type="submit">Submit</button>
</form>