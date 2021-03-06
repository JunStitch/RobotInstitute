<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>机器人学院后台管理系统</title>

    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

     <!-- Animate.css -->
    <link rel="stylesheet" href="__PUBLIC__/css/album/animate.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="__PUBLIC__/css/album/magnific-popup.css">
    <!-- Salvattore -->
    <link rel="stylesheet" href="__PUBLIC__/css/album/salvattore.css">
    <!-- Theme Style -->
    <link rel="stylesheet" href="__PUBLIC__/css/album/style.css">
    <!-- Modernizr JS -->
    <script src="__PUBLIC__/js/album/modernizr-2.6.2.min.js"></script>

    <!-- 通过cdn添加css和js  -->
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">


    <link href="https://cdn.bootcss.com/bootstrap-fileinput/4.4.7/css/fileinput.min.css" rel="stylesheet">


    </head>
    
<body style= "background-image: url(__PUBLIC__/images/Background/album_background.jpg); background-repeat: repeat;background-size: initial;">

    <h1>首页幻灯片</h1>
      
 
<!-- Modal -->
<div class="modal fade" id="upload_slides_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">编辑幻灯片</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="file-loading">
            <input id="input-b3" name="input-b3" type="file" class="file"  data-show-upload="false" data-show-caption="true" data-msg-placeholder="建议选择16:9比例的高清图片" data-allowed-file-extensions='["jpg", "png", "gif", "jpeg"]' data-language = 'zh'>
        </div>
         <form>

          <div class="form-group" style="margin-top: 20px;">
            <label for="recipient-name" class="control-label">幻灯片标题:</label>
            <input id='slides_title' type="text" class="form-control" id="recipient-name" placeholder="（必填）不超过20字" maxlength="20">
          </div>

        </form>
        <div id="kartik-file-errors"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
        <button type="button" class="btn btn-primary" title="上传幻灯片" id="submit_slides">上传</button>
      </div>
    </div>
  </div>
</div>
 


<div class="text-right" style=" margin: 0 20px -60px 0" >
    <button  class="btn btn-success" id="upload_slide" data-toggle="modal" data-target="#upload_slides_Modal"><i class="fa fa-upload fa-2x" aria-hidden="true"></i></button>

    <button class="btn btn-danger" id="delete_slides"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></button>
</div>


    <div id="fh5co-main">
        <div class="container">

            <div class="row">

        <div id="fh5co-board" data-columns>

            <?php  //加载存在数据库的幻灯片

                $table = M('Index');
                $data = $table->order('id desc')->select();
             
                foreach ($data as $key => $value) {

                    echo ' <div class="item" style = "box-shadow: 3px 3px 5px #888888;">
                    
                           
                             <div class="animate-box">
                              
                                <a href="'.$value['slides_file'].'" class="image-popup fh5co-board-img" title="'.$value['slides_title'].'"><img src="'.$value['slides_file'].'" alt="相册图片"></a>

                            </div>
                                <div class="fh5co-desc">'.$value['slides_title'].'</div>

               <div class = "slides_check" >

                    <input type="checkbox" name="slides_check"  value="'.$value['id'].'"/>
                        <span>上传时间：'.date('Y/m/d',$value['date']).'</span>
                </div>
                                
                        </div>';
                 
                }
            ?>
            
        </div>
        </div>
       </div>
    </div>



  
    <!-- jQuery -->
    <script src="__PUBLIC__/js/album/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="__PUBLIC__/js/album/jquery.easing.1.3.js"></script>

    <!-- Bootstrap -->
    <script src="__PUBLIC__/js/album/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="__PUBLIC__/js/album/jquery.waypoints.min.js"></script>
    <!-- Magnific Popup -->
    <script src="__PUBLIC__/js/album/jquery.magnific-popup.min.js"></script>
    <!-- Salvattore -->
    <script src="__PUBLIC__/js/album/salvattore.min.js"></script>
    <!-- Main JS -->
    <script src="__PUBLIC__/js/album/main.js"></script>

    <script src="__PUBLIC__/js/Admin/fileinput.min.js"></script>

    <script src="__PUBLIC__/js/Admin/popper.min.js"></script>

    <script src="https://cdn.bootcss.com/bootstrap-fileinput/4.3.1/js/fileinput_locale_zh.js"></script>

    <script src="__PUBLIC__/js/Admin/working_slides.js"></script>
    


  </body>
</html>