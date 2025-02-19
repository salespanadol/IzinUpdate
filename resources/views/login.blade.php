MODAL LOGIN WITH AVATAR 
============================================
<!-- Button trigger modal -->
<button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary" data-mdb-modal-init data-mdb-target="#staticBackdrop5">
    Launch modal login form
</button>

<!-- Modal -->
<div class="modal top fade" id="staticBackdrop5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-dialog-centered text-center d-flex justify-content-center">
        <div class="modal-content w-75">
            <div class="modal-body p-4">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%281%29.webp" alt="avatar" class="rounded-circle position-absolute top-0 start-50 translate-middle h-50" />
                <form>
                    <div>
                        <h5 class="pt-5 my-3">Maria Doe</h5>

                        <!-- password input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="password" id="password1" class="form-control" />
                            <label class="form-label" for="password1">Password</label>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
=================================================================================