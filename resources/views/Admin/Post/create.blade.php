@extends('layouts.admin_layout')
@section('title')
    @if (@isset($Post))
        Обновить пост #{{ $Post->id }}
    @else
        Добавить новый пост
    @endif
@endsection('title')
@section('script')
    <!-- /.tynyMCE -->
    <script src="https://cdn.tiny.cloud/1/duurpwi1hnt6bieda4si02iuk2n2krcf9ud4wv3yy0iai2em/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#textEditor',
            menu: {
    file: { title: 'Файл', items: 'newdocument restoredraft | preview | export print | deleteallconversations' },
    edit: { title: 'Править', items: 'undo redo | cut copy paste pastetext | selectall | searchreplace' },
    view: { title: 'просмотр', items: 'code | visualaid visualchars visualblocks | spellchecker | preview fullscreen | showcomments' },
    insert: { title: 'ввести', items: 'image link media addcomment pageembed template codesample inserttable | charmap emoticons hr | pagebreak nonbreaking anchor tableofcontents | insertdatetime' },
    format: { title: 'Формат', items: 'bold italic underline strikethrough superscript subscript codeformat | styles blocks fontfamily fontsize align lineheight | forecolor backcolor | language | removeformat' },
    tools: { title: 'инструменты', items: 'spellchecker spellcheckerlanguage | a11ycheck code wordcount' },
    table: { title: 'таблица', items: 'inserttable | cell row column | advtablesort | tableprops deletetable' },
    help: { title: 'помощь', items: 'help' }
  },
  images_upload_url:'{{route("upload_img")}}',
            plugins: 'image code',
  toolbar: 'undo redo | link image | code',
  /* enable title field in the Image dialog*/
  image_title: true,
  /* enable automatic uploads of images represented by blob or data URIs*/
  automatic_uploads: true,
  /*
    URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
    images_upload_url: 'postAcceptor.php',
    here we add custom filepicker only to Image dialog
  */
  file_picker_types: 'image',
  /* and here's our custom image picker*/
  file_picker_callback: function (cb, value, meta) {
    var input = document.createElement('input');
    input.setAttribute('type', 'file');
    input.setAttribute('accept', 'image/*');

    /*
      Note: In modern browsers input[type="file"] is functional without
      even adding it to the DOM, but that might not be the case in some older
      or quirky browsers like IE, so you might want to add it to the DOM
      just in case, and visually hide it. And do not forget do remove it
      once you do not need it anymore.
    */

    input.onchange = function () {
      var file = this.files[0];

      var reader = new FileReader();
      reader.onload = function () {
        /*
          Note: Now we need to register the blob in TinyMCEs image blob
          registry. In the next release this part hopefully won't be
          necessary, as we are looking to handle it internally.
        */
        var id = 'blobid' + (new Date()).getTime();
        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
        var base64 = reader.result.split(',')[1];
        var blobInfo = blobCache.create(id, file, base64);
        blobCache.add(blobInfo);

        /* call the callback and populate the Title field with the file name */
        cb(blobInfo.blobUri(), { title: file.name });
      };
      reader.readAsDataURL(file);
    };

    input.click();
  },
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });
    </script>
@endsection
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card card-primary">

                <!-- form start -->
                <form method="POST"
                    action=" 
                @if (@isset($Post)) {{ route('Post.update', $Post) }}">
                    @method('PUT')
                @else
                {{ route('Post.store') }} "> @endif
                 
                    @csrf
                    <div class="card-body">

                    <div class="form-group">
                        <label for="title">пост</label>
                        <input type="text" class="form-control" id="name" name="name"
                            @if (@isset($Post)) value="{{ $Post->name }}" @endif
                            placeholder="введите название поста">
                    </div>
                    <div class="form-group">
                        <label for="category">категория поста</label>
                        <select class="form-control" id="category" name="category" aria-label="Default select example">
                            @foreach ($Categories as $Category)
                                <option value="{{ $Category->id }}">{{ $Category->title }}</option>
                            @endforeach
                        </select>
                    </div>
            </div>
            <div class="form-droup m-3">
                <!-- /.tynyMCE-s -->
                <textarea id="textEditor" name="text"> @if (isset($Post)) {{ $Post->text }} @endif</textarea>
                <!-- /.tynyMCE-e -->
            </div>

            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">
                    @if (isset($Post))
                        обновить
                    @else
                        добавить
                    @endif
                </button>
            </div>
            </form>
        </div>
    </div>
    </div>
@endsection
