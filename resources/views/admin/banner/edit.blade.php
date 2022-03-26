@include('admin.common.header')

<section id="main-content" class="iframe-body">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        新增Banner
                    </header>
                    <div class="panel-body">
                        <div class="form">
                            <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">


                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">标题 <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="title" type="text" value="{{ $data->title }}" required />
                                        <input class="form-control" name="id" type="hidden" value="{{ $data->id }}" required />
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">描述 <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="describe" required>{{ $data->describe }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">图片 <span class="required">*</span></label>
                                    <div class="col-lg-10" id="fileUpload">
                                        <img id="cover" src="{{ $data->url }}" height="100" />
                                        <button id="imgUpload" class="btn btn-success" type="button"> + 点击上传</button>
                                        <input class="form-control" name="url" type="hidden" value="{{ $data->url }}" required />
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="cname" class="control-label col-lg-2">副图 <span class="required">*</span></label>
                                    <div class="col-lg-10" id="fileUpload1">
                                        <img id="cover1" src="{{ $data->small_url }}" height="100" />
                                        <button id="imgUpload1" class="btn btn-success" type="button"> + 点击上传</button>
                                        <input class="form-control" name="small_url" type="hidden" value="{{ $data->small_url }}" required />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-primary" type="button">保存</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </section>
            </div>
        </div>
    </section>
</section>
@include('admin.common.footer')
<script src="{{ asset('static/admin/js/ueditor/ueditor.config.js') }}"></script>
<script src="{{ asset('static/admin/js/ueditor/ueditor.all.min.js') }}"></script>

<script src="{{ asset('static/admin/js/qiniu/src/plupload/moxie.min.js') }}"></script>
<script src="{{ asset('static/admin/js/qiniu/src/plupload/plupload.dev.js') }}"></script>
<script src="{{ asset('static/admin/js/qiniu/src/plupload/plupload.full.min.js') }}"></script>
<script src="{{ asset('static/admin/js/qiniu/src/qiniu.js') }}"></script>
<script>
$(function(){
  var uploader = Qiniu.uploader({
    runtimes: 'html5,flash,html4',    //上传模式,依次退化
    browse_button: 'imgUpload1',       //上传选择的点选按钮，**必需**
    uptoken_url: '{{ route('admin.qiniu.token') }}',            //Ajax请求upToken的Url，**强烈建议设置**（服务端提供）
    // uptoken : '', //若未指定uptoken_url,则必须指定 uptoken ,uptoken由其他程序生成
    // unique_names: true, // 默认 false，key为文件名。若开启该选项，SDK为自动生成上传成功后的key（文件名）。
    // save_key: true,   // 默认 false。若在服务端生成uptoken的上传策略中指定了 `sava_key`，则开启，SDK会忽略对key的处理
    domain: 'http://qiniu.lxj595.love/',   //bucket 域名，下载资源时用到，**必需**
    get_new_uptoken: true,  //设置上传文件的时候是否每次都重新获取新的token
    container: 'fileUpload1',           //上传区域DOM ID，默认是browser_button的父元素，
    max_file_size: '2000mb',           //最大文件体积限制
    flash_swf_url: './plupload/Moxie.swf',  //引入flash,相对路径
    max_retries: 3,                   //上传失败最大重试次数
    dragdrop: true,                   //开启可拖曳上传
    drop_element: 'fileUpload1',        //拖曳上传区域元素的ID，拖曳文件或文件夹后可触发上传
    chunk_size: '4mb',                //分块上传时，每片的体积
    auto_start: true,                 //选择文件后自动上传，若关闭需要自己绑定事件触发上传
    filters:{
      max_file_size : '100mb',
      prevent_duplicates: true,
      mime_types: [
        {title : "Image files", extensions : "jpg,gif,png,jpeg"}, // 限定jpg,gif,png后缀上传
      ]
    },
    init: {
      'FilesAdded': function(up, files) {
        plupload.each(files, function(file) {
          // 文件添加进队列后,z
        });
      },
      'BeforeUpload': function(up, file) {
        // 每个文件上传前,处理相关的事情
      },
      'UploadProgress': function(up, file) {
        // 每个文件上传时,处理相关的事情
      },
      'FileUploaded': function(up, file, info) {
        // 每个文件上传成功后,处理相关的事情
        // 其中 info.response 是文件上传成功后，服务端返回的json，形式如
        var domain = up.getOption('domain');
        var res = JSON.parse(info.response);
        console.log(res);
        var sourceLink = domain + res.key; //获取上传成功后的文件的Url
        console.log(sourceLink)

        $("#fileUpload1 img").attr("src", sourceLink)
        $("#fileUpload1 input").val(sourceLink)

      },
      'Error': function(up, err, errTip) {
        //上传出错时,处理相关的事情
      },
      'UploadComplete': function() {
        //队列文件处理完毕后,处理相关的事情
      },
      'Key': function(up, file) {
        // 若想在前端对每个文件的key进行个性化处理，可以配置该函数
        // 该配置必须要在 unique_names: false , save_key: false 时才生效
        var ext = Qiniu.getFileExtension(file.name);
        var t = Date.parse(new Date());
        var num = Math.random()*1000 + 9000;
        num = parseInt(num, 10);
        var key = "uploads/" + t +'_'+num+'.'+ext;
        // do something with key here
        return key
      }
    }
  });

  var uploader = Qiniu.uploader({
    runtimes: 'html5,flash,html4',    //上传模式,依次退化
    browse_button: 'imgUpload',       //上传选择的点选按钮，**必需**
    uptoken_url: '{{ route('admin.qiniu.token') }}',            //Ajax请求upToken的Url，**强烈建议设置**（服务端提供）
    // uptoken : '', //若未指定uptoken_url,则必须指定 uptoken ,uptoken由其他程序生成
    // unique_names: true, // 默认 false，key为文件名。若开启该选项，SDK为自动生成上传成功后的key（文件名）。
    // save_key: true,   // 默认 false。若在服务端生成uptoken的上传策略中指定了 `sava_key`，则开启，SDK会忽略对key的处理
    domain: 'http://qiniu.lxj595.love/',   //bucket 域名，下载资源时用到，**必需**
    get_new_uptoken: true,  //设置上传文件的时候是否每次都重新获取新的token
    container: 'fileUpload',           //上传区域DOM ID，默认是browser_button的父元素，
    max_file_size: '2000mb',           //最大文件体积限制
    flash_swf_url: './plupload/Moxie.swf',  //引入flash,相对路径
    max_retries: 3,                   //上传失败最大重试次数
    dragdrop: true,                   //开启可拖曳上传
    drop_element: 'fileUpload',        //拖曳上传区域元素的ID，拖曳文件或文件夹后可触发上传
    chunk_size: '4mb',                //分块上传时，每片的体积
    auto_start: true,                 //选择文件后自动上传，若关闭需要自己绑定事件触发上传
    filters:{
      max_file_size : '100mb',
      prevent_duplicates: true,
      mime_types: [
        {title : "Image files", extensions : "jpg,gif,png,jpeg"}, // 限定jpg,gif,png后缀上传
      ]
    },
    init: {
      'FilesAdded': function(up, files) {
        plupload.each(files, function(file) {
          // 文件添加进队列后,z
        });
      },
      'BeforeUpload': function(up, file) {
        // 每个文件上传前,处理相关的事情
      },
      'UploadProgress': function(up, file) {
        // 每个文件上传时,处理相关的事情
      },
      'FileUploaded': function(up, file, info) {
        // 每个文件上传成功后,处理相关的事情
        // 其中 info.response 是文件上传成功后，服务端返回的json，形式如
        var domain = up.getOption('domain');
        var res = JSON.parse(info.response);
        console.log(res);
        var sourceLink = domain + res.key; //获取上传成功后的文件的Url
        console.log(sourceLink)

        $("#fileUpload img").attr("src", sourceLink)
        $("#fileUpload input").val(sourceLink)

      },
      'Error': function(up, err, errTip) {
        //上传出错时,处理相关的事情
      },
      'UploadComplete': function() {
        //队列文件处理完毕后,处理相关的事情
      },
      'Key': function(up, file) {
        // 若想在前端对每个文件的key进行个性化处理，可以配置该函数
        // 该配置必须要在 unique_names: false , save_key: false 时才生效
        var ext = Qiniu.getFileExtension(file.name);
        var t = Date.parse(new Date());
        var num = Math.random()*1000 + 9000;
        num = parseInt(num, 10);
        var key = "uploads/" + t +'_'+num+'.'+ext;
        // do something with key here
        return key
      }
    }
  });


    $('.btn-primary').click(function() {
      param = $("#feedback_form").serialize()
      $.ajax({
        url: "{{ route('admin.banner.update') }}",
        data: param,
        type: "post",
        headers: {
          "X-CSRF-TOKEN": "{{ csrf_token() }}"
        },
        success: function(data) {
          if (data.status === 200) {
            layer.msg(data.message, {icon: 1});
            setTimeout(function() {
              location.href = "{{ route('admin.banner.list') }}"
            }, 1000)
          } else {
            layer.msg("操作失败", {icon: 2});
          }
          layer.close(index);

        },
        error: function(err) {
          layer.close(index);
          layer.msg(err.responseJSON.message, {icon: 2});
        }
      })
    })
})
</script>
