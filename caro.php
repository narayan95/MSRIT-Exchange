<?php
echo'<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-inner">
    <div class="carousel-item active">
        <img src="https://source.unsplash.com/random/?electronics" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
        <img src="https://source.unsplash.com/random/?marketing" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
        <img src="https://source.unsplash.com/random/?gadgets" class="d-block w-100" alt="...">
    </div>
</div>'

?>
<div class="container my-2">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6 side">
                <img src="https://source.unsplash.com/random/900*100/?founder/creator/entepreneur"
                    class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Didn't found your desired product?</h1>
                <p class="lead">Please fill the below form or contact us via email and we will sort this out as soon as
                    possible</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Contact us</button>
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4" data-bs-toggle='modal'
                        data-bs-target='#newModal'>Click on it for filling the form</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="newModal" tabindex="-1" aria-labelledby="newModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <h1 class="fw-bold mb-1 modal-title fs-3">What were you finding?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="newrange" class="form-label">Name</label>
                            <input type="text" class="form-control" id="newrange" name="newrange" required>
                        </div>
                        <div class="mb-3">
                            <label for="newcategory" class="form-label">Category</label>
                            <input type="text" class="form-control" id="newcategory" name="newcategory" required>
                        </div>
                        <!-- <div class="mb-3">
                            <label for="photo" class="form-label">Range pic</label><br>
                            <input type="file" id="photo" name="photo"><br>
                        </div> -->
                        <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit"
                            name="new">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>