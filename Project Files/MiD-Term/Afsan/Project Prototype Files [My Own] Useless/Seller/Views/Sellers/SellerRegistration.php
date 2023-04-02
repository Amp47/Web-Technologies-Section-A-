<?php include_once '../Views/CommonLayer/Header.php'; ?>
<div class="col-6 m-auto mt-5 border p-5">
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" id="Name1">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="InputEmail1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="InputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="InputConfirmPassword1">
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
<?php include_once '../Views/CommonLayer/Footer.php'; ?>