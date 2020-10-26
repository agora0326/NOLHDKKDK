<html> 
 <head>
  <meta charset ="utf-8"> 
  <link rel="shortcut icon" href="/img/icon.png" type="image/x-icon" type="text/css"></link>
  <title>회원가입하기</title>

 </head> 
 <body>
   <h1>회원가입하기</h1>
   <form action="register.php" method="POST">
   <h4> 이름 </h4>
   <input type ="text" name="user_rn">
   <h4> 닉네임 </h4>
   <input type ="text" name="user_name">
   <h4> 성별 </h4>
   <select name="user_sex">
   <option>남男</option>
   <option>여女</option>
   <option>기타....</option>
   </select>
   <h4>연락처</h4>
   <input type ="text" name="user_pn">
   <h4> 생년월일 </h4>
   <input type ="text" name="user_birth">
   <h4> 아이디 </h4>
   <input type="text" name="user_id">
   <h4>비밀번호</h4>
   <input type="password" name="user_pw">
   <input type="submit" value="완료하기" name="register_submit">
   <?php
   include('register_process.php');
   ?>
   </form>

   
   
 </body>
</html>