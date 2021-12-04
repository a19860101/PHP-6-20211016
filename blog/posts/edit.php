<?php
    include('Post.php');
    $post = Post::edit($_REQUEST);
?>
<?php 
    include('../template/header.php');
    include('../template/nav.php');
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10 my-3">
            <h2>編輯文章</h2>
            <hr>
        </div>
        <div class="col-10">
            <form action="update.php" method="post">
                <div class="mb-3">
                    <label class="form-label" for="">文章標題</label>
                    <input type="text" name="title" class="form-control" value="<?php echo $post['title'];?>">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">文章內容</label>
                    <textarea name="content" id="content" cols="30" rows="10" class="form-control"><?php echo $post['content'];?></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">文章分類</label>
                    <select name="category" id="" class="form-select">
                        <option value="科技" <?php echo $post['category'] == '科技' ? 'selected':'';?>>科技</option>
                        <option value="生活" <?php echo $post['category'] == '生活' ? 'selected':'';?>>生活</option>
                    </select>
                </div>
                <input type="hidden" value="<?php echo $post['id'];?>" name="id">
                <input type="submit" value="儲存文章" class="btn btn-success">
                <input type="button" value="取消" onclick="history.back()" class="btn btn-danger">
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#content',
        language: 'zh_TW',
        height: '500px',
        // plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
        // toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
        plugins:'image code lists',
        toolbar: 
            'undo redo |  bold italic underline strikethrough | fontsizeselect formatselect '+
            'alignleft aligncenter alignright alignjustify  |  numlist bullist '+
            'forecolor backcolor removeformat |  image',
        toolbar_mode: 'sliding',
        // 檔案上傳
        image_title: true,
        automatic_uploads: true,
        images_upload_url: 'postAcceptor.php',
        file_picker_types: 'image',
        file_picker_callback: function (cb, value, meta) {
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');

            input.onchange = function () {
                var file = this.files[0];

                var reader = new FileReader();
                reader.onload = function () {
                    var id = 'blobid' + (new Date()).getTime();
                    var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                    var base64 = reader.result.split(',')[1];
                    var blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);
                    cb(blobInfo.blobUri(), { title: file.name });
                };
                reader.readAsDataURL(file);
            };

            input.click();
        }
    });
</script>
<?php
    include('../template/footer.php');
?>