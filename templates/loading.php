<div class="infa">
<?php if (!empty($errors)): ?>
        <div>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><span class="error"><?php echo $error; ?></span></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <?php if (!empty($_FILES) && empty($errors)): ?>
        <div class="alert alert-success">Файлы успешно загружены</div>
    <?php endif; ?>
<small class="form-text text-muted">
                Максимальный размер файла: <?php echo UPLOAD_MAX_SIZE / 1000000; ?>Мб.<br>
                Допустимые форматы: <?php echo implode(', ', ALLOWED_TYPES) ?>.
            </small>
</div>
 
<div class = "form-container">
<form enctype="multipart/form-data" method="post" action="<?php echo URL; ?>">
<div class="file-input-container">
  <input type="file" id="fileInput" class="file-input" name="files[]" multiple required/>
  <label for="fileInput" class="file-label">
    <span class="file-text">Файл</span>
    <span class="file-name"></span>
  </label>
         <div class = "submit" >
             <input type="submit" value="Загрузить"></p>
               </div>
                <a href="<?php echo URL; ?>" class="submit">Сброс</a>
      </div>
</form>
</div >