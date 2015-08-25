<?php
        require 'PHPMailer/class.phpmailer.php';
        require 'PHPMailer/class.smtp.php';
        require 'PHPMailer/class.pop3.php';        
        $mail             = new PHPMailer(true);
		/*服务器相关信息*/
		$mail->IsSMTP();                        //设置使用SMTP服务器发送
		$mail->SMTPAuth   = true;               //开启SMTP认证
		$mail->Host       = 'smtp.gmail.com';   	    //设置 SMTP 服务器,自己注册邮箱服务器地址
		$mail->Username   = 'huanggongyu92';  		//发信人的邮箱名称
		$mail->Password   = '**********';          //发信人的邮箱密码
		/*内容信息*/
		$mail->IsHTML(true); 			         //指定邮件格式为：html
		$mail->CharSet    ="UTF-8";			     //编码
		$mail->From       = 'huanggongyu92@gmail.com';	 		 //发件人完整的邮箱名称
		$mail->FromName   = '中国武术网2';			 //发信人署名
		$mail->Subject    = "关于武林盟主的选举";  			 //信的标题
		$mail->MsgHTML("尊敬的用户：明天开会，会后，我请客");  				 //发信内容
		//$mail->AddAttachment("15.jpg");	     //附件
		/*发送邮件*/
		$mail->AddAddress("826968770@qq.com");  			 //收件人地址
    
		$mail->SMTPBug = 1;// 启用SMTP调试 1 = errors  2 =  messages
     $mail->SMTPSecure = "ssl";     
     $mail->Port       = 465; 

        //使用send函数进行发送
		if($mail->Send()) {
		  	echo 'ok2';
		} else {
            echo $mail->ErrorInfo;
		}
?>