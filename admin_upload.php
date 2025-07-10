<form action="upload_zip.php" method="POST" enctype="multipart/form-data">
    <label>Slug Komik:</label>
    <input type="text" name="slug" required><br>

    <label>Chapter (misal: Chapter 01):</label>
    <input type="text" name="chapter" required><br>

    <label>File ZIP:</label>
    <input type="file" name="zip_file" accept=".zip" required><br>

    <button type="submit">Upload & Rename Gambar</button>
</form>