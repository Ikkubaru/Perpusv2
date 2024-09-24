<div class="page-wrapper">
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                               
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h1 class="card-title">Books Edit</h1>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- column -->
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                            <div class="content clearfix">
                                                    <section id="steps-uid-0-p-0" role="tabpanel" aria-labelledby="steps-uid-0-h-0" class="body current" aria-hidden="false">
                                                        <form action="<?= base_url('Admin/Books/booksUpdate/'.$books->booksID) ?>" method="POST" enctype="multipart/form-data">
                                                            <label for="">Title</label>
                                                            <input name="title" type="text" class="required form-control" value="<?= $books->title?>">
                                                            <label for="">Author</label>
                                                            <input name="author" type="text" class="required form-control" value="<?= $books->author?>">
                                                            <label for="">Release (Year)</label>
                                                            <input name="releaseYear" type="num" class="required form-control" value="<?= $books->releaseYear?>">
                                                            <label for="">Synopsis</label>
                                                            <textarea name="synopsis" class="form-control"><?= $books->synopsis?></textarea>
                                                            <label for="">Previous Cover : </label><center>
                                                                <img src="<?=base_url('assets/cover/'.$books->cover) ?>" width="150px" height="200px"> 
                                                            </center>
                                                            <input name="cover" type="file" class="required form-control">
                                                            <input type="hidden" name="status" value="ready">
                                                            <br>
                                                            <button type="submit" class="col-lg-12 btn btn-info">Submit</button>
                                                        </form>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- column -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->