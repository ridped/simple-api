<?php if (ceksess() === 0) {
    redirect('login');
} ?>
            <div class="app-content">
                <div class="content-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <!-- <div class="page-description page-description-tabbed"> -->
                                    <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="account-tab" data-bs-toggle="tab" data-bs-target="#account" type="button" role="tab" aria-controls="hoaccountme" aria-selected="true">Account</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="integrations-tab" data-bs-toggle="tab" data-bs-target="#integrations" type="button" role="tab" aria-controls="integrations" aria-selected="false">Apikey</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                                        <div class="card">
                                            <div class="card-body">
                                            <p style="color: Tomato;"><?php echo $error;?></p>
                                            <form method="post" action="">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="settingsInputEmail" class="form-label">Username</label>
                                                        <input type="text" class="form-control" name="username" value="<?php echo $datauser['username'];?>" readonly>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="settingsPhoneNumber" class="form-label">Email Address</label>
                                                        <input type="email" name="email" class="form-control" value="<?php echo $datauser['email'];?>">
                                                    </div>
                                                </div>
                                                <div class="row m-t-lg">
                                                    <div class="col-md-6">
                                                        <label for="settingsInputFirstName" class="form-label">Nomor WhatsApp</label>
                                                        <input type="text" name="no_wa" class="form-control" id="settingsInputFirstName" placeholder="(xx) xxx-xxxx)" value="<?php echo $datauser['no_wa'];?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="settingsPhoneNumber" class="form-label">Password</label>
                                                        <input type="password" class="form-control" name="password" placeholder="New password">
                                                    </div>
                                                </div>
                                                <p style="color: Tomato;"><?php echo $ridfo;?></p>
                                                <div class="row m-t-lg">
                                                    <div class="col">
                                                        <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
                                                        <input type="submit" name="update" value="Update" class="btn btn-primary m-t-sm">
                                                        <!-- <a href="#" class="btn btn-primary m-t-sm">Update</a> -->
                                                    </div>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="integrations" role="tabpanel" aria-labelledby="integrations-tab">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="settings-integrations">
                                                    <div class="settings-integrations-item">
                                                        <div class="settings-integrations-item-info">
                                                            <div class="input-group">
                                            <input type="text" class="form-control form-control-solid-bordered" aria-label="" aria-describedby="share-link1" value="<?php if($datauser['status_akun'] == '0') { echo 'verify account first'; } else { echo $datauser['apikey']; } ?>">
                                            <button class="btn btn-primary" type="button" id="share-link1"><i class="material-icons no-m fs-5">content_copy</i></button>
                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div