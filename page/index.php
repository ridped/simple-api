  <div class="app-content">
                <div class="content-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card widget widget-stats">
                                    <div class="card-body">
                                        <div class="widget-stats-container d-flex">
                                            <div class="widget-stats-icon widget-stats-icon-primary">
                                                <i class="material-icons">folder</i>
                                            </div>
                                            <div class="widget-stats-content flex-fill">
                                                <span class="widget-stats-title">Fitur</span>
                                                <span class="widget-stats-amount"><?php echo $datafitur['fitur']; ?></span>
                                                <span class="widget-stats-info">Fitur</span>
                                            </div>
                                            <div class="widget-stats-indicator widget-stats-indicator-negative align-self-start">
                                                <i class="material-icons">keyboard_arrow_down</i> 4%
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card widget widget-stats">
                                    <div class="card-body">
                                        <div class="widget-stats-container d-flex">
                                            <div class="widget-stats-icon widget-stats-icon-warning">
                                                <i class="material-icons-outlined">person</i>
                                            </div>
                                            <div class="widget-stats-content flex-fill">
                                                <span class="widget-stats-title">Total Users</span>
                                                <span class="widget-stats-amount"><?php echo $totaluser;?></span>
                                                <span class="widget-stats-info">2 Tidak aktif</span>
                                            </div>
                                            <div class="widget-stats-indicator widget-stats-indicator-positive align-self-start">
                                                <i class="material-icons">keyboard_arrow_up</i> 12%
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card widget widget-stats">
                                    <div class="card-body">
                                        <div class="widget-stats-container d-flex">
                                            <div class="widget-stats-icon widget-stats-icon-danger">
                                                <i class="material-icons">language</i>      
                                            </div>
                                            <div class="widget-stats-content flex-fill">
                                                <span class="widget-stats-title">Your IP</span>
                                                <span class="widget-stats-amount"><?php echo $ip;?></span>
                                                <span class="widget-stats-info">Lokasi Terdeksi</span>
                                            </div>
                                            <div class="widget-stats-indicator widget-stats-indicator-positive align-self-start">
                                                <i class="material-icons">keyboard_arrow_up</i> 7%
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card widget widget-stats">
                                    <div class="card-body">
                                        <div class="widget-stats-container d-flex">
                                            <div class="widget-stats-icon widget-stats-icon-warning">
                                                <i class="material-icons">share</i>      
                                            </div>
                                            <div class="widget-stats-content flex-fill">
                                                <span class="widget-stats-title">TOTAL HIT</span>
                                                <div class="widget-stats-amount towtalhit"></div>
                                                <span class="widget-stats-info">Request</span>
                                            </div>
                                            <div class="widget-stats-indicator widget-stats-indicator-positive align-self-start">
                                                <i class="material-icons">keyboard_arrow_up</i> 7%
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-8">
                                <div class="card widget widget-popular-blog">
                                    <div class="card-body">
                                        <div class="widget-popular-blog-container">
                                            <div class="widget-popular-blog-image">
                                                <img src="assets/images/widgets/security.svg" alt=""> 
                                            </div>
                                            <div class="widget-popular-blog-content ps-1">
                                                <span class="badge badge-info badge-style-light">
                                                    <?php if ($databerita['type'] == 'update' AND 'new') 
                                                    {?>
                                                        <?php echo $databerita['type'];?> 
                                                    <?php } else { ?>
                                                        <?php echo $databerita['type'];?>
                                                    <?php } ?>
                                                </span>
                                                <span class="widget-popular-blog-text">
                                                     <?php echo $databerita['deskripsi'];?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <span class="widget-popular-blog-date">
                                            Date <?php echo $databerita['tanggal'];?>
                                        </span>
                                        <a href="#" class="btn btn-primary float-end">Thanks!</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card widget widget-connection-request">
                                    <div class="card-header">
                                        <h5 class="card-title">Support<span class="badge badge-secondary badge-style-light"><?php echo $databerita['tanggal'];?></span></h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="widget-connection-request-container d-flex">
                                            <div class="widget-connection-request-avatar">
                                                <div class="avatar avatar-xl m-r-xs">
                                                    <img src="assets/images/widgets/wa.svg" alt="">
                                                </div>
                                            </div>
                                            <div class="widget-connection-request-info flex-grow-1">
                                                <span class="widget-connection-request-info-name">
                                                    Group WhatsApp
                                                </span>
                                                <span class="widget-connection-request-info-about">
                                                    Gabung ke group WhatsApp untuk mendapatkan dukungan
                                                </span>
                                            </div>
                                        </div>
                                        <div class="widget-connection-request-actions d-flex">
                                            <a href="https://chat.whatsapp.com/L0q8k2doB9HKMxsoyTCPbg" target="_blank" class="btn btn-primary btn-style-light flex-grow-1 m-r-xxs"><i class="material-icons">done</i>Gabung</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
