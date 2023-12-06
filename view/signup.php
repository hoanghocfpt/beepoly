

<br>
<br>
<br>
<br>
<div class="form_signup">
<<<<<<< HEAD
<div class="top">
  
</div>
        <form action="" method="POST">
          <h1>BeePoly</h1>
          <h2>Đăng nhập với tài khoản<br> của bạn</h2>
          <p>Email</p>
          <input type="" name="email" id="email" pattern="^[\w\.-]+@[a-zA-Z\d\.-]+\.[a-zA-Z]{2,}$"  placeholder="Nhập email của bạn" required>
=======

        <form action="" method="POST">
          <h1>BeePoly</h1>
          <h2>Đăng nhập với tài khoản<br> của bạn</h2>
          <p class="ten">Email</p>
          <input type="text" name="email" id="email" pattern="^[\w\.-]+@[a-zA-Z\d\.-]+\.[a-zA-Z]{2,}$" placeholder="Nhập email của bạn">
>>>>>>> ed35eaea4b18854329e0834acefa4d0b0c90ecd6
          <?php
            if(isset($_POST['login'])){
                if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                    echo '<p id="emaileror" style="color: red;">Email không hợp lệ</p>';
                }
            }
          ?>
<<<<<<< HEAD
           <p>Mật khẩu</p>
          <div class="pass">
            <input type="password" name="password" id="password" placeholder="Mật khẩu" required>
=======
          <p class="ten">Mật khẩu</p>
          <div class="pass">
            <input type="password" id="password" name="password" placeholder="Mật khẩu">
>>>>>>> ed35eaea4b18854329e0834acefa4d0b0c90ecd6
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                <path d="M2.94167 2.05837C2.82319 1.94797 2.66649 1.88787 2.50457 1.89072C2.34265 1.89358 2.18816 1.95917 2.07365 2.07368C1.95914 2.18819 1.89355 2.34268 1.89069 2.5046C1.88784 2.66652 1.94794 2.82322 2.05834 2.9417L17.0583 17.9417C17.1156 18.0031 17.1846 18.0524 17.2612 18.0865C17.3379 18.1207 17.4207 18.139 17.5046 18.1405C17.5885 18.142 17.6718 18.1266 17.7497 18.0951C17.8275 18.0637 17.8982 18.0169 17.9575 17.9576C18.0169 17.8982 18.0637 17.8275 18.0951 17.7497C18.1265 17.6719 18.142 17.5885 18.1405 17.5046C18.139 17.4207 18.1206 17.3379 18.0865 17.2613C18.0523 17.1846 18.0031 17.1156 17.9417 17.0584L2.94167 2.05837ZM18.8967 10.4609C18.4475 11.8088 17.6977 13.0369 16.7042 14.0525L14.1217 11.47C14.4003 10.69 14.4517 9.84684 14.27 9.03868C14.0883 8.23053 13.6809 7.49057 13.0952 6.90486C12.5095 6.31914 11.7695 5.91173 10.9614 5.73002C10.1532 5.54831 9.31007 5.59975 8.53 5.87837L6.46584 3.8142C7.58836 3.3575 8.78897 3.12344 10.0008 3.12503C14.1425 3.12503 17.655 5.81087 18.8967 9.53337C18.9967 9.83503 18.9967 10.16 18.8967 10.4609Z" fill="#444444"/>
                <path d="M13.125 9.99992C13.125 10.1499 13.1142 10.2974 13.0942 10.4416L9.55751 6.90576C10.0008 6.84234 10.4526 6.87495 10.8822 7.00138C11.3118 7.1278 11.7092 7.34508 12.0476 7.6385C12.3859 7.93193 12.6572 8.29463 12.8431 8.70206C13.029 9.10948 13.1251 9.55209 13.125 9.99992ZM10.4417 13.0941L6.90585 9.55742C6.83718 10.0377 6.88129 10.5274 7.0347 10.9878C7.18811 11.4481 7.44659 11.8663 7.78968 12.2094C8.13277 12.5525 8.55104 12.811 9.01135 12.9644C9.47166 13.1178 9.96136 13.1619 10.4417 13.0933V13.0941Z" fill="#444444"/>
                <path d="M5.62499 10.0001C5.62499 9.48428 5.71415 8.98928 5.87832 8.53011L3.29499 5.94678C2.30174 6.96248 1.55231 8.19063 1.10332 9.53844C1.00332 9.84011 1.00332 10.1651 1.10332 10.4668C2.34415 14.1893 5.85665 16.8751 9.99915 16.8751C11.2492 16.8751 12.4433 16.6301 13.5342 16.1859L11.47 14.1218C10.8097 14.3573 10.1025 14.4308 9.40787 14.3359C8.71327 14.241 8.05165 13.9806 7.47872 13.5766C6.90579 13.1726 6.43834 12.6368 6.11573 12.0144C5.79313 11.392 5.62482 10.7012 5.62499 10.0001Z" fill="#444444"/>
                </svg>
          </div>
          <?php
            if(isset($_POST['login'])){
                if (strlen($_POST['password'])<6) {
                    echo '<p id="passerror" style="color: red;">Mật khẩu phải dài hơn hoặc bằng 6 kí tự</p>';
                }
            }
          ?>
<<<<<<< HEAD
          <br>
          <a href="" class="quenpass">Quên mật khẩu?</a>
          <br>
          <button type="submit" name="login">Đăng Nhập</button>
                <?php
            include_once '../model/signup.php   ';
            if (isset($_POST['login'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];

                $loginResult = loginUser($email, $password);

                if ($loginResult['success']) {
                    echo '<p style="color: green;">Đăng nhập thành công!</p>';
                } else {
                    echo '<p id="loginerror" style="color: red;">' . $loginResult['message'] . '</p>';
                }
            }
            ?>
          <p class="name">Bạn chưa có tài khoản?</p>
         
          <div class="dangnhap1">
            <a href="signin" class="dangnhap">Đăng kí</a>
=======
          <a href="" class="quenpass">Quên mật khẩu?</a>
          <button type="submit" name="login">Đăng Nhập</button>
          <p class="name">Bạn chưa có tài khoản?</p>
          <div class="dangnhap1">
            <a href="dangki.php" class="dangnhap">Đăng kí</a>
>>>>>>> ed35eaea4b18854329e0834acefa4d0b0c90ecd6
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.18751 2.8125H14.625C14.7742 2.8125 14.9173 2.87176 15.0228 2.97725C15.1282 3.08274 15.1875 3.22582 15.1875 3.375V11.8125C15.1875 11.9617 15.1282 12.1048 15.0228 12.2102C14.9173 12.3157 14.7742 12.375 14.625 12.375C14.4758 12.375 14.3327 12.3157 14.2273 12.2102C14.1218 12.1048 14.0625 11.9617 14.0625 11.8125V4.7325L3.77251 15.0225C3.66588 15.1219 3.52484 15.176 3.37911 15.1734C3.23339 15.1708 3.09435 15.1118 2.99129 15.0087C2.88823 14.9057 2.8292 14.7666 2.82663 14.6209C2.82405 14.4752 2.87815 14.3341 2.97751 14.2275L13.2675 3.9375H6.18751C6.03832 3.9375 5.89525 3.87824 5.78976 3.77275C5.68427 3.66726 5.62501 3.52418 5.62501 3.375C5.62501 3.22582 5.68427 3.08274 5.78976 2.97725C5.89525 2.87176 6.03832 2.8125 6.18751 2.8125Z" fill="#2DA5FB"/>
                </svg>
            </div>
<<<<<<< HEAD
           
=======
          
>>>>>>> ed35eaea4b18854329e0834acefa4d0b0c90ecd6
        </form>
        </div>