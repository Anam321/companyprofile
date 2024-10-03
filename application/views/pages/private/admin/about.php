<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">About</h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="#">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="javascript:void()">Pages</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="javascript:void()">About</a>
                </li>
            </ul>
        </div>
        <div class="page-category">

            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="">
                                <div class="form-group">
                                    <label for="smallInput">Body</label>
                                    <textarea name="konten" id="summernote" class="form-control form-control-sm"
                                        cols="30" rows="10" style="height:200px ;"></textarea>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <form action="">
                                <div class="form-group">
                                    <label for="smallInput">Small Input</label>
                                    <input type="text" class="form-control form-control-sm" id="smallInput"
                                        placeholder="Small Input" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    $('#summernote').summernote({
        height: 770,
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['style', 'bold', 'italic', 'underline', 'clear']],
            ['font', ['fontname', 'fontsize', 'fontsizeunit', 'color',
                'strikethrough', 'superscript', 'subscript'
            ]],

            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],

            ['insert', ['table', 'hr', 'link', 'picture', 'video']],
            ['view', ['undo', 'redo', 'fullscreen', 'codeview', 'help']],
        ]
    });

});
</script>