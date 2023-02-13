<div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="filterModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <h1 class="fw-bold mb-1 modal-title fs-3 text-center">Add filters</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/CRUD/goods.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                        <input type="checkbox" name="gender" value="Male">Male</input>
                        <input type="checkbox" name="gender" value="Female">Female</input>
                        <input type="checkbox" name="gender" value="emale">emale</input>
                        <input type="checkbox" name="gender" value="Femal">Femal</input>
                        <input type="checkbox" name="gender" value="Femle">Femle</input>
                        </div>
                        <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" name="filter">Apply filters
                            </button>
                    </form>
                </div>
            </div>
        </div>
    </div>