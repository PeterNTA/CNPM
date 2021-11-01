    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">Create an Account</h1></div>
      		</div>
		</div>
        <!--End Page Title-->

        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3">
                	<div class="mb-4">
                    <?php if (isset($_COOKIE['msg'])) { ?>
						                <div class="alert alert-success">
							                       <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
						                             </div>
					                                  <?php } ?>
                       <form method="post" action="?act=taikhoan&xuli=dangky" id="CustomerLoginForm"  class="contact-form">
                          <div class="row">
	                          <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="FirstName">First Name</label>
                                    <input type="text" name="Ho" placeholder="" id="FirstName" autofocus="" required>
                                </div>
                               </div>
                               <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="LastName">Last Name</label>
                                    <input type="text" name="Ten" placeholder="" id="LastName" required>
                                </div>
                               </div>
                               <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="LastName">Username</label>
                                    <input type="text" name="TaiKhoan" placeholder="" id="LastName" required minlength="5">
                                </div>
                               </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="CustomerEmail">Email</label>
                                    <input type="email" name="Email" placeholder="" id="CustomerEmail" class="" autocorrect="off" autocapitalize="off" autofocus="" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                             <div class="form-group">
                                 <label for="LastName">Phone</label>
                                 <input type="text" name="SĐT" placeholder="" id="LastName" required pattern="[0-9]+" minlength="10">
                             </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="CustomerPassword">Password</label>
                                    <input type="password"  name="Matkhau" placeholder="" id="CustomerPassword" class="" required minlength="6">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="CustomerPassword">Check Password</label>
                                    <input type="password"  name="check_password" placeholder="" id="CustomerPassword" class="" required minlength="6">
                                </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                                <input type="submit" class="btn mb-3" form="CustomerLoginForm" value="Create">
                            </div>
                         </div>
                     </form>
                    </div>
               	</div>
            </div>
        </div>
