<?php
	//开始会话
    session_start();
    include 'conn.php';
    
    $sql = 'select tplj,tpfl from tp';   
    $result = mysqli_query($conn,$sql);

    header('Content-type:text/html;charset=utf-8');    
    if(isset($_SESSION['username']) ){
        echo "您好！{$_SESSION['username']},欢迎回来！";
        echo "<a href='logout.php'>注销</a>&nbsp&nbsp&nbsp";
        echo "<a href='logout.php'>切换账号</a>";
   //echo substr("fasd",0,2);
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style type="text/css">
    ul,li{ margin:0; padding:0; list-style:none}
     #zpbox{ 
       padding:10px
    }
     #zpbox li{ 
       float:left; 
       position:relative; 
       margin:2px; 
       position:relative; 
       width:300px; 
       height:180px
    }
     #zpbox li a{ 
       width:100%; 
       height:100%; 
       background:#04CAFC; 
       position:absolute; 
       top:0; left:0; 
       display:block; 
       transition:all 400ms ease; 
       -moz-transition:all 400ms ease; 
       -webkit-transition:all 400ms ease; 
       -o-transition:all 400ms ease
    }
     #zpbox li a:hover{ 
       background:#CC02FC; 
       top:-10px; 
       left:-10px; 
       width:450px; 
       height:270px; 
       z-index:9999999
    }

    </style>
</head>
<body>
<br><br><br>
    <!--</p>
    用户信息：
    <?php
        if(isset($_SESSION['username']) ){
        echo $_SESSION['username'];
        }    
    ?>-->
    
    <form action="sctx.php" method="post" enctype="multipart/form-data">
        <p><label>上传头像：</label><input type="file" name="icon" accept=".jpg,.png,.gif"></p>
        <p>
          <label for="fl">选择图片分类:</label>
          <select name="fl" id="fl">
            <option value="fj">风景</option>
            <option value="rw">人物</option>
            <option value="dm">动漫</option>
          </select>
        </p>
        
        <input type="submit" value="提交" id='sub'>
    </form>
	<p><br>
        
        <div id="zpbox">
            <ul>
        <?php 
        if($num = mysqli_num_rows($result)){
            while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){

        ?>
        
           <li>
               <a><img src="<?php echo $row['tplj'];?>"  width="100%" height="100%" >
                    <div style="margin-left:50%" >图片分类:<?php echo $row['tpfl']; ?></div>
               </a>
           </li>
          
        <?php 
                }
            }

        ?>
    	   </ul>
        </div>
	

    <p>&nbsp; </p>

</body>
</html>
<?php 
     }  else {
        echo "<a href='login.php'>请登入</a>";
    }

?>