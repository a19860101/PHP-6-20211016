<?php 
    include('../template/header.php');
    include('../template/nav.php');

    include('../category/Category.php');
    $categories = Category::all();

    if(!isset($_SESSION['AUTH'])){
        header('location:../index.php');
        return;
    }
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10 my-3">
            <h2>新增文章</h2>
            <hr>
        </div>
        <div class="col-10">
            <form action="store.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label" for="">文章標題</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">封面圖片</label>
                    <input type="file" name="cover">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">文章內容</label>
                    <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">文章分類</label>
                    <select name="category" id="" class="form-select">
                        <?php foreach($categories as $category){ ?>
                            <option value="<?php echo $category['title'];?>"><?php echo $category['title'];?></option>
                        <?php } ?>
                    </select>
                </div>
                <input type="submit" value="新增文章" class="btn btn-primary">
                <input type="button" value="取消" class="btn btn-danger" onclick="history.back()">
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
            'alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist '+
            'forecolor backcolor removeformat | insertfile image media template link anchor codesample ',
        toolbar_mode: 'sliding',

    });
</script>

<?php
    include('../template/footer.php');
?>