<div class="modal fade" id="sellModal" tabindex="-1" aria-labelledby="sellModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <h1 class="fw-bold mb-1 modal-title fs-3 text-center">Include some details</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/CRUD/index.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="Pcat" class="form-label">Product Category</label>
                            <select class="form-select" aria-label="Default select example" id="Pcat" name="Pcat"
                                required>
                                <option selected>Select from the below</option>
                                <option value="Fashion">Fashion</option>
                                <option value="Mobile-Phones">Mobile Phones</option>
                                <option value="Laptops">Laptops</option>
                                <option value="Cars">Cars</option>
                                <option value="Motorcycles">Motorcycles</option>
                                <option value="Furniture">Furniture</option>
                                <option value="Home-accessories">Home accessories</option>
                                <option value="Shoes">Shoes</option>
                                <option value="Cycles">Cycles</option>
                                <option value="Electronics">Electronics</option>
                                <option value="Books-stationary">Books & stationary</option>
                                <option value="Keyboards-Mouses">Keyboards & Mouses</option>
                                <option value="Bathroom-accessories">Bathroom accessories</option>
                                <option value="Boxes-containers">Boxes & containers</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                    <div class="mb-3">
                            <label for="Pbrand" class="form-label" >Brand</label>
                            <input type="text" class="form-control" id="Pbrand" name="Pbrand" maxlength="15">
                        </div>    
                    <div class="mb-3">
                            <label for="Pname" class="form-label">Ad title</label>
                            <input type="text" class="form-control" id="Pname" name="Pname" maxlength="30" required  placeholder="Mention the key features of your item (e.g. model, age) (0/30)">
                        </div>
                        <div class="mb-3">
                            <label for="Pdesc" class="form-label">Description</label>
                            <input type="text" class="form-control" id="Pdesc" name="Pdesc" maxlength="60" required placeholder="Include condition, features and reason for selling (0/60)">
                        </div>
                        <div class="mb-3">
                            <label for="Pprice" class="form-label">Set a Price</label>
                            <input type="text" class="form-control" id="Pprice" name="Pprice" required>
                        </div>
                       
                        <div class="mb-3">
                            <label for="Pphoto" class="form-label">Product Image</label><br>
                            <input type="file" id="Pphoto" name="Pphoto" required><br>
                        </div>
                        <hr class="divider" />
                        <h6 class=" mb-1 fs-3 text-center">Confirm location</h6>
                        <div class="row g-3">
                        <div class="">
                            <label for="Parea" class="form-label">Area name</label>
                            <input type="text" class="form-control" id="Parea" name="Parea" maxlength="60" required placeholder=" Neighbourhood name e.g 1234 Main St or any nearby famous place name e.g church street ">
                        </div>
                        <div class="col-md-6 mb-3">
                         <label for="Pcity" class="form-label">City</label>
                         <input type="text" class="form-control" id="Pcity" name="Pcity">
                        </div>
                        <div class="col-md-6 mb-3">
                         <label for="Pstate" class="form-label">State</label>
                         <input type="text" class="form-control" id="Pstate" name="Pstate">
                        </div></div>
                        
                        <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" name="submit">Add
                            new</button>
                    </form>
                </div>
            </div>
        </div>
    </div>