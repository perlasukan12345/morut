<?php echo $this->extend('auth/template/index'); ?>


<?php echo $this->section('content'); ?>
<div class="container">
<!-- Outer Row -->
<div class="row justify-content-center">
    <div class="col-md-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                            </div>
                             <?php if (!empty(session()->getFlashdata('error'))) : ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <?php echo session()->getFlashdata('error'); ?>
                                </div>
                            <?php endif; ?>
                            <form action="<?php echo base_url('/home/signup') ?>" method="post" class="user">
                                <input type="hidden" name="token" value="<?= generate_token('login'); ?>">
                                <div class="form-group">
                                    <input type="username" class="form-control form-control-user"
                                        id="username" placeholder="Enter Username..." name="username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user"
                                        id="password" placeholder="Password" name="password">
                                </div>
                                <div class="form-group">
                                    <div class="boxed">
                                        <label><?= $captcha ?></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-user" name="code" value="" placeholder="Code captcha" maxlength="5"/>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-user btn-block" type="submit">Login</button>
                                </div>
                            </form>
                            <a href="/home/index"><p class="text-center">Back to Homepage</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>
<?php echo $this->endSection(); ?>