

<?php if (isset($users) && count($users) > 0): ?>
    <h2>Search Result (<?php echo count($users); ?> Profiles)</h2>

    <div class="items grid compact grid-xl-3-items grid-lg-3-items grid-md-2-items">
        <?php foreach ($users as $row): ?>
            <div class="item">
                <div class="wrapper wrap-hi">
                    <div class="image">
                        <h3>
                            <!-- <a href="#" class="tag category"><?php echo ucwords($row->work_as ?? ''); ?></a> -->
                            <a href="<?php echo base_url('users/' . $row->id); ?>" class="title"><?php echo ucfirst($row->firstname); ?></a>
                        </h3>
                        <a href="<?php echo base_url('users/' . $row->member_id); ?>" class="image-wrapper background-image">
                            <?php if (!empty($row->path)): ?>
                                <img src="<?php echo $row->path; ?>" alt="">
                            <?php else: ?>
                                <img src="<?php echo base_url('img/img_not_avalable.jpg'); ?>" alt="">
                            <?php endif; ?>
                        </a>
                    </div>

                    <!-- <h4 class="location">
                        <a href="#">
                            <?php
                            echo ucfirst($row->city ?? '') . ', ';
                            echo ucfirst($row->state ?? '') . ', ';
                            echo ucfirst($row->country ?? '');
                            ?>
                        </a>
                    </h4> -->

                    <div class="price"><span class="appendix">User ID</span><?php echo $row->id; ?></div>

                    <div class="padding-10">
                        <!-- ACTION BUTTONS -->
                        <button class="btn btn-secondary text-caps small" onclick="deleteUser(<?php echo $row->id; ?>)">
                            <i class="fa fa-trash"></i> Delete
                        </button>
                      
                        <button class="btn btn-secondary text-caps small" style="margin-top:5px" onclick="changeRole(<?php echo $row->id; ?>)">
                            <i class="fa fa-edit"></i> Change Role to Manager
                        </button>

                        <!-- <a href="<?php echo base_url('users/' . $row->id); ?>" class="btn btn-primary text-caps btn-framed m-l-10 pad_16px">View Profile</a> -->
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
         <!--============ End Items ==============================================================-->
                <?php echo $this->ajax_pagination->create_links(); ?>  
                            <!--end page-pagination-->
    </div>
<?php else: ?>
    <p>No users found.</p>
<?php endif; ?>

