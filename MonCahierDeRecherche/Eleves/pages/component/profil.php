<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>photo profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <style media="screen">
    .upload{
      width: 100px;
      position: relative;
      margin: auto;
      text-align: center;
    }
    .upload img{
      border-radius: 50%;
      border: 2px solid black;
      width: 60px;
      height: 60px;
    }
    .upload .icon{
      position: absolute;
      bottom: 0;
      right: 0;
      background: black;
      width: 25px;
      height: 25px;
      line-height: 25px;
      text-align: center;
      border-radius: 50%;
      overflow: hidden;
      cursor: pointer;
    }
    .upload .icon{
      position: absolute;
      bottom: 0;
      left: 0;
      background:green;
      width: 25px;
      height: 25px;
      line-height: 25px;
      text-align: center;
      border-radius: 50%;
      overflow: hidden;
      cursor: pointer;
    }
    .upload .fa{
      color: white;
    }
    .upload input{
      position: absolute;
      transform: scale(2);
      opacity: 0;
    }
    .upload input::-webkit-file-upload-button, .upload input[type=submit]{
      cursor: pointer;
    }
  </style>
  <body>
    <form class="form" id = "form" action="" enctype="multipart/form-data" method="post">
      <input type="hidden" name="id" value="../assets/<?php echo $result['id']; ?>">

      <div class="upload">
       <img src="avatar.jpg" id = "image">

        <div class="icon" id = "upload">
          <input type="file" name="photo" id = "photo" accept=".jpg, .jpeg, .png">
          <i class = "fa fa-camera"></i>
        </div>
      </div>
    </form>
  </body>
</html>
